<?php
session_start();

if(!isset($_SESSION['name'])) {
     header("Location: login.php"); // redirects them to homepage
     exit; // for good measure
}
?>

<?php

mysql_connect("139.59.42.21","root","test@123");
	mysql_select_db("pts");
	
if(isset($_POST['upload']))
{
	$class1=$_POST['class'];
	$sub=$_POST['subject'];
	$file_name=$_FILES['file']['name'];
	$file_type=$_FILES['file']['type'];
	$file_size=$_FILES['file']['size'];
	$file_temp_loc=$_FILES['file']['tmp_name'];
	$file_store="upload/".$file_name;

	if(move_uploaded_file($file_temp_loc,$file_store))
	{
		
		$q=mysql_query("INSERT INTO `assignment` (`std`, `subject`, `file`) VALUES ('$class1', '$sub', '$file_name')");
		
		
			echo '<script language="javascript">';
        echo 'alert("File Uploaded  !")';
        echo '</script>';
          echo "<p style='color:green; align:center;' >"."Record Updated !"."</p>";
		
	}
	else 
	{
		echo "not uploaded";
	}



   

}
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="navstyle.css">

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
        <li ><a href="add_notification.php"><span class="glyphicon glyphicon-user"></span> Add Notification</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-education"></span> INSERT-MARKS</a>
          <ul class="dropdown-menu">
            <li><a href="insert.php">INSERT</a></li>
            
          </ul>
        </li>
        <li><a href="upload.php"><span class="glyphicon glyphicon-tasks"></span> Add Assingments</a></li>
        <li class="dropdown">
          
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="teacher_dashboard.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
        <li><form  id='student_dashboard' action="student_dashboard.php" method ="post"><button type="" name="bt1">
        <?php 
        if(isset($_POST['bt1']))
        { 
            

            unset($_SESSION['name']);
            
             session_destroy();  
             header('Location:login.php');
            
            
        }
        ?><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li></button></form>s
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Class-Notification</a></li>
    <li><a data-toggle="tab" href="#menu1">Student-Notification</a></li>
    
    
  </ul>

  <div class="tab-content" style="margin-top: 40px">
    <div id="home" class="tab-pane fade in active">
      <div class="col-sm-4">
        <div class="col-md-12 contable">
   
				<form action ="add_notification.php" method="POST" enctype="multipart/form-data">
				CLASS:<input type='text'  name='class' size="35"required><br><br>
				MESSAGE:<input type='text'  name='msg' size="35"required><br><br>
				<p><input type="submit" name="c_go" value="Notify"/ style="color:blue"></p>
				</form>
				<?php
				if(isset($_POST['c_go']))
				{
					$conn = new mysqli("139.59.42.21", "root","test@123", "pts");
					$cl=$_POST['class'];
					$msg=$_POST['msg'];
					 if($conn)
					 {

					$in="INSERT INTO `notification_class`(`std`, `message`) VALUES ($cl,'$msg')";
					
					if($result=$conn->query($in))
					{
						

					echo '<script language="javascript">';
			        echo 'alert("Notified  !")';
			        echo '</script>';
			       echo "<p style='color:green; align:center;' >"."Notification Done !"."</p>";
								
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
		</div>
       </div>
       </div>
    <div id='menu1' class='tab-pane fade'>
     <div class="col-sm-4">
      <div class="col-md-12 contable">
   
			<form action ="add_notification.php" method="POST" enctype="multipart/form-data">
			Roll-NUMBER:<input type='text'  name='rno' size="35"required><br><br>
			SUBJECT:<input type='text'  name='msg' size="35"required><br><br>
			<p><input type="submit" name="go" value="Notify"/ style="color:blue"></p>
			</form>
<?php
				if(isset($_POST['go']))
				{
					$conn = new mysqli("139.59.42.21", "root","test@123", "pts");
					$cl=$_POST['rno'];
					$msg=$_POST['msg'];
					 if($conn)
					 {

					$in="INSERT INTO `notification_student`(`rollnumber`, `message`) VALUES ($cl,'$msg')";
					
					if($result=$conn->query($in))
					{
						

					echo '<script language="javascript">';
			        echo 'alert("Notified  !")';
			        echo '</script>';
			       echo "<p style='color:green; align:center;' >"."Notification Done !"."</p>";
								
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


	</div>
    </div>
    </div>
    </div>
</body>
</html>