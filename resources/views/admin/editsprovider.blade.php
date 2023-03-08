@extends('admin.layout.template')
@section('page_title')
    Update-Sprovider - Home-Services
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Update Service Provider</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add Update Service Provider</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateprovider') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $findsrovider->id }}">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Service Provider Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="SproviderName" name="SproviderName"
                                    value="{{ $findsrovider->SproviderName }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Contact No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ContactNo" name="ContactNo"
                                    value="{{ $findsrovider->ContactNo }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="EmailId" name="EmailId"
                                    value="{{ $findsrovider->EmailId }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Loaction</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="LocationCity" name="LocationCity"
                                    value="{{ $findsrovider->LocationCity }}" />
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Service Provider</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
