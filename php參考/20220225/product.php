<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $id = $_GET["id"];
        switch($id){
            case 1:
                $name="Spiderman";
                break;
            case 2:
                $name="Ironman";
                break;  
        }
    ?>
    <title><?= $name ?></title>
    <!-- 如果只是要顯示一個東西可以如上縮寫 -->
</head>
<body>
    <h1><?= $name ?></h1>
    <?php echo $id; ?>
</body>
</html>