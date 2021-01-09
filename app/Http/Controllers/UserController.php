<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    private $response = [
        'message' => null,
        'data' => null,
    ];


    // function index(Request $request)
    // {
    //     $user = User::where('email', $request->email)->first();
    //     // print_r($data);
    //     if (!$user || !Hash::check($request->password, $user->password)) {
    //         return response([
    //             'message' => ['These credentials do not match our records.']
    //         ], 404);
    //     }

    //     $token = $user->createToken('my-app-token')->plainTextToken;

    //     $response = [
    //         'user' => $user,
    //         'token' => $token
    //     ];

    //     return response($response, 201);
    // }

    function login(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $req->email)->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            return response()->json([
                'message' => "failed",
            ]);
        }

        $token = $user->createToken($req->device_name)->plainTextToken;
        $this->response['message'] = 'success';
        $this->response['data'] = [
            'token' => $token
        ];

        return response()->json($this->response, 200);
    }


    function me()
    {
        $user = Auth::user();
        $this->response['message'] = 'success';
        $this->response['data'] = $user;
        return response()->json($this->response, 200);
    }


    function logout()
    {

        $logout = auth()->User()->currentAccessToken()->delete();
        $this->response['message'] = 'success';
        return response()->json($this->response, 200);
    }
}
