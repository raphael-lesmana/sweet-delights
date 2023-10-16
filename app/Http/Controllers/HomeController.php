<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get(Request $request)
    {
        $main_dishes = Item::where('type', 'main')->get();
        $beverages = Item::where('type', 'beverage')->get();
        $desserts = Item::where('type', 'dessert')->get();
        return view('homepage', compact('main_dishes', 'beverages', 'desserts'));
    }
}
