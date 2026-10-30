<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home(): array
    {
        return ['view' => 'home', 'data' => ['title' => 'Laravel POS Foundations']];
    }

    public function about(): array
    {
        return ['view' => 'about', 'data' => ['title' => 'About This Application']];
    }
}
