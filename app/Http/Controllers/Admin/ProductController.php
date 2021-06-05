<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Database\Seeders\DemoProductsSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::query()->paginate(5);

        return view('admin.products.index', [
            'products' => $products,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'product_name' => ['required', 'string', 'max:128'],
            'product_description' => ['required', 'string', 'max:255'],
            'product_price' => ['required', 'numeric', 'min:0.99'],
            'product_image' => [
                'required',
                'file',
                'mimes:jpg,bmp,png',
                Rule::dimensions()->ratio(120 / 171),
            ],
        ]);

        /** @var Product $product */
        $product = Product::query()->create([
            'name' => $requestData['product_name'],
            'description' => $requestData['product_description'],
            'price' => $requestData['product_price'],
        ]);

        $request->file('product_image')->storeAs('public/images/products', $product->id);

        return redirect()->route('admin.products.index')->with('success_message', 'Produit modifié avec succès.');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function init()
    {
        Product::query()->delete();
        Storage::deleteDirectory('public/images/products');

        (new DemoProductsSeeder)->run();

        return redirect()->route('admin.products.index')->with('success_message', 'Liste des produits réinitialisée avec succès.');
    }

    /**
     * @param \App\Models\Product $product
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
        ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $requestData = $request->validate([
            'product_name' => ['string', 'max:128'],
            'product_description' => ['string', 'max:255'],
            'product_price' => ['numeric', 'min:0.99'],
            'product_image' => [
                'file',
                'mimes:jpg,bmp,png',
                Rule::dimensions()->ratio(120 / 171),
            ],
        ]);

        $product->update([
            'name' => $requestData['product_name'],
            'description' => $requestData['product_description'],
            'price' => $requestData['product_price'],
        ]);

        if ($request->hasFile('product_image')) {
            $request->file('product_image')->storeAs('public/images/products', $product->id);
        }

        return redirect()->route('admin.products.index')->with('success_message', 'Produit modifié avec succès.');
    }

    /**
     * @param \App\Models\Product $product
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')->with('success_message', 'Produit supprimé avec succès.');
    }
}
