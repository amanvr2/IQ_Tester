<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="result.css">
  </head>
<body>
    <form action="result_display.php" method="post">
    <ul>
        <li><a href="home.php"> Home</a></li>
    </ul>
    <h1> RESULTS</h1>
    <br>
    <br>
    <br>
    <br>
    <div class="result">
        <label> Username :</label>
        <input type="text" name="username" placeholder="username@email.com" required><br>
        <br>
        <label> Password :</label>
        <input type="password" name="pswrd" value=""required><br><br>
       
    </div>
    <input class="button" type="submit" name="submit" value="check result">
    </form>
    </body>
</html>
<?php
/*$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'iq_tester') or die("plz check database");
    
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['pswrd'];
    $query = mysqli_query($con,"select *from result where username='$username' and PASSWORD='$password'");
    $row = mysqli_num_rows($query);
    if($row==1)
    {
    
    header("location:result_display.php");
}
    else{
        echo"<script>alert('user not valid')</script>";
    }
}*/
?>