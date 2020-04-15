<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
    public function index() {
        $items = DB::select("SELECT * FROM items");
        var_dump($items);
    }
}
