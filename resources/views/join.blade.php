@extends('layouts.main')
@section('main-container')
    <section class="pricing-area section-padding40 fix" style="display:block;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <h2>Pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s"
                        style="visibility: visible;animation-duration: 1s;animation-delay: 0.4s;animation-name: fadeInUp;">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="{{ url('frontend/img/price.svg') }}" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">1 month</span>
                                <p class="mb-25">$15/m <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <button type="button" id="joinFormBtn_15" class="border-btn border-btn2"
                                    data-bs-toggle="modal" data-bs-target="#myModal">
                                    Join Now
                                </button>
                                <!-- The Modal -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s"
                        style="visibility: visible;animation-duration: 1s;animation-delay: 0.4s;animation-name: fadeInUp;">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="{{ url('frontend/img/price.svg') }}" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">12 month</span>
                                <p class="mb-25">$99/m <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <button type="button" id="joinFormBtn_99" class="border-btn border-btn2"
                                    data-bs-toggle="modal" data-bs-target="#myModal">
                                    Join Now
                                </button>

                                <!-- The Modal -->

                                <div class="modal " id="myModal">
                                    <div class="modal-dialog modal-lg" id='add-form'>
                                        <div class="modal-content"
                                            style="background:url('frontend/img/trainer-bg.jpg') fixed no-repeat; background-size:cover">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Join Form</h4>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">

                                                <div class="container-fluid">
                                                    <form action="{{ route('joinGymPage') }}" method="POST">
                                                        @csrf
                                                        <div class="form-contain">
                                                            <div class="form-row d-flex mb-2">
                                                                <div class="form-group col-sm-5">
                                                                    <label for="inputFristName  ">First Name <span
                                                                            class="text-danger fs-4"> *</span></label>
                                                                    <input type="text" name="Fname"
                                                                        class="form-control" id=""
                                                                        value="" placeholder="First Name">
                                                                </div>
                                                                <div class="form-group col-sm-5 m-auto">
                                                                    <label for="inputLastName">Last Name</label>
                                                                    <input type="text" name="Lname"
                                                                        class="form-control" id=""
                                                                        value="" placeholder="Last Name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <label for="inputAddress">Address <span
                                                                        class="text-danger fs-4"> *</span></label>
                                                                <input type="text" name="Address" class="form-control"
                                                                    id="inputAddress" value=""
                                                                    placeholder="1234 Main St">
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <label for="inputAddress2">Address 2</label>
                                                                <input type="text" name="Address2"
                                                                    class="form-control" id="inputAddress2"
                                                                    value=""
                                                                    placeholder="Apartment, studio, or floor">
                                                            </div>
                                                            <div class="form-row d-flex mb-2">
                                                                <div class="form-group col-sm-5">
                                                                    <label for="inputCity">City <span
                                                                            class="text-danger fs-4"> *</span></label>
                                                                    <input type="text" name="City"
                                                                        class="form-control" id=""
                                                                        value="" placeholder="City">
                                                                </div>
                                                                <div class="form-group col-sm-5 m-auto">
                                                                    <label for="inputPin">Pin Code <span
                                                                            class="text-danger fs-4"> *</span></label>
                                                                    <input type="number" name="PinCode"
                                                                        class="form-control" id=""
                                                                        value="" placeholder="ex:363655">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-2 col-sm-3 mb-2">
                                                                <label for="inputPrice">Price</label>
                                                                <input type="text" name="price" class="form-control"
                                                                    id="priceI" value="" disabled>
                                                            </div>
                                                            <div class="form-row d-flex mb-2">
                                                                <div class="form-group col-sm-5">
                                                                    <label for="inputPhoneNumber">Phone Number <span
                                                                            class="text-danger fs-4"> *</span></label>
                                                                    <input type="number" name="PhoneNumber"
                                                                        class="form-control" id=""
                                                                        value="" placeholder="(000) 000-000">
                                                                </div>
                                                                <div class="form-group col-sm-5 m-auto">
                                                                    <label for="inputGender">Gender</label><br>
                                                                    <label class="form-check-label "
                                                                        for="flexRadioDefault1">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="Gender" value="Male"
                                                                            name="flexRadioDefault" id="">
                                                                        Male
                                                                    </label>
                                                                    <label class="form-check-label "
                                                                        for="flexRadioDefault2">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="Gender" value="Female"
                                                                            name="flexRadioDefault" id="">
                                                                        Female
                                                                    </label>
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault2">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="Gender" value="Other"
                                                                            name="flexRadioDefault" id="">
                                                                        Other
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-7 col-sm-10 mb-2">
                                                                <label for="inputAddress">Email</label>
                                                                <input type="Email" name="Email" class="form-control"
                                                                    id="inputAddress" value=""
                                                                    placeholder="ex:abc12@gamil.com">
                                                            </div>

                                                            <!-- Modal body  Emergency Contact Information -->

                                                            <hr class="mb-0">
                                                            <div class="modal-body">
                                                                <h5 class="modal-title mb-2"> Emergency Contact Information
                                                                </h5>
                                                                <div class="form-row d-flex mb-2">
                                                                    <div class="form-group col-sm-5">
                                                                        <label for="inputEmFristName">First Name <span
                                                                                class="text-danger fs-4"> *</span></label>
                                                                        <input type="text" name="EmFname"
                                                                            class="form-control" id=""
                                                                            value="" placeholder="First Name">
                                                                    </div>
                                                                    <div class="form-group col-sm-5 m-auto">
                                                                        <label for="inputEmLastName">Last Name</label>
                                                                        <input type="text" name="EmLname"
                                                                            class="form-control" id=""
                                                                            value="" placeholder="Last Name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-7 col-sm-10 mb-2">
                                                                    <label for="inputEmPhoneNumber">Phone Number <span
                                                                            class="text-danger fs-4"> *</span></label>
                                                                    <input type="number" name="EmPhonerNumber"
                                                                        class="form-control" id=""
                                                                        value="" placeholder="(000) 000 000">
                                                                </div>
                                                                <div class="form-group mt-2 col-lg-7 col-sm-10 mb-2">
                                                                    <label for="inputEmPhoneNumber">Relationship</label>
                                                                    <select class="form-select" name="EmRelationship"
                                                                        aria-label="Default select example">
                                                                        <option selected>Please Select</option>
                                                                        <option value="Spouse">Spouse</option>
                                                                        <option value="Sibling">Sibling</option>
                                                                        <option value="parent">Parent</option>
                                                                        <option value="Friend">Friend</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s"
                        style="visibility: visible;animation-duration: 1s;animation-delay: 0.4s;animation-name: fadeInUp;">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="{{ url('frontend/img/price.svg') }}" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">6 month</span>
                                <p class="mb-25">$59/m <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="{{ url('frontend/img/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <button type="button" id="joinFormBtn_59" class="border-btn border-btn2"
                                    data-bs-toggle="modal" data-bs-target="#myModal">
                                    Join Now
                                </button>
                                <!-- The Modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses area End -->
@endsection
