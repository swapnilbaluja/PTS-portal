<?php
session_start();

if(!isset($_SESSION['name'])) {
     header("Location: login.php"); // redirects them to homepage
     exit; // for good measure
}
?>
<?php
   

    session_start();
    $u=$_SESSION["name"];
  
$conn = new mysqli("localhost", "root","", "pts");
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
        <li class="active"><a href="dashboard.html"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
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
    <div class="jumbotron">
  <h1>Welcome, <?php




echo $_SESSION["name"];

?>
</h1>
        <h4>You have 
        <?php
        $u=$_SESSION["name"];
  
$conn = new mysqli("localhost", "root","", "pts");
   if($conn)
    {
      $cmd="SELECT * FROM student_login where uname='$u'";

      $result=$conn->query($cmd);
      
      if($result=$conn->query($cmd))
      {
        $rnumber=$result->fetch_array();
        $rnumber=$rnumber[2];
        $std=$_SESSION["class"];
        $var_notification="SELECT * FROM notification_student where rollnumber=$rnumber";
        $var_std_notification="SELECT * FROM notification_class where std=$std";
       
        $notification1=$conn->query($var_notification);
        $notification2=$conn->query($var_std_notification);
        echo $notification2->num_rows+$notification1->num_rows;

        echo "<a href='notification.php' style='color: #b56357'> notifications</a>";
        }
        else
        {
        echo "query problem!!";
    }
        }
        else
        {
        echo "connectionproblem!!";
        }
        ?></h4>
</div>
<div class="row">
    <div class="calender">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <iframe src="https://calendar.google.com/calendar/embed?src=en.indian%23holiday%40group.v.calendar.google.com&ctz=Asia/Calcutta" style="border: 0" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div id="containerh">
    <header>
         <h1 style="text-align: center; padding:5px ">Task List</h1>
         </header>
        </div>
    <div id="containerb">
    <section id="taskIOSection" >
        <div id="formContainer" >
            <form id="taskEntryForm" >
                <input id="taskInput" placeholder="What would you like to do today?"/>
            </form>
        </div>
    </section>
</div>
        
        
<div id="containerb">
        <ul id="taskList" class="noliststyle"></ul>
</div>
        
    </div>
</div>    

</div>

</body>
</html>

<script>
    $(document).ready(function () {
    var i = 0;
    for (i = 0; i < localStorage.length; i++) {
        var taskID = "task-" + i;
        $('#taskList').append("<li id='" + taskID + "'>" + localStorage.getItem(taskID) + "</li>");
    }
    $('#clear').click(function () {
        localStorage.clear();
    });
    $('#taskEntryForm').submit(function () {
        if ($('#taskInput').val() !== "") {
            var taskID = "task-" + i;
            var taskMessage = $('#taskInput').val();
            localStorage.setItem(taskID, taskMessage);
            $('#taskList').append("<li class='task' id='" + taskID + "'>" + taskMessage + "</li>");
            var task = $('#' + taskID);
            task.css('display', 'none');
            task.slideDown();
            $('#taskInput').val("");
            i++;
        }
        return false;
    });

    $('#taskList').on("click", "li", function (event) {
        self = $(this);
        taskID = self.attr('id');
        localStorage.removeItem(taskID);
        self.slideUp('slow', function () {
            self.remove();
        });

    });


});
</script>