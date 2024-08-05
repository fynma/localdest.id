<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Get user data.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userId = session('id');
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user);
    }

    /**
     * Get destinations created by user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUserDestinations(Request $request)
    {
        $userId = session('id');

        $data = DB::table('v_detail_destination')->select(['destination_id', 'destination_name', 'destination_thumbnail', 'destination_address', 'destination_city_name', 'destination_province_name', 'destination_city', 'destination_province'])->where('destination_user_id', $userId)->get();

        $destinationIds = $data->pluck('destination_id')->toArray();

        $tags = DB::table('v_tagofdest')
            ->whereIn('tags_destinations_id', $destinationIds)
            ->select(['tags_destinations_id', 'tag'])
            ->get();
        $data = $data->map(function ($destination) use ($tags) {
            $destinationTags = $tags->where('tags_destinations_id', $destination->destination_id)->pluck('tag');
            $destination->tags = $destinationTags;
            $destination->destination_city_name = $this->toTitleCase($destination->destination_city_name);
            $destination->destination_province_name = $this->toTitleCase($destination->destination_province_name);
            return $destination;
        });

        // // Fungsi toTitleCase
        // dd($data);

        return response()->json($data);
    }

    private function toTitleCase($string)
    {
        return ucwords(strtolower($string));
    }
    public function save(Request $request)
    {
        try {

            $data = $request->post();
            $userId = session('id');
            $field = [
                'name' => $data['username'],
                'num_telp' => $data['telphone'],
            ];
            $currentUser = User::find($userId);
            $currentPhoto = $currentUser->photo;

            $photoProfile = $request->file('photo-profile');
            if ($photoProfile) {
                $extension = $photoProfile->getClientOriginalExtension();
                $newFileName = Str::random(15) . '_' . time() . '.' . $extension;

                if ($currentPhoto && file_exists(public_path('storage/photo-profile/' . $currentPhoto))) {
                    unlink(public_path('storage/photo-profile/' . $currentPhoto));
                }

                $photoProfile->move(public_path('storage/photo-profile/'), $newFileName);
                session(['user_photo' => $newFileName]);
                $field['photo'] = $newFileName;
            }

            User::where('id', $userId)->update($field);
            return response()->json(['success' => 'Profile Updated successfully']);
        } catch (\Exception $e) {

            // Log the error for debugging

            // Send a more detailed error message in response
            return response()->json([
                'error' => 'Failed to update destination',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    public function themePost(Request $request)
    {
        $userId = session('id');
        $data = $request->post();
        // $data['value'] = 0;

        if ($data['theme'] == 'dark') {
            $data['value'] = 1;
        } else {
            $data['value'] = 0;
        };
        $field = [
            'theme' => $data['value'],
        ];
        User::where('id', $userId)->update($field);
        session(['user_theme' => $data['value']]);
        return response()->json(['success' => 'Theme Updated successfully']);
    }
}
