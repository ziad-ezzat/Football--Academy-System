@extends('layout')
<title>Home</title>
<style>
    body, html {
      height: 100%;
      margin: 0;
      width: 100%;
    }
    
    .bg {
      /* The image used */
      background-image: url("img_girl.jpg");
    
      /* Full height */
      height: 100%; 
      width: 100%;
    
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
@section('contient')

    <div >
        <img src="https://gradeup.com.br/wp-content/uploads/2015/11/academy_campo.jpg" class="bg">
    </div>

@endsection