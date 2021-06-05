<div class="item">
    <img src="{{ asset("storage/images/products/{$product->id}") }}">
    <div class="details">
        <ul>
            <li>
                <h1>#{{ $product->id }} - {{ $product->name }}
                    <div class="actions">
                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-small"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('admin.products.delete', $product) }}" class="btn btn-small btn-danger"><i class="fa fa-trash-alt"></i></a>
                    </div>
                </h1>
                <h4 class="text-primary">${{ $product->price }}</h4>
                <p class="text-light">{{ $product->description }}</p>
            </li>
        </ul>
    </div>
</div>

<?php /** @var \App\Models\Product $product */ ?>
