<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        return view('users/index', [
            'title' => 'POS Lab | User Accounts',
            'heading' => 'User Accounts',
            'users' => $userModel->findAll(),
        ]);
    }
}
