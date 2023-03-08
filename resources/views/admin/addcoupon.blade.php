@extends('admin.layout.template')
@section('page_title')
    Dashboard - Home-Services
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Coupon</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                    <form action="{{route('addcoupon')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">COUPON</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="COUPON" name="COUPON"
                                    placeholder="Enter Coupon Code " />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">DISCOUNT</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="DISCOUNT" name="DISCOUNT"
                                    placeholder="Enter Discount" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">START DATE</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="START_DATE" name="START_DATE"
                                    placeholder="Date" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">DESCRIPTION</label>
                            <div class="col-sm-10">
                                <input type="text area" class="form-control" id="DESCRIPTION" name="DESCRIPTION"
                                    placeholder="Enter " />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Select SERVICE
                            </label>
                            <div class="col-sm-10">
                                <select class="form-select" id="SERVICE" name="SERVICE"
                                    aria-label="Default select example">
                                    <option selected>Select SERVICE
                                    </option>
                                     @foreach ($serviceinfo as $item)
                                        <option value="{{ $item->service_name }}">{{ $item->service_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">DISCOUNT TYPE
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="DISCOUNT_TYPE" id="DISCOUNT_TYPE" value="FIXED" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        FIXED
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="DISCOUNT_TYPE" id="DISCOUNT_TYPE" value="PERCENTAGE">
                                    <label class="form-check-label" for="exampleRadios2">
                                    
                                    PERCENTAGE
                                    </label>
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">EXPIRE DATE</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="EXPIRE_DATE" name="EXPIRE_DATE"
                                    placeholder="Date" />
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
