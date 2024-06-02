<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Destination;
use App\Models\Notification;
use Illuminate\Support\Facades\Session;

class DestinationController extends Controller
{
  public function index()
  {
    $data = DB::table('destination')->get();

    return response()->json($data);
  }
  public function loadDetailDestination(Request $request)
  {
    $id = $request->post('id');

    $data['detaildest'] = DB::table('v_detail_destination')->where('destination_id', $id)->where('destination_active', 1)->first();

    return response()->json($data);
  }
}
