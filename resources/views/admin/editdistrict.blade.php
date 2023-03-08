@extends('admin.layout.template')
@section('page_title')
    District - Home-Services
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Update District</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add Update District</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('updatedistrict') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $editdist->id }}">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">District Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="district_name" name="district_name"
                                    value="{{ $editdist->district_name }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">District Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="district_code" name="district_code"
                                    value="{{ $editdist->district_code }}" />
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update District</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
