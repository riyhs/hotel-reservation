@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header" style="width: 100%;">
                        <h4>Create a Hotel Facility</h4>
                    </div>
                    <div class="card-body">
                        <form id="hotel_facility_form" method="POST" action="{{ route('save_hotel_facility') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="image" value={{ session('image') }}>

                            <div class="form-group">
                                <label>Hotel Facility Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Hotel Facility Name"
                                    maxlength="255" required>
                            </div>

                            <div class="form-group">
                                <label>Hotel Facility Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Description"
                                    required>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header" style="width: 100%;">
                        <h4>Add New Image</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Upload new image</label>
                            <input type="file" class="form-control" name="image" form="hotel_facility_form">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
