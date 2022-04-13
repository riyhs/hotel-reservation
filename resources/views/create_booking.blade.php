@extends('layouts.main')
@section('content')
    <section class="banner_area" style="min-height: 100vh; padding-top: 80px">
        <div class="container" style="padding-top: 32px">
            <h2 class="title_w mb-4 mt-4">Book your hapiness 🙂</h2>

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
                                <input type='text' class="form-control" placeholder="Departure Date" />
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
                                <input type="email" name="number" class="form-control" placeholder="Room Amount"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Room Amount '" required="">
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
                        <a class="book_now_btn button_hover" href="#">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
