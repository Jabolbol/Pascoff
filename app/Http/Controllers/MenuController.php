<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index() {
        $title = 'Menu';
        $menus = Storage::disk('public')->files('img/menu');
        return view('menu', compact('title', 'menus'));
    } 
}