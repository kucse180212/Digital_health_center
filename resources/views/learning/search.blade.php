<html>
<head>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 15px;
  font-size: 16px;
  cursor: pointer;
}


.btn:hover {
  background-color: RoyalBlue;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 2px solid #00B4CC;
  padding: 5px;
  height: 40px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 70px;
  height: 35px;
  border: 1px solid #00B4CC;
  background: lightgreen;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}


.wrap{
  width: 20%;
  position: absolute;
  top: 28%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.wrap2{
  width: 20%;
  position: absolute;
  top: 38%;
  left: 50%;
  transform: translate(-50%, -50%);
}

    .content {
                text-align: center;
            }

</style>

</head>
<body bgcolor="green">
<div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="Enter Student Name " required="">

   </div>
</div>
<div class="wrap2">
   <div class="search">
      <input type="int" class="searchTerm" placeholder="ID Number" required="">

   </div>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   <form action="/loader">

<button class="btn" type="submit"><i class="fa fa-search"></i> search</button>

         </form>


</div>
</body>
</html>
