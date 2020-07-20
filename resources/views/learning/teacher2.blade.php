<!DOCTYPE html>
<html lang="en">
    @extends('layouts.app')

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Teacher's main page</title>

  <!-- Bootstrap core CSS -->
  <link href={{asset("resume/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href={{asset("resume/vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href={{asset("resume/css/resume.min.css")}} rel="stylesheet">


  <style>
.abc
{
    text-align: justify;
    font-family: sans-serif;
    font-size: 1.5em;
    font-weight: 800;
    color:rgba(148, 248, 5);
}

.page-top
{
    background-image:url('https://images.unsplash.com/photo-1488342994276-7c3bc0742042?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');
    background-color: rgba( 9, 255, 24);
    image:cover;
    color:rgba(148, 248, 5);
}
.abc
{
    text-align: justify;
    font-family: sans-serif;
    font-size: 1.5em;
    font-weight: 800;
    color:rgba(148, 248, 5);
}

.right_top
{
    background-color: rgb( 232, 127, 15);
}



</style>

</head>

<body class="page-top">
    <div class="right_top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Clarence Taylor</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('uploads/highlights/'.$user->picture)}}" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Insert_Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Insert_student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Update_student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Communication</a>
        </li>
         <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#hospital">Find_Hospital</a>
        </li>
      </ul>
    </div>
  </nav>
    </div>

  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-sm bg-mute navbar-dark">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
      <a href="/Digital_health_center">Log Out</a>
            </li>
        </ul>
      </nav>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="abc">{{$user->name}}
        </h1>
        <div class="subheading mb-5">
            Contact Number:{{$user->phonenumber}}
            <br>
            Email:
          <a href="mailto:{{$user->email}}">{{$user->email}}</a>

        </div>

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">

            <h2 class="abc">Insert a doctor</h2>


            <form method='POST' action="/DoctorSignedUp" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Name </label>
                    <div class="col-sm-9">
                        <input type="text" id="email" placeholder="Name" class="form-control" name= "name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Phone NUmber* </label>
                    <div class="col-sm-9">
                        <input type="text" id="email" placeholder="PhoneNumber" class="form-control" name= "phone_number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" name="password"id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>

                 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label"> Specialist </label>
                    <div class="col-sm-9">
                        <input type="text" id="email" placeholder="School" class="form-control" name= "specialist">
                    </div>
                </div>
                <div class="col-sm-9">
                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label">choose file</label>
                        <input class="custom-file-input" type="file" id="picture" placeholder="picture"  name= "picture">

                    </div>

                </div>
                </div>


                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-outline-primary btn-block">Insert</button>
                </div>
            </form> <!-- /form -->
          </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="abc">Insert_student</h2>



        <form method='POST' action="/insert" enctype="multipart/form-data" >
            @csrf

            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                    <input type="text" name="firstName" placeholder="First Name" class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" name="email"id="email" placeholder="Email" class="form-control" name= "email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password*</label>
                <div class="col-sm-9">
                    <input type="password" name="password"id="password" placeholder="Password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Phone number</label>
                <div class="col-sm-9">
                    <input type="string" name="phone_NUMBER" id="password" placeholder="Phone number" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Height</label>
                <div class="col-sm-9">
                    <input type="double" name="height"id="password" placeholder="Height" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Weight</label>
                <div class="col-sm-9">
                    <input type="double" name="weight"id="password" placeholder="Weight" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">health_history</label>
                <div class="col-sm-9">

                    <textarea class="form-control" name="he_his" rows="5" placeholder="health_history"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="string" class="col-sm-3 control-label">current_health</label>
                <div class="col-sm-9">

                    <textarea class="form-control" name="current" rows="5" placeholder="Currenthealth"></textarea>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label">choose file</label>
                        <input class="custom-file-input" type="file" id="picture" placeholder="picture"  name= "picture">

                    </div>

                </div>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                    <span class="help-block">*Required fields</span>
                    <button type="submit" class="btn btn-outline-primary btn-block">Insert</button>
                </div>
        </div>


         <!-- /.form-group -->

        </form> <!-- /form -->


      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="abc">Update_student</h2>
       <form action="{{route ( 'searchstudent1' , [$user->email] )}}" method="GET">
        @csrf
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
            <input type="text" name="username" class="form-control" placeholder="Email_id">
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-outline-primary btn-block">SEARCH</button>
            </div>
        </div>

       </form>
      </div>
    </section>





    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="abc">Communication</h2>
          <a href="{{route ( 'post1' , [$user->email])}}">GO_TO_THE_POST_PAGE</a>




          <section class="row new--post">
            <div class=container>
                <header><h3 class="abc">What is in your mind??</h3></header>

                <form action= "{{route ( 'create' , [$user->email] )}}" method="GET">
                    @csrf
                    <div class="form-group">
                    <textarea class="form-control" name="newpost" rows="5" placeholder="Feel Free to share"></textarea>
                    <button type="submit" class="btn btn-outline-dark ">Create Post</button>
                </div>
              </form>
            </div>
         </section>
      </div>
    </section>

  </div>


   <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="hospital">
      <div class="w-100">
        <h2 class="abc">Find Hospital</h2>
          <a href="{{route ( 'map' , [$user->email])}}">Click_Here_to_find_Hospital</a>

      </div>
     </section>


  <!-- Bootstrap core JavaScript -->
  <script src={{asset("resume/vendor/jquery/jquery.min.js")}}></script>
  <script src={{asset("resume/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

  <!-- Plugin JavaScript -->
  <script src={{asset("resume/vendor/jquery-easing/jquery.easing.min.js")}}></script>

  <!-- Custom scripts for this template -->
  <script src={{asset("resume/js/resume.min.js")}}></script>

</body>

</html>
