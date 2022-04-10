@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4>Create a New Room</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('save_room') }}">
                    @csrf
                    <div class="form-group">
                        <label>Room Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Room asoy">
                    </div>

                    <div class="form-group">
                        <label>Room Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Price">
                    </div>

                    <div class="form-group">
                        <label>Room Amount</label>
                        <input type="number" class="form-control" name="amount" placeholder="How much room available">
                    </div>

                    <div class="form-group">
                        <label>Room Spec</label>
                        <select class="form-control" name="roomSpec">
                            <option>-- Room Spec --</option>
                            @foreach ($roomSpecs as $roomSpec)
                                <option value="{{ $roomSpec->id }}">{{ $roomSpec->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
