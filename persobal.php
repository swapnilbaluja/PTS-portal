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
    .detail1{
            margin-top: 20px;
            padding-top: 20px;
        }
        .detail2{
                    }
    .prof{
            margin-top: px;
            padding-top: 5px;
            padding-bottom: 5px;
            height: 205.2px;
            width: 165.2px;
        }
    
    .button{
            background-color: #2D383A;
            color: white;
            font-size: 20px;
        margin-top: 20px;
        }
</style>
    
<head>
  <title>PERSONEL INFO</title>
  
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
        <li ><a href="persobal.php"><span class="glyphicon glyphicon-user"></span> Personel</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-education"></span> Course</a>
          <ul class="dropdown-menu">
            <li><a href="coursescheme.php">Course Scheme</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="assignment.php"><span class="glyphicon glyphicon-tasks"></span> Assingments</a></li>
        <li class="dropdown">
          
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="student_dashboard.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
        <li><form  id='student_dashboard' action="student_dashboard.php" method ="post"><button type="" name="bt1">
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
  
<div class="container">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Basic</a></li>
    <li><a data-toggle="tab" href="#menu1">Contact</a></li>
    <li><a data-toggle="tab" href="#menu2">Residential</a></li>
    
  </ul>

  <div class="tab-content" style="margin-top: 40px">
    <div id="home" class="tab-pane fade in active">
      <div class="col-sm-4">
        

<?php
   

    
    $u=$_SESSION["name"];
  
$conn = new mysqli("139.59.88.82", "root","test@123", "pts");
   if($conn)
    {
      $cmd="SELECT * FROM student_login where uname='$u'";

      $result=$conn->query($cmd);
      
      if($result=$conn->query($cmd))
      {
        $rnumber=$result->fetch_array();
        $rnumber=$rnumber[2];
        $var_rollnumber="SELECT * FROM personal_info_student where rollnumber='$rnumber'";
        
        $resul=$conn->query($var_rollnumber);
       
       
        if($resul->num_rows>0){
          while($t=$resul->fetch_array())
          {
                 
                 echo "<img class='img-responsive prof img-thumbnail' src='$t[5]'>";     }
          
      }
      else
      {
        echo "<p style='color:red; align:center;' >"."Student Info Not Available !"."</p>";
      }
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

   


?>

     
        </div>
        <div class="table-responsive col-sm-8">          
                <table class="table">
                        

<?php
   

    
    $u=$_SESSION["name"];
  
$conn = new mysqli("139.59.88.82", "root","test@123", "pts");
   if($conn)
    {
      $cmd="SELECT * FROM student_login where uname='$u'";

      $result=$conn->query($cmd);
      
      if($result=$conn->query($cmd))
      {
        $rnumber=$result->fetch_array();
        $rnumber=$rnumber[2];
        $var_rollnumber="SELECT * FROM personal_info_student where rollnumber='$rnumber'";
        
        
        $resul=$conn->query($var_rollnumber);
    
       
       
        if($resul->num_rows>0){
          while($t=$resul->fetch_array())
          {         echo"<tbody>
                          <tr>
                            <th>Name</th>
                            <td>$t[0]</td>
                          </tr>
                            <tr>
                            <th>Enrollment No.</th>
                            <td>$t[1]</td>
                          </tr>
                            <tr>
                            <th>Father's Name</th>
                            <td>$t[2]</td>
                          </tr>
                            <tr>
                            <th>Class</th>
                            <td>$t[3]</td>
                          </tr>
                            <tr>
                            <th>Section</th>
                            <td>$t[4]</td>
                          </tr>
                            </tbody>";
          }
          
          
          
      }
      else
      {
        echo "<p style='color:red; align:center;' >"."Student Info Not Available !"."</p>";
      }
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

   


?>        </table>
        </div>
    </div>

    <div id='menu1' class='tab-pane fade'>
      <div class='table-responsive col-sm-12'>          
                <table class='table'>

<?php
    
    $u=$_SESSION["name"];
  $conn = new mysqli("139.59.88.82", "root","test@123", "pts");
   if($conn)
    {
      $cmd="SELECT * FROM student_login where uname='$u'";

      $result=$conn->query($cmd);
      
      if($result=$conn->query($cmd))
      {
        $rnumber=$result->fetch_array();
        $rnumber=$rnumber[2];
        $var_contactinfo="SELECT * FROM contact_info where rollnumber='$rnumber'";
        $contact=$conn->query($var_contactinfo);
       
       
        if($contact->num_rows>0){
          
          while($t=$contact->fetch_array())
          {
            echo"
            
                        
                        <tbody>
                            <tr>
                                <th><h4>Student Contact:</h4></th>
                                <td></td>
                                <th><h4>Parent/Gaurdian's Contact:</h4></th>
                                <td></td>
                            </tr>
                          <tr>
                            <th>Cell Phone</th>
                            <td>$t[3]</td>
                            <th>Cell Phone</th>
                            <td>$t[4]</td>
                          </tr>
                            <tr>
                            <th>Landline Phone</th>
                            <td>$t[1]</td>
                            <th>Landline Phone</th>
                            <td>$t[1]</td>
                          </tr>
                            <tr>
                            <th>Email</th>
                            <td>$t[2]</td>
                            <th>Email</th>
                            <td>$t[5]</td>
                          </tr> </tbody>";
                        


          }
          
      }
      else
      {
        echo "<p style='color:red; align:center;' >"."Student Info Not Available !"."</p>";
      }
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

   


?>

       </table>
                
        </div>
      </div>

      
    
        
        
    <div id="menu2" class="tab-pane fade">
    <div class="table-responsive col-sm-12">
      <table class="table">


      <?php
   

    
    $u=$_SESSION["name"];
  $conn = new mysqli("139.59.88.82", "root","test@123", "pts");
   if($conn)
    {
      $cmd="SELECT * FROM student_login where uname='$u'";

      $result=$conn->query($cmd);
      
      if($result=$conn->query($cmd))
      {
        $rnumber=$result->fetch_array();
        $rnumber=$rnumber[2];
        $var_contactinfo="SELECT * FROM resident_info where rollnumber='$rnumber'";
        $contact=$conn->query($var_contactinfo);
       
       
        if($contact->num_rows>0){
          
          while($t=$contact->fetch_array())
          {
            echo"
            
                        
                        <tbody>
                            
                            <tr>
                                <th><h4>Current Address:</h4></th>
                                <td></td>
                                <th><h4>Permanent Address:</h4></th>
                                <td></td>
                            </tr>
                          <tr>
                            <th>Address</th>
                            <td>$t[1]</td>
                            <th>Address</th>
                            <td>$t[1]</td>
                          </tr>
                            <tr>
                            <th>City</th>
                            <td>$t[2]</td>
                            <th>City</th>
                            <td>$t[2]</td>
                          </tr>
                            <tr>
                            <th>Pin</th>
                            <td>$t[3]</td>
                            <th>Pin</th>
                            <td>$t[3]</td>
                          </tr>
                            <tr>
                            <th>State</th>
                            <td>$t[4]</td>
                            <th>State</th>
                            <td>$t[4]</td>
                          </tr>  </tbody>";
                        


          }

          
      }
      else
      {
        echo "<p style='color:red; align:center;' >"."Student Info Not Available !"."</p>";
      }
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

   


?>


                        
                        
                </table>
        </div>
    </div>
    
    
    
    
    
    
    


 
            
  
            <div class="col-sm-12"><a href="modify.php" class="btn button" role="button">Modify</a><hr></div>
             

    

</body>
</html>
sssss