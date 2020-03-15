
<!doctype html>  
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>
<link rel="stylesheet" href="style1.css">
</head>

 
<body>
<div class="title"><br><br><h1><font color="white"><b>Welcome To E - Mobile Service Center</b></font></h1><br><br></div>
<div class="container">
<div class="left"></div>
<div class="right">
<div class ="formBox">
<font color="black" size="3"><b>For Admin</b></font>
 <form action="" method="POST">
<br>
   <p>Username</p>
  <input type="text" name="user">

  <p>Password</p>
  <input type="password" name="pass">
<br><br>
<input type="submit" name="submit" value="Admin Login"/>
<br>
<a href="Main.html"><B><center><font size="3" color="Orange">Guest</font></center></B></a>
</form>
 </div>
  </div>
</div>

<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('customer') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: s.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?> 


</body>


</html>