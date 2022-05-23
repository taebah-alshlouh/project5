<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cart</title>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&family=Patrick+Hand&family=Poppins:wght@100;200;300;400&family=Smooch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css%22%3E">
    <link rel="stylesheet" href="../style2.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
</head>

<body>
<div class="navbar">
        <div class="logo"><img src="../img/logo_kids.gif"width="80px"> </div>
       
        <nav style="font-family: 'Nunito', sans-serif;
 font-family: 'Patrick Hand', cursive;">
 <ul style="margin-right: 5%; font-family: 'Nunito', sans-serif;
 font-family: 'Patrick Hand', cursive;">
 <li><a href="../index.html">Home</a></li>
 <li><a href="../product/product.php">Products</a></li>
 <li><a href="../Welcome/ContactUs.html">Contact Us</a></li>
 <li><a href="../Welcome/AboutUs.html">About US</a></li>
 
 <li><a href="../Login/Login.php">Login</a></li>
 <li><a href="../Regestration/Signup.php">Sign Up</a></li>
 <li><a href="../User/User.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
 <li><a href=""><img style="position:absolute; margin-top:-2.5%; width:4%" src="../img/cart2.png" ></a></li>

 </ul> <hr style="width:70%; margin-left: 31%;">
        </nav>
     </div>
<!-- the cart table -->
<br>
<br>     
  <div class="container-fluied">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center m-0">Products in your cart!</h4>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>
                  <a href="cart.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');">
                  <i class="fa fa-trash trash" aria-hidden="true"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
            include_once '../Configration/connection.php';

            if(isset($_POST['update_update_btn'])){
               $update_value = $_POST['update_quantity'];
               $update_id = $_POST['update_quantity_id'];
               $update= "UPDATE cart SET quantity ='$update_value' WHERE product_id ='$update_id'";
               $update_quantity_query = mysqli_query($conn,$update);
   
            };

            if(isset($_GET['remove'])){
              $update_value = $_GET['remove'];
              $update= "DELETE FROM cart WHERE product_id ='$update_value'";
              $update_quantity_query = mysqli_query($conn,$update);
  
           };

           if(isset($_GET['clear'])){
            $update_value = $_GET['clear'];
            $update= "DELETE FROM cart ";
            $update_quantity_query = mysqli_query($conn,$update);

         };
            $stmt = $conn->prepare('SELECT * FROM products INNER JOIN cart ON products.product_id=cart.product_id');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):

              ?>
              <tr>
                <td><?= $row['product_id'] ?></td>
                <input type="hidden" class="pid" value="<?= $row['product_id'] ?>">
                <td><img src="<?php echo $row['img'];?>" width="50"></td>
                <td><?= $row['product_name'] ?></td>
                <td>
                  JD &nbsp;&nbsp;<?= number_format($row['price'],2); ?>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['price'] ?>">
                <td>
                  <!-- <input type="number" class="form-control itemQty" value="" style="width:75px;"> -->
                  <form  method="post">
                  <input type="hidden" name="update_quantity_id" value="<?php echo $row['product_id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $row['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn" class="update">
               </form>
                </td>
                <td>JD &nbsp;&nbsp;<?php echo $sub_total = ($row['price'] * $row['quantity']);?></td>
                <td>
                  <a href="cart.php?remove=<?= $row['product_id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');">
                  <i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
              </tr>
              <?php $grand_total += $sub_total;
              
              ?>
              <?php endwhile; ?>
              <tr>
                <td colspan="3">
                  <a href="../product/product.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b>JD</i>&nbsp;&nbsp;<?php echo $grand_total; ?></b></td>
                <td>
                  <a href="../checkout/checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
<?php
include('../footer.html')
?>



  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
</body>

</html>