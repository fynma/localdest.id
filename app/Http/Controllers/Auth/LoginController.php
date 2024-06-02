<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ], 400);
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = User::where('email', $request->email)->firstOrFail();
            session(['user' => $user]);
            session(['id' => $user->id]);
            session(['user_role' => $user->role]);

            $request->session()->regenerate();

            return response()->json([
                'success' => true,
                'message' => 'Success',
                'redirect' => route('landing'),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password.'
            ], 422);
        }
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();
        return redirect()->route('landing');
    }
}
