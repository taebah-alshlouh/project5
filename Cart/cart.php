<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/landing.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <title>Shopping Cart </title>
</head>
<body>


<div class="land-container">
     <div class="navbar">
       <div class="logo"><img src="../img/logo kids.jpg"width="180px"> </div>
       <nav>
          <ul>
               <li><a href="">Home</a></li>
               <li><a href="">Products</a></li>
               <li><a href="">Contact Us</a></li>
               <li><a href="">About US</a></li>
               <li><a href="">CART</a></li>
         </ul>
       </nav>
     </div>
   </div>
<!-- ////////////the shopping cart/////////////////////// -->
   <div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>Shopping Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                    <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>
        
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark">Product 1</a>
                          <small>
                            <span class="text-muted">Color:</span>
                            <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                            <span class="text-muted">Size: </span> EU 37 &nbsp;
                            <span class="text-muted">Ships from: </span> China
                          </small>
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">$57.55</td>
                    <td class="align-middle p-4"><input type="text" class="form-control text-center" value="2"></td>
                    <td class="text-right font-weight-semibold align-middle p-4">$115.1</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                  </tr>
        
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark">Product 2</a>
                          <small>
                            <span class="text-muted">Color:</span>
                            <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#000;"></span> &nbsp;
                            <span class="text-muted">Storage: </span> 32GB &nbsp;
                            <span class="text-muted">Warranty: </span> Standard - 1 year &nbsp;
                            <span class="text-muted">Ships from: </span> China
                          </small>
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">$1049.00</td>
                    <td class="align-middle p-4"><input type="text" class="form-control text-center" value="1"></td>
                    <td class="text-right font-weight-semibold align-middle p-4">$1049.00</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                  </tr>
        
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark">Product 3</a>
                          <small>
                            <span class="text-muted">Ships from: </span> Germany
                          </small>
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">$20.55</td>
                    <td class="align-middle p-4"><input type="text" class="form-control text-center" value="1"></td>
                    <td class="text-right font-weight-semibold align-middle p-4">$20.55</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                  </tr>
        
                </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
        
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              <div class="mt-4">
                <label class="text-muted font-weight-normal">Promocode</label>
                <input type="text" placeholder="ABC" class="form-control">
              </div>
              <div class="d-flex">
                <div class="text-right mt-4 mr-5">
                  <label class="text-muted font-weight-normal m-0">Discount</label>
                  <div class="text-large"><strong>$20</strong></div>
                </div>
                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Total price</label>
                  <div class="text-large"><strong>$1164.65</strong></div>
                </div>
              </div>
            </div>
        
            <div class="float-right">
              <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
              <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
            </div>
        
          </div>
      </div>
  </div>
 <!------------- footer section start ----------------->
 <div class="container-fluied">
        <footer
                class="text-center text-lg-start text-white"
                style="background-color: #929fba"
                >
          <!-- Grid container -->
          <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
              <!--Grid row-->
              <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">
                    Toys Shop
                  </h6>
                  <p>
                    Toys shop has announced that Toys store is opening , its separate platform that provides The most distinctive games that the child spends his time enjoying and learning, has amassed more than 35 million customers.
                  </p>
                </div>
                <!-- Grid column -->
      
                <hr class="w-100 clearfix d-md-none" />
      
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Categores</h6>
                  <p>
                    <a class="text-white">Electronic Toys</a>
                  </p>
                  <p>
                    <a class="text-white">Crative Toys</a>
                  </p>
                  <p>
                    <a class="text-white">Educational Toys</a>
                  </p>
                  <p>
                    <a class="text-white">Dolls Toys</a>
                  </p>
                </div>
                <!-- Grid column -->
      
                <hr class="w-100 clearfix d-md-none" />
      
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />
      
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                  <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                  <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                  <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                  <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
      
                  <!-- Facebook -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #3b5998"
                     href="#!"
                     role="button"
                     ><i class="fab fa-facebook-f"></i
                    ></a>
      
                  <!-- Twitter -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #55acee"
                     href="#!"
                     role="button"
                     ><i class="fab fa-twitter"></i
                    ></a>
      
                  <!-- Google -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #dd4b39"
                     href="#!"
                     role="button"
                     ><i class="fab fa-google"></i
                    ></a>
      
                  <!-- Instagram -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #ac2bac"
                     href="#!"
                     role="button"
                     ><i class="fab fa-instagram"></i
                    ></a>
      
                  <!-- Linkedin -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #0082ca"
                     href="#!"
                     role="button"
                     ><i class="fab fa-linkedin-in"></i
                    ></a>
                  <!-- Github -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #333333"
                     href="#!"
                     role="button"
                     ><i class="fab fa-github"></i
                    ></a>
                </div>
              </div>
              <!--Grid row-->
            </section>
            <!-- Section: Links -->
          </div>
          <!-- Grid container -->
      
          <!-- Copyright -->
          <div
               class="text-center p-3"
               style="background-color: rgba(0, 0, 0, 0.2)"
               >
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/"
               >MDBootstrap.com</a
              >
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->

</body>
</html>