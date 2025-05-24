@extends('layouts.app')

@section('content')
<a href="{{ route('student-registrations.create') }}" class="btn btn-primary mb-3">Add Student</a>

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

<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Reg No</th>
        <th>Name</th>
        <th>NIC</th>
        <th>Image</th>
        <th>Department ID</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->reg_no }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->nic }}</td>
            <td><img src="{{ asset('storage/' . $student->stu_image) }}" width="50"></td>
            <td>{{ $student->dep_id }}</td>
            <td>
                <a href="{{ route('student-registrations.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('student-registrations.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('student-registrations.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
