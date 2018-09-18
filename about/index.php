<?php
ob_start();
$page="about";
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
 <article>
  <?php if($_GET["slug"]=="what-we-do"){ ?>
  <h1>What we do</h1>
  <p>The primary aim of SJICC USA is to provide a tax-effective way for residents and taxpayers of the USA to make donations to charities in India that meet our goals.<br><br>Many needy children come from all over India to major cities, such as Mumbai, for cancer treatment which last for months. Whilst the treatments themselves are funded by the generosity of various charities, housing for these very sick children is a real, and often insurmountable problem. Several of these children end up on the streets, living in dirt and squalor. Their survival rate is very poor as their immune systems are already compromised by chemotherapy.<br><br>Our aim is to raise funds for such organizations as SJICC India, that provide:</p>
  <ul class="list">
   <li>Free, clean and hygienic housing for these children and their parents</li>
   <li>Free nutritional support</li>
   <li>Free transportation to take the children to the hospital and back</li>
   <li>Counseling services, as well as activities, such as art-based therapy for the children, to keep them engaged and motivated during their time away from the hospital.</li>
  </ul>
  <p>This makes all the difference in the outcome of their cancer treatment. The existing centers have greatly increased the success rate and the chances of survival of these children. SJICC USA supports St. Judes in India in its fundraising efforts.</p>
  <?php }else if($_GET["slug"]=="team"){ ?>
  <h1>Team</h1>
  <p>The Board consists of</p>
  <ul class="team clear">
   <li>
   <img src="../img/team/Nishad-Somalwar.jpg">
   </li>
   <li>
   <strong>Nishad Somalwar</strong><br>
Nishad is actively involved in fundraising/ awareness building for SJICC and is also a volunteer/organizer of bone marrow donor registration drives in the United States. He is the relationship manager with a leading IT services company, backed up by over 15 years of experience in the technology sector. Nishad lives in Santa Clara, California with his family.</li>
  </ul>
   
   <ul class="team clear">
   <li><img src="../img/team/Ava-Thomas.jpg"></li>
   <li><strong>Ava Thomas</strong><br>
Ava is a Trustee of the SJICC, USA, and helps the group in fundraising and PR. She is a director with British Airways, USA and has over 20 years of experience in the aviation industry.</li>
</ul>
   
   <!--<ul class="team clear">
   <li><img src="../img/team/Narayan-B-Dani.jpg"></li>
   <li><strong>Narayan B Dani</strong><br>
As a recovering cancer patient himself Narayan (Nana) Dani is fully appreciative and supportive of the efforts and objectives of SJICC. Nana worked at IBM in various positions for over 30 years. As an application specialist in the airlines industry, he was posted in a number of countries in Asia and Europe. After retiring in 1994, he consulted with various Silicon Valley companies on a variety of IT related projects.</li>
</ul>-->
   
   <ul class="team clear">
   <li><img src="../img/team/Anupama-Dani.jpg"></li>
   <li><strong>Anupama Dani</strong><br>Anupama Works towards finding donor support for SJICC in the Bay Area in California. She has looked after a cancer patient. She grew up in Mumbai, and has lived and worked in several other countries, mainly helping to raise funds for charitable causes. She now lives in the US.</li>
</ul>
   
   <ul class="team clear">
   <li><img src="../img/team/Charlie-Hilsabeck.jpg"></li>
   <li><strong>Charlie Hilsabeck</strong><br>
For the past ten years, Charlie has served as a volunteer for a variety of non-profits serving the needs of children both in the US and abroad. A financial officer with the regional US subcontracting construction firm of Kenyon Companies, Inc. Charlie is a certified public accountant licensed in the state of AZ and is a member of the AZ State Society of CPAs. After graduating from Tulane University's A.B. Freeman School of Business, he worked with the Big Four firm of Ernst and Young, LLP in their healthcare audit practice.</li>
  </ul>
  <?php } else { ?>
   <h1>Who we are</h1>
  <p>SJICC USA raises funds in North America in  support of charities in India with an excellent record of  governance, transparency and impact. THese charities provide much needed care for sick needy children.<br><br>SJICC USA can provide a tax-effective way for residents and taxpayers of the USA to make donations to fund grant applications submitted by charities in India that meet our goals. Our current focus is to fund St. Jude India ChildCare Centers in Mumbai, but we have the flexibility to support allied charities in India that have adopted a model similar to that of St. Judes.</p>
  <?php } ?>
 </article>
 <article>
  <h1>Quick Links</h1>
  <ul class="quick">
   <li><a href="../about/who-we-are"><span class="fa fa-angle-right"></span>Who we are</a></li>
   <li><a href="../about/what-we-do"><span class="fa fa-angle-right"></span>What we do</a></li>
   <li><a href="../about/team"><span class="fa fa-angle-right"></span>Team</a></li>
  </ul>
 </article>
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>