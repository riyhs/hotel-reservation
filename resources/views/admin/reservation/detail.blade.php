@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4>Detail Reservation</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Reserver Name</label>
                            <input type="email" class="form-control" value="{{ $reservation->reserver->name }}" disabled>
                        </div>

                        <div class="form-group">
                            <label>Reserver Email</label>
                            <input type="email" class="form-control" value="{{ $reservation->email }}" disabled>
                        </div>

                        <div class="form-group">
                            <label>Reserver Phone</label>
                            <input type="phone" class="form-control" value="{{ $reservation->phone }}" disabled>
                        </div>

                        <div class="form-group">
                            <label>Guest Name</label>
                            <input type="text" class="form-control" value="{{ $reservation->guest }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Check In Date</label>
                            <input type="datetime-local" class="form-control"
                                value="{{ $reservation->check_in->format('Y-m-d\TH:i') }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Check Out Date</label>
                            <input type="datetime-local" class="form-control"
                                value="{{ $reservation->check_out->format('Y-m-d\TH:i') }}" disabled>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Reservation Date</label>
                            <input type="datetime-local" class="form-control"
                                value="{{ $reservation->created_at->format('Y-m-d\TH:i') }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" value="{{ $reservation->status }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Room Name</label>
                            <input type="text" class="form-control" value="{{ $reservation->room->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Room Type</label>
                            <input type="text" class="form-control" value="{{ $reservation->room->roomSpec->name }}"
                                disabled>
                        </div>
                        <div class="form-group">
                            <label>Room Price / night</label>
                            <input type="text" class="form-control"
                                value="{{ number_format($reservation->room->price, 0, ',', '.') }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Room Booked</label>
                            <input type="number" class="form-control" value="{{ $reservation->room_amount }}" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Notes</label>
                    <input type="text" class="form-control" value="{{ $reservation->notes }}" disabled>
                </div>
            </div>
        </div>
    </section>
@endsection
