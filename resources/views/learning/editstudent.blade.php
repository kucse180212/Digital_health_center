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


*[role="form"] {
max-width: 530px;
padding: 15px;
margin: 0 auto;
border-radius: 0.3em;
background-color: #f2f2f2;
}

*[role="form"] h2 {
font-family: 'Open Sans' , sans-serif;
font-size: 40px;
font-weight: 600;
color: #000000;
margin-top: 5%;
text-align: center;
text-transform: uppercase;
letter-spacing: 4px;
}
.mahbub
{
    margin:right;
}


</style>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Quick Response</a>

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
    <div class='container'>
            <form method='POST' action="/abc" >
                @csrf
                <h2>Update the Student Info </h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                    <input type="text" name="firstName" value="{{$student->first_name}}" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="lastName" id="lastName" value="{{$student->last_name}}" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" name="email"id="email" value="{{$student->email}}" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Phone number</label>
                    <div class="col-sm-9">
                        <input type="string" name="phone_NUMBER" id="password" value="{{$student->phone_number}}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Height</label>
                    <div class="col-sm-9">
                        <input type="double" name="height"id="password" value="{{$student->height}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Weight</label>
                    <div class="col-sm-9">
                        <input type="double" name="weight"id="password" value="{{$student->weight}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">health_history</label>
                    <div class="col-sm-9">
                        <input type="string" name="he_his" value="{{$student->health_history}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="string" class="col-sm-3 control-label">current_health</label>
                    <div class="col-sm-9">
                        <input type="string" name="current" value="{{$student->current_health}}" class="form-control">
                    </div>
                </div>
                <label for="password" class="col-sm-3 control-label">picture</label>
                <div class="col-sm-9">
                    <input type="string" name="pic" value="{{}}" class="form-control">
                </div>
            </div>

                <button type="submit" class="btn btn-primary btn-block">Insert</button>
            </form>


    </div>


</body>

</html>
