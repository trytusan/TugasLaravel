<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Product::paginate(3);
        return view('backpage.items', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute wajib diisi',
            'numeric' => ':attribute harus berupa angka',
            'image' => ':attribute harus berupa gambar',
            'mimes' => ':attribute harus berupa file dengan ekstensi jpg, png, atau jpeg',
            'max' => ':attribute tidak boleh lebih dari :max kilobytes',
        ];

        // Validasi data yang masuk
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price_per_day' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
        ], $message);

        // Upload image jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('products', $imageName, 'public');
            $validated['image'] = $imageName; // Simpan nama file ke database
        }

        // Buat produk baru
        Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price_per_day' => $validated['price_per_day'],
            'image' => $imageName, // Jika tidak ada gambar, tetap null
        ]);

        return redirect()->route('products.index')->with('success', 'Item has been added successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi form
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price_per_day' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        // Ambil data produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Upload gambar
            $image = $request->file('image');
            $image->storeAs('products', $image->getClientOriginalName(), 'public');

            // Hapus gambar lama jika ada
            if ($product->image) {
                Storage::disk('public')->delete('products/' . $product->image);
            }

            // Update produk dengan gambar
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price_per_day' => $request->price_per_day,
                'image' => $image->getClientOriginalName()
            ]);
        } else {
            // Update produk tanpa gambar
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price_per_day' => $request->price_per_day
            ]);
        }

        // Redirect ke halaman produk dengan pesan sukses
        return redirect()->route('products.index')->with(['success' => 'Item has been updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            // Cari data berdasarkan ID
            $product = Product::findOrFail($id);

            // Hapus data
            $product->delete();

            // Redirect ke halaman produk dengan pesan sukses
            return redirect('/backpage1/items');
        } catch (\Throwable $th) {
            // Redirect jika terjadi kesalahan
            return redirect('/backpage1/items');
        }
    }

    public function bulkDelete(Request $request)
    {
        // Ambil ID yang dikirimkan
        $ids = explode(',', $request->selected_ids);
    
        if (count($ids) > 0) {
            // Hapus produk berdasarkan ID
            Product::whereIn('id', $ids)->delete();
    
            return redirect()->route('products.index')->with('success', 'Selected items deleted successfully.');
        }
    
        return redirect()->route('products.index')->with('error', 'No items selected for deletion.');
    }
}