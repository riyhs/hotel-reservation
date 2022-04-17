@extends('layouts.main')
@section('content')
    <section class="banner_area" style="min-height: 100vh; padding-top: 80px">
        <div class="container" style="padding-top: 32px">
            <h2 class="title_w mb-4 mt-4">Booking History</h2>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Guest Name</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Room Amount</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <th scope="row">{{ $reservation->id }}</th>
                            <td>{{ $reservation->guest }}</td>
                            <td>{{ $reservation->check_in }}</td>
                            <td>{{ $reservation->check_out }}</td>
                            <td>{{ $reservation->room_amount }}</td>
                            <td>{{ $reservation->room->name }}</td>
                            <td>
                                <a href="{{ route('print_ticket', [$reservation->id]) }}"
                                    class="genric-btn info circle small">Reservation Ticket
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection()
