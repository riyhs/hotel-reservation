@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-2 col-lg-2">
            </div>
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header" style="width: 100%;">
                        <h4>Edit Room Facility</h4>
                    </div>
                    <div class="card-body">
                        <form id="room_facility_form" method="POST"
                            action="{{ url('/room_facility/edit/' . $roomFacility->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" value="{{ $roomFacility->id }}" name="id" />

                        </form>

                        <div class="form-group">
                            <label>Facility Name</label>
                            <input type="text" form="room_facility_form" class="form-control" name="name"
                                placeholder="Facility Name" value="{{ $roomFacility->name }}">
                        </div>

                        <div class="text-right">
                            <button type="submit" form="room_facility_form" class="btn btn-success">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2">
            </div>
        </div>

    </section>
@endsection
