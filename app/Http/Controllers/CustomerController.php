<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'Athena Ysabelle Palomo',
                'email' => 'athena@gmail.com',
                'status' => 'Active'
            ],
            [
                'id' => 2,
                'name' => 'Kylie Jenner',
                'email' => 'kylie@gmail.com',
                'status' => 'Active'
            ],
            [
                'id' => 3,
                'name' => 'Adriana Lima',
                'email' => 'adriana@gmail.com',
                'status' => 'Inactive'
            ],
            [
                'id' => 4,
                'name' => 'Ana Garcia',
                'email' => 'ana@gmail.com',
                'status' => 'Active'
            ],
            [
                'id' => 5,
                'name' => 'Nadine Lustre',
                'email' => 'nadine@gmail.com',
                'status' => 'Inactive'
            ],
        ];

        return view('customers', compact('customers'));
    }
}