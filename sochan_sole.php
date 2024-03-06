<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sochan_sole.php" method="post">
    Nhap so: <input type="text" name="so"><br>   
    <input type="submit">
    </form>
</body>
</html>


<?php
    if(!empty($_POST['so']))
    {
        $so=$_POST['so'];
        if($so%2==0)
            echo $so." la so chan";
        else
            echo $so." la so le";
    }
?>
