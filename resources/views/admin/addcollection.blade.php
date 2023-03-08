@extends('admin.layout.template')
@section('page_title')
Dashbaord - AddCollection
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Collection</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add New Collection</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{route('storecollect')}}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Customer Name</label>
                            <div class="col-sm-10">
                               <select class="form-select" id="customer_name" name="customer_name"
                                    aria-label="Default select example">
                                    <option selected>Select CustomerId</option>
                                    @foreach ($collection as $item)
                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div> 
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Service Name</label>
                            <div class="col-sm-10">
                               <select class="form-select" id="service_name" name="service_name"
                                    aria-label="Default select example">
                                    <option selected>Select Services</option>
                                    @foreach ($serviceinfo as $item)
                                        <option value="{{ $item->service_name }}">{{ $item->service_name }} - {{ $item->price }} Tk</option>
                                    @endforeach
                                </select>
                            </div> 
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Collected Amount</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="collect_amount" name="collect_amount"
                                    placeholder="Enter Collected Amount" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Collected Date</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="datetime-local" name="collect_date" id="collect_date">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Add Collected</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
