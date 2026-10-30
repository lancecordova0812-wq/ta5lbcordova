<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index(): array
    {
        $customers = [
            ['id' => 1, 'name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '0917-555-0101'],
            ['id' => 2, 'name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '0918-555-0102'],
            ['id' => 3, 'name' => 'Angela Reyes', 'email' => 'angela.reyes@example.com', 'phone' => '0919-555-0103'],
            ['id' => 4, 'name' => 'Paolo Garcia', 'email' => 'paolo.garcia@example.com', 'phone' => '0920-555-0104'],
            ['id' => 5, 'name' => 'Liza Navarro', 'email' => 'liza.navarro@example.com', 'phone' => '0921-555-0105'],
        ];
        return ['view' => 'customers', 'data' => ['title' => 'Customer Accounts', 'customers' => $customers]];
    }
}
