<html>
    <head>

        <title>Student_Information</title>
        <style>


         </style>


    </head>
    <body>
        <h1>{{$user->first_name}}   </h1>
        <h1>  {{$user->last_name}}</h1>
        <br>
        <h1>Email:{{$user->email}}</h1>
        <br>
        <h1>phone:{{$user->phone_number}}</h1>
        <br>
        <h4> Height: {{$user->height}} foot</h4>
        <br>
        <h4>Weight: {{$user->weight}} kg </h4>
        <br>
        <h1>Health History :</h1>
        <br>
        <h4> {{$user->health_history}} <h4>
        <br>
         <h1>Current History :</h1>
         <br>
         <h4>{{$user->current_health}}</h4>






    </body>


</html>
