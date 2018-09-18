<?php
ob_start();
$page="gallery";
if(!isset($_GET["slug"]))
{
	$_GET["slug"]="";
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
 <script src="../js/lightbox.min.js"></script>
 <link rel="stylesheet" type="text/css" href="../css/lightbox.css">
 <ul id="gallery">
 
 <?php for($i=1;$i<=11;$i++){ ?>
     
      <li>
       <a href="../img/gallery/new/<?php echo $i; ?>.JPG"  data-lightbox="roadtrip">
        <figure><img src="../img/gallery/new/<?php echo $i; ?>_thumb.jpg" alt=""></figure>
       </a>
      </li>
     
     <?php } ?>
 
 <?php for($i=1;$i<=15;$i++){ ?>
     
      <li>
       <a href="../img/gallery/<?php echo $i; ?>.jpg"  data-lightbox="roadtrip">
        <figure><img src="../img/gallery/<?php echo $i; ?>_thumb.jpg" alt=""></figure>
       </a>
      </li>
     
     <?php } ?>
     </ul>

 
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>