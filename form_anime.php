<!doctype html>
<html lang="en">
 <head>
   <title>Welcome to Anime</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/buttons.css">
<script type="text/javascript" src="js/buttons.js"></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>
body {
      font: 13px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
   .bg-5 { 
      background-color: #F0FFF0; /*  */
      color: #ffffff;
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
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #2f2f2f !important;
  }
  .navbar-nav li a:hover {
      color: #ffffff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #ffffff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
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





</style>
 </head>
<body style="background: #363636;">
<nav class="navbar navbar-default navbar-fixed-top bg-3 ">
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

        <li><a href="index.php"><font size ="2" >HOME</font></a></li>
 
        <li><a href="admin.php"><font size ="2" >ADMIN</font></a></li>
        
      </ul>
    </div>
  </div>
</nav>
 <br> <br> <br> 

<form class="form-horizontal" method="POST" action="dat.php"  >

 <center><h4>??????????????????????????????????????????????????????</h4></center>
 <br>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-7 sidenav">

<div class="form-group">
    <label class="control-label col-sm-3" > ?????????????????????????????? :</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="anm_id" placeholder="?????????????????????????????????????????????">
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-3" > ?????????????????????????????? :</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="anm_name" placeholder="?????????????????????????????????????????????">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-3" > ???????????????????????????????????? :</label>
    <div class="col-sm-8">
      <select class="form-control" name="anm_type" placeholder="???????????????????????????????????????????????????">
			<option value="????????????????????????">?????????????????? ????????????????????????</option>
		<option value="??????????????????">?????????????????? ?????????????????? </option>
		<option value="Movie">The Movie ???????????????????????? </option>
		<option value="Movie">The Movie ?????????????????? </option>
	</select>
    </div>
  </div>

	<div class="form-group">
    <label class="control-label col-sm-3" > ??????????????????????????? :</label>
    <div class="col-sm-8">
      <textarea name="anm_resume" rows='6' cols='20' class="form-control"  placeholder="????????????????????????????????????????????????????????????"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-3" > ?????????????????????????????? :</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="anm_belong" placeholder="?????????????????????????????????????????????">
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-3" >???????????????????????? :</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" name="anm_year" placeholder="?????????????????????????????????????????????????????????">
	  <br>

	   <button type="submit" class="btn btn-success">??????????????????</button>  &nbsp; <button type="reset" class="btn btn-danger">??????????????????</button>
	    
		&nbsp;
	    <a href="admin.php" class="button button-rounded button-flat-highlight">?????????????????????????????????????????????</a>

    </div>
  </div>

   </div>

    <div class="col-sm-5 text-left"> 
     <br><br>
<img src="img/z.gif" class="img-rounded circle" width="450" height="270">
    </div>
    
  </div>
</div>

</form>

<br>


					
<br>
 </body>
</html>
