@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header" style="width: 100%;">
                        <h4>Create a New Room</h4>
                    </div>
                    <div class="card-body">
                        <form id="room_form" method="POST" action="{{ route('save_room') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="image" value={{ session('image') }}>

                            <div class="form-group">
                                <label>Room Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Room name" maxlength="255"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Room Price</label>
                                <input type="number" class="form-control" name="price" placeholder="Price" maxlength="9"
                                    required
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            </div>

                            <div class="form-group">
                                <label>Room Amount</label>
                                <input type="number" class="form-control" name="amount"
                                    placeholder="How much room available" maxlength="4" required
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            </div>

                            <div class="form-group">
                                <label>Room Spec</label>
                                <select class="form-control" name="roomSpec" required>
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
            </div>

            <div class="col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header" style="width: 100%;">
                        <h4>Add New Image</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Upload new image</label>
                            <input type="file" class="form-control" name="image" form="room_form">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
