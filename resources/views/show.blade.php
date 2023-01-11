@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <h2 class="text-center fw-bold mt-5">Detail Product</h2>
        <div class="custom-separator my-3 mb-5 mx-auto bg-brown"></div>
        <div class="card border-0">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image h-100"> <img src="/image/{{ $product->foto }}"
                                class="align-items-center w-50"> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="fw-bold">{{ $product->nama_product }}</h3>
                        </div>
                        <div class="ratings d-flex flex-row align-items-center">
                            <div class="d-flex flex-row"> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i
                                    class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bx-star'></i>
                            </div> <span>441 reviews</span>
                        </div>
                        <div class="mt-2 pr-4">
                            <p><b>Kelengkapan :</b> {{ $product->kelengkapan }}</p>
                        </div>

                        <h3>Rp {{number_format($product->harga)}}</h3>

                        <div class="buttons d-flex flex-row mt-5 gap-3">
                            <button class="btn btn-outline-dark"><a href="{{ route('create', $product->id) }}"
                                    class="text-decoration-none text-brown">Beli sekarang</a></button>
                            <button class="btn btn-dark"><a href="{{url('/home')}}"
                                    class="text-decoration-none text-light">Kembali</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
