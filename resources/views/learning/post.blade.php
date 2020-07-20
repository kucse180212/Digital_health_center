<!DOCTYPE html>
<html lang="en">
    @extends('layouts.app')

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Post Page</title>


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
.border
{
    text-align: justify;
    border-style: solid;
    border-color: red;
    align-content: center;

}
.realpost
{
    text-align: justify;
    align-content: center;
    background-image: url("");
}
.comment
{
       text-align: justify;
       border-style: solid;
      border-color: darkblue;
       align-content: center;
}


</style>


</head>
<body class="bodydesin">


<header>
        <nav class="navbar navbar-expand-sm bg-muted navbar-dark">
    <!-- Brand -->

    <ul class="navbar-nav ml-auto">
            <li class="nav-item">
           <a class="nav-link"  href="{{route ( 'returnpage' , [$user->email])}}"> {{$profile}}</a>
            </li>
            <li class="navbar-nav ml -center">
                <a href="/Digital_health_center"><button class="mahbub">Log Out</button></a>
            </li>

        </ul>
    </nav>
</header>
<div class="container p-3 my-3  text-success">
    <div class="col-md-10 col-md-offset-4">
        <h3 class='abc'> What other posts...</h3>
        @foreach ($post as $users)
        <div class="jumbotron text-center" >
            <div class="realpost">
            <h4>{{ $users->userid ?? '' }}<small><i> Posted on {{ $users->created_at ?? '' }}</i></small></h4>
        <p>
            {{$users->body ?? ''}}
        </p>
         <div class="border">
        @if($user->email==$users->userid)
           <a href="{{route ( 'deletepost' , [$users->id ?? ''])}}">
            <button type="button" class="btn btn-danger">DELETE</button>
           </a>
           <a href="{{route ( 'editpost' , [$users->id ?? ''])}}">
            <button type="button" class="btn btn-warning">Edit</button>
           </a>
           <br>
           <br>
         @endif
         </div>
         <p>Comment of the posts:</p>
         <br>
         <form action= "{{route ( 'createcomment' ,[$users->id ?? '',$user->email])}}" method="GET"> 
            <input type="hidden" name="{{$users->id ?? ''}}" value="{{$users->id ?? ''}}"/>
            {{csrf_field()}}
            <div class="form-group">
            <textarea class="form-control" name="newpost" rows="3" placeholder="Feel Free to share"></textarea>
            <button type="submit" class="btn btn-outline-primary">Comment</button>
      </form>
      <div class="comment">
      @foreach($users->comments as $comment)
      <div class="text-center" >
        <span class="border">
        <p>comment done by:{{$comment->email}}</p>
        <p>comment:{{$comment->body}}</p>
    </span>
      </div>
        @endforeach
      </div>
     </div>
        @endforeach
    </div>
         </div>
        {{ $post->appends(Request::all())->links()}}
</div>
</body>
</html>
