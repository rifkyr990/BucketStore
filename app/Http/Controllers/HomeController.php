<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::latest()->paginate(4);

        return view('home', compact('products'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    public function home()
    {
        return view('landing');
    }

    public function about()
    {
        return view('about');
    }
}
