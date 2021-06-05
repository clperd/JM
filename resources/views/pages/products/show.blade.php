@extends('pages.layout')

@section('content')
    <section>
        <h1>{{ $product->name }}</h1>

        <article class="product">
            <div class="details">
                <span class="price">${{ $product->price }}</span>
                <p class="description">
                    <i class="fa fa-quote-left"></i>
                    {{ $product->description }}
                    <i class="fa fa-quote-right"></i>
                </p>
            </div>
            <div class="visual">
                <img src="{{ asset("storage/images/products/{$product->id}") }}" alt="{{ $product->description }}">
            </div>
        </article>

        <a class="btn" href="{{ url()->previous() }}"> @lang('nav.buttons.back')</a>
    </section>
@endsection

<?php /** @var \App\Models\Product $product */ ?>
