@extends('forntend.layout.base')

@section('base-content')
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Select Location</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('forntend.home') }}">Home</a></li>
                        <li>/</li>
                        <li>Change Location</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-central">
        <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <form action="{{ route('ordercomplete') }}" method="POST">
                            @csrf
                            {{-- <input type="hidden" name="_token" value="2NHPrBqKScv73zvhqc7UbyDOvtsWZNm2dbOyAkqx"> --}}
                            <div class="col-md-6">
                                <aside class="addlocation">
                                    <h4>Your Location</h4>

                                    <div class="form-group">
                                        <label for="city_village" class="col-form-label">City/Village Name:</label>
                                        <input type="text" class="form-control" id="city_village" name="city_village">
                                    </div>
                                    <div class="form-group">
                                        <label for="house" class="col-form-label">House No:</label>
                                        <input type="text" class="form-control" id="house" name="house">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-form-label">Phone Number:</label>
                                        <input type="number" class="form-control" id="phone" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="postal_code" class="col-form-label">Postal Code/label:</label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code">
                                    </div>

                                    <a href="{{ route('alladdtocart') }}" class="btn btn-danger">Cencle Booking</a>
                                    <input type="submit" value="Place Booking" class="btn btn-primary mr-3">

                            </div>
                            <div class="col-md-4">
                                <br><br><br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Service Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($cart_item as $item)
                                            <tr>
                                                @php
                                                    $servic_name = App\Models\Services::where('id', $item->service_id)->value('service_name');
                                                @endphp
                                                <td>{{ $servic_name }}</td>
                                                <td>{{ $item->service_quantity }}</td>
                                                <td>{{ $item->price }}</td>
                                            </tr>
                                            @php
                                                $total = $total + $item->price;
                                            @endphp
                                        @endforeach
                                        <tr>
                                            <td></td>
                                            <td>Total</td>
                                            <td>{{ $total }}</td>
                                        </tr>
                                        <input type="hidden" value="{{ $servic_name }}" name="service_name">

                                        <input type="hidden" value="{{ $total }}" name="total">
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-twitter content_resalt border-top">
            <i class="fa fa-twitter icon-big"></i>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
