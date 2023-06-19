@extends('admin.layouts.template')

@section('title')
Edit Product - EncomSingle
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Edit Product</h4>
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Product</h5>
                <small class="text-muted float-end">Input Infomation</small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('updateproduct') }}">
                    @csrf
                    <input type="hidden" value="{{ $productinfo->id }}" name="id">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Name</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-box"></i></span>
                                <input type="text" class="form-control" id="product_name" name="product_name" 
                                    value="{{ $productinfo->product_name }}" aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Price</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-purchase-tag-alt"></i></span>
                                <input type="number" class="form-control" id="price" name="price"
                                    aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2" value="{{ $productinfo->price }}" />
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Quantity</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-circle-three-quarter"></i></span>
                                <input type="text" class="form-control" id="quantity" name="quantity"
                                    value="{{ $productinfo->quantity }}"aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Short Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="product_short_des" id="product_short_des" cols="30" rows="10" >{{ $productinfo->product_short_des }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Long Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="product_long_des" id="product_long_des" cols="30" rows="10">{{ $productinfo->product_short_des }}</textarea>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection