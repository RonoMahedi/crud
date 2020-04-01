@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          @if(Session::has('success'))
          <div class="alert alert-success">
            {{ Session::get('success')}}
          </div>
          @endif
            <div class="card">
                <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">All Student</h5>
                  <a href="{{ route('student.create')}}" class="btn btn-primary">Create Student</a>
                </div>

                <div class="card-body">
                    <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                      </tr>
                    </thead>
                      <tbody>
                        @foreach($student as $student)
                        <tr>
                          <td>{{$student->id}}</td>
                          <td>{{$student->name}}</td>
                          <td>{{$student->email}}</td>
                          <td>
                            <a href="{{ route('student.edit',['id' => $student->id])}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('student.destroy',['id' => $student->id])}}" class="btn btn-danger btn-sm">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
