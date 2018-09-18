<?php
ob_start();
$page="index";
?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("inc/head.php"); ?>
<?php require_once("inc/meta.php"); ?>
</head>
<body>
<?php require_once("inc/header.php"); ?>
<section id="slider">
  <ul class="slider">
    <li><a href="http://smile.amazon.com/" target="new"><img src="img/slide-new.jpg" alt=""></a></li>
    <li><img src="img/slide-2.jpg" alt=""></li>
    <li><img src="img/slide-3.jpg" alt=""></li>
  </ul>
</section>
<script>$('.slider').bxSlider({auto:true, mode:'fade', captions: true, pager: false});</script>
<section id="tabs-2" class="clear">
  <article>
    <h1>About us</h1>
    <div> <img src="img/tab-1.jpg">
      <h2>Who we are</h2>
      <p>SJICC USA raises funds in North America in support of charities in India with an excellent record of governance, transparency and impact. THese charities provide much needed care for sick needy children.</p>
      <a href="../about/who-we-are" class="tab-rad">More Info<span class="fa fa-angle-right"></span></a> </div>
    <div> <img src="img/tab-2.jpg">
      <h2>What we do</h2>
      <p>The primary aim of SJICC USA is to provide a tax-effective way for residents and taxpayers of the USA to make donations to charities in India that meet our goals.
</p>
      <a href="../about/what-we-do" class="tab-rad">More Info<span class="fa fa-angle-right"></span></a> </div>
  </article>
  <article>
   <h1>&nbsp;</h1>
    <div> <img src="img/tab-5.png">
      <h2>Team Members</h2>
      <p>A group of concerned individuals who wish to make a difference to children suffering from cancer in India set up SJICC USA as a registered charity</p>
      <a href="../about/team" class="tab-rad">More Info<span class="fa fa-angle-right"></span></a> </div>

  </article>
</section>
<!--<section id="tabs">
  <ul class="clear">
    <li>
      <div class="fa fa-at"></div>
      <h1>Cancer Guide</h1>
      <p>Many children come from all over India to major cities, such as Mumbai, for cancer treatments which last for months. </p>
      <center><a href="../about" class="tab-rad">More Info<span class="fa fa-angle-right"></span></a></center> </div> </li>
    <li>
      <div class="fa fa-at"></div>
      <h1>Donate with Amazon</h1>
      <p>St. Judes provides free holistic support and accommodation  to children travelling with their parents for treatment of cancer</p>
      <center><a href="../donate" class="tab-rad">More Info<span class="fa fa-angle-right"></span></a></center> </div> </li>
    <li>
      <div class="fa fa-paint-brush"></div>
      <h1>Donate with Paypal</h1>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy</p>
      <center><a href="../gallery" class="tab-rad">More Info<span class="fa fa-angle-right"></span></a></center> </div> </li>
    <li>
      <div class="fa fa-phone"></div>
      <h1>Contact</h1>
      <p>You are welcome to provide us with your valuable Feedback or any queries you have. We will respond to you soon.</p>
      <center><a href="../contact" class="tab-rad">More Info<span class="fa fa-angle-right"></span></a></center> </div> </li>
  </ul>
</section>-->
<?php require_once("inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>