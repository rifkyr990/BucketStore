<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function product1()
    {
        return view('product/product1');
    }

    public function product2()
    {
        return view ('product/product2');
    }
}
