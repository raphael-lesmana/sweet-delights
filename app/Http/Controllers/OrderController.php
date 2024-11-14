<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request) 
    {
        return view("order");
    }

    public function order(Request $request)
    {
        // $request->validate([
        //     'phone' => 'required|numeric',
        //     'city' => 'required|min:5',
        //     'province' => 'required|min:5',
        //     'address' => 'required|min:5',
        //     'zip' => 'required|numeric'
        // ]);
        
        $filename = time() . $request->file('proof')->getClientOriginalName();
        $request->file('proof')->storeAs('/asset/receipt/', $filename, 'public');

        $header = auth()->user()->transaction_header()->create([
            'destination_address' => $request->address,
            'city' => $request->city,
            'zip_code' => $request->zip,
            'province' => $request->province,
            'status' => 'pending',
            'order_date' => date("Y-m-d",time()),
            'notes' => $request->notes,
            'total_price' => $request->quantity * 40000,
            'receipt' => $filename,
        ]);

        $top_layer = 0;
        if ($request->lychee)
        {
            $top_layer |= 1;
        }

        $bottom_layer = 0;
        if ($request->mango)
        {
            $bottom_layer |= 1;
        }
        if ($request->strawberry)
        {
            $bottom_layer |= 2;
        }
        if ($request->melon)
        {
            $bottom_layer |= 4;
        }
        if ($request->grape)
        {
            $bottom_layer |= 8;
        }

        $petal_colors = 0;
        if ($request->dark_pink)
        {
            $petal_colors |= 1;
        }
        if ($request->light_pink)
        {
            $petal_colors |= 2;
        }
        if ($request->orange)
        {
            $petal_colors |= 4;
        }
        if ($request->blue)
        {
            $petal_colors |= 8;
        }
        if ($request->yellow)
        {
            $petal_colors |= 16;
        }


        $header->transaction_detail()->create([
            'qty' => $request->quantity,
            'item_price' => 40000,
            'top_layer' => $top_layer,
            'bottom_layer' => $bottom_layer,
            'petal_color' => $petal_colors,
            'sugar_level' => $request->sugar,
        ]);

         
        return redirect()->route('index');
    }
}
