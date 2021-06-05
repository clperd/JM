<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $latestProducts = Product::query()->latest()->limit(3)->get();

        return view('pages.home', [
            'latestProducts' => $latestProducts,
        ]);
    }
}
