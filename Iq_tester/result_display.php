<html>
<head>
<title> result</title>
    <link rel="stylesheet" href="result.css">
  </head>
<body>
    <ul>
        <li><a href="home.php"> Home</a></li>
    </ul>
    <h1> YOUR RESULT !</h1>
    </body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'iq_tester') or die("plz check database");
    $username=$_POST['username'];
    $password=$_POST['pswrd'];
    $query = mysqli_query($con,"select *from result where username='$username' and PASSWORD='$password'");

echo"<table>";
while($row=mysqli_fetch_array($query)){
    echo"<tr><td>username :".$row['username']."</td><td>Total marks :".$row['Total_marks']."</td><td>Obtained :".$row['Obtained']."</td><td>Result :".$row['result']."</td></tr>";
}
echo"</table>";
?>