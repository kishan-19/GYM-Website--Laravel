@extends('layouts.main')
@section('main-container')
    <!--? Team -->
    <section class="team-area pt-80 black-bg pb-5 p-5">
        <div class="container font-about">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s"
                        style="visibility: visible;
                    animation-duration: 1s;
                    animation-delay: 0.2s;
                    animation-name: fadeInUp;">
                        <div class="cat-icon">
                            <img src="{{ url('frontend/img/team1.png') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Body Building</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="{{ url('frontend/img/team2.png') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Muscle Gain</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="{{ url('frontend/img/team3.png') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Weight Loss</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!--? About Area-2 Start -->
    <div class="container-fluid black-bg font-about">
        <div class="row pb-5">
            <div class="col-xl-6 col-md-12">
                <div class="right-img">
                    <img src="{{ url('frontend/img/about.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-md-12 ml-2">
                <h2 class="right-tital text-light mt-3">About Me</h2>
                <p class="text-light mt-1">You’ll look at graphs and charts in Task One, how to approach the task and the
                    language needed
                    for a successful answer. You’ll examine Task Two questions and learn how to plan, write and
                    check academic essays.</p>
                <p class="mb-40 text-light mt-1">Task One, how to approach the task and the language needed for a successful
                    answer. You’ll
                    examine Task Two questions and learn how to plan, write and check academic essays.</p>
                <a href="{{ route('joinGymPage') }}" class="border-btn">My Courses</a>
            </div>
            <div class="col-xl-1 col-md-12">

            </div>
        </div>
    </div>
    <!-- About Area End -->
@endsection
