@extends('layouts.app')


@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>உங்கள் படிவத்தில் பிழைகள் உள்ளன:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('student-registrations.store') }}" enctype="multipart/form-data">
    @csrf
    <!-- Input fields for reg_no, name, nic, stu_image, dep_id -->
    <div class="mb-3"><label>Registration Number</label><input type="text" name="reg_no" class="form-control" required></div>
    <div class="mb-3"><label>Name</label><input type="text" name="name" class="form-control" required></div>
    <div class="mb-3"><label>NIC</label><input type="text" name="nic" class="form-control" required></div>
    <div class="mb-3"><label>Image</label><input type="file" name="stu_image" class="form-control" required></div>
    <div class="mb-3"><label>Department ID</label><input type="number" name="dep_id" class="form-control" required></div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection

