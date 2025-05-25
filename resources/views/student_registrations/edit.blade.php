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

<form method="POST" action="{{ route('student-registrations.update', $studentRegistration->id) }}" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="mb-3"><label>Registration Number</label><input type="text" name="reg_no" class="form-control" value="{{ $studentRegistration->reg_no }}" required></div>
    <div class="mb-3"><label>Name</label><input type="text" name="name" class="form-control" value="{{ $studentRegistration->name }}" required></div>
    <div class="mb-3"><label>NIC</label><input type="text" name="nic" class="form-control" value="{{ $studentRegistration->nic }}" required></div>
    <div class="mb-3"><label>Image (optional)</label><input type="file" name="stu_image" class="form-control"><img src="{{ asset('storage/' . $studentRegistration->stu_image) }}" width="50"></div>
    <div class="mb-3"><label>Department ID</label><input type="number" name="dep_id" class="form-control" value="{{ $studentRegistration->dep_id }}" required></div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
