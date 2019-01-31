<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="engstrtpge.css">
  </head>
<body>
    <form method="POST">
    <ul>
        <li><a href="home.php"> Home</a></li>
    </ul>
    <h1> ENGLISH </h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <button class="button" type="submit" name="next"> NEXT</button>
    </form>
    </body>
</html>
<?php
if(isset($_POST['next']))
{
    header("location:engexam.php");
}
    ?>