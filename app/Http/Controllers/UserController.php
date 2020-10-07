<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $users;

    public function __construct(UserRepository $users){
        $this->users = $users;
    }

    public function show($id){
        $users = $this->users->find($id);

        return view('user.profile', ['user' => $users]);
    }
}
