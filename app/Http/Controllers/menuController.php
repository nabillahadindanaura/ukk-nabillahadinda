<?php

namespace App\Http\Controllers;

use App\Models\menuModel;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function index()
    {
        $menu  =  menuModel::get();
        return view('home', compact('menu'));
    }
}
