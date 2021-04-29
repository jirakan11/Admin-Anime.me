<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">

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
      color: #ffffff;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #1abc9c;
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
      background-color: #696969; /*  */
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
      color: #1abc9c !important;
  }
  .navbar-nav li.active a {
      color: #1abc9c !important;
      background-color: #1abc9c !important;
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
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
  <title>edit save</title>
 </head>
<body style="background: #363636;" >
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
        <li><a href="anime.php"><font size ="2" >ANIME</font></a></li>
        <li><a href="admin.php"><font size ="2" >ADMIN</font></a></li>
        
      </ul>
    </div>
  </div>
</nav>
  <form method="POST" action="edit_save.php">
  <br><br>
  <?php
	error_reporting(E_ALL & ~E_NOTICE);
  $abc=new mysqli("localhost","id16696292_anime1997","\doEIh$#OGizL4xc","id16696292_anime");
	if ($abc->connect_error) {die ("Cannot connect DB" . mysqli_connect_error());}
	$sql="SET NAMES utf8";

$sql = "UPDATE table_anime SET anm_id='".$_POST["anm_id"]."', anm_name='".$_POST["anm_name"]."', anm_type='".$_POST["anm_type"]."', anm_resume='".$_POST["anm_resume"]."',anm_belong='".$_POST["anm_belong"]."',anm_year='".$_POST["anm_year"]." ' WHERE anm_id = '".$_POST["anm_id"]."'";

$res_result = $abc->query($sql) or die ("ไม่สามารถประมวลผลคำสั่ง SQL ได้");
if($res_result)
{
	echo "<center><br><br>บันทึกข้อมูลเรียบร้อย  โปรด  Refresh เพื่อดูข้อมูล</center>";
}
else
{
	echo "Error Save [".$sql."]";
}
?>
<br>

<br>
<br><center><a href="edit.php" class="btn btn-info">ย้อนกลับ</a>  &nbsp;&nbsp;<a href="admin.php" class="button button-rounded button-flat-highlight">กลับสู่หน้าหลัก</a></center>
</form>
 </body>
</html>
