@extends('pages.layout')

@section('content')
    <section id="products">
        <h1>@lang('products.products_list')</h1>

        <ul class="list">
            @foreach (App\Models\Product::all() as $product)
                <li class="product">
                    <h1 class="title">{{ $product->name }}</h1>
                    <img src="{{ asset("storage/images/products/{$product->id}") }}" alt="{{ $product->description }}">
                    <span class="price">${{ $product->price }}</span>
                    <a href="{{ route('products.show', $product) }}" class="btn">@lang('products.buttons.see_more')</a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
