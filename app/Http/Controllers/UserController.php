<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\RegisterController;

class UserController extends RegisterController
{
    public function showRegistrationForm()
    {
        return view('auth.allregister',[
            'route'=>'user.register',
            'role'=>'User'
        ]);
    }

    protected function create(array $data)
    {
        if(array_key_exists("image",$data))
            $image = $data['image']->store('uploads', 'public');
        else
            $image="images/default.jpg";

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'image' => $image,
            'role' => 'user',
            'password' => Hash::make($data['password']),
        ]);
    }

}