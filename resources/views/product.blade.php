@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Gagal</strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @else

    @endif
    <h2 class="text-center mt-5 fw-bold">All Product</h2>
    <div class="custom-separator my-3 mb-5 mx-auto bg-brown"></div>

    <div class="shell">
        <div class="container">
            <div class="row">
            @foreach ($products as $data)
                <div class="col-md-3" data-aos="zoom-out" data-aos-delay="300">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img">
                            <img src="image/{{ $data->foto }}"
                                alt="Product" class="img-responsive" />
                        </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>Ethnic</span>
                            </div>
                            <div class="title-product">
                                <h3>{{ $data->nama_product }}</h3>
                            </div>
                            <div class="description-prod">
                                <p>{{ $data->kelengkapan }}</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Rp {{number_format($data->harga)}}</span></div>
                                <div class="wcf-right"><a href="{{ route('show', $data->id) }}" class="buy-btn"><i class="bi bi-cart-check-fill"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>
@endsection
