@extends('layouts.app')
@section('content')

<body>
    <div class="container">
        <div class="col-sm-12 mt-5 text-center">
            <h2 class="fw-bold text-green">Order Form</h2>
            <div class="custom-separator mb-2 mx-auto bg-dark"></div>
        </div>
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
        <form action="{{ route('addreserv', $product->id) }}" method="POST" enctype="multipart/form-data"
            class="w-75 d-block mx-auto">
            @csrf
            <div class="row">
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Name pemesan</strong></p>
                        <input type="text" name="nama_pemesan" id="" class="form-control" placeholder="Nama pemesan">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>No. handphone</strong></p>
                        <input type="number" name="telp" id="" class="form-control" placeholder="No. handphone">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>alamat</strong></p>
                        <textarea name="alamat_pemesan" id="" cols="30" rows="10" class="form-control"
                            placeholder="alamat"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Jumlah pesanan</strong></p>
                        <input type="number" name="jumlah" id="jumlah" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Tanggal order</strong></p>
                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Tanggal ambil</strong></p>
                        <input type="date" name="tanggal_ambil" id="tanggal_ambil" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 my-sm-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('home') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </form>
    </div>
</body>
@endsection
