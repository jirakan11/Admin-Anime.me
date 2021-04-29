<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Fan anime</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
 
  .container-fluid {
      padding-top: 1px;
      padding-bottom: 1px;
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #ffffff;
      border: 0;
      font-size: 15px !important;
      opacity: 1;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #2f2f2f !important;
  }
  
  .navbar {
      padding-top: 1px;
      padding-bottom:1px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 3px;
      letter-spacing: 1px;
  }
  .navbar-nav  li a:hover {
      color: #00CCFF !important;
  }
	  .carousel-caption {
		  color: #000000;
		  background-color: aliceblue;
		 
	  }  

	  
	  
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" >

<nav class="navbar navbar-default navbar-fixed-top bg-5 ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><font size ="4" >Anime.me</font></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><font size ="2">HOME</font></a></li>
       
        <li><a href="admin.php"><font size ="2" >ADMIN</font></a></li>
        
        

      </ul>
    </div>
  </div>
</nav>
  

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

 <div class="carousel-inner" role="listbox">
      <div class="item active">
       <center> <img src="img/a.jpg"  width="1250" height="600"> </center>
        <div class="carousel-caption">
          <h3>Welcome Admin</h3>
         
        </div>      
      </div>

      <div class="item">
         <center><img src="img/b.jpg" width="1250" height="600"> </center>
        <div class="carousel-caption">
          <h2>รักไร้เสียง</h2>
          <p> ญี่ปุ่น: 聲の形  อังกฤษ : A Silent Voice</p>
        </div>      
      </div>
      <div class="item">
         <center><img src="img/d.jpg"  width="1250" height="600"> </center>
        <div class="carousel-caption">
          <h3>หลับตาฝัน ถึงชื่อเธอ</h3>
          <p> ญี่ปุ่น: 君の名は。  อังกฤษ: Your Name  </p>
        </div>      
      </div>
	  <div class="item">
         <center><img src="img/c.jpg"  width="1250" height="600"> </center>
        <div class="carousel-caption">
          <h3>	แฟรี่เทล ศึกจอมเวทอภินิหาร</h3>
          <p> ญี่ปุ่น :フェアリーテイル  อังกฤษ :Fairy Tail</p>
        </div>      
      </div>
    </div>

 <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>
</div>

</footer>


      
</body>
</html>
