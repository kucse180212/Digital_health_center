<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digital health Center</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image:url('data:image/jpeg;base64,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');
                background-size: cover;
                background-repeat: no-repeat;
                 height: 100%;
                font-family: 'Numans', sans-serif;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight: bold;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: white;
            }
            .emon{


                text-align: center;
                background: black;
                font-weight: bold;
                border-top: 20cm;
                height: 200%;

                align-content: center;


                width: 400px;
                margin-left: 550px;


            }
            .lmon{
                text-align: center;
                background: pink;
                font-weight: bold;
                border-top: 2cm;
                height: 20%;

                align: center;
                margin-left: 550px;

                margin-top: auto;
                margin-bottom: auto;
                width: 400px;






            }


              </style>
    </head>
    <body>

            <div class="content">

                <div class="title m-b-md">
                    Welcome to Digital health center
                </div>
                <div class ="emon">
                    <a href="{{ url('/login') }}">Log in</a>
               </div>

               <div class ="lmon">
                <a href="{{ url('/signup') }}">Sign Up</a>
               </div>

            </div>


        </div>
    </body>
</html>
