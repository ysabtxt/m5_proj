<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'Administrator'
            ],
            [
                'id' => 2,
                'username' => 'ysabelle',
                'email' => 'ysabelle@gmail.com',
                'role' => 'Staff'
            ],
            [
                'id' => 3,
                'username' => 'sarah',
                'email' => 'sarah@gmail.com',
                'role' => 'Staff'
            ],
            [
                'id' => 4,
                'username' => 'sixseven',
                'email' => 'sixseven@gmail.com',
                'role' => 'User'
            ],
            [
                'id' => 5,
                'username' => 'Kimidora',
                'email' => 'kimidora@gmail.com',
                'role' => 'User'
            ],
        ];

        return view('users', compact('users'));
    }
}