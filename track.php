<?php
session_start();
isset( $_SESSION['id'] ) or die( header( 'location:tracking.php' ) );
$track = $_SESSION['id'];
$conn = mysqli_connect( 'localhost', 'root', '', 'global' );
$select = mysqli_query( $conn, "select * from booking where id='$track'" );
$row = mysqli_fetch_array( $select);

?>
<!doctype html>
<html lang = 'en'>

<head>
<title>Global Cargo Service</title>
<meta charset = 'utf-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1, shrink-to-fit=no'>

<!- -===  === FAVICON ICON ===  ===  = -->
<link rel = 'shortcut icon' type = 'image/ico' href = 'images/favicon.png' />

<link href = 'https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700' rel = 'stylesheet'>
<script src = 'https://kit.fontawesome.com/yourcode.js'></script>
<link rel = 'stylesheet' href = 'fonts/icomoon/style.css'>
<link rel = 'stylesheet' href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel = 'stylesheet' href = 'css/bootstrap.min.css'>
<link rel = 'stylesheet' href = 'css/jquery.fancybox.min.css'>
<link rel = 'stylesheet' href = 'css/owl.carousel.min.css'>
<link rel = 'stylesheet' href = 'css/owl.theme.default.min.css'>
<link rel = 'stylesheet' href = 'fonts/flaticon/font/flaticon.css'>
<link rel = 'stylesheet' href = 'css/aos.css'>

<link rel = 'stylesheet' href = 'css/style.css'>
<link rel = 'stylesheet' href = 'custom.css'>

</head>

<body data-spy = 'scroll' data-target = '.site-navbar-target' data-offset = '300'>

<div id = 'overlayer'></div>
<div class = 'loader'>
<div class = 'spinner-border text-primary' role = 'status'>
<span class = 'sr-only'>Loading...</span>
</div>
</div>

<div class = 'site-wrap' id = 'home-section'>

<div class = 'site-mobile-menu site-navbar-target'>
<div class = 'site-mobile-menu-header'>
<div class = 'site-mobile-menu-close mt-3'>
<span class = 'icon-close2 js-menu-toggle'></span>
</div>
</div>
<div class = 'site-mobile-menu-body'></div>
</div>

<div class = 'top-bar'>
<div class = 'container'>
<div class = 'row'>
<div class = 'col-12'>
<a href = '#' class = ''><span class = 'mr-2  icon-envelope-open-o'></span> <span

class = 'd-none d-md-inline-block'>info@globalcargoservice.com</span></a>
<span class = 'mx-md-2 d-inline-block'></span>
<a href = '#' class = ''><span class = 'mr-2  icon-phone'></span> <span

class = 'd-none d-md-inline-block'>021-34711110</span></a>

<div class = 'float-right'>

<a href = '#' class = ''><span class = 'mr-2  icon-twitter'></span> <span

class = 'd-none d-md-inline-block'>Twitter</span></a>
<span class = 'mx-md-2 d-inline-block'></span>
<a href = '#' class = ''><span class = 'mr-2  icon-facebook'></span> <span

class = 'd-none d-md-inline-block'>Facebook</span></a>

</div>

</div>

</div>

</div>
</div>

<header class = 'site-navbar js-sticky-header site-navbar-target' role = 'banner'>

<div class = 'container'>

<div class = 'row align-items-center position-relative'>

<div class = 'site-logo'>
<img src = 'images/logo.png' alt = 'Logo'>
</div>

<div class = 'col-12'>
<nav class = 'site-navigation text-right ml-auto ' role = 'navigation'>

<ul class = 'site-menu main-menu js-clone-nav ml-auto d-none d-lg-block'>
<li><a href = 'index.php' class = 'nav-link'>Home</a></li>
<li><a href = 'index.php' class = 'nav-link'>Services</a></li>

<li class = 'has-children'>
<a href = 'index.php' class = 'nav-link'>About Us</a>
<ul class = 'dropdown arrow-top'>
<li><a href = 'index.php' class = 'nav-link'>Team</a></li>
<li><a href = 'index.php' class = 'nav-link'>Pricing</a></li>
</ul>
</li>

<li><a href = 'index.php' class = 'nav-link'>Get a Quote</a></li>

<li><a href = 'index.php' class = 'nav-link'>Why Us</a></li>
<li><a href = 'index.php' class = 'nav-link'>Clients</a></li>
<li><a href = 'index.php' class = 'nav-link'>Contact</a></li>
<li><a href = 'index.php' class = 'nav-link'>Login</a></li>
</ul>
</nav>

</div>

<div class = 'toggle-button d-inline-block d-lg-none'><a href = '#' class = 'site-menu-toggle py-5 js-menu-toggle text-warning'><span class = 'icon-menu h3'></span></a></div>

</div>
</div>

</header>

<div class = 'container-fluid mt-100 mb-100'>
<div id = 'ui-view'>
<div>
<div class = 'card'>
<div class = 'card-header col-sm-12 text-center'>
<h1>Tracking No = <strong><?php echo $row[0];?></strong></h1>
</div>
<div class = 'row mt-5'>
<div class = 'col-sm-6 mb-1 text-center'>
<h3 class = 'mb-4'>Sender Detail</h3>
<div>
Sender Name : <?php echo $row[1];?>
</div>
<br>
<div>
Sender Number : <?php echo $row[2];?>
</div>
<br>
<div>
Sender E-mail : <?php echo $row[4];?>
</div>
<br>
<div>
Sender Address : <?php echo $row[3];?>
</div>
<br>
</div>
<div class = 'col-sm-6 mb-4 text-center'>
<h3 class = 'mb-4'>Receiver Detail</h3>
<div>
 Receiver Name : <?php echo $row[5];?>
</div>
<br>
<div>
Receiver Number : <?php echo $row[6];?>
</div>
<br>
<div>
Receiver E-mail : <?php echo $row[8];?>
</div>
<br>
<div>
Receiver Address : <?php echo $row[7];?>
</div>
<br>
</div>
 </div>



 <div class = 'row mb-4'>
 <div class = 'col-sm-12 mb-5'>
 <h3 class='text-center'>Consignment Detail</h3>
 </div>
<div class = 'col-sm-4 mb-1'>
<div>
Agent Name : <?php echo $row[9];?>
</div>
<br>
<div>
Type : <?php echo $row[10];?>
</div>
<br>
<div>
No of Packages : <?php echo $row[11];?>
</div>
<br>
<div>
Quantity : <?php echo $row[12];?>
</div>
<br>
<div>
Weight : <?php echo $row[13];?>
</div>
<br>
</div>
<div class = 'col-sm-4 mb-4'>
<div>
Product : <?php echo $row[14];?>
</div>
<br>
<div>
Origin : <?php echo $row[15];?>
</div>
<br>
<div>
Destination : <?php echo $row[16];?>
</div>
<br>
<div>
Vehicle No : <?php echo $row[17];?>
</div>
<br>
<div>
Booking Date : <?php echo $row[18];?>
</div>
<br>
</div>
<div class = 'col-sm-4' >
<div>
Delivery Date : <?php echo $row[19];?>
</div>
<br>
<div>Booking Time: <?php echo $row[20];?>
</div>
<br>
<div>Amount : <?php echo $row[21];?>
</div>
<br>
<div>
Payment Method : <?php echo $row[22];?>
</div>
<br>
</div>    
 </div>

<div class = 'progress'>
<ol>
<li>
<img src = 'images/booking1.jpg'><br>
<i class = 'fa fa-check'></i>
<p>Booking</p>
</li>
<li>
<img src = 'images/otw1.png'><br>
<i class = 'fa fa-times'></i>
<p>On the Way</p>
</li>
<li>
<img src = 'images/delivered1.jpg'><br>
<i class = 'fa fa-times'></i>
<p>Delivered</p>
</li>
</ol>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

<footer class = 'site-footer'>
<div class = 'container'>
<div class = 'row'>
<div class = 'col-md-6'>
<div class = 'row'>
<div class = 'col-md-7'>
<h2 class = 'footer-heading mb-4'>About Us</h2>
</p>
<ul class = 'list-unstyled'>
<li><a href = '#'><i class = 'fa fa-check'></i> One Window Service.</a></li>
<li><a href = '#'><i class = 'fa fa-check'></i> Best And Resonable Freight.</a></li>
<li><a href = '#'><i class = 'fa fa-check'></i> Customer Satisfaction.</a></li>
<li><a href = '#'><i class = 'fa fa-check'></i> No Hidden Charges.</a></li>
<li><a href = '#'><i class = 'fa fa-check'></i> Reliablity</a></li>
<li><a href = '#'><i class = 'fa fa-check'></i> Contact with customer till deleivery</a></li>
</ul>
</div>
<div class = 'col-md-4 ml-auto'>
<h2 class = 'footer-heading mb-4'>Features</h2>
<ul class = 'list-unstyled'>
<li><a href = '#'>About Us</a></li>
<li><a href = '#'>Testimonials</a></li>
<li><a href = '#'>Terms of Service</a></li>
<li><a href = '#'>Privacy</a></li>
<li><a href = '#'>Contact Us</a></li>
</ul>
</div>

</div>
</div>
<div class = 'col-md-4 ml-auto'>

<div class = 'mb-5'>
<h2 class = 'footer-heading mb-4'>Subscribe to Newsletter</h2>
<form action = '#' method = 'post' class = 'footer-suscribe-form'>
<div class = 'input-group mb-3'>
<input type = 'text' class = 'form-control border-secondary text-white bg-transparent'
placeholder = 'Enter Email' aria-label = 'Enter Email' aria-describedby = 'button-addon2'>
<div class = 'input-group-append'>
<button class = 'btn btn-primary text-white' type = 'button' id = 'button-addon2'>Subscribe</button>
</div>
</div>
</div>

<h2 class = 'footer-heading mb-4'>Follow Us</h2>
<a href = '#about-section' class = 'smoothscroll pl-0 pr-3'><span class = 'icon-facebook'></span></a>
<a href = '#' class = 'pl-3 pr-3'><span class = 'icon-twitter'></span></a>
<a href = '#' class = 'pl-3 pr-3'><span class = 'icon-instagram'></span></a>
<a href = '#' class = 'pl-3 pr-3'><span class = 'icon-linkedin'></span></a>
</form>
</div>
</div>
<div class = 'row pt-5 mt-5 text-center'>
<div class = 'col-md-12'>
<div class = 'border-top pt-5'>
<p class = 'copyright'>
Copyright &copy;
<script>document.write( new Date().getFullYear() );
</script> All rights reserved ! Global Cargo Services <a href = '#'
target = '_blank'></a>
</p>
</div>
</div>

</div>
</div>
</footer>

</div>

<script src = 'js/jquery-3.3.1.min.js'></script>
<script src = 'js/popper.min.js'></script>
<script src = 'js/bootstrap.min.js'></script>
<script src = 'js/owl.carousel.min.js'></script>
<script src = 'js/jquery.sticky.js'></script>
<script src = 'js/jquery.waypoints.min.js'></script>
<script src = 'js/jquery.animateNumber.min.js'></script>
<script src = 'js/jquery.fancybox.min.js'></script>
<script src = 'js/jquery.easing.1.3.js'></script>
<script src = 'js/aos.js'></script>

<script src = 'js/main.js'></script>

</body>

</html>
