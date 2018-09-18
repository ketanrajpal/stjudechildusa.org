<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="../css/default.css">
<script src="../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script src="../js/jquery.bxslider.min.js"></script>
<script src="../js/jquery.fancybox.pack.js"></script>
<script src="../js/jquery.queryloader2.js"></script>
<script>
   $(document).ready(function () {
    $("body").queryLoader2({
        barColor: "#000",
        backgroundColor: "#ededed",
        percentage: false,
        barHeight: $(window).height(),
        completeAnimation: "fade"
    });
});
   
  $(function(){
 var shrinkHeader = 10;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('#menu2').addClass('show');
        }
        else {
            $('#menu2').removeClass('show');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});  </script>
