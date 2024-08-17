<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Destination;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        DB::beginTransaction();

        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:users,email',
                'name' => 'required|string|max:255',
                'password' => 'required|string|min:8|confirmed',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()->first()
                ], 400);
            }

            $data = $request->post();
            // dd($data); 

            $id =  rand();
            $user = User::create([
                'id' => $id,
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'role' => 2,
                'active' => 1,
            ]);

            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Registrasi Berhasil!.',
                // 'id' => $idUserEncoded
                'code' => 201
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            $errorMessage = $e instanceof \Illuminate\Database\QueryException ? 'Server Error, silakan coba lagi nanti.' : 'Registrasi Gagal! Silakan ulangi registrasi.';

            return response()->json([
                'success' => false,
                'message' => $errorMessage
            ], 400);
        }
    }
    public function getCsrfToken()
    {
        $token = Session::token();
        return response()->json(['csrf_token' => $token]);
    }
}
