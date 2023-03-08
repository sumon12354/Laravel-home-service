@extends('admin.layout.template')
@section('page_title')
Dashbaord - UpdateCollection
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Update Collection</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add Update Collection</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{route('updatecollect')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $edicollectio->id }}">
                        {{-- <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Customer Name</label>
                            <div class="col-sm-10">
                               <select class="form-select" id="customer_name" name="customer_name"
                                    aria-label="Default select example">
                                    <option selected>Select Customer</option>
                                 
                                        <option value="{{ $edicollectio->customer_name }}">{{ $edicollectio->customer_name }}</option>
         
                                </select>
                            </div> 
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Service Name</label>
                            <div class="col-sm-10">
                               <select class="form-select" id="service_name" name="service_name"
                                    aria-label="Default select example">
                                    <option selected>Select Services</option>

                                        <option value="{{ $edicollectio->service_name }}">{{ $edicollectio->service_name }}</option>

                                </select>
                            </div> 
                        </div> --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Collected Amount</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="collect_amount" name="collect_amount"
                                    value="{{ $edicollectio->collect_amount }}" />
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Collected Date</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="datetime-local" name="collect_date"  value="{{ $edicollectio->collect_date }}">
                            </div>
                        </div> --}}

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Collected</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
