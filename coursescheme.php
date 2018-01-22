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
     
        .contable{
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;

        }
        .table-bordered{
            border: 3px solid #c5c1c0;
            margin-bottom: 0;
            margin-top: 0;
        }
        .currsem{
            border-top:8px solid #f7ce3e;
            border-bottom:8px solid #f7ce3e;
            border-left:3px solid #f7ce3e;
            border-right:3px solid #f7ce3e;
            background-color: #f9f9f9;
        }
        .side{
            background-color: #1a2930;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
            
        }
        .side ul{
            list-style-type: none;
        }
        .side ul li{
            padding-right: 5px;
            color: #fff;
        }
        
        
        
    </style>
<head>
<?php
   

    session_start();
    $u=$_SESSION["name"];
  
$conn = new mysqli("localhost", "root","test@123", "pts");
   if($conn)
    {
      $cmd="SELECT * FROM student_login where uname='$u'";

      $result=$conn->query($cmd);
      
      if($result=$conn->query($cmd))
      {
        $rnumber=$result->fetch_array();
        $rnumber=$rnumber[2];
        $_SESSION["rollnumber"]=$rnumber;
        $var_rollnumber="SELECT * FROM personal_info_student where rollnumber='$rnumber'";
        
        $resul=$conn->query($var_rollnumber);
       
       
        if($resul->num_rows>0){
            while($t=$resul->fetch_array())
          {
                 
              $_SESSION["class"] = $t[3]; 
              $_SESSION["section"]=$t[4];    }
          
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

  <title>Course Scheme</title>
                        
                        <!-- fade in-out-->
    
                        <script>
                        $(document).ready(function(){
                            var class1 = 
                            <?php
                            
                            echo $_SESSION["class"];
                            $_SESSION["done"]=0;

                            ?>;
                            
                            var branch = "<?php
                            echo $_SESSION["section"]
                            ?>";
                            switch(class1){
                                case 5:
                                    $("#sem5").addClass("currsem");
                                    break;
                                case 6:
                                    $("#sem6").addClass("currsem");
                                    break;
                                case 7:
                                    $("#sem7").addClass("currsem");
                                    break;
                                    
                                case 8:
                                    $("#sem8").addClass("currsem");
                                    break;
                                case 9:
                                    $("#sem9").addClass("currsem");
                                    break;
                                case 10:
                                    $("#sem10").addClass("currsem");
                                    break;
                                    
                                case 11:
                                    $("#sem11").addClass("currsem");
                                    break;
                                case 12:
                                    $("#sem12").addClass("currsem");
                                    break;
                                    }
                            
                            $("#sem5").mouseenter(function(){
                                
                                
                                
                                $("#sem6").fadeTo("fast", 0.4);
                                $("#sem7").fadeTo("fast", 0.4);
                                $("#sem8").fadeTo("fast", 0.4);
                                $("#sem9").fadeTo("fast", 0.4);
                                $("#sem10").fadeTo("fast", 0.4);
                                $("#sem11").fadeTo("fast", 0.4);
                                $("#sem12").fadeTo("fast", 0.4);
                            });
                            $("#sem6").mouseenter(function(){
                                $("#sem5").fadeTo("fast", 0.4);
                                $("#sem7").fadeTo("fast", 0.4);
                                $("#sem8").fadeTo("fast", 0.4);
                                $("#sem9").fadeTo("fast", 0.4);
                                $("#sem10").fadeTo("fast", 0.4);
                                $("#sem11").fadeTo("fast", 0.4);
                                $("#sem12").fadeTo("fast", 0.4);
                            });
                            $("#sem7").mouseenter(function(){
                                $("#sem5").fadeTo("fast", 0.4);
                                $("#sem6").fadeTo("fast", 0.4);
                                $("#sem8").fadeTo("fast", 0.4);
                                $("#sem9").fadeTo("fast", 0.4);
                                $("#sem10").fadeTo("fast", 0.4);
                                $("#sem11").fadeTo("fast", 0.4);
                                $("#sem12").fadeTo("fast", 0.4);
                            });
                            $("#sem8").mouseenter(function(){
                                $("#sem5").fadeTo("fast", 0.4);
                                $("#sem6").fadeTo("fast", 0.4);
                                $("#sem7").fadeTo("fast", 0.4);
                                $("#sem9").fadeTo("fast", 0.4);
                                $("#sem10").fadeTo("fast", 0.4);
                                $("#sem11").fadeTo("fast", 0.4);
                                $("#sem12").fadeTo("fast", 0.4);
                            });
                            $("#sem9").mouseenter(function(){
                                $("#sem5").fadeTo("fast", 0.4);
                                $("#sem6").fadeTo("fast", 0.4);
                                $("#sem7").fadeTo("fast", 0.4);
                                $("#sem8").fadeTo("fast", 0.4);
                                $("#sem10").fadeTo("fast", 0.4);
                                $("#sem11").fadeTo("fast", 0.4);
                                $("#sem12").fadeTo("fast", 0.4);
                            });
                            $("#sem10").mouseenter(function(){
                                $("#sem5").fadeTo("fast", 0.4);
                                $("#sem6").fadeTo("fast", 0.4);
                                $("#sem7").fadeTo("fast", 0.4);
                                $("#sem8").fadeTo("fast", 0.4);
                                $("#sem9").fadeTo("fast", 0.4);
                                $("#sem11").fadeTo("fast", 0.4);
                                $("#sem12").fadeTo("fast", 0.4);
                            });
                            $("#sem11").mouseenter(function(){
                                $("#sem5").fadeTo("fast", 0.4);
                                $("#sem6").fadeTo("fast", 0.4);
                                $("#sem7").fadeTo("fast", 0.4);
                                $("#sem8").fadeTo("fast", 0.4);
                                $("#sem9").fadeTo("fast", 0.4);
                                $("#sem10").fadeTo("fast", 0.4);
                                $("#sem12").fadeTo("fast", 0.4);
                            });
                             $("#sem12").mouseenter(function(){
                                $("#sem5").fadeTo("fast", 0.4);
                                $("#sem6").fadeTo("fast", 0.4);
                                $("#sem7").fadeTo("fast", 0.4);
                                $("#sem8").fadeTo("fast", 0.4);
                                $("#sem9").fadeTo("fast", 0.4);
                                $("#sem10").fadeTo("fast", 0.4);
                                $("#sem11").fadeTo("fast", 0.4);
                            });
                            
                            
                            
                            $("#sem5").mouseleave(function(){
                              
                                $("#sem6").fadeTo("fast", 1);
                                $("#sem7").fadeTo("fast", 1);
                                $("#sem8").fadeTo("fast", 1);
                                $("#sem9").fadeTo("fast", 1);
                                $("#sem10").fadeTo("fast", 1);
                                $("#sem11").fadeTo("fast", 1);
                                $("#sem12").fadeTo("fast", 1);
                            });
                            $("#sem6").mouseleave(function(){
                                $("#sem5").fadeTo("fast", 1);
                                $("#sem7").fadeTo("fast", 1);
                                $("#sem8").fadeTo("fast", 1);
                                $("#sem9").fadeTo("fast", 1);
                                $("#sem10").fadeTo("fast", 1);
                                $("#sem11").fadeTo("fast", 1);
                                $("#sem12").fadeTo("fast", 1);
                            });
                            $("#sem7").mouseleave(function(){
                                $("#sem5").fadeTo("fast", 1);
                                $("#sem6").fadeTo("fast", 1);
                                $("#sem12").fadeTo("fast", 1);
                                $("#sem8").fadeTo("fast", 1);
                                $("#sem9").fadeTo("fast", 1);
                                $("#sem10").fadeTo("fast", 1);
                                $("#sem11").fadeTo("fast", 1);
                            });
                            
                            $("#sem8").mouseleave(function(){
                                $("#sem5").fadeTo("fast", 1);
                                $("#sem6").fadeTo("fast", 1);
                                $("#sem7").fadeTo("fast", 1);
                                $("#sem9").fadeTo("fast", 1);
                                $("#sem10").fadeTo("fast", 1);
                                $("#sem11").fadeTo("fast", 1);
                                $("#sem12").fadeTo("fast", 1);
                            });
                            $("#sem9").mouseleave(function(){
                                $("#sem5").fadeTo("fast", 1);
                                $("#sem6").fadeTo("fast", 1);
                                $("#sem7").fadeTo("fast", 1);
                                $("#sem8").fadeTo("fast", 1);
                                $("#sem10").fadeTo("fast", 1);
                                $("#sem11").fadeTo("fast", 1);
                                $("#sem12").fadeTo("fast", 1);
                            });
                            $("#sem10").mouseleave(function(){
                                $("#sem5").fadeTo("fast", 1);
                                $("#sem6").fadeTo("fast", 1);
                                $("#sem7").fadeTo("fast", 1);
                                $("#sem8").fadeTo("fast", 1);
                                $("#sem9").fadeTo("fast", 1);
                                $("#sem11").fadeTo("fast", 1);
                                $("#sem12").fadeTo("fast", 1);
                            });
                            $("#sem11").mouseleave(function(){
                                $("#sem5").fadeTo("fast", 1);
                                $("#sem6").fadeTo("fast", 1);
                                $("#sem7").fadeTo("fast", 1);
                                $("#sem8").fadeTo("fast", 1);
                                $("#sem9").fadeTo("fast", 1);
                                $("#sem10").fadeTo("fast", 1);
                                $("#sem12").fadeTo("fast", 1);
                            });
                            $("#sem12").mouseleave(function(){
                                $("#sem5").fadeTo("fast", 1);
                                $("#sem6").fadeTo("fast", 1);
                                $("#sem7").fadeTo("fast", 1);
                                $("#sem8").fadeTo("fast", 1);
                                $("#sem9").fadeTo("fast", 1);
                                $("#sem10").fadeTo("fast", 1);
                                $("#sem11").fadeTo("fast", 1);
                            });
                            
                            $("#disps_current").append("<h2><li>Current class: "+class1+"</li><br><br><li>Section: "+branch+"</li></h2>")
                            
                        });
                            
                        
                            
                        </script>
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
        ?><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li></button></form>s
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
        
        
        
    <div class="col-md-12 jumbotron side ">
        <ul id="disps_current">
        </ul>
    </div>
        
        
                
    
        
    <div class="col-md-12 contable">
    <table id="sem5" class="table table-bordered">
        <thead>
            <tr><th colspan="4">5th</th></tr>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Credits</th>
                <th>Marks</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
$conn = new mysqli("localhost", "root","test@123", "pts");
   if($conn)
    {
        
      if($_SESSION["class"]>=5){
            $u=$_SESSION["class"];

            $sub="SELECT * FROM class_subjects where std=5";
          
            if($cla=$conn->query($sub)){
            
            
            
                if($cla->num_rows>0){
                   
                while($t=$cla->fetch_array())
                {
                    
                    $_SESSION["done"]='1';
                   
                    
                    if($t[1])

                    {
                        $subinfo="SELECT * FROM subject_code WHERE scode='$t[1]'";
                        $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM shi01 WHERE rollnumber=$r";
                       
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {
                                    $ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[1]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>
                            <br>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }

            if($t[2])
                    {
                        $subinfo="SELECT * FROM subject_code WHERE scode='$t[2]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM spu01 WHERE rollnumber=$r";

                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {
                                    $ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[2]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }
 }
            
             if($t[3])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[3]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sengi01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {
                                    $ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[3]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            
                            </tr>";
                        }}
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            if($t[4])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[4]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM ssst01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {
                                    $ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[4]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[5])
                    {
                        $subinfo="SELECT * FROM subject_code WHERE scode='$t[5]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sssc01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {
                                    $ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[5]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[6])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[6]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM smth01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {
                                    $ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[6]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
            
                



                }}
            
            else
            {
                echo "<p style='color:red; align:center;' >"."Subject Info Not Available !"."</p>";
            }
        }
        else
        {
            echo "<p style='color:red; align:center;' >"."query problem!"."</p>";
        }
                
        
      }
      
      

      
    }
    else
    {
      echo "connection error !";
    }


?>


            
        </tbody>
    </table>
        
        
    <table id="sem6" class="table table-bordered">
        <thead>
            <tr><center><th colspan="4">6th</th></tr></center>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Credits</th>
                <th>Grade</th>
                
            </tr>
        </thead>
        <tbody>
                    <?php
                    
$conn = new mysqli("localhost", "root","test@123", "pts");
   if($conn)
    {
      if($_SESSION["class"]>=6){
            $u=$_SESSION["class"];

            $sub="SELECT * FROM class_subjects where std=6";
           
            if($cla=$conn->query($sub)){
            
            
                if($cla->num_rows>0){
                    $_SESSION["done"]='1';
                while($t=$cla->fetch_array())
                {
                    if($t[1])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[1]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM shi02 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {
                                    $ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[1]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }

            if($t[2])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[2]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM spu2 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {
                                    $ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[2]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[3])
                    {
                         $subinfo="SELECT * FROM subject_code WHERE scode='$t[3]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sengi02 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[3]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            if($t[4])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[4]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM ssst02 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[4]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[5])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[5]'";
                       
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sssc02 WHERE rollnumber=$r";
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[5]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[6])
                    {$subinfo="SELECT * FROM subject_code WHERE scode='$t[6]'";
                       
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM smth02 WHERE rollnumber=$r";
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[6]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
            
                



                }}
            
            else
            {
                echo "<p style='color:red; align:center;' >"."Subject Info Not Available !"."</p>";
            }
        }
        else
        {
            echo "<p style='color:red; align:center;' >"."query problem!"."</p>";
        }
                
        
      }
      
      

      
    }
    else
    {
      echo "connection error !";
    }


?>
</tbody>
    </table>
        
        
    <table id="sem7" class="table table-bordered">
        <thead>
            <tr><th colspan="4">7th</th></tr>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Credits</th>
                <th>Grade</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                    
$conn = new mysqli("localhost", "root","test@123", "pts");
   if($conn)
    {
      if($_SESSION["class"]>=7){
            $u=$_SESSION["class"];

            $sub="SELECT * FROM class_subjects where std=7";
           
            if($cla=$conn->query($sub)){
            
            
                if($cla->num_rows>0){
                    $_SESSION["done"]='1';
                while($t=$cla->fetch_array())
                {
                    if($t[1])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[1]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM shi03 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[1]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }

            if($t[2])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[2]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM spu03 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[2]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[3])
                    {$subinfo="SELECT * FROM subject_code WHERE scode='$t[3]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sengi03 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[3]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            if($t[4])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[4]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM ssst03 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[4]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[5])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[5]'";
                       
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sssc03 WHERE rollnumber=$r";
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[5]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[6])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[6]'";
                       
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM smth03 WHERE rollnumber=$r";
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[6]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
            
                



                }}
            
            else
            {
                echo "<p style='color:red; align:center;' >"."Subject Info Not Available !"."</p>";
            }
        }
        else
        {
            echo "<p style='color:red; align:center;' >"."query problem!"."</p>";
        }
                
        
      }
      
      

      
    }
    else
    {
      echo "connection error !";
    }


?>        </tbody>
    </table>
        
    <table id="sem8" class="table table-bordered">
        <thead>
            <tr><th colspan="4">8th</th></tr>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Credits</th>
                <th>Grade</th>
                
            </tr>
        </thead>
        <tbody>
           <?php
                    
$conn = new mysqli("localhost", "root","test@123", "pts");
   if($conn)
    {
      if($_SESSION["class"]>=8){
            $u=$_SESSION["class"];

            $sub="SELECT * FROM class_subjects where std=8";
           
            if($cla=$conn->query($sub)){
            
            
                if($cla->num_rows>0){
                    $_SESSION["done"]='1';
                while($t=$cla->fetch_array())
                {
                    if($t[1])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[1]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM shi04 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[1]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }

            if($t[2])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[2]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM spu04 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[2]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[3])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[3]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sengi04 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[3]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }
}
            if($t[4])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[4]'";
                       
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM ssst04 WHERE rollnumber=$r";
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[4]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[5])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[5]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sssc04 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[5]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[6])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[6]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM smth04 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[6]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
            
                



                }}
            
            else
            {
                echo "<p style='color:red; align:center;' >"."Subject Info Not Available !"."</p>";
            }
        }
        else
        {
            echo "<p style='color:red; align:center;' >"."query problem!"."</p>";
        }
                
        
      }
      
      

      
    }
    else
    {
      echo "connection error !";
    }


?>
        </tbody>
    </table>
        
        
    <table id="sem9" class="table table-bordered">
        <thead>
            <tr><th colspan="4">9th</th></tr>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Credits</th>
                <th>Grade</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
$conn = new mysqli("localhost", "root","test@123", "pts");
   if($conn)
    {
      if($_SESSION["class"]>=9){
            $u=$_SESSION["class"];

            $sub="SELECT * FROM class_subjects where std=9";
           
            if($cla=$conn->query($sub)){
            
            
                if($cla->num_rows>0){
                    $_SESSION["done"]='1';
                while($t=$cla->fetch_array())
                {
                    if($t[1])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[1]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM shi05 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[1]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }

            if($t[2])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[2]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM spu05 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[2]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[3])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[3]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sengi05 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[3]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            if($t[4])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[4]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM ssst05 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[4]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[5])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[5]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sssc05  WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {
                     $ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[5]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[6])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[6]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM smth05 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[6]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
            
                



                }}
            
            else
            {
                echo "<p style='color:red; align:center;' >"."Subject Info Not Available !"."</p>";
            }
        }
        else
        {
            echo "<p style='color:red; align:center;' >"."query problem!"."</p>";
        }
                
        
      }
      
      

      
    }
    else
    {
      echo "connection error !";
    }



?>
        </tbody>
    </table>
        
        
    <table id="sem10" class="table table-bordered">
        <thead>
            <tr><th colspan="4">10th</th></tr>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Credits</th>
                <th>Grade</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
$conn = new mysqli("localhost", "root","test@123", "pts");
   if($conn)
    {
      if($_SESSION["class"]>=10){
            $u=$_SESSION["class"];

            $sub="SELECT * FROM class_subjects where std=10";
           
            if($cla=$conn->query($sub)){
            
            
                if($cla->num_rows>0){
                    $_SESSION["done"]='1';
                while($t=$cla->fetch_array())
                {
                    if($t[1])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[1]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM shi06 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[1]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }


                    }

            if($t[2])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[2]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM spu06 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[2]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[3])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[3]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sengi06 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[3]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            if($t[4])
                    {
                                 $subinfo="SELECT * FROM subject_code WHERE scode='$t[4]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM ssst06 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[4]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }}
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }
                    }
            
             if($t[5])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[5]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM sssc06 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[5]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[6])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[6]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM smth06 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[6]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
            
                



                }}
            
            else
            {
                echo "<p style='color:red; align:center;' >"."Subject Info Not Available !"."</p>";
            }
        }
        else
        {
            echo "<p style='color:red; align:center;' >"."query problem!"."</p>";
        }
                
        
      }
      
      

      
    }
    else
    {
      echo "connection error !";
    }


?>
        </tbody>
    </table>
        
    <table id="sem11" class="table table-bordered">
        <thead>
            <tr><th colspan="4">11th</th></tr>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Credits</th>
                <th>Grade</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                   
$conn = new mysqli("localhost", "root","", "pts");
   if($conn)
    {
      if($_SESSION["class"]>=11){
            $u=$_SESSION["class"];

            $sub="SELECT * FROM class_subjects where std=11";
           $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
            if($cla=$conn->query($sub)){
            
            $mark1=$conn->query($mark);
                if($cla->num_rows>0){
                    $_SESSION["done"]='1'; 
                    if($mark1->num_rows>0){

                while($t=$cla->fetch_array())
                {
                    if($t[1])
                    {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[1]</td>
                            <td width='40%'> $t[1]</td>
                            <td width='20%'> $t[1]</td>
                            <td width='20%'> $t[1]</td>
                            </tr>";
                    }
                }

            if($t[2])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[2]'";
                       
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
                        if($fin=$conn->query($subinfo))
                        {$mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[2]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[3])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[3]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[3]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            if($t[4])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[4]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[4]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }}
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[5])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[5]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[5]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }}
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[6])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[6]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[6]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            <td width='20%'> $ans1[1]</td>
                            </tr>";
                        }}
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
            
                



                }}
            
            else
            {
                echo "<p style='color:red; align:center;' >"."Subject Info Not Available !"."</p>";
            }
        }
        else
        {
            echo "<p style='color:red; align:center;' >"."query problem!"."</p>";
        }
                
        
      }
      
      

      
    }
    else
    {
      echo "connection error !";
    }


?>
        </tbody>
    </table>
        
        
    <table id="sem12" class="table table-bordered">
        <thead>
            <tr><th colspan="4">12</th></tr>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Credits</th>
                <th>Grade</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                    
$conn = new mysqli("localhost", "root","", "pts");
   if($conn)
    {
      if($_SESSION["class"]>=12){
            $u=$_SESSION["class"];

            $sub="SELECT * FROM class_subjects where std=12";
           
            if($cla=$conn->query($sub)){
            
            
                if($cla->num_rows>0){
                    $_SESSION["done"]='1';
                while($t=$cla->fetch_array())
                {
                    if($t[1])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[1]'";
                       
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[1]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            
                            </tr>";
                        }}
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }

            if($t[2])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[2]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[2]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            
                            </tr>";
                        }}
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[3])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[3]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[3]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            
                            </tr>";
                        }}
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            if($t[4])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[4]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {$ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[4]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            
                            </tr>";
                        }}
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[5])
                    {
                                $subinfo="SELECT * FROM subject_code WHERE scode='$t[5]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                                {
                                    $ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[5]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
             if($t[6])
                    {
                               $subinfo="SELECT * FROM subject_code WHERE scode='$t[6]'";
                       $r=$_SESSION['rollnumber'];
                        $mark="SELECT * FROM SHI01 WHERE rollnumber=$r";
                       
                        if($fin=$conn->query($subinfo))
                        {
                            $mark1=$conn->query($mark);
                            if($fin->num_rows>0)
                            {
                                 if($mark1->num_rows>0){
                                while($ans=$fin->fetch_array())
                     
                                {
                                    $ans1=$mark1->fetch_array();
                                echo "<tr>
                            <td width='20%'> $t[6]</td>
                            <td width='40%'> $ans[1]</td>
                            <td width='20%'> $ans[2]</td>
                            
                            </tr>";
                        }
                    }
                        }
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."Subject not found !"."</p>";                        }
                        }   
                        else
                        {
                            echo "<p style='color:red; align:center;' >"."query problems !"."</p>";
                        }

                    }
            
            
                



                }}
            
            else
            {
                echo "<p style='color:red; align:center;' >"."Subject Info Not Available !"."</p>";
            }
        }
        else
        {
            echo "<p style='color:red; align:center;' >"."query problem!"."</p>";
        }
                
        
      }
      
      

      
    }
    else
    {
      echo "connection error !";
    }


?>
        </tbody>
    </table>
    </div>
    </div> 
    

</body>
</html>
