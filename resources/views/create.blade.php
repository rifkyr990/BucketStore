@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <div class="col-sm-12 my-5 text-center">
            <h2 class="fw-bold text-green">Input product</h2>
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
        <form action="{{ route('addproduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Name product</strong></p>
                        <input type="text" name="nama_product" id="" class="form-control" placeholder="Nama product">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Kelengkapan</strong></p>
                        <textarea name="kelengkapan" id="" cols="30" rows="10" class="form-control"
                            placeholder="kelengkapan"></textarea>
                    </div>
                </div>

                <div class="form-group col-sm-6 mt-2">
                    <label for="category_id"><strong>Kategori</strong></label>
                    <select class="form-select" name="category_id" id="category_id">
                        <option value="" selected>Pilih kategori</option>
                        @foreach ($category as $data)
                        <option value="{{$data->id}}" onkeyup="sum();">{{ $data->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <p><strong>Gambar produk</strong></p>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*" multiple>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Harga produk</strong></p>
                        <input type="number" name="harga" id="harga" class="form-control">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('home')}}" class="btn btn-danger mx-2">Back</a>
                </div>
            </div>
        </form>
    </div>
</body>
@endsection
