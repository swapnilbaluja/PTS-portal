<?php
session_start();

if(!isset($_SESSION['name'])) {
     header("Location: login.php"); // redirects them to homepage
     exit; // for good measure
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="navstyle.css">
<style>
    #containerh {
    background-color: #f1f1f1;
    color:#0a1612;
    width:100%;
    height: auto;
    margin-bottom:5px;
    border-radius: 5px;
}
#containerb {
    background-color: #f1f1f1;
    color:#0a1612;
    width:100%;
    height: auto;
    margin-bottom:10px;
    border-radius: 5px;
}
#formContainer {
}
#taskIOSection {
}
#taskInput {
 
    font-size:14px;
    font-family:'Open Sans', sans-serif;
    height:36px;
    width:100%;
    border-radius:5px;
    background-color:#1a2930;
    border:0;
    color:#fff;
    display:block;
    padding-left:15px;
    margin-left: 0%;
   
}
#taskInput:focus{
  box-shadow: 0px 0px 1pt 1pt #999999;
 background-color:#0a1612; 
  outline:none;
}
    ::-webkit-input-placeholder {
    color: #fff;
    font-style:oblique;
    /* padding-left:10px; */
}
:-moz-placeholder {
    /* Firefox 18- */
    color: #fff;
    font-style:oblique;
}
::-moz-placeholder {
    /* Firefox 19+ */
    color: #fff;
    font-style:oblique;
}
:-ms-input-placeholder {
    color: #fff;
    font-style:oblique;
}
    .noliststyle{
        list-style-type: none;
        padding: 20px;
    }
    
</style>

<head>
  <title>ABC School</title>
  
</head>
<body>




<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">ABC  SCHOOL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="add_notification.php">
          <span class="glyphicon glyphicon-comment"></span> ADD Notification</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-education"></span> Insert Marks</a>
          <ul class="dropdown-menu">
            <li><a href="insert.php">Insert</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="upload.php"><span class="glyphicon glyphicon-tasks"></span>Add Assingments</a></li>
        <li class="dropdown">
          
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="teacher_dashboard.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
        <li><form  id='student_dashboard' action="teacher_dashboard.php" method ="post"><button type="" name="bt1">
        <?php 
        if(isset($_POST['bt1']))
        { 
            

            unset($_SESSION['tname']);
            
             session_destroy();  
             header('Location:login.php');
            
            
        }
        ?><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li></button></form>
      </ul>
    </div>
  </div>
</nav>

<center>
<br><br><br><br>
 <div class="col-md-12 contable">

<div id="myDiv">
<form  id='inset' action="insert.php" method ="post">
ROLL-NUMBER:<input type='text'  name='rnumber' size="35"required><br><br>
MARKS:<input type='text'  name='mrk' size="35"required><br><br>
 SUBJECT:<textarea size =20 name="sub">

  </textarea>

 </div>
 <div id="select">
<select id="abc1">
  <option value="sengi01">sengi01</option>
  <option value="sengi02">sengi02</option>
  <option value="sengi03">sengi03</option>
  <option value="sengi04">sengi04</option>
  <option value="sengi05">sengi05</option>
  <option value="sengi06">sengi06</option>

  <option value="shi01">shi01</option>
  <option value="shi02">sengi02</option>
  <option value="shi03">shi03</option>
  <option value="shi04">shi04</option>
  <option value="shi05">shi05</option>
  <option value="shi06">shi06</option>

  <option value="smth01">smth01</option>
  <option value="smth02">smth02</option>
  <option value="smth03">smth03</option>
  <option value="smth04">smth04</option>
  <option value="smth05">smth05</option>
  <option value="smth06">smth06</option>
  

  <option value="spu01">spu01</option>
  <option value="spu02">spu02</option>
  <option value="spu03">spu03</option>
  <option value="spu04">spu04</option>
  <option value="spu05">spu05</option>
  <option value="spu06">spu06</option>

  <option value="sssc01">sssc01</option>
  <option value="sssc02">sssc02</option>
  <option value="sssc03">sssc03</option>
  <option value="sssc04">sssc04</option>
  <option value="sssc05">sssc05</option>
  <option value="sssc06">sssc06</option>

   <option value="ssst01">ssst01</option>
  <option value="ssst02">ssst02</option>
  <option value="ssst03">ssst03</option>
  <option value="ssst04">ssst04</option>
  <option value="ssst05">ssst05</option>
  <option value="ssst06">ssst06</option>


</select>
</div><br><br>
<input type="button"  value="ADD" id="ABCA"/>
<input type="submit"  value="UPLOAD" id="ABCA" name ="upload"/></form>

</div>

<?php
if(isset($_POST['upload']))
				{
					
					$conn = new mysqli("139.59.42.21", "root","test@123", "pts");
					$rn=$_POST['rnumber'];
					$sub=$_POST['sub'];
					$mr=$_POST['mrk'];
					
					 
					 if($conn)
					 {

					$in="INSERT INTO `$sub`(`rollnumber`, `marks`) VALUES ($rn,$mr)";
					
					if($result=$conn->query($in))
					{
						

					echo '<script language="javascript">';
			        echo 'alert("MARKS UPLOADED!")';
			        echo '</script>';
			       echo "<p style='color:green; align:center;' >"."MARKS UPLOADED !"."</p>";
								
				}
					else
					{
						echo "Query problem!";
					}
					}
					else
					{
						echo "connection error !";
					}
				}
				
?>
</body>
<script>

$("#ABCA").click(function()
{
  var text1 = $('#abc1 option:selected').val();
  $('#myDiv textarea').html(text1);
  
});
</script>
</html>