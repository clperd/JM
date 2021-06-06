@extends('pages.layout')

@section('content')
    <section id="products">
        <h1>@lang('products.products_list')</h1>

        <ul class="list">
            @foreach ($products as $product)
                <li class="product">
                    <h1 class="title">{{ $product->name }}</h1>
                    <img src="{{ asset("storage/images/products/{$product->id}") }}" alt="{{ $product->description }}">
                    <span class="price">${{ $product->price }}</span>
                    <a href="{{ route('products.show', $product) }}" class="btn">@lang('products.buttons.see_more')</a>
                </li>
            @endforeach
        </ul>

        <div class="pagination">
            <a href="{{ route('products.index') }}" @if($products->currentPage() === 1) class="disabled" @endif>&laquo;</a>
            @for ($i = 1; $i <= $products->lastPage(); $i++)
                <a @if ($i === $products->currentPage()) class="active" @endif href="{{ route('products.index', ['page' => $i]) }}">{{ $i }}</a>
            @endfor
            <a href="{{ route('products.index', ['page' => $products->lastPage()]) }}" @if($products->currentPage() === $products->lastPage()) class="disabled" @endif>&raquo;</a>
        </div>
    </section>
@endsection

<?php /** @var \App\Models\Product[] $products */ ?>
