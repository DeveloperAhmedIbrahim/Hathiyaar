<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function __construct()
    {
        if(Auth::check())
        {
            redirect()->route('admin.dashboard')->send();
        }
    }

    public function login(Request $request)
    {
        if($request->method() === "POST")
        {
            $validation = Validator::make($request->all(), [
                'email' => 'required|email|exists:users,email',
                'password' => 'required'
            ], [
                'email.exists' => 'The email you entered does not exist in our records.'
            ]);

            if($validation->fails())
            {
                return response()->json([
                    'status' => false,
                    'errors' => $validation->errors()->all()
                ]);
            }

            $user = User::whereEmail($request->email)->first();
            if(Hash::check($request->password, $user->password))
            {
                $remember = $request->remember ? true : false;
                Auth::login($user, $remember);
                Session::flash('success', "Welcome! {$user->name}, enjoy the journey.");
                return response()->json([
                    'status' => true,
                    'data' => [
                        'redirectUrl' => route('admin.dashboard'),
                        'message' => 'You have logedin successfully.',
                    ]
                ]);
            }
            else
            {
                return response()->json([
                    'status' => false,
                    'errors' => ['The password you entered is not valid.']
                ]);
            }
        }
        else
        {
            return view('admin.auth.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.admin.login')->with('success', 'You session closed successfully.');
    }
}
