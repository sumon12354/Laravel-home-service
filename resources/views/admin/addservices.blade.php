@extends('admin.layout.template')
@section('page_title')
    Dashboard -Add-Services
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Services</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add New Services</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('storeservices') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Select Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="category_id" name="category_id"
                                    aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Service Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="service_name" name="service_name"
                                    placeholder="Service Name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tage Line</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tage_line" name="tage_line"
                                    placeholder="Tage Line" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="price" name="price"
                                    placeholder="price" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Discount Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="discount_price" name="discount_price"
                                    placeholder="Discount Price" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" cols="90" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Inclusion</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inclusion" name="inclusion"
                                    placeholder="inclusion" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="status" name="status"
                                    placeholder="Status" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="image" name="image"
                                    placeholder="Category Name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Thumbnail</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="thumbnail_image" name="thumbnail_image" />
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Add Services</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
