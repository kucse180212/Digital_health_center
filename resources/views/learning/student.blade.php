<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student's main page</title>

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
.efg
{
    color: rgba(229, 232, 15);
}

  </style>

</head>

<body class="page-top">

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
          <a class="nav-link js-scroll-trigger" href="#experience">Health_History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Current_Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Communication</a>
        </li>
         <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#hospital">Find_Hospital</a>
        </li>
      </ul>
    </div>
  </nav>


  <nav class="navbar navbar-expand-sm bg-mute navbar-dark">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
  <a href="/Digital_health_center">Log Out</a>
        </li>
    </ul>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="abc">{{$user->first_name}} {{$user->last_name}}</span>
        </h1>
        <div class="subheading mb-5">
            Contact Number:{{$user->phone_number}}
            <br>
            Email:
          <a class="efg" href="mailto:{{$user->email}}">{{$user->email}}</a>
          <br>
         <h4 class="efg"> Height: {{$user->height}} foot</h4>
         <h4 class="efg">Weight: {{$user->weight}} kg </h4>

        </div>

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="abc">Health_History</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h4 class="efg"> {{$user->health_history}} <h4>
          </div>
        </div>
      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="abc">Current_Status</h2>

       <h4 class="efg">{{$user->current_health}}</h4>

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
                      {{csrf_field()}}
                      <div class="form-group">
                      <textarea class="form-control" name="newpost" rows="5" placeholder="Feel Free to share"></textarea>
                      <button type="submit" class="btn btn-outline-dark">Create Post</button>
                  </div>
                </form>
              </div>
           </section>
        </div>
      </section>

    </div>
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
