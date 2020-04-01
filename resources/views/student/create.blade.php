@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create Student</h5>
                <a href="{{ route('student.index')}}" class="btn btn-primary">Back to All Student</a>
              </div>

                <div class="card-body">

                    <div class="row">
                      <div class="col-6 offset-3">
                         @if(Session::has('success'))
                         <div class="alert alert-success">
                           {{ Session::get('success')}}
                         </div>
                         @endif
                        <form action="{{ route('student.store')}}" method="post">
                          @csrf
                          <div class="form-group">
                            <label for="">Student Name</label>
                            <input type="text" name="name" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="">Student Email</label>
                            <input type="email" name="email" class="form-control">
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
