<?php

namespace App\Http\Controllers;

use App\Category;
use App\Lot;

class MainController extends Controller
{
    public function index()
    {
        $lots = Lot::all();
        $categories = Category::all();

        return view('components.lots', compact('lots', 'categories'));
    }
}
