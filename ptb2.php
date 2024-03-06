<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTB2</title>
</head>
<body>
    <form action="ptb2.php" method="post">
        <h1>GIẢI PHƯƠNG TRÌNH BẬC 2: AX<sup>2</sup> + BX + C =0</h1>
        Hệ số a: <input type="text" value="" name="hs_A">
        <br>
        Hệ số b: <input type="text" value="" name="hs_B">
        <br>
        <input type="submit" name="submit" value="Giải PT">
    </form>    
</body>

</html><?php
     if(!empty($_POST['hs_A']) && !empty($_POST['hs_B']) &&
        !empty($_POST['hs_C']))
     {
         $A=$_POST['hs_A'];
         $B=$_POST['hs_B'];
         $C=$_POST['hs_C'];
         $Delta = 
         if(Delta<0)
            echo
     }
?>