@extends('layouts.app')


@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Something errors:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
                    <div class="col-sm-12">
                        <div class="card comman-shadow">
<div class="card-body"> 
    
<form method="POST" action="{{ route('student-registrations.store') }}" enctype="multipart/form-data">
    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title student-info">Student Information <span><a
                                                        href="javascript:;"><i
                                                            class="feather-more-vertical"></i></a></span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Registration Number <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="reg_no" placeholder="JF/ICT/22/02">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Full Name <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="name" placeholder="Abdul Haleem">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>NIC <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="nic" placeholder="200220500013 / 902348383V">
                                            </div>
                                        </div>
                                       
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Department ID <span class="login-danger">*</span></label> 
                                                <input class="form-control" name="dep_id" type="text"
                                                    placeholder="02">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group students-up-files">
                                                <label>Upload Student Photo (150px X 150px)</label>
                                                <div class="uplod">
                                                    <label class="file-upload image-upbtn mb-0">
                                                        Choose File <input type="file" name="stu_image">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="student-submit">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
    
{{-- <form method="POST" action="{{ route('student-registrations.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <!-- Input fields for reg_no, name, nic, stu_image, dep_id -->
    
    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label>Registration Number</label>
            <input type="text" name="reg_no" class="form-control"
            placeholder="JF/ICT/22/02" required>
        </div>
    </div>

    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required
            placeholder="Raheem Abdul Haleem" required>
        </div>
    </div>

    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label>NIC</label>
            <input type="text" name="nic" class="form-control" required
            placeholder="200220500013 / 902348383V">
        <div>
    </div>

    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label>Image</label>
            <input type="file" name="stu_image" class="form-control" required
            placeholder="select from your browser">
        </div>
    </div>

    <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
            <label>Department ID</label>
            <input type="number" name="dep_id" class="form-control" required
            placeholder="Dep_01">
        </div>
    </div>
      
    <div class="col-12">
        <div class="student-submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
  </div>
</form> --}}
  </div>
  </div>
  </div>
  </div>
@endsection

