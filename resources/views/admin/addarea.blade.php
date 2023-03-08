@extends('admin.layout.template')
@section('page_title')
    Add-Area - Home-Services
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Area</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add New Area</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('storearea') }}" method="post">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">District Name</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="district_name" name="district_name"
                                    aria-label="Default select example">
                                    <option selected>Select District</option>
                                    @foreach ($district as $item)
                                        <option value="{{ $item->district_name }}">{{ $item->district_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Area Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="area_name" name="area_name"
                                    placeholder="Area Name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Area Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="area_code" name="area_code"
                                    placeholder="Area Code" />
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Add Area</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
