<!DOCTYPE html>
<html lang="en">
    @extends('layouts.app')

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href={{asset("resume/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href={{asset("resume/vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href={{asset("resume/css/resume.min.css")}} rel="stylesheet">
  <style>

.bodydesin
{
    background-image: url("https://cdn.pixabay.com/photo/2017/03/10/14/04/background-2132910_1280.jpg");
}

.abc
{
    text-align: justify;
    font-family: sans-serif;
    font-size: 1.5em;
    font-weight: 800;
    color:rgba(148, 248, 5);
}

    </style>


</head>
<body class="bodydesin">
    <header>
        <nav class="navbar navbar-expand-sm bg-muted navbar-dark">
    <!-- Brand -->


    <ul class="navbar-nav ml-auto">
            <li class="nav-item">
           <a class="nav-link"  href="{{route ( 'returnpage' , [$user->email])}}"> {{$user->name}}</a>
            </li>
            <li class="navbar-nav ml -center">
                <a href="/Digital_health_center"><button class="mahbub">Log Out</button></a>
            </li>

        </ul>
    </nav>
</header>

<div class="container">

    <form method='GET' action="{{route ( 'updatepost' , [$post->id] )}}" >
        @csrf
        <h3 class='abc'> Edit the  post...</h3>
        <div class="form-group">
            <div class="col-sm-9">
                <input type="string" name="current" value="{{$post->body}}" class="form-control">
                <button type="submit" class="btn btn-outline-primary btn-block">Edit</button>
            </div>
        </div>




     </form>



</body>
