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
  <title>Bootstrap Example</title>
  
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
          <li ><a href="registration.php"><span class="glyphicon glyphicon-education"></span> Add New Student</a></li>
        <li>
          <a  href="registerteacher.php"><span class="glyphicon glyphicon-user"></span> Add New Instructor</a></li>
        <li class="dropdown"> 
         <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>Update Users</a>
          <ul class="dropdown-menu">
            <li><a href="teacherupdate.php">Update-Teacher</a></li>
            <li><a href="sutdentupdate.php">Update-Student</a></li>
            
          </ul>
        </li>
        
        <li class="dropdown">
          
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="admin.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
        <li><form  id='admin' action="admin.php" method ="post"><button type="" name="bt1">
        <?php 
        if(isset($_POST['bt1']))
        { 
            

            unset($_SESSION['name']);
            
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
   
<form action ="registration.php" method="POST">
<CENTER>PERSONAL INFORMATION</CENTER>
---------------------------------------------------------------------------------------------------<BR>
NAME       :<input type='text'  name='name' size="35"required><br><br>
FATHER NAME:<input type='text'  name='fname' size="35"required><br><br>
ROLL-NUMBER:<input type='text'  name='rnumber' size="35"required><br><br>
DEFAULT-PWD:<input type='text'  name='pwd' size="35"required><br><br>

CLASS:<input type='text'  name='class' size="35"required><br><br>
SECTION:<input type='text'  name='section' size="35"required><br><br>

<CENTER>CONTACT INFORMATION</CENTER>
---------------------------------------------------------------------------------------------------<BR>
   STUDENT-LANDLINE   :<input type='text'  name='s_landline' size="35"required><br><br>
STUDENT-MAIL:<input type='text'  name='s_mail' size="35"required><br><br>
STUDENT-CELL:<input type='text'  name='s_cell' size="35"required><br><br>
PARENT-CELL:<input type='text'  name='p_cell' size="35"required><br><br>
PARENT-MAIL:<input type='text'  name='p_mail' size="35"required><br><br>
<CENTER>RESIDENCE INFORMATION</CENTER>
---------------------------------------------------------------------------------------------------<BR>
   ADDRESS   :<input type='text'  name='address' size="35"required><br><br>
CITY:<input type='text'  name='city' size="35"required><br><br>
PIN:<input type='text'  name='pin' size="35"required><br><br>
STATE:<input type='text'  name='state' size="35"required><br><br>

	

<input type="submit"  value="UPLOAD" id="ABCA" name ="upload"/>





</form>
</div>
<?php
         

  
if(isset($_POST['upload']))
{
	$conn = new mysqli("localhost", "root","", "pts");
   if($conn){
  
					  $name=$_POST['name'];
					  $pwd=$_POST['pwd'];
					  $rnum=$_POST['rnumber'];
					 $fname=$_POST['fname'];
					  $clss=$_POST['class'];
					  $sec=$_POST['section'];
					  $s_land=$_POST['s_landline'];
					  $s_mail=$_POST['s_mail'];
					  $s_cell=$_POST['s_cell'];
					  $p_cell=$_POST['p_cell'];
					  $p_mail=$_POST['p_mail'];
					  $add=$_POST['address'];
					  $city=$_POST['city'];
					  $pin=$_POST['pin'];
					  $state=$_POST['state'];
				
              
                    $cmd="INSERT INTO `student_login`(`uname`, `pwd`, `rollnumber`) VALUES ('$name','$pwd',$rnum)";
                      $cmd1="INSERT INTO `personal_info_student`(`uname`, `rollnumber`, `fathername`, `class`, `section`) VALUES ('$name',$rnum,'$fname',$clss,'$sec')";
                      $cmd2="INSERT INTO `contact_info`(`rollnumber`, `s_landline`, `s_mail`, `s_cell`, `p_cell`, `p_mail`) VALUES ($rnum,'$s_land','$s_mail','$s_cell','$p_cell','$p_mail')";
                    $cmd3="INSERT INTO `resident_info`(`rollnumber`, `address`, `city`, `pin`, `state`) VALUES ($rnum,'$add','$city',$pin,'$state')";

                  
                    $result=$conn->query($cmd);
                     $result1=$conn->query($cmd1);
                     $result2=$conn->query($cmd2);
                      $result3=$conn->query($cmd3);
                    
                    if( $result )
                    {
                    	echo '<script language="javascript">';
			        echo 'alert("STUDENT ADDED!")';
			        echo '</script>';
			       echo "<p style='color:green; align:center;' >"."STUDENT ADDED !"."</p>";
                    }
                    else
                    {
                    	echo '<script language="javascript">';
			        echo 'alert("MAR!")';
			        echo '</script>';
                    	
                    }
                    
             }
             else 
             {
             	echo "<center><p style='color:red; align:center;' >"."connection !"."</p>";
             	
             }
         }

?>



</body>
</html>