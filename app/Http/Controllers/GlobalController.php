<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Destination;
use App\Models\DestinationPhoto;
use App\Models\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class GlobalController extends Controller
{
    public function getKota($id)
    {
        $data = DB::table('city')->where('province_id', $id)->select(['id', 'province_id', 'name'])->get();
        return response()->json($data);
    }
    public function getProvinsi(Request $request)
    {
        $data = DB::table('provinces')->select(['id', 'name'])->get();
        return response()->json($data);
    }
}
