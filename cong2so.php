<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cong2so.php" method="post">
    Nhap so 1: <input type="text" name="so1"><br>
    Nhap so 2: <input type="text" name="so2"><br>   
    <input type="submit">
    </form>
</body>
</html>

<?php
    if(!empty($_POST['so1']) && !empty($_POST['so2']))
    {
        $so1=$_POST['so1'];
        $so2=$_POST['so2'];
        $tong = $so1 + $so2;
        echo "Tong la:" .$tong;
    }
?>
