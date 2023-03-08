@extends('forntend.layout.base')

@section('base-content')
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                {{-- <h1>AC Dry Servicing</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>/</li>
                        <li>AC Dry Servicing</li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 single-blog">
                            <div class="post-item">
                                @foreach ($servicesdet as $service)
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="post-header">
                                                <div class="post-format-icon post-format-standard"
                                                    style="margin-top: -10px;">
                                                    <i class="fa fa-image"></i>
                                                </div>
                                                <div class="post-info-wrap">
                                                    <h2 class="post-title"><a href="#" title="Post Format: Standard"
                                                            rel="bookmark">{{ $service->service_name }}:{{ $service->category_name }}</a>
                                                    </h2>
                                                    <div class="post-meta" style="height: 10px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">

                                            <div id="single-carousel">
                                                <div class="img-hover">
                                                    <img height="160px" src="{{ asset($service->image) }}" alt=""
                                                        class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="post-content">
                                                <h3>{{ $service->service_name }}</h3>
                                                <p>{{ $service->description }}</p>
                                                <h4>Inclusion</h4>
                                                <ul class="list-styles">
                                                    <li><i class="fa fa-plus"></i>{{ $service->inclusion }}</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <aside class="widget" style="margin-top: 18px;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Booking Details</div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td style="border-top: none;">Price</td>
                                                <td style="border-top: none;"> {{ $service->price }}<span>Tk</span></td>
                                            </tr>
                                            <tr>
                                                <td>Available Quntity</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td>{{ $service->discount_price }}<span>Tk</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="panel-footer">
                                        <form action="{{ route('addtocart') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $service->id }}" name="service_id">
                                            <input type="hidden" value="{{ $service->price }}" name="price">
                                            <input type="hidden" value="{{ $service->discount_price }}"
                                                name="discount_price">
                                            <div class="form-group">
                                                <label for="service_quantity">How many</label>
                                                <input type="number" class="form-control" min='1' max='6'
                                                    placeholder="1" name="service_quantity">
                                            </div>
                                            <br>
                                            <input type="submit" class="btn btn-primary" name="submit"
                                                value="Add to Cart">
                                        </form>
                                    </div>
                                </div>
                            </aside>
                            {{-- <aside>
                                <h3>Related Service</h3>
                                <div class="col-md-12 col-sm-6 col-xs-12 bg-dark color-white padding-top-mini"
                                    style="max-width: 360px">
                                    <a href="ac-wet-servicing.html">
                                        <div class="img-hover">
                                            <img src="images/services/thumbnails/thumbnail.jpg" alt=""
                                                class="img-responsive">
                                        </div>
                                        <div class="info-gallery">
                                            <h3>
                                                AC Wet Servicing
                                            </h3>
                                            <hr class="separator">
                                            <p>AC Wet Servicing</p>
                                            <div class="content-btn"><a href="ac-wet-servicing.html"
                                                    class="btn btn-warning">View Details</a></div>
                                            <div class="price"><span>&#36;</span><b>From</b>200</div>
                                        </div>
                                    </a>
                                </div>
                            </aside> --}}
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
