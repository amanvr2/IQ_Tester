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
    ENGLISH EXAMINATION</h1>
    <div class="tble">
    <table border="1">
    <tr>
        <td colspan="5">
      Q1. One who abandons his religious faith ?
        </td>
        <td> <input type="radio" name="r1" value="Apostate">Apostate
                    </td>
       <td> <input type="radio" name="r1" value="prostate"> prostate
                    </td>
        <td> <input type="radio" name="r1" value="profane"> profane
                    </td>
        <td> <input type="radio" name="r1" value="agnostic"> agnostic
        </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q2. A hater of knowledge and learning ?
        </td>
        <td> <input type="radio" name="r2" value="bibliophile"> bibliophile
                    </td>
       <td> <input type="radio" name="r2" value="philologist">philologist
                    </td>
        <td> <input type="radio" name="r2" value="misogonist">misogonist
                    </td>
        <td> <input type="radio" name="r2" value="misologist">misologist
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
       Q3. Commencement of words with the same letter?
        </td>
        <td> <input type="radio" name="r3" value="Pun"> Pun
                    </td>
       <td> <input type="radio" name="r3" value="allitertaion"> allitertaion
                    </td>
        <td> <input type="radio" name="r3" value=" transferred epithet"> transferred epithet
                    </td>
        <td> <input type="radio" name="r3" value="Oxymoron"> Oxymoron
            </td></tr></table>
    <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q4. person who does not believe in the existence of god ?
        </td>
        <td> <input type="radio" name="r4" value="Theist"> Theist
                    </td>
       <td> <input type="radio" name="r4" value="Heretic">Heretic
                    </td>
        <td> <input type="radio" name="r4" value="Atheist">Atheist
                    </td>
        <td> <input type="radio" name="r4" value="Fanatic"> Fanatic
                    </td>
        
    </table>
        <br>
    <table border="1">
        <tr>
            
        <td colspan="5">
        Q5. One who believes in the power of fate ?
        </td>
        <td> <input type="radio" name="r5" value="Pun"> Pun
                    </td>
       <td> <input type="radio" name="r5" value="allitertaion"> allitertaion
                    </td>
        <td> <input type="radio" name="r5" value="transferred epithet"> transferred epithet
                    </td>
        <td> <input type="radio" name="r5" value="fatalist"> fatalist
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
    $a1 = 'Apostate';
    $a2 = 'misologist';
    $a3 = 'allitertaion';
    $a4 = 'Atheist';
    $a5 = 'fatalist';
    
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
    header("location:reasoningstrtpge.php");
}
?>
    