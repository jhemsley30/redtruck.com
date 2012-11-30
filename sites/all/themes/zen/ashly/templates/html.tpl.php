<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|Antic|Merienda+One|Titan+One' rel='stylesheet' type='text/css'><!-- google fonts -->
  <!-- <link rel="shortcut icon" href="/zajack.com/sites/all/themes/zen/ashly/mz.ico"  /> -->
  <!-- <meta name="viewport" content="width=device-width; initial-scale=1.0">  -->
   <!--   <meta name="viewport" content="width=1024"> -->
	<!-- <meta name = "viewport" content = "initial-scale = 1.0"> -->
	 <meta name="viewport" content="width=1024px">  
   <!--------------------------------------------------- jquery library ---------------------------------------------------->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		      <!------------------------------------ ------------- fancybox ---------------------------------------------------->
    
   <!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="http://www.setdesign-la.com/jh-scripts/ashlyFancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="http://www.setdesign-la.com/jh-scripts/ashlyFancybox/source/jquery.fancybox.css?v=2.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="http://www.setdesign-la.com/jh-scripts/ashlyFancybox/source/jquery.fancybox.pack.js?v=2.0.5"></script>

<!-- Optionally add button and/or thumbnail helpers -->
<link rel="stylesheet" href="http://www.setdesign-la.com/jh-scripts/ashlyFancybox/source/helpers/jquery.fancybox-buttons.css?v=2.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="http://www.setdesign-la.com/jh-scripts/ashlyFancybox/source/helpers/jquery.fancybox-buttons.js?v=2.0.5"></script>

<link rel="stylesheet" href="http://www.setdesign-la.com/jh-scripts/ashlyFancybox/source/helpers/jquery.fancybox-thumbs.css?v=2.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="http://www.setdesign-la.com/jh-scripts/ashlyFancybox/source/helpers/jquery.fancybox-thumbs.js?v=2.0.5"></script> 
 <!---------------------------------------------- END FANCYBOX    ----------------------------------------------------------------> 

	
<!---------------------------------------------- PHOTOSWIPE (for mobile and tablet ------------------------------------------------>	
	    
	       <script type="text/javascript" src="http://www.setdesign-la.com/jh-scripts/photoSwipe/lib/klass.min.js"></script>
           <script type="text/javascript" src="http://www.setdesign-la.com/jh-scripts/photoSwipe/code.photoswipe-3.0.5.min.js"></script>
		   <link rel="stylesheet"        href="http://www.setdesign-la.com/jh-scripts/photoSwipe/photoswipe.css" /> 
<script>
		$(document).ready(function(){

	var myPhotoSwipe = $("#Gallery a").photoSwipe({ enableMouseWheel: false , enableKeyboard: false });
	});
</script>
<!------------------------------------------ END photoswipe -------------------------------------------------------------------------->

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
  
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>