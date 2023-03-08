@extends('admin.layout.template')
@section('page_title')
    Dashboard - Home-Services
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Service Provider</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add New Service Provider</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('sproviderentry') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">SProvider Name</label>
                            <div class="col-sm-10">
                               <select class="form-select" id="provider_name" name="provider_name"
                                    aria-label="Default select example">
                                    <option selected>Select Provider</option>
                                     @foreach ($providerinfo as $item)
                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach 
                                </select>
                            </div> 
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Contact No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ContactNo" name="ContactNo"
                                    placeholder="Enter Service Provider Contact Number" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="EmailId" name="EmailId"
                                    placeholder="Enter Service Provider Email" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Loaction</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="LocationCity" name="LocationCity"
                                    placeholder="Enter Service Provider Loaction" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Select Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="Servicescategory" name="Servicescategory"
                                    aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    @foreach ($Sproviders as $providers)
                                        <option value="{{ $providers->category_name }}">{{ $providers->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Add Service Provider</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
