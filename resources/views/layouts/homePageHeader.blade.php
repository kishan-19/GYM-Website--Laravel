     <!-- Carousel Start -->
     <div class="container-fluid p-0">
         <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <img class="w-100" src="{{ url('frontend/img/carousel-1.jpg') }}" alt="Image">
                     <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                         <div class="p-3" style="max-width: 900px;">
                             <h5 class="text-white text-uppercase">Best Gym Center</h5>
                             <h1 class="display-2 text-white text-uppercase mb-md-4">Build Your Body Strong With Gymster
                             </h1>
                             <a href="{{route('joinGymPage')}}" id="btn-join" class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                             <a href="{{route('contactPage')}}" id="btn-conect" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                         </div>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <img class="w-100" src="{{ url('frontend/img/carousel-2.jpg') }}" alt="Image">
                     <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                         <div class="p-3" style="max-width: 900px;">
                             <h5 class="text-white text-uppercase">Best Gym Center</h5>
                             <h1 class="display-2 text-white text-uppercase mb-md-4">Grow Your Strength With Our
                                 Trainers</h1>
                             <a href="{{ route('joinGymPage') }}" id="btn-join"
                                 class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                             <a href="{{ route('contactPage') }}" id="btn-conect"
                                 class="btn btn-light py-md-3 px-md-5">About Us</a>
                         </div>
                     </div>
                 </div>
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                 data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                 data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>
     </div>
     <!-- Carousel End -->
