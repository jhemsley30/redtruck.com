<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <link href='http://fonts.googleapis.com/css?family=Bowlby+One|Handlee|Merienda ' rel='stylesheet' type='text/css'><!-- google fonts -->
  <!-- <meta name = "viewport" content = "initial-scale = 1.0">  --><!-- this was used on touchtouch demo -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0">  

      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

     <!-- touchTouch -->

	   <script src="sites/all/themes/zen/ashly/mobileGallery/assets/touchTouch/touchTouch.jquery.js"></script>
		<script src="sites/all/themes/zen/ashly/mobileGallery/assets/js/script.js"></script>
		<link href='sites/all/themes/zen/ashly/mobileGallery/assets/touchTouch/touchTouch.css' rel='stylesheet' type='text/css'>	
	
	<!-- touchTouch 2 for slider styles -->	
		<script src="sites/all/themes/zen/ashly/mobileGallery2/assets/touchTouch/touchTouch.jquery.js"></script>
		<script src="sites/all/themes/zen/ashly/mobileGallery2/assets/js/script.js"></script>
		<link href='sites/all/themes/zen/ashly/mobileGallery2/assets/touchTouch/touchTouch.css' rel='stylesheet' type='text/css'>	
	  
	
	  <!-- FlexSlider CSS -->
    <script defer src="sites/all/themes/zen/ashly/FlexSlider/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="sites/all/themes/zen/ashly/FlexSlider/flexslider.css" type="text/css" media="screen" />	  
	  
<!-- ----------------------------------------- Below is for the webform to clear text on focus ------------------------------------ -->	  
	  <script type="text/javascript">
	$(document).ready(function () {
swap_val = [];
 $(".webform-client-form .form-text, .webform-client-form .form-textarea").each(function(i){
swap_val[i] = $(this).val();
$(this).focus(function(){
if ($(this).val() == swap_val[i]) {
 $(this).val("");
 }
 }).blur(function(){
if ($.trim($(this).val()) == "") {
 jQuery(this).val(swap_val[i]);
 }
 });
});
});
</script>


     <!-- ------------------------------ fade slideshow js include ---------------------------------------------- -->
	                <!-- <?php include('sites/all/themes/zen/ashly/includes/fade-slideshow.inc'); ?> -->
	
	
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
  
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>