<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $response = [
            'user' => $user
            
        ];
        return response()->json($response, 201);

    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
        $user = User::where('email', $request['email'])->first();
        $password = Hash::check($request->password, $user->password);
        if($password==true){
            $token = $user->createToken($user)->plainTextToken;
            $response = [
                'user' =>$user,
                'token' =>$token
            ];
            return response()->json($response, 201);
        }
        if(!auth()->attempt($credentials)) abort(401, 'invalido');
    }

   
    public function logout(Request $request)
    {
        // dd(auth()->user());
        Auth::user()->tokens()->delete();
        return ['message' =>'logout efetuado'];
    }

    public function index(){
        $user = User::latest()->paginate(10);
        return view('users.index', compact('users'));
    }
}
