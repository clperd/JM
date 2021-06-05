@extends('pages.layout')

@section('content')
    <section id="intro">
        <div class="welcome">
            <h1 class="title">
                Lorem ipsum dolor 2021
            </h1>
            <div class="details">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dignissimos ducimus esse fugit odio repellat ullam vero voluptas?
            </div>
        </div>
    </section>

    @if ($latestProducts->isNotEmpty())
        <section id="new_products">
            <h1>@lang('products.new_products')</h1>

            @foreach ($latestProducts as $product)
                <article class="product">
                    <div class="details">
                        <h1 class="title">{{ $product->name }}</h1>
                        <p class="description">{{ $product->description }}</p>
                        <span class="price">${{ $product->price }}</span>
                        <a href="{{ route('products.show', $product) }}" class="btn">@lang('products.buttons.see_more')</a>
                    </div>
                    <div class="visual">
                        <img src="{{ asset("storage/images/products/{$product->id}") }}" alt="{{ $product->description }}">
                    </div>
                </article>
            @endforeach
        </section>
    @endif
@endsection

<?php /** @var \App\Models\Product[] $latestProducts */ ?>
