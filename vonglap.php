<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="vonglap.php" method="post">
        Nhập N: <input type="text" name="N">
        <input type="submit" value="Tính">
    </form>
</body>
</html>

<?php
    if(!empty($_POST['N']))
    {
        $N = $_POST['N'];
        //Tinh N!
        $gt=1;
        for($i=1;$i<=$N;$i++)
            $gt *= $i;    
        echo $N ."!=" . $gt;
    }
?>
