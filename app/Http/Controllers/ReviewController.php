<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Review;
use App\Models\ReviewFile;
use App\Models\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
  public function index(Request $request)
  {
      $reviews = DB::table('reviews')
          ->join('users', 'reviews.review_user_id', '=', 'users.id')
          ->where('reviews.review_destination_id', $request->post('id'))
          ->select('reviews.*', 'users.name', 'users.photo')
          ->get();
  
      foreach ($reviews as $review) {
          $review->review_photos = DB::table('review_image')->where('review_review_id', $review->review_id)->get();
      }
  
      return response()->json($reviews);
  }
  

  public function create(Request $request)
  {
    DB::beginTransaction();
    try {

      $id_review = Str::random(16);
      $data = $request->post();
      $userId = session('id');

      //entry multiple photo
      if ($request->hasFile('files')) {
        $multiFiles = $request->file('files');

        foreach ($multiFiles as $file) {
          $extension = $file->getClientOriginalExtension();
          $newFilename = Str::random(15) . '_' . time() . '.' . $extension;
          // $data['multifiles_name'] = $newFilename;    
          // $id_multiphoto = Str::random(16);

          $file->storeAs('public/uploaded-review', $newFilename);

          $photoQuery = [
            'review_image_id' => Str::random(16),
            'review_review_id' => $id_review,
            'review_filename' => $newFilename,
          ];
          ReviewFile::create($photoQuery);
        }
      }

      $destData = [
        'review_id' => $id_review,
        'review_destination_id' => $data['destination_id'],
        'review_target_id' => null,
        'review_rating_star' => $data['star-input'],
        'review_message' => $data['inp-review'],
        'review_level' => 1,
        'review_user_id' => $userId,
      ];
      Review::create($destData);
      DB::commit();
    } catch (\Exception $e) {
      DB::rollBack();
      return response()->json(['error' => $e->getMessage()], 500);
    }

    return response()->json(['success' => 'Rating created successfully']);
  }
}
