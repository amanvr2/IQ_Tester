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
    REASONING EXAMINATION</h1>
    <div class="tble">
    <table border="1">
    <tr>
        <td colspan="5">
      Q1. BEH, DGJ,(?),EJO,GLQ,INS?
        </td>
        <td> <input type="radio" name="r1" value="FLR">FLR
                    </td>
       <td> <input type="radio" name="r1" value="FIS">FIS
                    </td>
        <td> <input type="radio" name="r1" value="FKO"> FKO
                    </td>
        <td> <input type="radio" name="r1" value="FIL"> FIL
        </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q2. APZLT,CQYNR,ERXPP,GSWRN,... ?
        </td>
        <td> <input type="radio" name="r2" value="KVIJUJ"> KVIJUJ
                    </td>
       <td> <input type="radio" name="r2" value="JUUVK">JUUVK
                    </td>
        <td> <input type="radio" name="r2" value="ITVTL">ITVTL
                    </td>
        <td> <input type="radio" name="r2" value="KUUVK">KUUVK
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
       Q3.light::sun::heat::... ?
        </td>
        <td> <input type="radio" name="r3" value="electricity"> electricity
                    </td>
       <td> <input type="radio" name="r3" value="moon"> moon
                    </td>
        <td> <input type="radio" name="r3" value="fire"> fire
                    </td>
        <td> <input type="radio" name="r3" value="star"> star
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q4. parrot::cage::man:: ... ?
        </td>
        <td> <input type="radio" name="r4" value="home"> home
                    </td>
       <td> <input type="radio" name="r4" value="motor car">motor car
                    </td>
        <td> <input type="radio" name="r4" value="forest">forest
                    </td>
        <td> <input type="radio" name="r4" value="prison"> prison
                    </td>
        
    </table>
        <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q5. 8 , 20 , 36, 56 ?
        </td>
        <td> <input type="radio" name="r5" value="80"> 80
                    </td>
       <td> <input type="radio" name="r5" value="100"> 100
                    </td>
        <td> <input type="radio" name="r5" value="64"> 64
                    </td>
        <td> <input type="radio" name="r5" value="84"> 84
                    </td>
        
    </table>
        <br>
    </div>
    
    <button class="button" type="submit" name="next"> NEXT</button>
    </form>
    
    
    </body>
</html>
<?php
if(isset($_POST['next']))
{
         $marks = 0;
    $r1 = $_POST['r1'];
    $r2 = $_POST['r2'];
    $r3 = $_POST['r3'];
    $r4 = $_POST['r4'];
    $r5 = $_POST['r5'];
    $a1 = 'FIL';
    $a2 = 'ITVTL';
    $a3 = 'fire';
    $a4 = 'home';
    $a5 = 80;
    
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
    header("location:aptitude.php");
}
?>
 