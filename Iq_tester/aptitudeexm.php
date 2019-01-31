<?php
session_start();
?>
<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="engexm.css">
  </head>
<body>
    <form method="post">
    <ul>
        <li><a href="home.php"> Home</a></li>
    </ul>
    <h1>
    APTITUDE EXAMINATION</h1>
    <div class="tble">
    <table border="1">
    <tr>
        <td colspan="5">
      Q1. The average of the first five multiples of 9 is ?
        </td>
        <td> <input type="radio" name="r1" value="20">20
                    </td>
       <td> <input type="radio" name="r1" value="27"> 27
                    </td>
        <td> <input type="radio" name="r1" value="28"> 28
                    </td>
        <td> <input type="radio" name="r1" value="30"> 30
        </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q2. Find the average of first 97 natural numbers ?
        </td>
        <td> <input type="radio" name="r2" value="47"> 47
                    </td>
       <td> <input type="radio" name="r2" value="37">37
                    </td>
        <td> <input type="radio" name="r2" value="48">48
                    </td>
        <td> <input type="radio" name="r2" value="49">49
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
       Q3. 1.14 expressed as a percent of 1.9 is ?
        </td>
        <td> <input type="radio" name="r3" value="6 %"> 6 %
                    </td>
       <td> <input type="radio" name="r3" value="10 %"> 10 %
                    </td>
        <td> <input type="radio" name="r3" value="60 %"> 60 %
                    </td>
        <td> <input type="radio" name="r3" value="90 %"> 90 %
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q4. Half percent written as a decimal is ?
        </td>
        <td> <input type="radio" name="r4" value="0.2"> 0.2
                    </td>
       <td> <input type="radio" name="r4" value="0.02">0.02
                    </td>
        <td> <input type="radio" name="r4" value="0.005">0.005
                    </td>
        <td> <input type="radio" name="r4" value="0.05"> 0.05
                    </td>
        
    </table>
        <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q5. If 2/3 of A=75% of B=0.6 of C , then A:B:c is?
        </td>
        <td> <input type="radio" name="r5" value="2:3:3"> 2:3:3
                    </td>
       <td> <input type="radio" name="r5" value="3:4:5"> 3:4:5
                    </td>
        <td> <input type="radio" name="r5" value="4:5:6"> 4:5:6
                    </td>
        <td> <input type="radio" name="r5" value="9:8:10"> 9:8:10
                    </td>
        
    </table>
        <br>
    </div>
    
    <button class="button" type="submit" name="next"> NEXT</button>
    </form>
    
    
    </body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'iq_tester') or die("plz check database");
if(isset($_POST['next']))
{
      $marks = 0;
    $r1 = $_POST['r1'];
    $r2 = $_POST['r2'];
    $r3 = $_POST['r3'];
    $r4 = $_POST['r4'];
    $r5 = $_POST['r5'];
    $a1 = 27;
    $a2 = 49;
    $a3 = '60 %';
    $a4 = 0.02;
    $a5 = '3:4:5';
    
        if($r1==$a1)
        {
            $marks=$marks+5;
        }
    if($r2==$a2)
    {
       $marks=$marks+5; 
    }
  if($r3==$a3)
  {
      $marks=$marks+5;
  }
    if($r4==$a4)
    {
        $marks=$marks+5;
    }
    if($r5==$a5)
    {
        $marks=$marks+5;
    }
   
   $_SESSION['mrks']+=$marks;
    $username=$_SESSION['username'];
    $password=$_SESSION['pswrd'];
    $total_marks=125;
    $obtained = $_SESSION['mrks'];
    if($obtained>50)
    {
        $result='pass';
    }
    else
    {
        $result='fail';
    }
    $ins=mysqli_query($con,"insert into result values('$username','$password','$total_marks','$obtained','$result')");
if(!$ins)
{
echo"<script>alert('not submit successfully');</script>";
}
    else{
echo"<script>alert('submit successfully');</script>";


}
}
    ?>
    
}
    ?>
    


    