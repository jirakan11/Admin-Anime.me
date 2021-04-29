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


  <title>anime data</title>

 <style>
body {
      font: 14px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; 
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; 
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; 
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; 
      color: #fff;
  }
   .bg-5 { 
      background-color: #F0FFF0; 
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
      font-size: 15px !important;
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
 <?php 
 $abc=new mysqli ("localhost","id16696292_anime1997","\doEIh$#OGizL4xc","id16696292_anime");
 if ($abc->connect_error)
 {
 echo "ไม่สามารถติดต่อฐานข้อมูลได้".Mysqli_connect_error();
 }
 else
 {
 echo "<br> <br><br><br><center>เชื่อมต่อฐานข้อมูลสำเร็จ</center>";
 }
 $th="SET NAMES UTF8";
 $abc->query($th);
	
$insert_data="INSERT INTO table_anime(anm_id,anm_name,anm_type,anm_resume,anm_belong,anm_year)
	values ('".$_POST["anm_id"]."','".$_POST["anm_name"]."','".$_POST["anm_type"]."','".$_POST["anm_resume"]."','".$_POST["anm_belong"]."','".$_POST["anm_year"]."')";

$insert_data_query =$abc->query($insert_data);
if($insert_data_query)
{
echo "<center>บันทึกข้อมูลเรียบร้อย</center>";
}
else
{
echo "บันทึกข้อมูลผิดพลาด";
}
?>
<br>
<br><center><a href="form_anime.php" class="btn btn-info">ย้อนกลับ</a> <a href="admin.php" class="button button-rounded button-flat-highlight">กลับสู่หน้าหลัก</a></center>
<br><br>

 </body>
</html>
