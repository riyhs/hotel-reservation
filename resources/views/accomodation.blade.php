@extends('layouts.main')
@section('content')
    <div>
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Accomodation</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Accomodation</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Special Accomodation</h2>
                    <p>We offers a unique and unforgettable experience for guests looking to explore</p>
                </div>

                @foreach ($roomSpecs as $roomSpec)
                    <h2 class="title_color" style="margin-top: 24px">Type: {{ $roomSpec->name }}</h2>
                    <p style="max-width: 50vw; margin-bottom: 16px">{{ $roomSpec->description }}</p>

                    <ul style="margin-bottom: 32px">
                        @foreach ($roomSpec->facilities as $facility)
                            <li>{{ $facility->name }}</li>
                        @endforeach
                    </ul>

                    <div class="row mb_30">
                        @foreach ($roomSpec->rooms as $room)
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
                @endforeach
            </div>
        </section>
    </div>
@endsection()
