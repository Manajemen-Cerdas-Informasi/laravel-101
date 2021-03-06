@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Penambahan Produk') }}</div>

                <div class="card-body">
                    <form action="{{ route('coba_post') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" class="form-control" name="nama">
                        </div>

                        <div class="form-group">
                            <label for="">Harga Produk</label>
                            <input type="text" class="form-control" name="harga">
                        </div>

                        <div class="form-group">
                            <label for="">Deskripsi Produk</label>
                            <textarea name="deskripsi" class="form-control" cols="30" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
