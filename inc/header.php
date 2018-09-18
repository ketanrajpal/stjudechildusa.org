<?php

	function mymenu($page, $item)
	{
		if($page==$item)
		{
			echo "class='current'";
		}
	}

?>

<!--<div id="header">
  <ul class="clear">
    <li class="left">St Jude India ChildCare Centres USA</li>
    <li class="left"><a href=""><span class="fa fa-phone"></span> +1 602 361-1199</a></li>
    <li class="left"><a href="mailto:stjudechild@gmail.com"><span class="fa fa-at"></span>stjudechild@gmail.com</a></li>
    <li class="right"><a href="http://www.stjudechild.org" target="new"><span class="fa fa-globe"></span> St.Jude India ChildCare Centres</a></li>
  </ul>-->
</div>

<header>
 <div class="clear">
  <a href="../" id="logo"><img src="../img/logo.png"></a>
      <nav>
        <ul class="clear">
          <li><a href="../" <?php mymenu($page,"index"); ?>>Home</a></li>
          <li><a href="../about" <?php mymenu($page,"about"); ?>>About</a></li>
          <li><a href="../gallery" <?php mymenu($page,"gallery"); ?>>Gallery</a></li>
          <li><a href="../donate" <?php mymenu($page,"donate"); ?>>Donate</a></li>
          <li><a href="../contact" <?php mymenu($page,"contact"); ?>>Contact</a></li>
        </ul>
     </nav>
     </div>
  </header>
  <script>$(function(){$('nav ul').slicknav();});</script> 
  
  
  
  <div id="menu2">
   <ul class="clear">
    <li><a href="../">Home</a></li>
          <li><a href="../about">About</a></li>
          <li><a href="../gallery">Gallery</a></li>
          <li><a href="../donate">Donate</a></li>
          <li><a href="../contact">Contact</a></li>
   </ul>
  </div>
  
  <?php if($page!="index" && $page!="gallery" && $page!="contact"){ ?>
  
  
  	<section id="topimg">
     <img src="../img/<?php echo $page; ?>.png" width="100%;">
    </section>

  
  <?php } ?>