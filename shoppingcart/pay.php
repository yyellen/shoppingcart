<?php
require_once("../db_connect.php");
if(isset($_SESSION["cart"])):
    $order_valid=1;
    $now=date('Y-m-d H:i:s');
    $sql="INSERT INTO shop_order (valid, order_time) VALUES ('$order_valid', '$now') ";
    if ($conn->query($sql) === TRUE) {
        // echo "新資料輸入成功<br>";
        $order_id = $conn->insert_id;
        // echo "id 為 $order_id";
        foreach($_SESSION["cart"] as $product):
            $user_id =key($user);
            $product_id =key($product);
            $value=current($product );
            //取貨方式
            //$delivery =($id);
            $sqlDetail="INSERT INTO shop_order (user_id, product_id, amount, delivery) VALUES ('$user_id', '$product_id', '$value', '$delivery')";
            $conn->query($sqlDetail);

        endforeach;
        unset($_SESSION["cart"]);
        // $sqlDetail="INSERT INTO ";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

else:
    echo "購物車是空的";
    exit;
endif;
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Pay</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      繼續購物吧
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>