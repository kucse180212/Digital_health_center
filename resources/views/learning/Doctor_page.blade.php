<!DOCTYPE html>
<html lang="en">

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

</head>

<body id="page-top">
    

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Clarence Taylor</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src={{url{{https://upload.wikimedia.org/wikipedia/en/d/d4/Mickey_Mouse.png}})}} alt="">
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
          <a class="nav-link js-scroll-trigger" href="#experience">Health_History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Current_Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Communication</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Reply</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">{{$user->first_name}}
        <span class="text-primary">{{$user->last_name}}</span>
        </h1>
        <div class="subheading mb-5">
            Contact Number:{{$user->phone_number}}
            <br>
            Email:
          <a href="mailto:{{$user->last_name}}">{{$user->email}}</a>
          <br>
         <h4> Height: {{$user->height}} foot</h4>
         <h4>Weight: {{$user->weight}} kg </h4>

        </div>

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Health_History</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h4> {{$user->health_history}} <h4>
          </div>
        </div>
      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Current_Status</h2>

       <h4>{{$user->current_health}}

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Communication</h2>
       <form method="Post" action="/">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Problem Statement</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <input type="submit" value="Login" class="btn float-right login_btn">
        </div>

       </form>
      </div>
    </section>





    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">REPLY FROM DOCTOR</h2>

        {{-- //DOCTOR REPLY
        {{$user->REPLY}}


        /// --}}
      </div>
    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src={{asset("resume/vendor/jquery/jquery.min.js")}}></script>
  <script src={{asset("resume/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

  <!-- Plugin JavaScript -->
  <script src={{asset("resume/vendor/jquery-easing/jquery.easing.min.js")}}></script>

  <!-- Custom scripts for this template -->
  <script src={{asset("resume/js/resume.min.js")}}></script>

</body>

</html>
