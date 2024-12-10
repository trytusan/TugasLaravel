<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        // Mengambil daftar produk untuk halaman utama (landingPage)
        $datas = Product::paginate(50);
        return view('frontpage.landingPage', compact('datas'));
    }

    public function itemdetails($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return view('frontpage.itemdetails', compact('product'));
    }

    public function cart()
    {
        return view('frontpage.cart');
    }

    public function checkout()
    {
        return view('frontpage.checkout');
    }

}
