@extends('layouts.main')
@section('content')
    <div>
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                    data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h6>Discover a unique experience of living</h6>
                        <h2>Relax Your Mind</h2>
                        <p>Hotel Asyk offers accommodations unlike any other.<br>You'll be able to explore a new culture and
                            experience living like a local.</p>
                        <a href="{{ url('accomodation') }}" class="btn theme_btn button_hover">Explore Accomodations</a>
                    </div>
                </div>
            </div>
            {{-- <div class="hotel_booking_area position">
                <div class="container">
                    <div class="hotel_booking_table">
                        <div class="col-md-3">
                            <h2>Book<br> Your Room</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker11'>
                                                    <input type='text' class="form-control" placeholder="Arrival Date" />
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control"
                                                        placeholder="Departure Date" />
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="email" name="number" class="form-control"
                                                        placeholder="Room Amount" onfocus="this.placeholder = ''"
                                                        onblur="this.placeholder = 'Room Amount '" required="">
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <select class="wide">
                                                    <option data-display="Room Type">Room Type</option>
                                                    <option value="1">King Salman Spec</option>
                                                    <option value="2">Lord Luhut Spec</option>
                                                    <option value="3">Rakyat Jelata</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="input-group">
                                                <select class="wide">
                                                    <option data-display="Child">Number of Rooms</option>
                                                    <option value="1">Room 01</option>
                                                    <option value="2">Room 02</option>
                                                    <option value="3">Room 03</option>
                                                </select>
                                            </div>
                                            <a class="book_now_btn button_hover" href="{{ route('guestCreate') }}">Book
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>
        <!--================Banner Area =================-->

        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Hotel Accomodation</h2>
                    <p>We offers a unique and unforgettable experience for guests looking to explore</p>
                </div>
                <div class="row mb_30 text-center">

                    @foreach ($rooms as $room)
                        <div class="col-lg-4 col-sm-6" style="margin-bottom: 32px">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="{{ asset('images/room' . '/' . $room->image) }}"
                                        alt="{{ $room->name }} Room Image">

                                    @if (Route::has('login'))
                                        @auth('guest')
                                            <a href="{{ route('guestCreate', ['room' => $room->id]) }}"
                                                class="btn theme_btn button_hover">Book Now</a>
                                        @else
                                            <a href="{{ url('register') }}" class="btn theme_btn button_hover">Book
                                                Now</a>
                                        @endauth
                                    @endif

                                </div>
                                <h2 class="sec_h4" style="font-size: 24px !important">{{ $room->name }}</h2>
                                <h4 class="sec_h4">{{ $room->roomSpec->name }}</h4>
                                <h5>Rp{{ number_format($room->price, 0, ',', '.') }}<small>/night</small></h5>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center" style="padding-top: 16px;">
                    <a href="{{ url('accomodation') }}" class="btn theme_btn button_hover">Explore More Accomodations</a>
                </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->

        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Royal Facilities</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="row mb_30">
                    @foreach ($hotelFacilities as $hotelFacility)
                        <div class="col-lg-4 col-md-6">
                            <div class="facilities_item">
                                <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>{{ $hotelFacility->name }}</h4>
                                <p>{{ $hotelFacility->description }}</p>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->

        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                            <p>A brand that offers a unique and unforgettable experience of living, where guests become the
                                heroes of their own story. Hotel Asyk is for those who want to escape the ordinary and
                                immerse themselves in something new. From the moment you arrive,</p>
                            <a href="{{ url('accomodation') }}" class="button_hover theme_btn_two">Let's Explore</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid"
                            src="https://images.unsplash.com/photo-1612454882322-2cc894734fd2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                            alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->

        <!--================ Testimonial Area  =================-->
        <section class="testimonial_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Testimonial from our Clients</h2>
                    <p>Our Hotel collection is trusted by our customers for its comfort and quality.
                    </p>
                </div>
                <div class="testimonial_slider owl-carousel">
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="img/pexels-stefan-stefancik-91227.jpg"
                            alt="Photo by Stefan Stefancik from Pexels">
                        <div class="media-body">
                            <p>I would definitely recommend Hotel as a great place to stay while on vacation. I really
                                appreciated the good service and the great memories that I made while staying there.</p>
                            <a href="#">
                                <h4 class="sec_h4">Philipp Lackner</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="img/pexels-mentatdgt-937481.jpg"
                            alt="Photo by mentatdgt from Pexels">
                        <div class="media-body">
                            <p>Everything was perfect! The service, the room... we really enjoyed our stay and will
                                definitely come back!</p>
                            <a href="#">
                                <h4 class="sec_h4">Jian Yang</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="img/pexels-daniel-xavier-1102341.jpg"
                            alt="Photo by Daniel Xavier from Pexels">
                        <div class="media-body">
                            <p>The hotel is beautiful inside and out! The design is very modern and the hotel is very clean.
                                The staff was very friendly and accommodating. I would definitely recommend this hotel to
                                anyone!</p>
                            <a href="#">
                                <h4 class="sec_h4">Fanny Spencer</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="img/pexels-pixabay-415829.jpg"
                            alt="pexels.com/photo/woman-wearing-black-spaghetti-strap-top-415829">
                        <div class="media-body">
                            <p>The staff was friendly and welcoming, and the room was beautiful and clean. I would
                                definitely recommend this hotel to anyone looking for a place to stay in the area.</p>
                            <a href="#">
                                <h4 class="sec_h4">Tzuyu</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection()
