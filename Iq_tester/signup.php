<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="signup.css">
  </head>
<body>
    <form method="post">

    
    <ul>
        <li><a href="home.php"> Home</a></li>
        <li><a href="signup.php"> Register</a></li>
        <li><a href="login.php"> Log in</a></li>
        
        <li><a href="#">Admin</a></li>
        <li><a href="#">online exam</a></li>
  <li><a href="#about">About us</a></li>
    </ul>
    <h1> Registration page </h1>
    <form>
    <div class="frm">
    <label> First name :</label>
    <input type="text" name="firstname" value="" placeholder="first name" required><br><br>
    <label> Last name :</label>
    <input type="text" name="lastname" value="" placeholder="last name" required><br><br>
    <label> Username :</label>
    <input type="email" name="username" value="" placeholder="username@email.com" required><br><br>
    <label> Password :</label>
    <input type="password" name="password" value=""  required><br><br>
    <label> Mobile no :</label>
    <input type="tel" name="mobno" value="" placeholder="mobile no" required><br><br>
        <br>
         </div>
        
  <input type="submit" name="submit" value="sign up" class="button">
 
        
        
  
   
        </form></form>
</body>
</html>
    <?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'iq_tester') or die("plz check database");
if(isset($_POST['submit']))
{
$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
$mobile_no=$_POST['mobno'];
$ins=mysqli_query($con,"insert into register values('$first_name','$last_name','$username','$password','$mobile_no')");
if(!$ins)
{
echo"<script>alert('not submit successfully');</script>";
}
    else{
echo"<script>alert('submit successfully');</script>";


}
}
    ?>