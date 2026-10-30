<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index(): array
    {
        $users = [
            ['id' => 1, 'name' => 'Admin User', 'email' => 'admin@pos.test', 'role' => 'Administrator'],
            ['id' => 2, 'name' => 'Claire Mendoza', 'email' => 'claire@pos.test', 'role' => 'Cashier'],
            ['id' => 3, 'name' => 'Ramon Flores', 'email' => 'ramon@pos.test', 'role' => 'Cashier'],
            ['id' => 4, 'name' => 'Nina Castillo', 'email' => 'nina@pos.test', 'role' => 'Manager'],
            ['id' => 5, 'name' => 'Leo Bautista', 'email' => 'leo@pos.test', 'role' => 'Inventory Clerk'],
        ];
        return ['view' => 'users', 'data' => ['title' => 'User Accounts', 'users' => $users]];
    }
}
