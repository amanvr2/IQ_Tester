<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="login1.css">
  </head>
<body>
    <ul>
        <li><a href="home.php"> Home</a></li>
        <li><a href="signup.php"> Register</a></li>
        <li><a href="login.php"> Log in</a></li>
      
  <li><a href="#">Admin</a></li>
        <li><a href="#">online exam</a></li>
  <li><a href="#about">About us</a></li>
    </ul>
    <h1> LOG IN PAGE</h1>
    <br>
    <br>
    <br>
    <br>
    <form method="POST">
    <div class="login">
        <label> Username :</label>
        <input type="text" name="username" placeholder="username@email.com" required><br>
        <br>
        <label> Password :</label>
        <input type="password" name="pswrd" value=""required><br><br>
       
    </div>
    <input type="submit" name="submit"  class="button" value="log_in">
        <a href="forget.php"> Forget password ?</a>
    </form>
        </body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'iq_tester') or die("plz check database");
if(isset($_POST['submit']))
{
$username=$_POST['username'];
    $password=$_POST['pswrd'];
     $query=mysqli_query($con,"select *from register where username='$username' and PASSWORD='$password'");
    $row = mysqli_num_rows($query);
    if($row==1)
    {
       session_start();
        $_SESSION['username']=$username;
        $_SESSION['pswrd']=$password;
        header("location:listexms.php");
    }
    else
    {
       echo"<script>alert('user and pass not valid')</script>";
    }
    
}
?>
