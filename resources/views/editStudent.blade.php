@extends('layout')
<title>Admin</title>
@section('contient')

@if($errors->any())
    <div class="alert alert-danger mx-auto w-50">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container col-6">
    <h1 class="text-info text-center">Edit Student {{$stu->name}}</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('student.update' , $stu->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" value="{{$stu->name}}" name="stuname" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" value="{{$stu->city}}" name="stucity" class="form-control" placeholder="Your City">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" value="{{$stu->phone}}" name="stuphone" class="form-control" placeholder="Your Phone">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" value="{{$stu->email}}" name="stuemail" class="form-control" placeholder="Your Email">
                </div>
                <button class="btn btn-warning">Update Data</button>
            </form>
        </div> 
    </div>       
</div>

@endsection