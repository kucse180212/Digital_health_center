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


  <style>
    body {
 background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;
background-size: cover;
}

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


</style>

</head>

<body id="page-top">

    <a href="/Digital_health_center"><button>Log Out</button></a>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Clarence Taylor</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src={{asset("resume/img/profile.jpg")}} alt="">
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
          <a class="nav-link js-scroll-trigger" href="#experience">Search_student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Insert_student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Update_student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Delete_student</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">{{$user->name}}
        </h1>
        <div class="subheading mb-5">
            Contact Number:{{$user->phone_number}}
            <br>
            Email:
          <a href="mailto:{{$user->email}}">{{$user->email}}</a>

        </div>

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Search_student</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">

            <form method='post' action="/Student"  >

                    <input type="text" name="email" class="form-control" placeholder="Email_id">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
            </form>


          </div>
        </div>
      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Insert_student</h2>






      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Update_student</h2>
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
        <h2 class="mb-5">Delete_student</h2>

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
