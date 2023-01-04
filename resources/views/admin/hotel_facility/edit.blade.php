@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-2 col-lg-2">

            </div>
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header" style="width: 100%;">
                        <h4>Edit Hotel Facility</h4>
                    </div>
                    <div class="card-body">
                        <form id="hotel_facility_form" method="POST"
                            action="{{ route('edit_hotel_facility', $hotelFacility->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label>Hotel Facility Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Hotel Facility Name"
                                    value="{{ $hotelFacility->name }}" maxlength="255" required>
                            </div>
                            <div class="form-group">
                                <label>Hotel Facility Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Description"
                                    value="{{ $hotelFacility->description }}" required>
                            </div>

                            <div class=" text-right">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2">

            </div>
        </div>

    </section>
@endsection
