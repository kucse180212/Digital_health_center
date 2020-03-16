<!DOCTYPE html>
<html>
<head>
	<title>Sign UP Page</title>
   <!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">

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
<body>


<div class="container">
            <form method='POST' action="/abc" >
                @csrf
                <h2>Registration</h2>
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
                        <input type="string" name="he_his" placeholder="health_history" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="string" class="col-sm-3 control-label">current_health</label>
                    <div class="col-sm-9">
                        <input type="string" name="current" placeholder="current_health" class="form-control">
                    </div>
                </div>
                <label for="password" class="col-sm-3 control-label">picture</label>
                <div class="col-sm-9">
                    <input type="string" name="pic" placeholder="picture" class="form-control">
                </div>
            </div>


             <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Insert</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->
