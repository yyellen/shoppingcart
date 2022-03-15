<?php
require_once("../db_connect.php");
$id=$_GET["id"];
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Store-Lab</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">

        <!-- <div class="gx-5 ">
            <h2 >活動商品</h2>
            <div class="row-cols-1 row-cols-lg-4 row-cols-md-2 card-group">
            <?php foreach($products as $product): ?>
                <div class="col p-1">
                    <div class="card p-1">
                        <img src="https://fakeimg.pl/300x300/?retina=1&text=活動banner1" class="d-block w-100" alt="...">
                        <h5><?=$product["name"]?></h5>
                        <h6>$ <?=$product["price"]?></h6>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div> -->

        
        <div class="row">
            <div class="col-md-6">
                <div class="card text-start|center|end">
                <img src=<?=$product["image"]?> class="d-block w-100">
                </div>
            </div>
            <div class="col-md-6">
                <h5><?=$product["name"]?></h5>
                <h6>$ <?=$product["price"]?></h6>
            </div>
        </div>


          <!-- <?php //var_dump($products); ?>
          <div class="row">
              <?php foreach($products as $product): ?>
              <div class="col-md-4 col-lg-3 mb-3">
                  <div class="card p-3 h-100 d-flex flex-column justify-content-between">
                      <h2 class="h3"><?=$product["name"]?></h2>
                      <div>$ <?=$product["price"]?></div>
                      <img :src="parseImgPath(img_path)">
                      <div class="d-grid">
                          <button class="btn btn-info add-btn" data-id="<?=$product["id"]?>" >加入購物車</button>
                      </div>
                  </div>
              </div>
              <?php endforeach; ?>
          </div>
          <div class="py-3 text-center">
                <a class="btn btn-info" href="cart.php">購物車</a>
          </div> -->
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