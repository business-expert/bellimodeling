<!-- <link rel="stylesheet" href="<?=ASSETS_PATH?>thickbox/thickbox.css">
<script src="<?=ASSETS_PATH?>thickbox/thickbox.js"></script>
 -->

<!-- 
<link rel="stylesheet" href="<?=ASSETS_PATH?>facnybox/facnybox.css">
<script src="<?=ASSETS_PATH?>facnybox/facnybox.js"></script>


<script type="text/javascript" src="<?=ASSETS_PATH?>fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="<?=ASSETS_PATH?>fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=ASSETS_PATH?>fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="<?=ASSETS_PATH?>/fancybox/style.css" /> -->

    <script type="text/javascript" src="<?=ASSETS_PATH?>magnific-popup/jquery.magnific-popup.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=ASSETS_PATH?>magnific-popup/magnific-popup.css" />
    

<?php 
//?KeepThis=true&TB_iframe=true&height=400&width=600
#<a href='#TB_inline?height=300&amp;width=400&amp;inlineId=preview' class='thickbox'>View all<a>";
//$container.isotope
?>

<script type="text/javascript">
$('a.signup-button').magnificPopup({
    // items: {
    //   src: 'path-to-image-1.jpg'
    // },
    type: 'iframe',// this is default type
    closeBtnInside:true
   //modal: true

    // closeOnContentClick: false,
    // closeOnBgClick: true,
    // showCloseBtn: false, 
    // enableEscapeKey: false
});


//#####################################################################
//-- start custom section
$(document).on("ready page:change", function() {
    $('.close-magnific-popup').click(function(e){
        // e.preventDefault();
        $.magnificPopup.close();
        //alert("HERE");
    });
   
}); 
//-- end custom section
//#####################################################################
</script>



<!-- 
<script type="text/javascript">
  $("a.signup-button").fancybox({
        'width'       : '100%',
        'height'      : '75%',
        'autoScale'     : false,
        'opacity'   : true,
        'overlayShow' : false,
        'transitionIn'  : 'elastic',
        'transitionOut' : 'none',
        'type' : 'iframe'        
      });
</script> 


<script type="text/javascript">
  $("a.view-tower").fancybox({
        'width'       : '75%',
        'height'      : '75%',
        'autoScale'     : false,
        'opacity'   : true,
        'overlayShow' : false,
        'transitionIn'  : 'elastic',
        'transitionOut' : 'none',
        'type' : 'iframe'        
      });
</script>  -->