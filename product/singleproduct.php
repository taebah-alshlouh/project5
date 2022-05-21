<?php  
include_once '../Configration/connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Details</title>
</head>
<body>
<br><br><br><br>
<section class="section-content padding-y bg">
    <div class="container">

        <!-- ============================ COMPONENT 1 ================================= -->
        <div class="card">
            <div class="row no-gutters">
                <?php
               ##########################################################################
                $product_query = "SELECT * FROM `products` WHERE product_id =$_GET[id]";
                $product_result = mysqli_query($conn, $product_query);
                if (mysqli_num_rows($product_result) > 0) {
                    while ($row = mysqli_fetch_assoc($product_result)) {
                ?>
                        <aside class="col-md-6">
                            <form action="cart.php?action=add&id=<?php echo $row["product_id"]; ?>" method="POST">
                                 <div class="img-big-wrap">
                                        <img src="<?php echo $row['img']; ?>" style= "width:92%; height:80%; margin-left:3%;" >
                                    </div> <!-- img-big-wrap.// -->

                                
                        </aside>
                        <main class="col-md-6 border-left">
                            <article class="content-body">
                                <h2 class="title" style= "color:darkred">Product name<?php echo $row['product_name']; ?></h2>

                                <div class="mb-3">
                                    <var class="price h4" style= "color:darkred"> Price: <?php echo $row['price']; ?> $</var>
                                </div>

                                <p><h4>Description:</h4> <?php echo $row['description']; ?></p>
                                <div class="col">
                                    <p class="card-text">Quantity:
                                        <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;">
                                    </p>
                                </div> <!-- col.// -->
                                <br>

                                <input type="hidden" name="hidden_product_name" value="<?php echo $row["product_name"]; ?>">
                                <input type="hidden" name="hidden_img" value="<?php echo $row["img"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" class="btn btn-block btn-success" value="Added to cart">
                            </article> <!-- product-info-aside .// -->
                        </main> <!-- col.// -->
                <?php  }
                } else {
                    echo "<h3>NO DATA FOUND.</h3>";
                } ?>
            </div> <!-- row.// -->
            </form>
        </div> <!-- card.// -->
        <!-- ============================ COMPONENT 1 END .// ================================= -->
        <br>

        <div class="row">
            <div class="col-md-9">

               <!-- <header class="section-heading">
                    <h3>Customer Reviews </h3>
                </header>
                 <article class="box mb-3">
                    <div class="icontext w-100">
                        <img src="./images/avatars/avatar2.jpg" class="img-xs icon rounded-circle">
                        <div class="text">
                            <span class="date text-muted float-md-right">14.12.2021 </span>
                            <h6 class="mb-1">Anuj Garg </h6>
                        </div>
                    </div> ### icontext.// 
                    <div class="mt-3">
                        <p>
                            Dummy comment Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip
                        </p>
                    </div>
                </article> -->
           <!-- </div>  col.// -->
        </div> <!-- row.// -->
    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

</body>

</html>