<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Destination;
use App\Models\DestinationPhoto;
use App\Models\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
  public function index()
  {
    $data = DB::table('v_detail_destination')->select(['destination_id', 'destination_name', 'destination_thumbnail', 'destination_address'])->get();

    return response()->json($data);
  }
  public function loadDetailDestination(Request $request)
  {
    $id = $request->post('id');

    $data['detaildest'] = DB::table('v_detail_destination')->where('destination_id', $id)->where('destination_active', 1)->first();
    $data['photos'] = DB::table('destinations_image')->where('image_destination_id', $id)->get();
    return response()->json($data);
  }
  public function create(Request $request)
  {
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
      ];
      Destination::create($destData);
      DB::commit();
    } catch (\Exception $e) {
      DB::rollBack();
      return response()->json(['error' => $e->getMessage()], 500);
    }

    return response()->json(['success' => 'Destination created successfully']);
  }
}
