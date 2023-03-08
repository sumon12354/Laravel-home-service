@extends('forntend.layout.base')
@section('base-content')
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                {{-- <h1>{{ $categoriesinfo->category_name }}</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('forntend.home') }}">Home</a></li>
                        <li>/</li>
                        <li>AC</li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    {{-- <h2>{{ $categoriesinfo->category_name }}-({{ $categoriesinfo->services_count }})</h2> --}}
                    <i class="fa fa-plane"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div>
                <div class="container">
                    <div class="portfolioContainer">
                        @foreach ($servicesinfo as $services)
                            <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="service-details/ac-wet-servicing.html">
                                    <div class="img-hover">
                                        <img src="{{ asset($services->image) }}" alt="" class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>{{ $services->service_name }}</h3>
                                        <hr class="separator">
                                        <p>{{ $services->tage_line }}</p>
                                        <div class="content-btn"><a
                                                href="{{ route('servicedetails', [$services->id, $services->slug]) }}"
                                                class="btn btn-primary">View Details</a></div>
                                        <div class="price"><span></span><b>From</b>{{ $services->price }} Tk</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
