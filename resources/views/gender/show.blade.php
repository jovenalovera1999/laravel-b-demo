<!-- Main HTML -->
@extends('layout.main')

<!-- HTML content -->
@section('content')

<div class="card mt-3 col-sm-6 mx-auto">
    <div class="card-body">
        <h5 class="card-title">Add Gender</h5>
        <form action="#" method="post">
            @csrf
            <div class="mb-3">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" name="gender" id="gender" value="{{ $gender->gender }}" readonly />
                @error('gender') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <a href="/genders" class="btn btn-secondary col-sm-3 float-end">Back</a>
        </form>
    </div>
</div>

@endsection