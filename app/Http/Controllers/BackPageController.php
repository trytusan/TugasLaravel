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

    public function items(Request $request)
    {
        $query = Product::query();
        // Filter pencarian
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');
        }
        // Mendapatkan nilai filter yang dipilih dan mengonversinya menjadi integer
        $filterValue = (int) $request->input('filter');

        // Menggunakan kondisi filter berdasarkan harga
        if ($filterValue == 5) {
            // Menambahkan kondisi untuk harga kurang dari 50.000
            $query->where('price_per_day', '<', 50000);
        } elseif ($filterValue == 4) {
            // Menambahkan kondisi untuk harga kurang dari 100.000
            $query->where('price_per_day', '<', 100000);
        } elseif ($filterValue == 3) {
            // Menambahkan kondisi untuk harga kurang dari 500.000
            $query->where('price_per_day', '<', 500000);
        }
        // Paginate results
        $datas = $query->paginate(3)->appends($request->query());
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