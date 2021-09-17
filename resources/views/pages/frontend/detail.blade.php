@extends('layouts.app')

@section('title')
    Detail Travel
@endsection


@section('content')
<main>
    <section class="section-details-header">
    </section>
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
                <div class="col-lg-8 pl-0">
                    <div class="card card-details">
                        <h1>Nusa Penida</h1>
                        <p>Republic of Indonesia Raya</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/Mask Group 4.png" alt="" class="xzoom" id="xzoom-default" xoriginal="frontend/images/Mask Group 4.png">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="frontend/images/Mask Group 4.png">
                                    <img src="frontend/images/Mask Group 4.png" class="xzoom-gallery" width="128" xpreview="frontend/images/Mask Group 4.png  ">
                                </a>
                                <a href="frontend/images/Mask Group 4.png">
                                    <img src="frontend/images/Mask Group 4.png" class="xzoom-gallery" width="128" xpreview="frontend/images/Mask Group 4.png  ">
                                </a>
                                <a href="frontend/images/Mask Group 4.png">
                                    <img src="frontend/images/Mask Group 4.png" class="xzoom-gallery" width="128" xpreview="frontend/images/Mask Group 4.png  ">
                                </a>
                                <a href="frontend/images/Mask Group 4.png">
                                    <img src="frontend/images/Mask Group 4.png" class="xzoom-gallery" width="128" xpreview="frontend/images/Mask Group 4.png  ">
                                </a>
                                <a href="frontend/images/Mask Group 4.png">
                                    <img src="frontend/images/Mask Group 4.png" class="xzoom-gallery" width="128" xpreview="frontend/images/Mask Group 4.png  ">
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung 
                            Regency that includes the neighbouring small island of Nusa Lembongan. The Badung 
                            Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum 
                            altitude of 524 metres. It is drier than the nearby island of Bali.</p>
                        <p>Bali and a district of Klungkung Regency that includes the neighbouring small island of 
                            Nusa Lembongan. The Badung Strait separates the island and Bali.</p>
                        <div class="features row">
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="/frontend/images/ic_event – 1.png" alt="" class="features-images">
                                    <div class="description">
                                        <h3>Featuired Event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="/frontend/images/ic_language.png" alt="" class="features-images">
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="/frontend/images/ic_foods.png" alt="" class="features-images">
                                <div class="description">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                           <img src="frontend/images/Mask Group 3.png" alt="" class="member-image mr-1">
                           <img src="frontend/images/Mask Group 3.png" alt="" class="member-image mr-1">
                           <img src="frontend/images/Mask Group 3.png" alt="" class="member-image mr-1">
                           <img src="frontend/images/Mask Group 3.png" alt="" class="member-image mr-1">
                           <img src="frontend/images/Mask Group 3.png" alt="" class="member-image mr-1">
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Date of Depature</th>
                                <td width="50%" class="text-right">22 Aug,2019</td>
                            </tr>
                            
                            <tr>
                                <th width="50%">Date of Depature</th>
                                <td width="50%" class="text-right">22 Aug,2019</td>
                            </tr>
                            
                            <tr>
                                <th width="50%">Date of Depature</th>
                                <td width="50%" class="text-right">22 Aug,2019</td>
                            </tr>
                            
                            <tr>
                                <th width="50%">Date of Depature</th>
                                <td width="50%" class="text-right">22 Aug,2019</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="" class="btn btn-block btn-join mt-3 py-2">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection

@push('addon-style')
<script src="{{ url('frontend/libraries/xzoom/dist/xzoom.min.js') }}"></script>
@endpush
    

@push('addon-script')
<script src="frontend/libraries/xzoom/dist/xzoom.min.js"></script>
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

