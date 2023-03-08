@extends('forntend.layout.base')
@section('base-content')
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax">
            <h1>Cart Detailes</h1>
        </div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Cart Detailes</h1>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                    <!--       message       -->
                                        @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    <!--       message       -->
                                <thead>
                                    <tr>
                                        <th>Service Image</th>
                                        <th>Service Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @php
                                    $total = 0;
                                   @endphp
                                        @foreach ($cart_item as $item)
                                            <tr>
                                                @php
                                                    $servic_name = App\Models\Services::where('id',$item->service_id)->value('service_name');
                                                    $image = App\Models\Services::where('id',$item->service_id)->value('image');
                                                @endphp
                                                <td><img src="{{asset($image)}}" style="height: 50px"></td>
                                                <td>{{ $servic_name}}</td>
                                                <td>{{ $item->service_quantity }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td><a href="{{route('removeitem',$item->id)}}" class="btn btn-warning">Remove</a></td>
                                            </tr>
                                            @php
                                            $total = $total + $item->price;
                                           @endphp
                                        @endforeach
                                        @if ($total >0)
                                            <tr>
                                            <td></td>
                                            <td></td>
                                           
                                                <td>Total</td>
                                                <td>{{$total}}</td>
                                                <td><a href="{{route('locationdetalis')}}" class="btn btn-success">Checkout Now</a></td>
                                            </tr>
                                        @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
