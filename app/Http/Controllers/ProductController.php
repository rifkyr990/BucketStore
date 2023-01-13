<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Status;
use App\Models\Category;
use App\Models\Confirm;
use App\Models\Reservasi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confirm = Confirm::all();
        $status = Status::with('reservasi')->get();
        $pembayaran = Pembayaran::with('reservasi')->get();
        $reservasi = Reservasi::with('status','pembayaran')->get();

        $category = Category::with('products')->get();
        $products = product::with('category')->get();

        return view('dashboard', compact('category', 'products', 'reservasi', 'confirm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();

        return view('create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addproduct(Request $request)
    {
        $request->validate([
            'foto' => 'required|file|mimes:png,jpg,svg|max:2048',
        ]);

        $gambar = $request->file('foto');
        $destinationPath = 'image/';
        $gambarImage = date('YmdHis') . "." .$gambar->getClientOriginalExtension();
        $gambar->move($destinationPath, $gambarImage);
        $input['foto'] = "$gambarImage";

        $data = $request->all();

        $products = new Product;
        $products->nama_product = $data['nama_product'];
        $products->kelengkapan = $data['kelengkapan'];
        $products->category_id = $data['category_id'];
        $products->foto = $gambarImage;
        $products->harga = $data['harga'];
        $products->user_id = auth()->id();
        $products->save();

        return redirect()->route('home')->with('success', 'berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
        return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category = Category::all();

        return view('edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'required',
        ]);
        
        $input = $request->all();
        if ($gambar = $request->file('foto')) {
            $destinationPath = 'image/';
            $gambarImage = date('YmdHis') . "." .$gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambarImage);
        $input['foto'] = "$gambarImage";
        } else {
            unset($input['foto']);
        }
        $product->update($input);

        return redirect()->route('dashboard')->with('success', 'Orderan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('home')->with('success', 'orderan berhasil dihapus');
    }

    public function allproduct()
    {
        $products = Product::all();
        return view('product', compact('products'));
        
    }
    public function uang()
    {
        $products = Product::where('category_id', '1')->get();
        return view('product', compact('products'));
        
    }
    public function snack()
    {
        $products = Product::where('category_id', '2')->get();
        return view('product', compact('products'));
    }
}
