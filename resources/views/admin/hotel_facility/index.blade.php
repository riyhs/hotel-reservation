@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4>Hotel Facility</h4>
                <a href="{{ 'hotel_facility/create' }}" class="btn btn-primary ml-auto">New Hotel Facility</a>
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

                            @foreach ($hotelFacilities as $hotelFacility)
                                <tr>
                                    <td>{{ $hotelFacility->id }}</td>
                                    <td>{{ $hotelFacility->name }}</td>
                                    <td>{{ $hotelFacility->description }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('edit_hotel_facility', ['id' => $hotelFacility->id]) }}"
                                            class="btn btn-info">
                                            Edit
                                        </a>

                                        <form action="{{ route('delete_hotel_facility', ['id' => $hotelFacility->id]) }}"
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
