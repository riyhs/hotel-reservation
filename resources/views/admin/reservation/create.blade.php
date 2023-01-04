@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4>Create a New Reservation</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('save_reservation') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Reserver Name</label>
                                <select class="form-control" name="name" required>
                                    <option>-- Reserver Name --</option>
                                    @foreach ($reservers as $reserver)
                                        <option value="{{ $reserver->id }}">{{ $reserver->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Reserver Email</label>
                                <input type="email" class="form-control" name="email"
                                    placeholder="The best place to spend your time with your bestie">
                            </div>

                            <div class="form-group">
                                <label>Reserver Phone</label>
                                <input type="phone" class="form-control" name="phone"
                                    placeholder="The best place to spend your time with your bestie">
                            </div>

                            <div class="form-group">
                                <label>Reserver Name</label>
                                <input type="text" class="form-control" name="guest"
                                    placeholder="The best place to spend your time with your bestie">
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Room Name</label>
                                <select class="form-control" name="room" required>
                                    <option>-- Room Name --</option>
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Room Amount</label>
                                <input type="number" class="form-control" name="amount" placeholder="0">
                            </div>

                            <div class="form-group">
                                <label>Check In Date</label>
                                <input type="datetime-local" class="form-control" name="checkin">
                            </div>

                            <div class="form-group">
                                <label>Check Out Date</label>
                                <input type="datetime-local" class="form-control" name="checkout">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Notes</label>
                        <input type="text" class="form-control" name="notes"
                            placeholder="The best place to spend your time with your bestie">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
