<!doctype html>
<html lang="en">
 <head>
  
  <title>Show DATA</title>
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
     
        <li><a href="admin.php"><font size ="2" >ADMIN</font></a></li>
        
      </ul>
    </div>
  </div>
</nav>
<br><br><br>

<h3>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;????????????????????????????????????????????????</h3>

<div class="container">
  <table  class="table table-condensed" >
   <thead bgcolor="#4682B4" >
  <tr bgcolor="#4682B4">
	<td  align="center"  width="8%" ><font color="CCE1FF"><b>?????????????????????????????? </b></font></td>
	<td align="center"  width="13%"><font color="CCE1FF"><b>?????????????????????????????? </b></font></td>
	<td align="center"  width="10%"><font color="CCE1FF"><b>?????????????????? </b></font></td>
	<td align="center"  width="30%"><font color="CCE1FF"><b>??????????????????????????? </b></font></td>
	<td align="center"  width="10%"><font color="CCE1FF"><b>???????????? </b></font></td>
		<td align="center"  width="8%"><font color="CCE1FF"><b>?????? </b></font></td>
		<td align="center"  width="10%"><font color="CCE1FF"><b>??????????????? </b></font></td>
		<td align="center"  width="15%"><font color="CCE1FF"><b>????????????????????????</b></font></td>
  </tr>
     <tbody>


<?php
error_reporting(0);
	$abc = new mysqli("localhost","id16696292_anime1997","\doEIh$#OGizL4xc","id16696292_anime");
	if ($abc->connect_error)
	{
		die("Connection Database ERROR !!!".mysqli_connect_data());
	}

$th_lang="SET NAMES UTF8";
$th_lang_result=$abc->query($th_lang);
$show_sql="SELECT * FROM table_anime";
$result_sql=$abc->query($show_sql);
$i=0;

while ($num_rows=mysqli_fetch_assoc($result_sql))
{
	?>
	<tr>
		<td align='center'> <?php echo $num_rows["anm_id"];?> </td>
		<td align='center'> <?php echo $num_rows["anm_name"];?> </td>
		<td align='center'> <?php echo $num_rows["anm_type"];?> </td>
		<td align='center'> <?php echo $num_rows["anm_resume"];?> </td>
		<td align='center'> <?php echo $num_rows["anm_belong"];?> </td>
		<td align='center'> <?php echo $num_rows["anm_year"];?> </td>
		<td align='center'><a href="edit_show.php?anm_id=<?php echo $num_rows["anm_id"];?>">???????????????</a></td>
		<td align="center"><a href="JavaScript:if(confirm('??????????????????????????????????????????????????? !') == true){window.location='delete.php?anm_id=<?php echo $num_rows["anm_id"];?>';}">????????????????????????</a></td>
		</tr>
<?php
	$i++;
}
mysqli_close($abc);
?>


   </tbody>
</table>
</div>
<br><br>
<center><a href="admin.php" class="button button-rounded button-flat-highlight">&nbsp;?????????????????????????????????????????????&nbsp;</a> <br><br><img src="img/x.gif" width="8%" onclick="topFunction()" id="myBtn" title="Go to top"></center>
<br><br><br>
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

