<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detail</title>
</head>
<body>
    <?php
        $stdlist = array(array(1, "Nguyen Van An", 8),
                        array(2, "Tran Thi Bich", 7),
                        array(3, "Le Hong Ha", 9));
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            if($id >= 1 && $id <= 3)
            {
    ?>
            <h1 style="color:blue;">Student Detail</h1>
            <p>Id: <?=$stdlist[$id-1][0]?></p>
            <p>Name: <?=$stdlist[$id-1][1]?></p> 
            <p>Mark: <?=$stdlist[$id-1][2]?></p>
    <?php         
            }
            else
            {
                echo"id not found";
            }
        }
    ?>
</body>
</html>