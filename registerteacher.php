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
        <li ><a href="admin.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
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
   
<form action ="registerteacher.php" method="POST">
<CENTER>PERSONAL INFORMATION</CENTER>
---------------------------------------------------------------------------------------------------<BR>
NAME       :<input type='text'  name='name' size="35"required><br><br>
TEACHER-ID:<input type='text'  name='tnumber' size="35"required><br><br>
DEFAULT-PWD:<input type='text'  name='pwd' size="35"required><br><br>
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
					  $tnum=$_POST['tnumber'];
					 
                    $cmd="INSERT INTO `teacherlogin`(`tname`, `pwd`, `tid`) VALUES ('$name','$pwd',$tnum)";
                      
                  
                    $result=$conn->query($cmd);
                     
                    if( $result )
                    {
                    	echo '<script language="javascript">';
			        echo 'alert("TEACHER ADDED!")';
			        echo '</script>';
			       echo "<p style='color:green; align:center;' >"."TEACHER ADDED !"."</p>";
                    }
                    else
                    {
                    	echo '<script language="javascript">';
			        echo 'alert("ERROR!")';
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