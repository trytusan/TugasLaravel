<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BackPageController extends Controller
{

    public function panel()
    {
        return view('backpage.panel');

    }

    public function items()
    {
        $datas = Product::paginate(3);
        return view('backpage.items', compact('datas'));

    }

    public function index(Request $request)
    {
        $datas = Product::query()
            ->filterPrice($request->price_range) // Use scope for price filtering
            ->search($request->search)          // Use scope for search
            ->paginate(10)
            ->appends($request->query());       // Preserve query params in pagination links

        // Paginate results
        $datas = $datas->paginate(3)->appends($request->query());
        return view('backpage.items', compact('datas'));
    }


    public function formedit()
    {
        $datas = Product::paginate(1);
        return view('backpage.formedit', compact('datas'));

    }

    public function formadd()
    {
        return view('backpage.formadd');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id); // Cari data berdasarkan ID
        return view('backpage.edit', compact('product')); // Kirim data ke view
    }

}