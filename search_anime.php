<!doctype html>
<html lang="en">
 <head>
  <title>สืบค้นข้อมูล</title>
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
        <li><a href="anime.php"><font size ="2" >ANIME</font></a></li>
        <li><a href="admin.php"><font size ="2" >ADMIN</font></a></li>
        
      </ul>
    </div>
  </div>
</nav>
 <br><br> <br>  

<h3>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;สืบค้นข้อมูลอนิเมะ</h3><br>  

<form class="form-inline"  method="POST" action="search_anime.php" >
  <div align="left" >
    <label for="text" >&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เลือกเงื่อนไขการสืบค้น&nbsp;&nbsp;&nbsp; </label>
    <select class="form-control" name="fields">
	<option value="anm_id">รหัสอนิเมะ</option>
			<option value="anm_name">ชื่ออนิเมะ</option>
			<option value="anm_type">ประเภทอนิเมะ</option>
			<option value="anm_resume">เรื่องย่อ</option>
			<option value="anm_belong">ค่าย</option>
			<option value="anm_year">ปี</option>
	</select>&nbsp;&nbsp;
   <input type="text" class="form-control" name="keywords" value="<?php $keywords;?>">&nbsp;&nbsp;
  <button type="submit" name="SUBMIT" class="btn btn-success">search</button>
  </div>
</form>




<?php
	if (isset($_POST["SUBMIT"])) 
	{
		$fields=$_POST["fields"];
		$keywords=$_POST["keywords"];
		$abc=new mysqli("localhost","id16696292_anime1997","\doEIh$#OGizL4xc","id16696292_anime");
		if ($abc->connect_error) {die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้".mysqli_connect_error());}
		$sql="SET NAMES UTF8";
		$abc->query($sql);
		$sql_search="SELECT * FROM table_anime WHERE $fields LIKE '%$keywords%'";
		//echo $sql_search;
		$res_query=$abc->query($sql_search) or die ("ไม่มีข้อมูลสืบค้น");
		
		while ($abc=mysqli_fetch_assoc($res_query)){
	echo "<font color='red'><b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ผลการสืบค้นข้อมูลเงื่อนไข";
	
if ($fields=="anm_id") {echo "รหัสอนิเมะ";} else
		if($fields=="anm_name") {echo "ชื่ออนิเมะ";} else
			if($fields=="anm_type") {echo "ประเภทอนิเมะ";}
                if($fields=="anm_resume") {echo "เรื่องย่อ";}
				   if($fields=="anm_belong") {echo "ค่าย";}
				      if($fields=="anm_year") {echo "ปี";}
					
			echo "</b></font>";
echo" <font color='red'><b>จากคำค้น ".'"'.$keywords.'"'."</b></font>";


?>
<br><br>
<div class="container">
<table class="table table-bordered" >
 <thead bgcolor="" >
<tr bgcolor="#006699">
	<td colspan="2"><font color="CCE1FF"><center>รายละเอียด</font></center></td>
</tr>
<tr>
<td  bgcolor="#FFCCCC" width="5%">รหัสอนิเมะ :</td>
<td width="30%"><?php echo $abc["anm_id"]; ?></td>
</tr>
<tr>
<td bgcolor="" width="5%">ชื่ออนิเมะ :</td>
<td width="30%"><?php echo $abc["anm_name"]; ?></td>
</tr>
<tr>
<td  bgcolor="" width="5%">ประเภทอนิเมะ : </td>
<td width="30%"><?php echo $abc["anm_type"]; ?></td>
</tr>
<tr>
<td  bgcolor="" width="5%">เรื่องย่ออนิเมะ :</td>
<td width="30%"><?php echo $abc["anm_resume"]; ?></td>
</tr>
<tr>
<td  bgcolor="" width="5%">ค่าย :</td>
<td width="30%"><?php echo $abc["anm_belong"]; ?></td>
</tr>
<tr>
<td  bgcolor="" width="5%">ปีที่ฉายอนิเมะ :  </td>
<td width="30%"><?php echo $abc["anm_year"]; ?></td>
</tr>
</table>
<center><a href="JavaScript:if(confirm('ต้องการแก้ไขข้อมูลหรือไม่?') ==true){window.location='edit_show.php?id=<?php echo $abc["anm_id"];?>';}">แก้ไขข้อมูล</a>
	
<a href="JavaScript:if(confirm('ต้องการลบข้อมูลหรือไม่?') ==true){window.location='delete.php?id=<?php echo $abc["anm_id"];?>';}">ลบข้อมูล</a></td></center>
</div>

<?php	

		}

	}

?>
<br>
<br>
<br>
<center><a href="admin.php" class="button button-rounded button-flat-highlight">&nbsp;กลับสู่หน้าหลัก&nbsp;</a> <br><br>
<img src="img/x.gif" width="8%" onclick="topFunction()" id="myBtn" title="Go to top"></center>
<br>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

 </body>
</html>

