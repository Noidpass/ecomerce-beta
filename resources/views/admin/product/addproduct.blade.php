@extends('admin.layouts.template')

@section('title')
Add Product - EncomSingle
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Product</h4>
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add New Product</h5>
                <small class="text-muted float-end">Input Infomation</small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('storeproduct') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Name</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-box"></i></span>
                                <input type="text" class="form-control" id="product_name" name="product_name"
                                    placeholder="Electronic" aria-label="John Doe"
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
                                    placeholder="12" aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2" value="50000" />
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
                                    placeholder="1000" aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Short Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="product_short_des" id="product_short_des" cols="30" rows="10" placeholder="Product Short Description"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Long Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="product_long_des" id="product_long_des" cols="30" rows="10" placeholder="Product Long Description"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Select Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="product_category_id" name="product_category_id"
                                aria-label="Default select example">
                                <option selected>Select Product Category</option>
                                @foreach ( $categories as $category )
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Select Sub Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="product_subcategory_id" name="product_subcategory_id"
                                aria-label="Default select example">
                                <option selected>Select Product Sub Category</option>
                                @foreach ($subcategories as $subcategory )
                                <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Upload Your Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="product_img" name="product_img" />
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection