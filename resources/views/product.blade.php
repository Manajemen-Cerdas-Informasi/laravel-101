@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Daftar Produk') }}

                    <a href="{{ route('form') }}" class="btn btn-primary float-right">Tambah Produk</a>
                </div>

                @if ($message = Session::get('info'))
                    <div class="alert alert-info alert-dismissable mt-20" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p class="mb-0">{{$message}}</p>
                    </div>
                @endif

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>No</th>
                            <th>Code</th>
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </thead>

                        <tbody>
                            @foreach ($products as $key => $product)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->desc }}</td>
                                    <td>
                                        <a href="{{ route('edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="{{ route('delete', $product->id) }}"
                                        onclick="event.preventDefault();document.getElementById('delete-product-{{$product->id}}').submit();"
                                        >Delete</a>

                                        <form id="delete-product-{{$product->id}}" action="{{ route('delete', $product->id) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
