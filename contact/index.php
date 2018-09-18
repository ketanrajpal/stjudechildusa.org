<?php
ob_start();
$page="contact";
if(!isset($_GET["slug"]))
{
	$_GET["slug"]="";
}
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$name="name: ".$_POST["name"]."\n";
	$telephone="telephone: ".$_POST["phone"]."\n";
	$email="email: ".$_POST["email"]."\n";
	$city="city: ".$_POST["city"]."\n";
	$message="message: ".htmlentities($_POST["message"])."\n";
	$fullmessage="Enquiry from St Jude Child USA.\n\n".$name.$telephone.$email.$city.$message;
	mail("contact@stjudechildusa.org","Enquiry from St Jude Child USA",$fullmessage,"From: online.enquiries@stjudechildusa.org");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("../inc/head.php"); ?>
<?php require_once("../inc/meta.php"); ?>
</head>
<body>
<?php require_once("../inc/header.php"); ?>
<section id="content" class="clear">
 <article>
    <h1>Enquiry<span></span></h1>
    <p>You can write to us regarding any queries you may have regarding the services. You are also welcome to provide us with your valuable Feedback. We will respond to you soon.</p>
    <form id="contact-page" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" onSubmit="javascript:alert('Thankyou for your enquiry. We will contact you soon.');">
  
  <fieldset>
   <label for="name">Name</label>
   <input type="text" name="name" id="name" required>
  </fieldset>
  
  <fieldset>
   <label for="email">Email</label>
   <input type="email" name="email" id="email" required>
  </fieldset>
  
  <fieldset>
   <label for="phone">Phone</label>
   <input type="text" name="phone" id="phone" required>
  </fieldset>
  
  <fieldset>
   <label for="city">City</label>
   <input type="text" name="city" id="city" required>
  </fieldset>
  
  <fieldset class="huge">
   <label for="message">Message</label>
   <textarea id="message" name="message"></textarea>
  </fieldset>
  <div class="clear"></div>
  <input type="submit" value="Submit">
  
 </form>
 </article>
 <article>
  <h1>Reach us</h1>
        
    <p>
     <strong>Address: </strong>540 W. State Avenue, Phoenix, AZ 85021, USA<br><br>
     <strong>Phone: </strong>1 602 361-1199<br>
     <strong>Email: </strong><a href="mailto:contact@stjudechildusa.org">contact@stjudechildusa.org</a><br>
    </p>
 </article>
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>