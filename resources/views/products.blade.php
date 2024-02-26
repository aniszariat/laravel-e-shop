@extends('layout.master')
@section('content')
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                @foreach ($products as $item)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img src="{{ url($item->image_path) }}"
                                        style="max-height: 250px !important; min-height:250px !important"
                                        alt="{{ $item->name }}"></a>
                                {{-- <img src="assets/img/products/product-img-1.jpg" alt=""></a> --}}
                            </div>
                            <h3>{{ $item->name }}</h3>
                            <p class="product-price">{{ $item->description }}</p>
                            {{-- <p class="product-price"><span>Per Kg</span> 85$ </p> --}}
                            {{-- <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a> --}}
                        </div>
                    </div>
                @endforeach


                {{-- <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-3.jpg"
                                alt=""></a>
                    </div>
                    <h3>Lemon</h3>
                    <p class="product-price"><span>Per Kg</span> 35$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div> --}}
            </div>
        </div>
    </div>
@endsection
