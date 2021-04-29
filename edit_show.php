<!doctype html>
<html lang="en">
 <head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <title>แก้ไขข้อมูล</title>

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



  <form class="form-horizontal" method="POST" action="edit_save.php">
   <?php
   error_reporting(0);
	$abc=new mysqli("localhost","id16696292_anime1997","\doEIh$#OGizL4xc","id16696292_anime");
	if ($abc->connect_error) {die ("Cannot connect DB" . mysqli_connect_error());}
	$sql="SET NAMES UTF8";
	$abc->query($sql);
	$sql = "SELECT * FROM table_anime WHERE anm_id = '".$_GET["anm_id"]."'";
	$res_query = $abc->query($sql) or die ("ไม่สามารถประมวลผลคำสั่ง SQL ได้");
	$res_result = mysqli_fetch_assoc($res_query);
if (!$res_result)
{
	echo "ไม่พบรหัสอนิเมะที่ต้องการแก้ไข = ";
	echo $_GET["anm_id"];
}
?>
<br><br>
<center><b><h3>แก้ไขข้อมูลอนิเมะ<b></h3></center><br>

<div class="form-group">
 <label class="control-label col-sm-2" > รหัสอนิเมะ :</label>
 <div class="col-sm-5">
      <input type="text" class="form-control" name="anm_id" value="<?php echo $res_result["anm_id"];?>">  </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" > ชื่ออนิเมะ :</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="anm_name"  value=" <?php echo $res_result["anm_name"];?>"> </div>
  </div>


<div class="form-group">
    <label class="control-label col-sm-2" > ประเภทอนิเมะ :</label>
    <div class="col-sm-5">
      <select class="form-control" name="anm_type" value=" <?php echo $res_result["anm_type"];?>">
		<option value="พากย์ไทย">อนิเมะ พากย์ไทย</option>
		<option value="ซับไทย">อนิเมะ ซับไทย </option>
		<option value="Movie">Movie พากย์ไทย </option>
		<option value="Movie">Movie ซับไทย </option>
	</select>
    </div>
  </div>
	
<div class="form-group">
    <label class="control-label col-sm-2" > เรื่องย่อ :</label>
    <div class="col-sm-5">
      <textarea  rows='6' cols='20' class="form-control" name="anm_resume" > <?php echo $res_result["anm_resume"];?>
	  </textarea>
  </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" > ค่ายอนิเมะ :</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="anm_belong"  value=" <?php echo $res_result["anm_belong"];?>">
</div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" >ปีที่ฉาย :</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="anm_year" value=" <?php echo $res_result["anm_year"];?>">
</div>
  </div>

<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">บันทึก</button> &nbsp;&nbsp;  <button type="reset" class="btn btn-danger">ยกเลิก</button>

    </div>
  </div>




</form>
<br>
<center><a href="edit.php" class="btn btn-info">ย้อนกลับ</a>  &nbsp;&nbsp;<a href="admin.php" class="button button-rounded button-flat-highlight">กลับสู่หน้าหลัก</a></center>
<br><br>
 </body>
</html>