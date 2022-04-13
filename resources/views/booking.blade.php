@extends('layouts.main')
@section('content')
    <section class="banner_area" style="min-height: 100vh; padding-top: 80px">
        <div class="container" style="padding-top: 32px">
            <h2 class="title_w mb-4 mt-4">Booking History</h2>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <th scope="row">{{ $reservation->id }}</th>
                            <td>{{ $reservation->reserver->name }}</td>
                            <td>{{ $reservation->room->name }}</td>
                            <td>{{ $reservation->guest }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection()
