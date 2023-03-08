@extends('admin.layout.template')
@section('page_title')
    Dashboard - Home-Services
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Update Status</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Update New Status</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>
                <div class="card-body">
                   
                    <form action="{{ route('updatestatus') }}" method="post">
                        @csrf
                        <input type="hidden"  id="id" name="id" value="{{$booking->id }}"
                       />
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">BOOKING STATUS</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="booking_status" name="booking_status" value="{{$booking->booking_status}}"
                                     />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">PAYMENT STATUS</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="payment_status" name="payment_status" value="{{$booking->payment_status}}"/>
                            </div>
                        </div>


                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Status</button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
