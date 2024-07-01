<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Destination;
use App\Models\DestinationPhoto;
use App\Models\Notification;
use App\Models\Tags;
use App\Models\TagsDest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
  public function index()
  {
    $data = DB::table('v_detail_destination')->select(['destination_id', 'destination_name', 'destination_thumbnail', 'destination_address', 'destination_city_name', 'destination_province_name', 'destination_city', 'destination_province'])->get();

    $data = $data->map(function ($item) {
      $item->destination_city_name = $this->toTitleCase($item->destination_city_name);
      $item->destination_province_name = $this->toTitleCase($item->destination_province_name);
      return $item;
    });

    return response()->json($data);
  }

  private function toTitleCase($string)
  {
    return ucwords(strtolower($string));
  }

  public function loadDetailDestination(Request $request)
  {
    $id = $request->post('id');

    $data['detaildest'] = DB::table('v_detail_destination')->where('destination_id', $id)->where('destination_active', 1)->first();
    $data['photos'] = DB::table('destinations_image')->where('image_destination_id', $id)->get();
    return response()->json($data);
  }
  public function getTag(Request $request)
  {
    $data['tag'] = DB::table('tags')->select(['tag_id', 'tag'])->get();
    $data['count_tag'] = DB::table('v_count_tags')->get();
    return response()->json($data);
  }
  public function getTagDest(Request $request)
  {
    $id = $request->post('id');
    $data = DB::table('v_tagofdest')->where('tags_destinations_id', $id)->get();
    return response()->json($data);
  }
  public function create(Request $request)
  {
    // dd($request->post());
    $request->validate([
      'title-destination' => 'required|string|max:255',
      'description' => 'required|string',
      'address' => 'required|string|max:255',
      'inp-longitude' => 'required|numeric',
      'inp-latitude' => 'required|numeric',
      'thumbnail-file' => 'required',
      'files' => 'required',
      // 'files.*' => 'file',
      'city' => 'required|string|max:255',
      'province' => 'required|string|max:255',
      'tag' => 'required|array',
      'tag.*' => 'string|max:255',
    ], [
      'inp-longitude.required' => 'Select the Map',
      'inp-latitude.required' => 'Select the Map',
      'thumbnail-file.required' => 'Thumbnail is required',
      'city.required' => 'City is required',
      'province.required' => 'Province is required',
      'tag.required' => 'Tag is required',
      'files.required' => 'Photo is required',
      'address.required' => 'Address is required',
      'description.required' => 'Description is required',
      'title-destination.required' => 'Title is required',
    ]);;
    DB::beginTransaction();
    try {

      $id_destination = Str::random(16);
      $data = $request->post();
      $userId = session('id');
      if ($request->hasFile('thumbnail-file')) {
        $thumbnailFile = $request->file('thumbnail-file');
        $extension = $thumbnailFile->getClientOriginalExtension();
        $newThumbname = Str::random(15) . '_' . time() . '.' . $extension;
        $data['thumbnail_name'] = $newThumbname;
        $thumbnailFile->storeAs('public/uploaded-thumbnail', $newThumbname);
      }

      //entry multiple photo
      if ($request->hasFile('files')) {
        $multiFiles = $request->file('files');

        foreach ($multiFiles as $file) {
          $extension = $file->getClientOriginalExtension();
          $newFilename = Str::random(15) . '_' . time() . '.' . $extension;
          // $data['multifiles_name'] = $newFilename;    
          $id_multiphoto = Str::random(16);

          $file->storeAs('public/uploaded-destphoto', $newFilename);

          $photoQuery = [
            'image_id' => Str::random(16),
            'image_destination_id' => $id_destination,
            'image_filename' => $newFilename,
          ];
          DestinationPhoto::create($photoQuery);
        }
      }

      $destData = [
        'destination_id' => $id_destination,
        'destination_name' => $data['title-destination'],
        'destination_desc' => $data['description'],
        'destination_address' => $data['address'],
        'destination_longitude' => $data['inp-longitude'],
        'destination_latitude' => $data['inp-latitude'],
        'destination_thumbnail' => $data['thumbnail_name'],
        'destination_active' => 0,
        'destination_user_id' => $userId,
        'destination_city' => $data['city'],
        'destination_province' => $data['province'],
      ];
      Destination::create($destData);
      if (isset($data['tag'])) {
        foreach ($data['tag'] as $tagName) {
          if (empty($tagName)) {
            continue;
          }
          $tag = Tags::where('tag', $tagName)->first();

          if (!$tag) {
            $id_tag = Str::random(16);
            $tag = Tags::create(['tag_id' => $id_tag, 'tag' => $tagName]);
          }

          TagsDest::create([
            'tags_id' => $tag->tag_id,
            'tags_destinations_id' => $id_destination,
          ]);
        }
      }
      DB::commit();
    } catch (\Exception $e) {
      DB::rollBack();
      return response()->json(['error' => $e->getMessage()], 500);
    }

    return response()->json(['success' => 'Destination created successfully']);
  }
}
