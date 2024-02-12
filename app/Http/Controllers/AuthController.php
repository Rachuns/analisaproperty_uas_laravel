<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
        //validasi
        $rules = [
            'nama_lengkap' => 'required|string',
            'telepon' => 'required|string',
            'email' => 'required|string|unique:users',
            'alamat' => 'required',
            'username' => 'required',
            'password' => 'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        //simpan user baru
        $user = User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);
        $token = $user->createToken('Personal Access Token')->plainTextToken;
        $response = ['user' => $user, 'token' => $token];
        return response()->json($response,200);
    }
    public function login(Request $request){
        //validasi inputan
        $rules = [
            'username'=>'required',
            'password'=>'required'
        ];
        $request->validate($rules);
        $user = User::where('username', $request->username)->first();
        if($user && Hash::check($request->password, $user->password)){
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $response = ['user'=>$user, 'token'=>$token];
            return response()->json($response, 200);
        }
        $response = ['message' => 'Incorrect Username or Password'];
        return response()->json($response, 400);
    }
}
