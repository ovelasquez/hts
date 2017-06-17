<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
 <!--BEGIN: google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Droid+Serif:400,400italic,700,700italic|Droid+Sans:400,700' rel='stylesheet' type='text/css' />
    <!--END: google fonts-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
<?php if (defined("FRONT")):?>
<div id="contint" ><div id="intro"></div></div>
<div id="contimg" style="display:none"></div>
<?php endif; ?>

<?php if (defined("FRONT")):?>
<div id="nointro" style="display:none">	
<?php endif; ?>

  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

<?php if (defined("FRONT")):?>
</div> 
<?php endif; ?>

<?php if (defined("FRONT")):?> 
	<script>
  	var timeoutID;
	/*
	function delayedAlert() {
		  timeoutID = window.setTimeout(slowAlert, 4000);
		}
	function slowAlert(){
			jQuery("#contint").remove();
			jQuery("#nointro").show();
		}	
  	jQuery(document).ready(function (){
		jQuery("#imgint").load(function ()  {
			jQuery("#intro").addClass("intro");	
			delayedAlert();
		});				
		
	})
	
	jQuery( "#contimg" ).load( "<?php print file_create_url("sites/all/themes/designmdd/images/intro.jpg");?>", function( response, status, xhr ) {
	  if ( status == "error" ) {
			jQuery("#contint").remove();
			jQuery("#contimg").remove();
			jQuery("#nointro").show();
	  }else{
		 
		  jQuery("#contint").remove();
		  jQuery("#contimg").remove();
			jQuery("#nointro").show();
		  } 
	   alert("IMAGEN CARGADA")
	});*/
	
	this.addEventListener("DOMContentLoaded", preloadImages, true);
 
	var loadedImages = 0;
	var imageArray = new Array("<?php print file_create_url("sites/all/themes/designmdd/images/intro.jpg");?>");	 
	function preloadImages(e) {
		for (var i = 0; i < imageArray.length; i++) {
			var tempImage = new Image();
			 
			tempImage.addEventListener("load", trackProgress, true);
			tempImage.src = imageArray[i];
		}
	}
	 
	function trackProgress() {
		
		jQuery("#intro").addClass("intro");	
		jQuery("#contimg").remove();
		delayedAlert();
	}
	 
	function delayedAlert() {
		  timeoutID = window.setTimeout(slowAlert, 5000);
		}
	function slowAlert(){
			jQuery("#contint").remove();
			jQuery("#nointro").show();/**/
		}	
  	
	
  </script>
<?php endif; ?>
</body>
</html>