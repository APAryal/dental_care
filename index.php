<?php 
$conn = mysqli_connect('localhost:3307', 'root', '','contact_db') or die('connection failed');
if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$number = $_POST['number'];
$date = $_POST['date'];
$insert = mysqli_query($conn, "INSERT INTO 'contact_form' (name, email, number, date) 
VALUES('$name ', '$email', '$number','$date')  ") or die('query failed');
if($insert){
$message[] = 'appointment made successfully';
}else{
$message[] ='appointment failed';
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dentist website</title>
    <!-- font awesome cdn link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="script/style.css">

</head>
<body>
  <!-- header section startss   -->
<header class="header fixed-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <a href="#home" class="logo">dental
                <span>Care.</span>
            </a>
            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>
            <a href="#contact" class="link-btn">make appointment</a>
            <div id="menu-btn" class="fas fa-bars"></div>
                       
        </div>
    </div>
</header>

  <!-- header section ends -->
  <!-- home section starts -->
 
  <section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>let us brighten your smile</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur id laborum quod minima expedita minus? Rem non laudantium sequi voluptatibus?</p>
                <a href="#contact" class="link-btn">make appointment</a>
            
            </div>
        </div>
    </div>
  </section>
   <!-- home section ends -->
   <!-- about section starts -->
   <section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <img src="img/1.jpg" alt=" " class="w-100 mb-5 mb-md-0" >
            </div>
            <div class="col-md-6 content">
              <span>about us</span>
              <h3>True Healthcare for your family</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt vitae quos ab, obcaecati minus, ratione doloribus amet est eum rem asperiores temporibus aliquid. Dignissimos ratione non dolorem accusantium nostrum? Velit. ipsum dolor sit amet consectetur, adipisicing elit. Enim voluptatum labore laboriosam voluptate voluptas ea aliquam quibusdam laudantium deserunt optio.</p>
              <a href="#contact" class="link-btn">make appointment</a>
            </div>
        </div>
    </div>
   </section>
    <!-- about section ends -->
    <!-- service section starts -->
<section class="services" id ="services">
  <h1 class="heading">our services</h1>
  <div class="box-container container">
    <div class="box">
         <img src="img/logo2.svg" alt="" height="50px"width="50px">
        <h3>Alignment specialist</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, fugit.</p>
    </div>
        <div class="box">
        <img src="img/logo4.svg" alt="" height="50px"width="50px">
        <h3>Cosmetic Dentistry</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, fugit.</p>
    </div>
     <div class="box">
        <img src="img/logo3.svg" alt="" height="50px"width="50px">
        <h3>Oral hygiene Experts</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, fugit.</p>
    </div>
     <div class="box">
        <img src="img/logo1.svg" alt="" height="50px"width="50px">
        <h3>root canal specialist</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, fugit.</p>
    </div>
     <div class="box">
        <img src="img/logo2.jpg" alt="" height="50px"width="50px">
        <h3>live Dental Advisory</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, fugit.</p>
    </div>
     <div class="box">
        <img src="img/logo2.jpg" alt="" height="50px"width="50px">
        <h3>Cavity inspection</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, fugit.</p>
    </div>
  </div>
</section>

    <!-- service section ends -->
    <!-- process section starts -->
    <section class="process">
        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="img/3-3.png" alt="" height="100px"width="100px">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet!</p>
            </div>
             <div class="box">
                <img src="img/1-1.png" alt=""height="100px" width="100px">
                <h3>Pediatric Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet!</p>
            </div>
             <div class="box">
                <img src="img/2-2.jpg" alt=""height="100px" width="100px">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet!</p>
            </div>
        </div>
    </section>
    <!-- process section ends -->
    <!-- reviews section starts  -->
    <section class="reviews" id="reviews">
   <h1 class="heading">satisfied clients</h1>
   <div class="box-container container">
    <div class="box">
        <img src="img/2-2.jpg" alt=""height="100px" width="100px">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>apsu aryal</h3>
        <span>satisfied  client</span>
    </div>
    <div class="box">
        <img src="img/2-2.jpg" alt=""height="100px" width="100px">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>apsu aryal</h3>
        <span>satisfied  client</span>
    </div>
    <div class="box">
        <img src="img/2-2.jpg" alt=""height="100px" width="100px">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>apsu aryal</h3>
        <span>satisfied  client</span>
    </div>
   </div>
    </section>
    <!-- reviews section ends  -->
    <!-- contact section starts -->
    <section class="contact" id="contact">
    <h1 class="heading">make appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php  
    if(isset($message)){
    foreach ($message as $message){
    echo'<p class="message">' .$message.'</p>';
    }}
    ?>
    
    <span>your name:</span>
    <input type="text" name="name" placeholder="Enter your name"  class="box">
    <span>your email:</span>
       <input type="email" name="email" placeholder="Enter your email"  class="box"> 
       <span>your number:</span>
       <input type="number" name="number" placeholder="Enter your number"  class="box">  
       <span>appointment date:</span>
       <input type="datetime-local" name="date"  class="box">   
       <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>
    </section>
    
    <!-- contact section ends -->
 <!--footer section starts-->
 <section class="footer">
 <div class="box-container container">
 <div class="box">
 <i class="fas fa-phone"> </i>
 <h3> phone number</h3>
 <p>9824756577</p>
 <p>9845348798</p>
 </div>
 <div class="box">
 <i class="fas fa-map-marker-alt"></i>
 <h3>our address</h3>
 <p>nepal, kathmandu - 400104</p>
 </div>
  <div class="box">
 <i class="fas fa-clock"></i>
 <h3>opening hours</h3>
 <p>00:07am to 10:00pm</p>
 </div>
  <div class="box">
 <i class="fas fa-envelope"> </i>
 <h3> email address</h3>
 <p>apsara@gmail.com</p>
 <p>aryal@gmail.com</p>
 <p>9823457634</p>

 </div>
 </div>
 <div class="credit">&copy; copyright @<?php echo date ('Y');
 ?>by<span>mr.web designer</span>
</div>
 </section>
 <!--footer section ends-->


    




<!-- custom js file link -->
<script src="script.js"></script>
</body>
</html>