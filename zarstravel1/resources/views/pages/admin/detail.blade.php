@extends('layouts.app')

@section('title',' Detail Travel')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                    <h1>
                        Nusa Penida
                    </h1>
                    <p>
                        Republic of Indonesia Raya
                    </p>
                    <div class="gallery">
                        <div class="xzoom-container">
                            <img src="{{url('frontend/images/details.png')}}"
                            class="xzoom"
                            id="xzoom-default"
                            xoriginal="{{url('frontend/images/details.png')}}"/>
                        </div>
                        <div class="xzoom-thumbs">
                            <a href="{{url('frontend/images/details-1.png')}}">
                                <img src="{{url('frontend/images/details-1.png')}}"
                                class="xzoom-gallery"
                                width="128"
                                xpreview="{url('frontend/images/details-1.png')}"/>
                            </a>
                            <a href="url ('frontend/images/details-2.png')">
                                <img src="url ('frontend/images/details-2.png')"
                                class="xzoom-gallery"
                                width="128"
                                xpreview="{{url('frontend/images/details-2.png')}}"/>
                            </a>
                            <a href="{{url('frontend/images/details-3.png')}}">
                                <img src="{{url('frontend/images/details-3.png')}}"
                                class="xzoom-gallery"
                                width="128"
                                xpreview="{{url('frontend/images/details-3.png')}}"/>
                            </a>
                            <a href="{{url('frontend/images/details-4.png')}}">
                                <img src="{{url('frontend/images/details-4.png')}}"
                                class="xzoom-gallery"
                                width="128"
                                xpreview="{{url('frontend/images/details-4.png')}}"/>
                            </a>
                            <a href="{{url('frontend/images/details-5.png')}}">
                                <img src="{{url('frontend/images/details-5.png')}}"
                                class="xzoom-gallery"
                                width="128"
                                xpreview="{{url('frontend/images/details-5.png')}}"/>
                            </a>
                        </div>
                    </div>
                    <h2>
                        Tentang wisata
                    </h2>
                    <p>
                        Selamat datang di Nusa Penida, pulau cantik di tenggara Bali, Indonesia.
                        Nikmati tebing curam, pantai terpencil, dan laut jernihnya.
                        Jelajahi alam yang memesona, temui kehidupan laut yang beragam, dan rasakan ketenangan di sini.
                        Dari matahari terbit hingga terbenam, setiap momen di Nusa Penida adalah petualangan tak terlupakan.
                        Mari nikmati keajaiban alamnya!
                    </p>
                    <p>
                    Nusa Penida adalah sebuah pulau yang terletak di sebelah tenggara dari pulau Bali, Indonesia.
                    Pulau ini merupakan bagian dari gugusan Kepulauan Nusa, bersama dengan Nusa Lembongan dan Nusa Ceningan.
                    Nusa Penida terpisah dari Bali oleh Selat Badung.
                    Jaraknya sekitar 20 kilometer dari Pelabuhan Sanur di Bali.
                    </p>
                </div>
                <div class="features row">
                    <div class="col-md-4">
                        <div class="description">
                            <img src="{{url('frontend/images/lc-event.png')}}"
                            alt=""
                            class="features-image"/>
                            <div class="description">
                                <h3>
                                    Featured Event
                                </h3>
                                <p>
                                    Tari Kecak
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 border-left">
                        <div class="description">
                            <img src="{{url('frontend/images/lc-language.png')}}"
                            alt=""
                            class="features-image"/>
                            <div class="description">
                                <h3>
                                    Language
                                </h3>
                                <p>
                                    Bahasa Indonesia
                                </p>
                            </div>
                            </div>
                    </div>
                    <div class="col-md-4 border-left">
                        <div class="description">
                            <img src="{{url('frontend/images/lc-foods.png')}}"
                            alt=""
                            class="features-image"/>
                            <div class="description">
                                <h3>
                                    Foods
                                </h3>
                                <p>
                                    Local Foods
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>
                            Member are going
                        </h2>
                        <div class="members my-2">
                            <img src="frontend/images/member-1.png"
                            class="member-image mr-1" />
                            <img src="frontend/images/member-2.png"
                            class="member-image mr-1" />
                            <img src="frontend/images/member-3.png"
                            class="member-image mr-1" />
                            <img src="frontend/images/member-4.png"
                            class="member-image mr-1" />
                            <img src="frontend/images/member-5.png"
                            class="member-image mr-1" />
                        </div>
                        <hr />
                        <h2>
                            Trip informations
                        </h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">
                                    Date of departure
                                </th>
                                <td width="50%" class="text-right">
                                    12 March, 2024
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">
                                    Duration
                                </th>
                                <td width="50%" class="text-right">
                                    3 days
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">
                                    Type
                                </th>
                                <td width="50%" class="text-right">
                                    Open Trip
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">
                                    Prices
                                </th>
                                <td width="50%" class="text-right">
                                    Rp.1.000.000 / org
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{url('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/dist/xzoom.css')}}">
@endpush

@push('additional-script')
<script src="{{ url('frontend/libraries/dist/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush
