@extends('admin.layout.template')
@section('page_title')
Dashbaord - Add-Payment
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Payment</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add New Payment</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{route('storepayment')}}" method="post">
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
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Amount-15%</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="payment_amount" name="payment_amount"
                                    placeholder="Enter Amount" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Payment Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="payment_date" name="payment_date"
                                    placeholder="Enter Collected Amount" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Payment Note</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="payment_note" id="payment_note">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Add Payment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
