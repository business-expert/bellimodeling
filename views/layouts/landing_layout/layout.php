<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <link rel="stylesheet" href="<?=STYLESHEETS_PATH?>ie8.css"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <title>Bellinity</title>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <!-- TemplateBeginEditable name="doctitle" --><title></title><!-- TemplateEndEditable --><!-- TemplateBeginEditable name="head" --><!-- TemplateEndEditable -->
  
  <!-- Included CSS Files (Uncompressed) -->
  <link rel="stylesheet" href="<?=STYLESHEETS_PATH?>foundation.css">
  
  <!-- Included CSS Files (Compressed) -->
  <!-- <link rel="stylesheet" href="stylesheets/foundation.min.css"> -->
  <link rel="stylesheet" href="<?=STYLESHEETS_PATH?>app.css">


  <script src="<?=JAVASCRIPTS_PATH?>modernizr.foundation.js"></script>
  <!-- TypeKit WebFont -->
  <script type="text/javascript" src="//use.typekit.net/vnq0kky.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <link rel="stylesheet" href="<?=STYLESHEETS_PATH?>snm.css">

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->

</head>
<body>



<?php include_once("header.php"); ?>
<!-- START render view here -->
<?php include_once($view) ?>
<!-- END render view here -->
<?php include_once("footer.php") ?>
  
  
  
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.forms.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.placeholder.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="<?=ASSETS_PATH?>javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="<?=ASSETS_PATH?>javascripts/jquery.js"></script>
  <script src="<?=ASSETS_PATH?>javascripts/foundation.min.js"></script>
  <script src="<?=ASSETS_PATH?>javascripts/jquery.isotope.min.js"></script>
  <!-- Initialize JS Plugins -->
  <script src="<?=ASSETS_PATH?>javascripts/app.js"></script>

  <link rel="stylesheet" href="<?=STYLESHEETS_PATH?>jquery-ui/jquery-ui.css">
  <script src="<?=ASSETS_PATH?>jquery-ui/jquery-ui.js"></script>

  <?php include_once(SHARED_PATH."snm.php") ?> 
</body>
<!-- InstanceEnd --></html>