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

<div class="card">
    <div class="card-header"><h5>{{ $studentRegistration->name }}</h5></div>
    <div class="card-body">
        <p><strong>Reg No:</strong> {{ $studentRegistration->reg_no }}</p>
        <p><strong>NIC:</strong> {{ $studentRegistration->nic }}</p>
        <p><strong>Department ID:</strong> {{ $studentRegistration->dep_id }}</p>
        <img src="{{ asset('storage/' . $studentRegistration->stu_image) }}" width="100">
    </div>
</div>
<a href="{{ route('student-registrations.index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
