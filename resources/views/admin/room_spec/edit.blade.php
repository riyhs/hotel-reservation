@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-7">
                <div class="card">
                    <div class="card-header" style="width: 100%;">
                        <h4>Edit Room Spec</h4>
                    </div>
                    <div class="card-body">
                        <form id="room_spec_form" method="POST" action="{{ url('/room_spec/edit/' . $roomSpec->id) }}">
                            @csrf
                            @method('PUT')
                        </form>

                        <form id="facility_form" method="POST" action="{{ route('save_room_facility') }}">
                            @csrf
                        </form>

                        <div class="form-group">
                            <label>Spec Name</label>
                            <input type="text" form="room_spec_form" class="form-control" name="name"
                                placeholder="Deluxe Prime" value="{{ $roomSpec->name }}">
                        </div>

                        <div class="form-group">
                            <label>Spec Description</label>
                            <input type="text" form="room_spec_form" class="form-control" name="description"
                                placeholder="The best place to spend your time with your bestie"
                                value="{{ $roomSpec->description }}">
                        </div>

                        <div class="text-right">
                            <button type="submit" form="room_spec_form" class="btn btn-success">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Room Spec Facility</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group" style="max-width: 400px; !important">
                            <label>Add Facility</label>
                            <div class="input-group mb-3">
                                <input type="hidden" form="facility_form" name="roomSpec" value="{{ $roomSpec->id }}">
                                <input type="text" form="facility_form" class="form-control" name="name">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" form="facility_form">Add</button>
                                </div>
                            </div>

                            <ul class="list-group">
                                @foreach ($facilities as $facility)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $facility->name }}

                                        <div>
                                            <a href="{{ route('edit_room_facility', $facility->id) }}"
                                                class="btn btn-info mr-2">Edit</a>

                                            <form action="{{ route('delete_room_facility', ['id' => $facility->id]) }}"
                                                method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
