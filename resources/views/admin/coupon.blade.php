@extends('admin.layout.template')
@section('page_title')
    Dashboard -All-Coupons
@endsection
@section('content')
    <!-- Bootstrap Table with Header - Light -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Coupons</h4>
        <div class="card">
            <h5 class="card-header" style="margin-bottom: -40px">Available Coupons Infromation</h5>
            <div class="row ">
                <div class="col-11 text-end my-2">
                    <a href="{{route('addcoupun') }}" class="btn btn-primary">Add Coupon</a>
                </div>

            </div>
            <!--       message       -->
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <!--       message       -->
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Coupon</th>
                            <th>Service Name</th>
                            <th>Discount</th>
                            <th>Start-Expire</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>DISCOUNT_TYPE</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($coupon as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->COUPON}}</td>
                                <td>{{ $item->SERVICE}}</td>
                                <td>{{ $item->DISCOUNT}}</td>
                                <td>
                                    <p class="btn btn-success btn-sm">{{ $item->START_DATE}} </p> <br>
                                   <p class="btn btn-danger btn-sm"> {{ $item->EXPIRE_DATE}} </p>
                                </td>
                                <td>{{ $item->DESCRIPTION}}</td>
                                
                                <td>status</td>
                                <td>{{ $item->DISCOUNT_TYPE}}</td>
                            
                               
                                
                                
                               
                              


                                <td>
                                        {{-- <a href="{{url('couponEdit')}}/{{$id->id}}" class="btn btn-primary">Edit</a> --}}
                                        <a href="{{route('couponDelete',$item->id)}}" class="btn btn-danger">Delete</a>
                                
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <!-- Bootstrap Table with Header - Light -->
    </div>
@endsection
