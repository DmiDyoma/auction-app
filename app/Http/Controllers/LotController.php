<?php

namespace App\Http\Controllers;

use App\Category;
use App\Lot;
use Illuminate\Http\Request;

class LotController extends Controller
{

    public function getLotById( $lot_id )
    {
        $categories = Category::all();
        $lot = Lot::find($lot_id);
        return view('components.lot', compact('lot', 'categories'));
    }

    public function getLotsByCategory( $category_id )
    {
        $categories = Category::all();
        $lots = Lot::where('category_id', $category_id)->get();
        return view('components.lots', compact('lots', 'categories'));
    }

    public function removeLot( $lot_id )
    {
        $categories = Category::all();
        $lot = Lot::findOrFail($lot_id)->delete();
        return view('layouts.lot-removed', compact('lot_id', 'categories'));
    }

    public function editLot( $lot_id )
    {
        $categories = Category::all();
        $lot = Lot::find($lot_id);

        return view('layouts.edit-lot', compact('lot', 'categories'));
    }

    public function updateLot( Request $request, $lot_id )
    {
        $categories = Category::all();
        $lot = Lot::find($lot_id);

        $lot->update([
            'name' => $request->lot_name,
            'description' => $request->description
        ]);

        return view('layouts.lot-saved', compact('lot', 'categories'));
    }
}
