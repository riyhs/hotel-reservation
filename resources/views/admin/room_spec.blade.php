@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4>Room Spec</h4>
                <a href="{{ 'room_spec/create' }}" class="btn btn-primary ml-auto">New Room Spec</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th style="width: 50%;">Description</th>
                                <th class="text-center">Action</th>
                            </tr>

                            @foreach ($roomSpecs as $roomSpec)
                                <tr>
                                    <td>{{ $roomSpec->id }}</td>
                                    <td>{{ $roomSpec->name }}</td>
                                    <td>{{ $roomSpec->description }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('edit_room_spec', ['id' => $roomSpec->id]) }}"
                                            class="btn btn-info">
                                            Edit
                                        </a>

                                        <form action="{{ route('delete_room_spec', ['id' => $roomSpec->id]) }}"
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
