<!-- Main HTML -->
@extends('layout.main')

@section('content')

<!-- Tab title -->
<title>List of Users | Demo App</title>

<!-- Sidebar --->
@include('include.sidebar')

<!-- Card -->
<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">List of Genders</h5>
        <!-- Responsive and hover table -->
        <div class="table-responsive">
            @include('include.messages')
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Gender</th>
                        <th>Date Created</th>
                        <th>Date Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($genders as $gender)
                        <tr>
                            <td>{{ $gender->gender }}</td>
                            <td>{{ $gender->created_at }}</td>
                            <td>{{ $gender->updated_at }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="/gender/show/{{ $gender->gender_id }}" class="btn btn-outline-primary">View</a>
                                    <a href="/gender/edit/{{ $gender->gender_id }}" class="btn btn-outline-warning">Edit</a>
                                    <a href="/gender/delete/{{ $gender->gender_id }}" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection