@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-12 mt-3">
        <h2 class="text-center fw-bold">Update orderan</h2>
    </div>
    <form action="{{ route('update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 my-sm-2">
                <div class="form-group">
                    <p><strong>Name product</strong></p>
                    <input type="text" name="nama_product" id="" class="form-control" placeholder="Nama product" value="{{$product->nama_product}}">
                </div>
            </div>

            <div class="col-xs-12 my-sm-2">
                <div class="form-group">
                    <p><strong>Kelengkapan</strong></p>
                    <textarea name="kelengkapan" id="" cols="30" rows="10" class="form-control"
                        placeholder="kelengkapan">{{$product->kelengkapan}}</textarea>
                </div>
            </div>

            <div class="form-group col-sm-6 mt-2">
                <label for="category_id"><strong>Kategori</strong></label>
                <select class="form-select" name="category_id" id="category_id">
                    <option value="">Pilih kategori</option>
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
                    <input type="number" name="harga" id="harga" class="form-control" value="{{$product->harga}}">
                </div>
            </div>

            <div class="col-xs-12 my-sm-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('home')}}" class="btn btn-danger mx-2">Back</a>
            </div>
        </div>
    </form>
</div>
@endsection
