<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function store(StoreUserRequest $request)
    // {
    //     //simpan data
    //     User::create([
    //         'name' => $request['name'],
    //         'email' => $request['email'],
    //         'password' => Hash::make($request['password']),
    //     ]);
    //     return redirect(route('user.index'))->with('success', 'Data Berhasil Ditambahkan');;
    // }
}
