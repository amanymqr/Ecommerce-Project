

<div class="product-item">
    <div class="product-thumb">

        @if($product->sale_price)
            <span class="bage">
                Sale
            </span>
        @endif

        <img class="img-responsive" src="{{ asset('uploads/products/'.$product->image) }}" alt="product-img" />

    </div>
    <div class="product-content">
        <h4><a href="{{ route('website.product' , $product->id ) }}">{{ $product->$name }}</a></h4>
        <p class="price">
        @if($product->sale_price)
        <del style="color: red">${{ $product->price }}</del> ${{ $product->sale_price  }}
        @else
            ${{ $product->price  }}
        @endif
    </div>
</div>
