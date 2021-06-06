@extends('admin.layout')

@section('content')
    <section>
        <h1>@lang('products.products_list')</h1>

        <div class="btns">
            <a class="btn" href="{{ route('admin.products.create') }}">@lang('admin.buttons.add')</a>
            <a class="btn btn-danger" href="{{ route('admin.products.init') }}">@lang('admin.buttons.init')</a>
        </div>

        <div class="list">
            @foreach($products as $product)
                @include('admin.products.product', $product)
            @endforeach

            <div class="pagination">
                <a href="{{ route('admin.products.index') }}" @if($products->currentPage() === 1) class="disabled" @endif>&laquo;</a>
                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    <a @if ($i === $products->currentPage()) class="active" @endif href="{{ route('admin.products.index', ['page' => $i]) }}">{{ $i }}</a>
                @endfor
                <a href="{{ route('admin.products.index', ['page' => $products->lastPage()]) }}" @if($products->currentPage() === $products->lastPage()) class="disabled" @endif>&raquo;</a>
            </div>
        </div>
    </section>
@endsection

<?php /** @var Illuminate\Pagination\LengthAwarePaginator|\App\Models\Product[] $products */ ?>
