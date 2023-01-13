@extends('layouts.app')

@section('content')

<body class="bg-cream">
    <div class="container">
        <div class="row justify-content-between vh-100">
            <div class="col-lg-7 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out">
                    <h1 class="display-6 fw-bold">Bouquet & Craft</h1>
                    <h2 class="display-5 fw-bold">Natural & Beautiful Bouquet</h2>
                    <p class="fs-5">“When you have a problem, we have a solution”</p>
                    <div class="text-center text-lg-start">
                        <a href="" class="css-button-rounded--green text-decoration-none text-center">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img my-auto" data-aos="zoom-out" data-aos-delay="300">
                <img src="{{ asset('asset/img/logo.png') }}" class="img-fluid w-100" alt="gambar">
            </div>
        </div>
    </div>
    <section class="container my-5">
        <h3 class="fw-bold">Rekomendasi Produk</h3>
        <span class="d-flex justify-content-end"><a href="{{route('allproduct')}}" class="text-decoration-none">lihat semua</a></span>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                @foreach ($products as $data)
                <div class="col d-flex">
                    <div class="card mt-3" style="width: 18rem;" data-aos="zoom-out" data-aos-delay="300">
                        <img src="image/{{ $data->foto }}" class="card-img-top mx-auto pt-2 w-100 h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->nama_product }}</h5>
                            <p class="card-text">{{ $data->fasilitas }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Rp {{number_format($data->harga)}}</b></li>
                        </ul>
                        <div class="card-body text-center ">
                            <a href="{{ route('show', $data->id) }}"
                                class="card-link text-decoration-none text-brown">View
                                detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
</body>
@endsection
