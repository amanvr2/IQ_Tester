<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="forget.css">
  </head>
<body>
    <form method="POST">
    <ul>
        <li><a href="home.php"> Home</a></li>
         <li><a href="signup.php"> Register</a></li>
        <li><a href="login.php"> Log in</a></li>
        <li><a href="forget.php"> Forget password</a></li>
        <li><a href="#">Admin</a></li>
        <li><a href="#">online exam</a></li>
  <li><a href="#about">About us</a></li>
    </ul>
    <h1> CHANGE PASSWORD ?</h1>
    <br>
    <br>
    <br>
    <br>
    <div class="frgt">
        <label> Username    :</label>
        <input type="text" name="username" placeholder="username@email.com" required><br>
        <br>
        <label> old password:</label>
        <input type="password" name="oldpswrd" required>
        <br><br>
        <label> new password:</label>
        <input type="password" name="newpswrd" required>
        <br><br>
       
    </div>
    <button class="button" type="submit" name="submit">Submit</button>
    </form>
    </body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'iq_tester') or die("plz check database");
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $old_password=$_POST['oldpswrd'];
    $new_password=$_POST['newpswrd'];
    $query= mysqli_query($con,"update register set PASSWORD =$new_password where username='$username' and PASSWORD='$old_password'");
    if($query==1)
    {
        echo"<script>alert('password successfully updated')</script>";
    }
    else
    {
        echo" <script>alert('user and pass not valid')</script>";
    }
}
    ?>