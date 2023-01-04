@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4>Room</h4>
                <a href="{{ 'room/create' }}" class="btn btn-primary ml-auto">New Room</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Room Spec</th>
                                <th>Price</th>
                                <th>Amount</th>
                                {{-- <th>Used</th> --}}
                                {{-- <th>Available</th> --}}
                                <th class="text-center">Action</th>
                            </tr>

                            @foreach ($rooms as $room)
                                <tr>
                                    <td>{{ $room->id }}</td>
                                    <td>{{ $room->name }}</td>
                                    <td>{{ $room->roomSpec->name }}</td>
                                    <td>{{ number_format($room->price, 0, ',', '.') }}</td>
                                    <td>{{ $room->amount }}</td>
                                    {{-- <td>{{ $room->used }}</td> --}}
                                    {{-- <td>{{ $room->amount - $room->used }}</td> --}}
                                    <td class="text-center">
                                        <a href="{{ route('edit_room', ['id' => $room->id]) }}" class="btn btn-info">
                                            Edit
                                        </a>

                                        <form action="{{ route('delete_room', ['id' => $room->id]) }}" method="POST"
                                            style="display: inline-block;">
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
