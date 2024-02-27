@extends('layouts.main')
@section('main-container')
    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"><i class="fa-solid fa-person-biking fa-2xl   "></i></span>

                        <h4>Modern equipment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"><i class="fa-solid fa-glass-water fa-2xl"></i></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"><i class="fa-solid fa-dumbbell fa-2xl"></i></span>
                        <h4>Proffesponal training plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"><i class="fa-solid fa-heart-pulse fa-2xl"></i></span>
                        <h4>Unique to your needs</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->
    <!-- Banner Section Begin -->
    <section class="banner-section set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>registration now to get more deals</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                        <a href="{{ route('contactPage') }}" class="border-btn">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->
    <!-- Gallery Section Begin -->
    <div class="gallery-section pt-5 pb-5" id="postGym">
        <div class="gallery">
            <div class="grid-sizer"></div>

            <div class="gs-item grid-wide set-bg" style="background: url('frontend/img/gallery/gallery-1.jpg') no-repeat">
                <a href="{{ url('frontend/img/gallery/gallery-1.jpg') }}" class="thumb-icon image-popup"><i
                        class="fa-regular fa-image fa-xl"></i></a>
            </div>
            <div class="gs-item set-bg" style="background: url('frontend/img/gallery/gallery-2.jpg') no-repeat">
                <a href="{{ url('frontend/img/gallery/gallery-2.jpg') }}" class="thumb-icon image-popup"><i
                        class="fa-regular fa-image fa-xl"></i></a>
            </div>
            <div class="gs-item set-bg" style="background: url('frontend/img/gallery/gallery-3.jpg') no-repeat">
                <a href="{{ url('frontend/img/gallery/gallery-3.jpg') }}" class="thumb-icon image-popup"><i
                        class="fa-regular fa-image fa-xl"></i></a>
            </div>
            <div class="gs-item set-bg" style="background: url('frontend/img/gallery/gallery-4.jpg') no-repeat">
                <a href="{{ url('frontend/img/gallery/gallery-4.jpg') }}" class="thumb-icon image-popup"><i
                        class="fa-regular fa-image fa-xl"></i></a>
            </div>
            <div class="gs-item set-bg" style="background: url('frontend/img/gallery/gallery-5.jpg') no-repeat">
                <a href="{{ url('frontend/img/gallery/gallery-5.jpg') }}" class="thumb-icon image-popup"><i
                        class="fa-regular fa-image fa-xl"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" style="background: url('frontend/img/gallery/gallery-6.jpg') no-repeat">
                <a href="{{ url('frontend/img/gallery/gallery-6.jpg') }}" class="thumb-icon image-popup"><i
                        class="fa-regular fa-image fa-xl"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->
@endsection
