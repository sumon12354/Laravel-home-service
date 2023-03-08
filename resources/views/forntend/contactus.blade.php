@extends('forntend.layout.base')
@section('base-content')
<div class="section-title-01 honmob">
    <div class="bg_parallax image_02_parallax"></div>
    <div class="opacy_bg_02">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="crumbs">
                <ul>
                    <li><a href="{{ route('forntend.home') }}">Home</a></li>
                    <li>/</li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="content-central">
    {{-- <div class="semiboxshadow text-center">
        <img height="200px" src="{{ asset('forntend/contact.jpg') }}" alt="">
    </div> --}}
    <div id="map" class="honmob"><center> <img height="400px" src="{{ asset('forntend/contact.jpg') }}" alt=""></center> </div>
    <div class="content_info">
        <div class="paddings-mini">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <aside>
                            <h4>The Office</h4>
                            <address>
                                <strong>Demandium Home Services.</strong><br>
                                <i class="fa fa-map-marker"></i><strong>Address: </strong>Dhaka
                                Bangladesh<br>
                                <i class="fa fa-phone"></i><strong>Phone: </strong> +880 1755883434
                            </address>
                            <address>
                                <strong>Demandium Emails</strong><br>
                                <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                    href="mailto:contact@surfsidemedia.in"> contact@demandium.in</a><br>
                                <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                    href="mailto:support@surfsidemedia.in"> support@demandium.in</a>
                            </address>
                        </aside>
                        <hr class="tall">
                    </div>
                      <!--       message       -->
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                      <!--       message       -->
                    <div class="col-md-8">
                        <h3>Contact Form</h3>
                        <p class="lead">
                        </p>
                        <form id="contactform" class="form-theme" action="{{route('contactinfo')}}"
                            method="post">
                            @csrf
                            <input type="text" placeholder="Name" name="name" id="name" required="">
                            <input type="email" placeholder="Email" name="email" id="email" required="">
                            <input type="text" placeholder="Phone" name="phone" id="phone" required="">
                            <input type="text" placeholder="Location" name="location" id="autocomplete"
                                required="">
                            <textarea placeholder="Your Message" name="message" id="message"
                                required=""></textarea>
                            <input type="submit" name="Submit" value="Send Message" class="btn btn-primary">
                        </form>
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-twitter content_resalt border-top">
        <i class="fa fa-twitter icon-big"></i>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection