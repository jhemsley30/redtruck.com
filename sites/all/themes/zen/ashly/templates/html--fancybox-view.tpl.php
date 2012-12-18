<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  

 
  
 <!--  <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport"> -->
  
  


	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="http://www.setdesign-la.com/jh-scripts/ashlyFancybox3/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="http://www.setdesign-la.com/jh-scripts/ashlyFancybox3/source/jquery.fancybox.js?v=2.0.6"></script>
	<link rel="stylesheet" type="text/css" href="http://www.setdesign-la.com/jh-scripts/ashlyFancybox3/source/jquery.fancybox.css?v=2.0.6" media="screen" />

	
	<script type="text/javascript">
		$(document).ready(function() {
		

			$('.fancybox').fancybox();

			

		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
		body>section {
			width: 100%;
		}
		body{overflow: hidden;}
	</style>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
  
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
