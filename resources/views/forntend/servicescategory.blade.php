@extends('forntend.layout.base')
@section('base-content')
    <div class="tp-banner">
        <ul>
            @foreach ($sliders as $slide)
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"
                    data-title="Slide">
                    <img src="{{ asset($slide->image) }}" alt="{{ asset($slide->title) }}" data-bgposition="center center"
                        data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                        data-bgfitend="100" data-bgpositionend="right center">
                </li>
            @endforeach
        </ul>
        <div class="tp-bannertimer"></div>
    </div>

    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    <h2> <span>All Service Categories</span></h2>
                    <i class="fa fa-plane"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div class="row">
                <div class="col-md-12">
                    <ul class="services-lines full-services">
                        @foreach ($categories as $category)
                            <li>
                                <div class="item-service-line">
                                    <i class="fa"><a href="{{ route('servicesbycategory', $category->id) }}"><img
                                                class="icon-img" src="{{ asset($category->categroy_image) }}"
                                                alt="{{ $category->category_name }}"></a></i>
                                    <h5>{{ $category->category_name }}</h5>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="content_info content_resalt">
            <div class="container">
                <div class="row">
                    <div class="titles">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
