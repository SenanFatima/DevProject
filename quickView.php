<!DOCTYPE html>
<html>
<head>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electronic Shop</title>
  <link rel="stylesheet" href="exem.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!-- bootstrap links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- bootstrap links -->
  <!-- fonts links -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&amp;display=swap" rel="stylesheet">

  <!--swiper link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
</head>
<body>
<!--TOP NAV BAR-->
<div class="top-navbar">
  <section class="flex">
    <div class="icons">
      <a href="wishlist.php>"<i class="fas fa-heart"></i><span></span></a>
      <a href="cart.php>"<i class="fas fa-shopping-cart"></i><span></span></a>
      <div id="user-btn" class="fas fa-user"></div>
   </div>
    </div>
  </section>
    <!-- <p>WELCOME TO OUR SHOP</p> -->
    
    <!--
     <div class="profile">
        <p></p>
        <a href="/update_profile.php" class="btn">update profile</a>
        <div class="flex-btn">
           <a href="admin_login.php" class="option-btn">login</a>
        </div>
        <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
     </div>
     -->

    
</div>
      
</div>
<!--OFFICIAL NAV BAR-->  
<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html" id="logo"><img src="logo2.jpeg" width="225"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><img src="./images/menu.png" alt="" width="30px"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Help</a>
        </li>
        
        
      </ul>
      <form class="d-flex" id="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
    
</nav>





<!--Footer...........-->
<footer id="footer">
<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <img src="" width="220">
        <p>
          Morocco
        </p>
        <strong>Phone:</strong> +000000000000000 <br>
        <strong>Email:</strong> electronicshop@.com <br>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4><a href="#">About us</a></h4>
      
      </div>


      <div class="col-lg-3 col-md-6 footer-links">
        <h4><a href="#">FAQs</a></h4>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Contact us</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, quibusdam.</p>

        <div class="socail-links mt-3">
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-skype"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        </div>
      
      </div>

    </div>
  </div>
</div>
<hr>
<div class="container py-4">
  <div class="copyright">
    © Copyright <strong><span>Neditel.com</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <p>Since 2023</p>
  </div>
</div>

</footer>
<div class="arrow">
    <a href="#" class="arrow"><i><img src="arrow.png" alt=""></i></a>
  </div>
  
  

</body>


</html>