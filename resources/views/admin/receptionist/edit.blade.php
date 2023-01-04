@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-2 col-lg-2">
            </div>
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header" style="width: 100%;">
                        <h4>Create Receptionist</h4>
                    </div>
                    <div class="card-body">
                        <form id="room_facility_form" method="POST"
                            action="{{ route('update_receptionist', $receptionist->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Receptionist Name"
                                    required value="{{ $receptionist->name }}">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Receptionist Email"
                                    required value="{{ $receptionist->email }}">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Receptionist Password">
                                <label class="text-danger">Don't fill if you don't want to change your password</label>
                            </div>

                            <div class="text-right">
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
