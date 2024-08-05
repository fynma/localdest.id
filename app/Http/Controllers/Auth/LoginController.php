<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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
            session(['user_photo' => $user->photo]);
            session(['user_theme' => $user->theme]);
            // session(['user_name' => $user->name]);
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
    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('email', $user->email)->first();

            if ($finduser) {
                $finduser->update(['google_id' => $user->id]);

                $user = User::where('email', $request->email)->firstOrFail();
                session(['user' => $user]);
                session(['id' => $user->id]);
                session(['user_role' => $user->role]);
                session(['user_photo' => $user->photo]);
                session(['user_theme' => $user->theme]);
                // session(['user_name' => $user->name]);
                $request->session()->regenerate();

                return redirect()->route('index');
            } else {
                $id = rand();
                $newUser = User::create([
                    'id' => $id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'role' => 2,
                    'password' => 0,
                ]);

                session(['user' => $user]);
                session(['id' => $id]);
                session(['user_role' => $user->role]);
                session(['user_photo' => $user->photo]);
                session(['user_theme' => $user->theme]);
                // session(['user_name' => $user->name]);
                $request->session()->regenerate();


                return redirect()->route('index');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();
        return redirect()->route('landing');
    }
}
