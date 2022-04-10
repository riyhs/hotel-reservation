@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4>Create a New Room Spec</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('/room_spec/edit/' . $roomSpec->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Spec Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Deluxe Prime"
                            value="{{ $roomSpec->name }}">
                    </div>

                    <div class="form-group">
                        <label>Spec Description</label>
                        <input type="text" class="form-control" name="description"
                            placeholder="The best place to spend your time with your bestie"
                            value="{{ $roomSpec->description }}">
                    </div>

                    <div class="text-right">
                        <button type="submit" href="{{ url('/room_spec/edit/') . $roomSpec->id }}" class="btn btn-success">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
