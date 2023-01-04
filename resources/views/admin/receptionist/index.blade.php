@extends('admin.layouts.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header" style="width: 100%;">
                <h4>Receptionist</h4>
                <a href="{{ 'receptionist/create' }}" class="btn btn-primary ml-auto">New Receptionist</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>E-Mail</th>
                                <th class="text-center">Action</th>
                            </tr>

                            @foreach ($receptionists as $receptionist)
                                <tr>
                                    <td>{{ $receptionist->id }}</td>
                                    <td>{{ $receptionist->name }}</td>
                                    <td>{{ $receptionist->email }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('edit_receptionist', $receptionist->id) }}"
                                            class="btn btn-info">Edit</a>

                                        <form action="{{ route('delete_receptionist', ['id' => $receptionist->id]) }}"
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
