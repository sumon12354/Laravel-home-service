@extends('admin.layout.template')
@section('page_title')
    Dashboard -Update-Services
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Update Services</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Update New Services</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateservices') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $editservices->id }}">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Service Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="service_name" name="service_name"
                                    value="{{ $editservices->service_name }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tage Line</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tage_line" name="tage_line"
                                    value="{{ $editservices->tage_line }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="price" name="price"
                                    value="{{ $editservices->price }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Discount Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="discount_price" name="discount_price"
                                    value="{{ $editservices->discount_price }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" cols="90" rows="5" class="form-control"
                                    value="{{ $editservices->description }}"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Inclusion</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inclusion" name="inclusion"
                                    value="{{ $editservices->inclusion }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="status" name="status"
                                    value="{{ $editservices->status }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="image" name="image" />
                                <img style="height: 50px" src="{{ asset($editservices->image) }}" alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Thumbnail</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="thumbnail_image" name="thumbnail_image" />
                                <img style="height: 50px" src="{{ asset($editservices->thumbnail_image) }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Services</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
