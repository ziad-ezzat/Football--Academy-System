@extends('layout')
<title>students</title>
@section('contient')
    <div class="container col-6">
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th> 
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>   
                </tr>
                @foreach ($stu as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <th>{{ $item->name }}</th>
                        <th>{{ $item->city }}</th>
                        <th>{{ $item->phone }}</th>
                        <th>{{ $item->email }}</th>
                        <th><a class="btn btn-info" href="{{route('student.edit' , $item->id)}}">Edit</a></th>
                        <th><a class="btn btn-danger" href="{{route('student.destroy' , $item->id)}}">Remove</a></th>
                        <th><a class="btn btn-success" href="{{route('student.show' , $item->id)}}">Show</a></th>
                    </tr>
                @endforeach    
            </table>       
        </div>        
    </div>
@endsection