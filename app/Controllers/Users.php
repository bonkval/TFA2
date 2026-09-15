<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        static $users = [
            ['username' => 'cvales', 'full_name' => 'Cedrick Vales', 'role' => 'Cashier'],
            ['username' => 'jbondoc', 'full_name' => 'Joseph Bondoc', 'role' => 'Inventory Clerk'],
            ['username' => 'pcaluag', 'full_name' => 'Philyip Caluag', 'role' => 'Cashier'],
            ['username' => 'lmedina', 'full_name' => 'Lexus Medina', 'role' => 'Manager'],
            ['username' => 'rodarbe', 'full_name' => 'Raining Odarbe', 'role' => 'Administrator'],
        ];

        return view('users/index', [
            'title' => 'POS Lab | User Accounts',
            'heading' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
