@extends('layouts.app')

@section('title')
    NOMADS
@endsection

@section('content')
<!-- header -->
<header class="text-center">
    <h1>Explore The Beautiful World
        <br>
        As Easy One Click
    </h1>
    <p>
        You will see beautiful
        <br>
        moment you never see before
    </p>
    <a href="#" class="btn btn-cta px-5 my-4">Get started</a>
</header>

<main>
    <div class="container">
        <section class="section-statis row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotel</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Member</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>
    
    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>Something that you never try
                        <br>
                    before in this world</p>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-content">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" 
                    style="background-image: url('frontend/images/Group\ 10.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">DERATAN, BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="" class="btn btn-travel-detail px-4">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" 
                    style="background-image: url('frontend/images/Group\ 11.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">BROMO, MALANG</div>
                        <div class="travel-button mt-auto">
                            <a href="" class="btn btn-travel-detail px-4">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" 
                    style="background-image: url('frontend/images/Group\ 12.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">NUSA PENIDA</div>
                        <div class="travel-button mt-auto">
                            <a href="" class="btn btn-travel-detail px-4">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" 
                    style="background-image: url('frontend/images/Group\ 13.jpg');">
                        <div class="travel-country">MIDDLE EAST</div>
                        <div class="travel-location">DUBAI</div>
                        <div class="travel-button mt-auto">
                            <a href="" class="btn btn-travel-detail px-4">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-network">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Network</h2>
                    <p>Companies are trusted us
                        <br>
                    more than just a trip</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{ url('frontend/images/logos_partner@2x.png') }}" alt="Logo img partner" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonial-heading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>
                        Moments were giving them     
                        <br>
                        the best experience
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testiominial-content">
                            <img src="{{ url('frontend/images/user_pic.jpg') }}" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Iqbal R</h3>
                            <p class="testiomonial">
                                “ It was glorious and I could 
                                not stop to say wohooo for 
                                every single moment
                                Dankeeeeee “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Bali
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testiominial-content">
                            <img src="{{ url('frontend/images/user_pic.jpg') }}" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Iqbal R</h3>
                            <p class="testiomonial">
                                “ It was glorious and I could 
                                not stop to say wohooo for 
                                every single moment
                                Dankeeeeee “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Bali
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testiominial-content">
                            <img src="{{ url('frontend/images/user_pic.jpg') }}" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Iqbal R</h3>
                            <p class="testiomonial">
                                “ It was glorious and I could 
                                not stop to say wohooo for 
                                every single moment
                                Dankeeeeee “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Bali
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-get px-4 mt-4 mx-1">Get Started</a>
                    <a href="#" class="btn btn-help px-4 mt-4 mx-1">I Need Help</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection