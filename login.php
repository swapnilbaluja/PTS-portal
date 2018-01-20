<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

<style>
form {
    border: 3px solid #f1f1f1;
}


input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}
.my{
  padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
    .my{
      padding-top:2000cm;
    }
    .btn btn-default{
      width:50px;
    }
}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>
<div class="container-fluid" style="background-color: #0A1612">
    <div class="top_contact" id="inline" >
        <p class="left">0000-000000</p>
        <p class="right">adress</p>
    </div>
 </div>
    
    
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="logo.png" id="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
        </li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> HomePage</a>
      </ul>
    </div>
  </div>
</nav>
<center><h2>LOGIN FORM</h2></center>


</div>
<form  id='loginForm' action="login.php" method ="post">
  <div class="imgcontainer">
    <img src="avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" autocomplete="off" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" autocomplete="off"  required>
        
    <button type="" name="b1">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">

    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  

</form>

<?php

if(isset($_POST['b1']))
{

   session_start();

    $u=$_POST['uname'];
    setcookie("user",$u,mktime()+10);

    $p=$_POST['psw'];
   


$conn = new mysqli("localhost", "root","", "pts");
   if($conn)
    {
      $cmd="SELECT * FROM student_login where uname='$u' and pwd='$p'";
      $cmd1="SELECT * FROM teacherlogin where tname like'$u' and pwd='$p'";
      $cmd2="SELECT * FROM admin where a_id='$u' and pwd='$p'";

      $result=$conn->query($cmd);
      $result1=$conn->query($cmd1);
      $result2=$conn->query($cmd2);
      
      
      if($result=$conn->query($cmd))
      {
        
                if($result->num_rows>0)
                {
                  $_SESSION["name"] = $u;
                header('Location:student_dashboard.php');
              }
              else if($result1->num_rows>0)
              {
                 $_SESSION["name"] = $u;
                header('Location:teacher_dashboard.php');
              }
              else if($result2->num_rows>0)
              {
                $_SESSION["name"] = $u;
                header('Location:admin.php');
              }
              else
              {
                echo "<center><p style='color:red; align:center;' >"."Invalid user name or password !"."</p>";
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

   

}
?>


</body>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</html>
