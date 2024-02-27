@extends('layouts.main')
@section('main-container')

@if (!empty(Session()->get('saveMessage')))
<script>
 alert('Thank You For Contact...');
</script>
{{session()->forget('saveMessage')}}
@endif

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <span>Contact Us</span>
                        <h2 class="text-light">GET IN TOUCH</h2>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-text">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>333 Middle Winchendon Rd, Rindge,<br /> NH 03461</p>
                        </div>
                        <div class="cw-text">
                            <i class="fa fa-mobile"></i>
                            <ul>
                                <li>125-711-811</li>
                                <li>125-668-886</li>
                            </ul>
                        </div>
                        <div class="cw-text email">
                            <i class="fa fa-envelope"></i>
                            <p>Support.wegogym@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form action="{{ route('contactPage') }}" method="POST">
                            @csrf
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                            </span>
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" required>
                            <span class="text-danger">
                                @error('website')
                                    {{ $message }}
                                @enderror
                            </span>
                            <input type="text" name="website" placeholder="Website" value="{{ old('website') }}">
                            <span class="text-danger">
                                @error('comment')
                                    {{ $message }}
                                @enderror
                            </span>
                            <textarea placeholder="Comment" name="comment" value="{{ old('comment') }}"></textarea>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map">
                {{-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd"
                height="550" style="border:0;" allowfullscreen=""></iframe> --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d118147.68688950267!2d70.738893734056!3d22.2736250289338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1708185749238!5m2!1sen!2sin"
                    height="550" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection

