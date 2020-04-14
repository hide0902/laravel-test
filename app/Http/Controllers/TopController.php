<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\View;

class TopController extends Controller
{
    public function index() {
        return view('top.index');
    }
    public function menu($menu) {
        return view('top.menu', ['menu'=>$menu]);
    }
}
