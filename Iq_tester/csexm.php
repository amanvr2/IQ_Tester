<?php 
session_start();
?>
<html>
<head>
<title> form</title>
    <link rel="stylesheet" href="csexm.css">
  </head>
<body>
    <form method="POST">
    <ul>
        <li><a href="home.php"> Home</a></li>
    </ul>
    <h1>
    COMPUTER SCIENCE EXAMINATION</h1>
    <div class="tble">
    <table border="1">
    <tr>
        <td colspan="5">
        Q1. How many color dots make up one color pixel on a screen?
        </td>
        <td> <input type="radio" name="r1" value="256"> 256
                    </td>
       <td> <input type="radio" name="r1" value="16"> 16
                    </td>
        <td> <input type="radio" name="r1" value="3"> 3
                    </td>
        <td> <input type="radio" name="r1" value="1"> 1
        </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q2. Data is stored on diskettes in what form?
        </td>
        <td> <input type="radio" name="r2" value="ink"> ink
                    </td>
       <td> <input type="radio" name="r2" value="laser bubbles">laser bubbles
                    </td>
        <td> <input type="radio" name="r2" value="magnetism">magnetism
                    </td>
        <td> <input type="radio" name="r2" value="circuits"> circuits
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q3. Which of the following languages is more suited to a structured program ?
        </td>
        <td> <input type="radio" name="r3" value="Pl/1"> Pl/1
                    </td>
       <td> <input type="radio" name="r3" value="fortan">fortan
                    </td>
        <td> <input type="radio" name="r3" value="basic">basic
                    </td>
        <td> <input type="radio" name="r3" value="pascal"> pascal
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q4. A computer assisted method for the recording and anylizing of existing of existing or hypothetical system is?
        </td>
        <td> <input type="radio" name="r4" value="Data transmission"> Data transmission
                    </td>
       <td> <input type="radio" name="r4" value="Data flow">Data flow
                    </td>
        <td> <input type="radio" name="r4" value="Data capture">Data capture
                    </td>
        <td> <input type="radio" name="r4" value="Data processing"> Data processing
                    </td>
        <td> <input type="radio" name="r4" value="None of the above"> None of the above
                    </td></tr>
    </table>
        <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q5. The brain of any computer system is ?
        </td>
        <td> <input type="radio" name="r5" value="ALU"> ALU
                    </td>
       <td> <input type="radio" name="r5" value="Memory"> Memory
                    </td>
        <td> <input type="radio" name="r5" value="CPU"> CPU
                    </td>
        <td> <input type="radio" name="r5" value="Control unit"> Control unit
                    </td>
        <td> <input type="radio" name="r5" value="none of the above"> none of the above
                    </td></tr>
    </table>
        <br>
    </div>
    
    <button class="button" type="submit" name="next"> Next</button>
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
    $a1 = 256;
    $a2 = 'magnetism';
    $a3 = 'pascal';
    $a4 = 'Data flow';
    $a5 = 'CPU';
    
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
   
   $_SESSION['mrks']=$marks;
    
header("location:gkstrtpge.php");
}


?>