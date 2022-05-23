<?php
session_start();
include_once '../Configration/connection.php';
if (isset($_GET['submit'])){
     
    $loginEmail=$_GET['loginEmail'];
    $_SESSION['email']=$loginEmail;
    $loginPassword=$_GET['loginPassword'];
    $adminEmail_correct=true;
    $adminPass_correct=true;
    $loginEmail_correct =true;
    $loginPassword_correct=true;
    $sql1="SELECT * FROM register WHERE Email='$loginEmail';";
    $result= mysqli_query($conn,$sql1);
    $result_check= mysqli_num_rows($result);
    if ($result_check > 0) {
       
        while ($row=mysqli_fetch_assoc($result)) {

            print_r($row['Email']);
            print_r($row['Password']);

                if(($loginPassword==$row['Password'])){
                    $loginPassword_result="<span style=' color:green'>✅ Correct Password</span><br>";
                    $loginPassword_correct=true;
                   
                }else{
                    $loginPassword_result="<span style=' color:red'>❌Incorrect Password</span><br>";
                    $loginPassword_correct=false;
            }
        }
        
    }   
    
    if($loginEmail_correct && $loginPassword_correct){
        header('location:../index.php');
      
        $row['last-login']= date("d-m-Y - h:i:sa");
        
    }else
    echo '<script language="javascript">';
    echo 'alert("Incorrect Information")'; 
    echo '</script>';

    
    if($loginEmail=="admin@gmail.com"){
		if($loginPassword== "AdminAdmin1"){
            $loginEmail_result="<span style=' color:green'>✅ Correct Email</span><br>";
			$adminEmail_correct=true;
			$adminPass_correct=true;
	
		}else{
			$loginPassword_result="<span style=' color:red'>❌Incorrect Password</span><br>";
	    	$adminPass_correct=false;
		}
	}else{
		$loginEmail_result="<span style=' color:red'>❌Incorrect Email or Password</span><br>";
		$adminEmail_correct=false;
	}
	if ($adminEmail_correct && $adminPass_correct ){
		header('location:../Admindashboard.php');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>Login</title>
</head>
<body>

<div class="navbar">
       <div class="logo"><img src="../img/logo_kids.gif"width="100px"> </div>
      
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
<li><a href=""><img style="position:absolute; margin-top:-2.5%; width:4%" src="../img/cart2.png" ></a></li>

</ul> <hr style="width:70%; margin-left: 31%;">
</nav>
      
    </div>
    
        <form method="GET" class="reg-form">
        <fieldset>
        <h1 class="legend"><strong>L</strong>OGIN</h1><hr>
                <p class="welc">Welcome back! Login with your credentials</p>
                <div class="txt">
                <label class="reg-lbl" style="font-size:20px;font-weight: bold;color: green;">Email</label>
                <br>
                <!--Email-->
                <input type="email" name="loginEmail" id="loginEmail"   placeholder="Your Email" required ><br>
                <?php if(isset($loginEmail_result)){echo $loginEmail_result;}?>
                <br>
                <!--Password-->
                <label class="reg-lbl" style="font-size:20px;font-weight: bold;color: green;">Password</label>
                <br>
                <input type="password" name="loginPassword" id="loginPassword"   placeholder="Password" required><br>
                <?php if(isset($loginPassword_result)){echo $loginPassword_result;}?>
                <br>
                <input class="btn btn-warning"type="submit" value="Submit" name="submit">
<br><br>
                <span> <label class="link"> Don`t have an account !!<a href='../Regestration/Signup.php'>Sign Up</a></label></span><br>
                </div>
</fieldset>
        </form>
        <marquee behavior="alternate">
    <img src="https://img.freepik.com/free-vector/kids-train-toy-cartoon-style-vector-illustration-isolated-white-background_356415-1272.jpg?size=626&ext=jpg" alt="">
  </marquee>

</body>
</html>