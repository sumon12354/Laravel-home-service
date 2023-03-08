@extends('admin.layout.template')
@section('page_title')
    Update-Area - Home-Services
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Update Area</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add Update Area</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('updatearea') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $editarea->id }}">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Area Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="area_name" name="area_name"
                                    value="{{ $editarea->area_name }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Area Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="area_code" name="area_code"
                                    value="{{ $editarea->area_code }}" />
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Area</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
