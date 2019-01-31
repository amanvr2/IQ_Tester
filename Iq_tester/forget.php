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
    <h1> Forget password ?</h1>
    <br>
    <br>
    <br>
    <br>
    <div class="frgt">
        <label> Username :</label>
        <input type="text" name="username" placeholder="username@email.com" required><br>
        <br>
        <br><br>
       
    </div>
    <button class="button" type="submit" name="submit">Submit</button>
    </form>
    </body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'iq_tester') or die("plz check database");
if(isset($_POST) & !empty($_POST))
{
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $sql="select * from register where username='$username'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count==1)
    {
        $r=mysqli_fetch_assoc($res);
        $password=$r['password'];
        $to=$r['username'];
        $subject="your recovered password";
        $message="please use this password to login".$password;
        $headers="from:amanvr2@gmail.com";
        if(mail($to,$subject,$message,$headers))
        {
            echo"your password has been sent to your email id";
        }
        else{
            echo"username doesnot exist in database";
            
        }
    
    }
    
}
?>