<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUser;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param RegisterUser $registerUser
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterUser $registerUser)
    {
        $user = User::create([
            'email' => $registerUser->get('email'),
            'password' => bcrypt($registerUser->get('password')),
            'name' => $registerUser->get('name'),
            'user_type' => $registerUser->get('user_type')
        ]);

        return response()->json([
            'data' => $user,
            'message' => 'User registered.'
        ], 201);
    }
}
