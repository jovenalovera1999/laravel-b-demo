@extends('layout.main')

@section('content')

@include('include.sidebar')

<div class="card mt-3 col-sm-6 mx-auto">
    <div class="card-body">
        <h5 class="card-title">Add Gender</h5>
        <form action="/gender/store" method="post">
            @csrf
            <div class="mb-3">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" name="gender" id="gender" />
                @error('gender') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <button type="submit" class="btn btn-success col-sm-3 float-end">Save Gender</button>
        </form>
    </div>
</div>

@endsection