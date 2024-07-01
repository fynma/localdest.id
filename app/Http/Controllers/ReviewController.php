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
    $destinationId = $request->post('id');

    $reviews = DB::table('reviews')
      ->join('users', 'reviews.review_user_id', '=', 'users.id')
      ->where('reviews.review_destination_id', $destinationId)
      ->select('reviews.*', 'users.name', 'users.photo')
      ->orderBy('reviews.review_created_at', 'desc')
      ->get();

    $reviewIds = $reviews->pluck('review_id');
    $reviewPhotos = DB::table('review_image')
      ->whereIn('review_review_id', $reviewIds)
      ->get()
      ->groupBy('review_review_id');

    foreach ($reviews as $review) {
      $review->review_photos = $reviewPhotos->get($review->review_id, collect());
    }

    $data = DB::table('v_count_review')
      ->where('review_destination_id', $destinationId)
      ->get();

    return response()->json([
      'reviews' => $reviews,
      'data' => $data,
    ]);
  }
  public function checkExistingReview(Request $request)
  {
    $userId = session('id');
    $destinationId = $request->post('id');

    $review = Review::where('review_user_id', $userId)
      ->where('review_destination_id', $destinationId)
      ->orderBy('review_created_at', 'asc')
      ->select('review_id')
      ->first();
    $data = DB::table('reviews')
      ->join('users', 'reviews.review_user_id', '=', 'users.id')
      ->where('reviews.review_id', $review->review_id)
      ->select('reviews.*', 'users.name', 'users.photo')
      ->orderBy('reviews.review_created_at', 'desc')
      ->first();
    // dd($data);
    // if($data['photo']){
      
    // }
    $reviewPhotos = DB::table('review_image')
      ->where('review_review_id', $review->review_id)
      ->get();
      // ->groupBy('review_review_id');
    // dd($reviewPhotos);
    // foreach ($data as $reviews) {
    //   $reviews->review_photos = $reviewPhotos->get($reviews->review_id, collect());
    // }
    return response()->json(['review' => $data, 'reviewPhotos' => $reviewPhotos]);
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
