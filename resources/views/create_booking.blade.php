@extends('layouts.main')
@section('content')
    <section class="banner_area" style="min-height: 100vh; padding-top: 80px">
        <div class="container" style="padding-top: 32px">
            <h2 class="title_w mb-4 mt-4">Book your hapiness 🙂</h2>

            <form id="form_booking" action="{{ route('guestStore') }}" method="POST">
                @csrf

                <input type="hidden" name="guest_id" value="{{ auth()->guard('guest')->id() }}">

                <div class="row">
                    <div class="col-md-6">
                        <div class="book_tabel_item">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="guest" class="form-control" placeholder="Guest Name" required
                                        style="color: white" value="{{ auth()->guard('guest')->user()->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" name="phone" class="form-control" placeholder="Phone Number"
                                        required="" form="form_booking" style="color: white">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="E-Mail"
                                        form="form_booking" style="color: white">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" name="amount" class="form-control" placeholder="Room Amount"
                                        form="form_booking" style="color: white">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="book_tabel_item">
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker11'>
                                    <input type='text' class="form-control" placeholder="Arrival Date" form="form_booking"
                                        name="checkin" style="color: white" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" placeholder="Departure Date"
                                        form="form_booking" name="checkout" style="color: white" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="input-group">
                                <select class="wide" form="form_booking" name="room_id">
                                    <option data-display="Room Type">Room Type</option>
                                    @if (request()->has('room'))
                                        @foreach ($rooms as $room)
                                            <option value="{{ $room->id }}" style="color: white"
                                                {{ $room->id == request()->query('room') ? 'selected' : '' }}>
                                                {{ $room->name }}
                                            </option>
                                        @endforeach
                                    @else
                                        @foreach ($rooms as $room)
                                            <option value="{{ $room->id }}" style="color: white">
                                                {{ $room->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Notes" name="notes"
                                        form="form_booking" style="color: white">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" form="form_booking" class="book_now_btn button_hover mt-4">
                    Book Now
                </button>

            </form>

        </div>
    </section>
@endsection()
