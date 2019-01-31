<?php
session_start();
?>
<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="gkexm.css">
  </head>
<body>
    <form method="post">
    <ul>
        <li><a href="home.php"> Home</a></li>
    </ul>
    <h1>
    GENERAL KNOWLEDGE EXAMINATION</h1>
    <div class="tble">
    <table border="1">
    <tr>
        <td colspan="5">
      Q1. A parallel port is most often used by ?
        </td>
        <td> <input type="radio" name="r1" value="mouse">mouse
                    </td>
        <td> <input type="radio" name="r1" value="monitor"> monitor
                    </td>
        <td> <input type="radio" name="r1" value="printer"> printer
                    </td>
        <td> <input type="radio" name="r1" value="keyboard"> keyboard
        </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q2. Bluetooth technology allows ?
        </td>
        <td> <input type="radio" name="r2" value="landline to mobile communication"> landline to mobile communication
                    </td>
       <td> <input type="radio" name="r2" value="wireless communication between communication">wireless communication between communication
                    </td>
        <td> <input type="radio" name="r2" value="signal transmission on mobile phone">signal transmission on mobile phone only
                    </td>
        <td> <input type="radio" name="r2" value="satellite telivision communication">satellite telivision communication
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
       Q3. which of the following is not an example of optical disk ?
        </td>
        <td> <input type="radio" name="r3" value="memory disk"> memory disk
                    </td>
       <td> <input type="radio" name="r3" value="magnetic disk">magnetic disk
                    </td>
        <td> <input type="radio" name="r3" value="hard disk">hard disk
                    </td>
        <td> <input type="radio" name="r3" value="digital versatile disk"> digital versatile disk
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q4. which of the following is an example of storage devices?
        </td>
        <td> <input type="radio" name="r4" value="tapes"> tapes
                    </td>
       <td> <input type="radio" name="r4" value="dvd">dvd
                    </td>
        <td> <input type="radio" name="r4" value="magnetic disks">magnetic disks
                    </td>
        <td> <input type="radio" name="r4" value="all of these"> all of these
                    </td>
        
    </table>
        <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q5. ic chips used in ?
        </td>
        <td> <input type="radio" name="r5" value="silicon"> silicon
                    </td>
       <td> <input type="radio" name="r5" value="chromium"> chromium
                    </td>
        <td> <input type="radio" name="r5" value="silver"> silver
                    </td>
        <td> <input type="radio" name="r5" value="lead"> lead
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
    $a1 = 'printer';
    $a2 = 'wireless communication between communication';
    $a3 = 'digital versatile disk';
    $a4 = 'all of these';
    $a5 = 'silicon';
    
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
    header("location:engstrtpge.php");
}
?>