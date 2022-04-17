@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4>Edit Reservation</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('reservation/edit') . '/' . $reservation->id }}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Reserver Name</label>
                                <select class="form-control" name="name" required disabled>
                                    @foreach ($reservers as $reserver)
                                        <option value="{{ $reserver->id }}"
                                            {{ $reserver->id == $reservation->id ? 'selected' : '' }}>
                                            {{ $reserver->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Reserver Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $reservation->email }}"
                                    placeholder="The best place to spend your time with your bestie" disabled>
                            </div>

                            <div class="form-group">
                                <label>Reserver Phone</label>
                                <input type="phone" class="form-control" name="phone" value="{{ $reservation->phone }}"
                                    placeholder="The best place to spend your time with your bestie" disabled>
                            </div>

                            <div class="form-group">
                                <label>Reserver Name</label>
                                <input type="text" class="form-control" name="guest" value="{{ $reservation->guest }}"
                                    placeholder="The best place to spend your time with your bestie" disabled>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Room Name</label>
                                <select class="form-control" name="room" required disabled>
                                    <option>-- Room Name --</option>
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}"
                                            {{ $room->id == $reservation->room_id ? 'selected' : '' }}>
                                            {{ $room->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Room Amount</label>
                                <input type="number" class="form-control" name="amount" placeholder="0"
                                    value="{{ $reservation->room_amount }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Check In Date</label>
                                <input type="datetime-local" class="form-control" name="checkin"
                                    value="{{ $reservation->check_in->format('Y-m-d\TH:i') }}" disabled>
                            </div>

                            <div class="form-group">
                                <label>Check Out Date</label>
                                <input type="datetime-local" class="form-control" name="checkout"
                                    value="{{ $reservation->check_out->format('Y-m-d\TH:i') }}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Notes</label>
                        <input type="text" class="form-control" name="notes" value="{{ $reservation->notes }}"
                            placeholder="The best place to spend your time with your bestie" disabled>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
