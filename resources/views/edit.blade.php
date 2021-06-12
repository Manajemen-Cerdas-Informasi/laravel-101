@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Produk') }}</div>

                <div class="card-body">
                    <form action="{{ route('update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" class="form-control" name="nama" value="{{ $product->name }}">
                        </div>

                        <div class="form-group">
                            <label for="">Harga Produk</label>
                            <input type="text" class="form-control" name="harga" value="{{ $product->price }}">
                        </div>

                        <div class="form-group">
                            <label for="">Deskripsi Produk</label>
                            <textarea name="deskripsi" class="form-control" cols="30" rows="3">{{ $product->desc }}</textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
