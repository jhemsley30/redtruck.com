<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1">  

  <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
 
  
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


</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <div id="skip-link">
  
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
