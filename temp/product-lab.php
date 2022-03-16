<?php
require_once("../db_connect.php");
$id=$_GET["id"];

$sql="SELECT * FROM shop_products WHERE id=$id AND valid=1";
$result = $conn->query($sql);
$row_count=$result->num_rows;
$product=$result->fetch_assoc();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Product-Lab.php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-md-6 p-1">
                <div class="card p-1">
                <img src=<?=$product["image"]?> class="d-block w-100">
                </div>
            </div>
            <div class="col-md-6 p-1">
                <h2><?=$product["name"]?></h2>
                <h3>$ <?=$product["price"]?></h3>
                <?=$product["desc"]?>
                <h5>庫存數量: <?=$product["qty"]?></h5>
                <div class="d-grid">
                    <button class="btn btn-danger add-btn">加入購物車</button>
                 </div>
            </div>
            <hr>
            <div>
            <?=$product["desc"]?>
            </div>
        </div>

      </div>
    <!-- jQuery minified 3.6.0-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- axios 0.26.0-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        // $(".add-btn").click(function(){
        //     let id=$(this).data("id");
        //     // console.log(id)
        //     let formData=new FormData();
        //     formData.append('id', id);

        //     axios({
        //     method: "post",
        //     url: "/store/api/add-cart.php",
        //     data: formData,
        //     headers: {'Content-Type': "multipart/form-data"}
        //     })
        //     .then(function(response){
        //         console.log(response.data)
        //     })
        //     .catch(function(response){
        //         console.log(response)
        //     })
        // })
    </script>
  </body>
</html>