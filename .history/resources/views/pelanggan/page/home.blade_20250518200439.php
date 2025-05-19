@extends('pelanggan.layout.index')

@section('content')
<h4 class="mt-5">Best Seller</h4>
    <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-5">
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="{{ asset('assets/images/contoh.jpg') }}" alt="Slingbag" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify"> Slingbag Mauve </p>
                <p class="m-0"><i class="fa regular fa-star"></i> 5+ </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-item-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 200.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
    </div>

    <h4 class="mt-5">New Product</h4>
    <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-5">
        @foreach ($data as $p)
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="{{ asset('storage/product/' . $p->foto) }}" alt="Slingbag" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify"> {{$p->product_name}} </p>
                <p class="m-0"><i class="fa regular fa-star"></i> 5+ </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-item-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">span{{number_format($p->price)}}</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        @endforeach
    </div>
@endsection
