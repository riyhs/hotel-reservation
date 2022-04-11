@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4>Reservation</h4>
                <a href="{{ 'reservation/create' }}" class="btn btn-primary ml-auto">New Reservation</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Reserver</th>
                                <th>Guest</th>
                                <th>E-Mail</th>
                                <th>Phone</th>
                                <th>Room Booked</th>
                                <th>Room Name</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Notes</th>
                                <th class="text-center">Action</th>
                            </tr>

                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->id }}</td>
                                    <td>{{ $reservation->guest }}</td>
                                    <td>{{ $reservation->guest }}</td>
                                    <td>{{ $reservation->guest }}</td>
                                    <td>{{ $reservation->guest }}</td>
                                    <td>{{ $reservation->guest }}</td>
                                    <td>{{ $reservation->guest }}</td>
                                    <td>{{ $reservation->guest }}</td>
                                    <td>{{ $reservation->guest }}</td>
                                    <td>{{ $reservation->guest }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('edit_reservation', ['id' => $reservation->id]) }}"
                                            class="btn btn-info">
                                            Edit
                                        </a>

                                        <form action="{{ route('delete_reservation', ['id' => $reservation->id]) }}"
                                            method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
