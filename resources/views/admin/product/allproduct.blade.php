@extends('admin.layouts.template')

@section('title')
    All Prodcut - EncomSingle
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Product</h4>
        <div class="card">
            <h5 class="card-header">Available Information Product</h5>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ( $products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>
                                <img style="height: 100px;" src="{{ asset($product->product_img) }}" alt="">
                                <br>
                                <a href="{{ route('editproductimg', $product->id) }}" class="btn btn-warning">Update Image</a>
                            </td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('editproduct', $product->id) }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('deleteproduct', $product->id) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
