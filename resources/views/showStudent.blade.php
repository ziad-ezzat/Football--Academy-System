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
    <h1 class="text-info text-center">Show Student {{$stu->name}}</h1>
    <div class="card">
        @if ($stu->image == null)
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png">
        @else
            <img src="{{ asset("upload/$stu->image") }}" class="img-top" alt="">
        @endif
        <div class="card-body">
            To connect :-
            phone : {{$stu->phone}}
            <br>
            email : {{$stu->email}}
        </div> 
    </div>       
</div>

@endsection