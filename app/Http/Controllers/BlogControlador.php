<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogControlador extends Controller
{
    public function index(){
        return view('blog.index');
    }
    public function create(){
        return view('blog.create');
    }
    public function tema($tema){
        return view('blog.tema', compact('tema'));
    }
}
