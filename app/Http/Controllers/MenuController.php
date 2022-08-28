<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index() {
        $title = 'Menu';
        $menus = File::files(public_path('img/menu'));
        return view('menu', compact('title', 'menus'));
    } 
}