@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4>Create a New Room Spec</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('save_room_spec') }}">
                    @csrf
                    <div class="form-group">
                        <label>Spec Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Deluxe Prime">
                    </div>

                    <div class="form-group">
                        <label>Spec Description</label>
                        <input type="text" class="form-control" name="description"
                            placeholder="The best place to spend your time with your bestie">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
