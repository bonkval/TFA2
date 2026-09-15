<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        static $customers = [
            ['full_name' => 'Cedrick Vales', 'email' => 'cedrick.vales@example.com', 'phone' => '0967-676-7676'],
            ['full_name' => 'Joseph Bondoc', 'email' => 'joseph.bondoc@example.com', 'phone' => '0967-676-7676'],
            ['full_name' => 'Philyip Caluag', 'email' => 'philyip.caluag@example.com', 'phone' => '0967-676-7676'],
            ['full_name' => 'Lexus Medina', 'email' => 'lexus.medina@example.com', 'phone' => '0967-676-7676'],
            ['full_name' => 'Raining Odarbe', 'email' => 'raining.odarbe@example.com', 'phone' => '0967-676-7676'],
        ];

        return view('customers/index', [
            'title' => 'POS Lab | Customer Accounts',
            'heading' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
