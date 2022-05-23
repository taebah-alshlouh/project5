<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&family=Patrick+Hand&family=Poppins:wght@100;200;300;400&family=Smooch&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style2.css">
    <link rel="stylesheet" href="contact.css">
    <title>Contact Us</title>
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
 <li><a href="../Cart/cart.php"><img style="position:absolute; margin-top:-2.5%; width:4%" src="../img/cart2.png" ></a></li>

 </ul> <hr style="width:70%; margin-left: 31%;">
        </nav>
     </div>
     
    
    <section class="contact" id="contact">
        <div class="container">
            <div class="heading text-center">
                <h2>Contact
                    <span> Us </span></h2>
                <p>Stay In Touch</p>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3>Contact detail</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                    </div>
                    <div class="content">
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">Call Us :
                                <br>
                                <span>+12457836913 , +12457836913</span></h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                            <i class="far fa-envelope"></i>
                            <h4 class="d-inline-block">EMAIL Us :
                                <br>
                                <span>KidToys@gmail.com</span></h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="d-inline-block">ADDRESS :<br>
                                <span>6743 last street , Abcd, Xyz</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-block" type="submit">SEND</button>
                    </form>
                </div>
            </div>

            <!--------------------- map section ----------------------->
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13882.352531894103!2d35.0057587!3d29.557486499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sjo!4v1652880476038!5m2!1sen!2sjo" width="100%" height="350px" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> 
        </div>
    </section>
    <?php
    include('../footer.html')
    ?>


</body>
</html>