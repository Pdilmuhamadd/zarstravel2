@extends('layouts.app')

@section('title')
    ZarsTravel
@endsection

@section('content')
        <!-- Header -->
        <header class="text-center">
            <h1>
                Jelajahi Dunia bersama ZarsTravel
            </h1>
            <P class="mt-3">
                Pesan dan nikmati perjalanan yang menyenangkan
            </P>
            <a href="#popular" class="btn btn-get-started px-4 mt-4">
                Get Started
            </a>
        </header>

        <main>
            <div class="container">
                <section class="section-stats row justify-content-center" id="stats">
                    <div class="co-3 col-md-2 stats-detail">
                        <h2>
                            20K
                        </h2>
                        <p>
                            Members
                        </p>
                    </div>
                    <div class="co-3 col-md-2 stats-detail">
                        <h2>
                            12
                        </h2>
                        <p>
                            Countries
                        </p>
                    </div>
                    <div class="co-3 col-md-2 stats-detail">
                        <h2>
                            3k
                        </h2>
                        <p>
                            Hotel
                        </p>
                    </div>
                    <div class="co-3 col-md-2 stats-detail">
                        <h2>
                            72
                        </h2>
                        <p>
                            Partner
                        </p>
                    </div>
                </section>
            </div>

            <section class="section-popular" id="popular">
                <div class="container">
                    <div class="row">
                        <div class="col text-center section-popular-header">
                            <h2>
                                Popular Destination
                            </h2>
                            <p>
                                Something that you never try
                                <br />
                                before in this world
                            </p>
            </section>

            <section class="section-popular-content" id="popularContent">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center">
                        @foreach ($items as $item)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div
                                    class="card-travel text-center d-flex flex-column"
                                    style="background-image: url('{{ $item->galleries->count() ? Storage::url
                                    ($item->galleries->first()->image) : '' }}');"
                                >
                                    <div class="travel-country">{{ $item->location}}</div>
                                    <div class="travel-location">{{ $item->title}}</div>
                                    <div class="travel-button mt-auto"></div>
                                        <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="section-testimonial-heading" id="testimonialheading">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2>
                                They are Loving Us
                            </h2>
                            <p>
                                See what our customer
                                <br />
                                are saying
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-testimonial-content" id="testimoniContent">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="{{url ('frontend/images/testimonial-1.png')}}"
                                    alt="User"
                                    class="mb-4 rounded-circle" />
                                    <h3 class="mb-4">
                                        Angga Luthfafi
                                    </h3>
                                    <p class="testimonial">
                                        "It was glorious and
                                        I am so happy of it!"
                                    </p>
                                </div>
                                <hr />
                                <p class="trip-to mt-2">
                                    Trip to Ubud
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="{{url ('frontend/images/testimonial-2.png')}}"
                                    alt="User"
                                    class="mb-4 rounded-circle" />
                                    <h3 class="mb-4">
                                        Fadhil Jaidi
                                    </h3>
                                    <p class="testimonial">
                                        "The trip was amazing and
                                        I'm so happy of it!"
                                    </p>
                                </div>
                                <hr />
                                <p class="trip-to mt-2">
                                    Trip to Nusa Penida
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="{{url ('frontend/images/testmonial-3.png')}}"
                                    alt="User"
                                    class="mb-4 rounded-circle" />
                                    <h3 class="mb-4">
                                        Dede Inoen
                                    </h3>
                                    <p class="testimonial">
                                        "I loved it when
                                        I was shaking harder and harder!"
                                    </p>
                                </div>
                                <hr />
                                <p class="trip-to mt-2">
                                    Trip to Karimun Jawa
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                                I Need Help
                            </a>
                            <a href="{{route('register')}}" class="btn btn-get-started px-4 mt-4 mx-1">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </section>


        </main>
@endsection
