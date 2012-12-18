<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <link href='http://fonts.googleapis.com/css?family=Bowlby+One|Handlee' rel='stylesheet' type='text/css'><!-- google fonts -->
  <!-- <link rel="shortcut icon" href="/zajack.com/sites/all/themes/zen/ashly/mz.ico"  /> -->
  <!-- <meta name="viewport" content="width=device-width; initial-scale=1.0">  -->
   <!--   <meta name="viewport" content="width=1024"> -->
	<meta name = "viewport" content = "initial-scale = 1.0"> 
	<link rel="stylesheet" href="sites/all/themes/zen/ashly/css/template-test.css" type="text/css" media="screen" /> 

      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>	

<!-- --------------------------- Touch Touch --------------------------------------------------- -->
   	
		 <link rel="stylesheet" href="sites/all/themes/zen/ashly/mobileGallery/assets/css/styles.css" />                 
         <link rel="stylesheet" href="sites/all/themes/zen/ashly/mobileGallery/assets/touchTouch/touchTouch.css" />    
    	  
     <!-- ------------------------------ fade slideshow ---------------------------------------------- -->
	<!-- <?php include('sites/all/themes/zen/ashly/includes/fade-slideshow.inc'); ?> -->
	<link rel="stylesheet" href="sites/all/themes/zen/ashly/css/fade-slideshow.css" type="text/css" media="screen" /> 
	
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
  
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>