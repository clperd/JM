@extends('admin.layout')

@section('content')
    <section>
        <h1>@lang('admin.labels.add_new_product')</h1>

        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="product_name">
                    <span>@lang('admin.labels.product_name')</span>
                    <input type="text" name="product_name" maxlength="128" id="product_name" placeholder="@lang('admin.labels.product_name')" value="{{ old('product_name') }}">
                </label>
            </div>
            <div class="form-group">
                <label for="product_description">
                    <span>@lang('admin.labels.product_description')</span>
                    <input type="text" name="product_description" maxlength="255" id="product_description" placeholder="@lang('admin.labels.product_description')" value="{{ old('product_description') }}">
                </label>
            </div>
            <div class="form-group">
                <label for="product_price">
                    <span>@lang('admin.labels.product_price')</span>
                    <input type="number" name="product_price" id="product_price" step=".01" min="0.99" placeholder="@lang('admin.labels.product_price')" value="{{ old('product_price') }}">
                </label>
            </div>

            <div class="form-group">
                <label for="product_image">
                    <span>@lang('admin.labels.product_image')</span>
                    <input type="file" name="product_image" id="product_image" placeholder="@lang('admin.labels.product_image')">
                </label>
            </div>

            <button type="submit" class="btn">@lang('admin.buttons.add')</button>
        </form>
    </section>
@endsection
