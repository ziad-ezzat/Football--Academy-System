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
    <h1 class="text-info text-center">Add Student</h1>
    <div class="card">
        <div class="card-body">
            <form action="/students/create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" name="stuname" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="stucity" class="form-control" placeholder="Your City">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="stuphone" class="form-control" placeholder="Your Phone">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="stuemail" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <label>Student Image</label>
                    <input type="file" name="stuimage" class="form-control">
                </div>
                <button class="btn btn-info">Send Data</button>
            </form>
        </div> 
    </div>       
</div>

@endsection