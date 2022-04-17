@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4 class="mr-4">Reservation</h4>

                <form id="dateFilter" action="">
                    <div class="input-group" method="GET" action="{{ route('reservation') }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-calendar"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control daterange-cus" name="daterange"
                            value="04/10/2022 - 04/15/2022"
                            style="border-top-left-radius: 0;
                                                                                                                                                                                                                                                                            border-bottom-left-radius: 0;
                                                                                                                                                                                                                                                                            height:42px;border-radius: 0.25rem" />
                    </div>

                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                                        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
                    <script>
                        $(function() {
                            $('input[name="daterange"]').daterangepicker({
                                opens: 'left'
                            }, function(start, end, label) {
                                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                                    .format('YYYY-MM-DD'));
                            });
                        });
                    </script>
                </form>

                <button type="submit" form="dateFilter" class="btn btn-primary ml-2" style="height: 42px;">Filter</button>

                {{-- <a href="{{ 'reservation/create' }}" class="btn btn-primary ml-auto">New Reservation</a> --}}
                <form id="search" method="GET" action="{{ route('reservation') }}" class="ml-auto"
                    style="max-width: 300px;">
                    {{-- @csrf --}}
                    @if (request()->has('query'))
                        <input type=" text" class="form-control" placeholder="Search By Name"
                            style="border-radius: 4px; height: 42px;" name="query"
                            value="{{ request()->query('query') }}">
                    @else
                        <input type=" text" class="form-control" placeholder="Search By Name"
                            style="border-radius: 4px; height: 42px;" name="query" value="">
                    @endif
                </form>

                <button form="search" type="submit" class="btn btn-primary ml-2" style="height: 42px;">Search</button>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Guest</th>
                                <th>Status</th>
                                <th>Phone</th>
                                <th>Room</th>
                                <th>Room Name</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                {{-- <th>Notes</th> --}}
                                <th class="text-center">Action</th>
                            </tr>
                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->id }}</td>
                                    <td>{{ $reservation->guest }}</td>
                                    <td><span class="badge badge-warning">Proccess</span></td>
                                    <td>{{ $reservation->phone }}</td>
                                    @if ($reservation->room_amount > 1)
                                        <td>{{ $reservation->room_amount }} Rooms</td>
                                    @else
                                        <td>{{ $reservation->room_amount }} Room</td>
                                    @endif
                                    <td>{{ $reservation->room->name }}</td>
                                    <td>{{ $reservation->check_in }}</td>
                                    <td>{{ $reservation->check_out }}</td>
                                    {{-- <td>{{ $reservation->notes }}</td> --}}
                                    <td class="text-center">
                                        <div class="dropdown dropleft" style=" display: inline-block;">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Status
                                            </button>
                                            <div class="dropdown-menu shadow p-2" aria-labelledby="dropdownMenu2">
                                                <form
                                                    action="{{ route('update_reservation', ['id' => $reservation->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" value="check in">
                                                    <button type="submit" class="btn btn-success" style="width: 100%">Check
                                                        In</button>
                                                </form>
                                                <form
                                                    action="{{ route('delete_reservation', ['id' => $reservation->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" value="process">
                                                    <button type="submit" class="btn btn-warning mt-2"
                                                        style="width: 100%">Proccess</button>
                                                </form>
                                                <form
                                                    action="{{ route('delete_reservation', ['id' => $reservation->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" value="cancel">
                                                    <button type="submit" class="btn btn-danger mt-2"
                                                        style="width: 100%">Cancel</button>
                                                </form>

                                            </div>
                                        </div>

                                        <a href="{{ route('edit_reservation', ['id' => $reservation->id]) }}"
                                            class="btn btn-info">
                                            Open
                                        </a>

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
