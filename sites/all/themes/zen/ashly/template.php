<?php

/************************************** JH testing conditional statements for css and js additions ****************************/




/**
 * Override or insert variables into the page template.
 */
/***************************************************************************/


   /*** put ithere **/


/******************************************************************************/

$element = array(
  '#tag' => 'link', // The #tag is the html tag - <link />
  '#attributes' => array( // Set up an array of attributes inside the tag
    'href' => 'http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|Antic|Merienda+One|Titan+One|Bowlby+One+SC', 
    'rel' => 'stylesheet',
    'type' => 'text/css',
  ),
);
drupal_add_html_head($element, 'google_font_cardo'); 

//****** JH Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/iefix.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE), 'preprocess' => FALSE));
 
 

 
 /***** below will add a js or css file for a particular page, just follow example **********/ 
  
  // Test for a path
 // $matches = "node/3"; // Could also be node/34 or <front> or any alias.
 /** $path = drupal_get_path_alias($_GET['q']);
  $page_match = drupal_match_path($path, $matches);
  if ($path != $_GET['q']) {
    $page_match = $page_match || drupal_match_path($_GET['q'], $matches);
  }
  if ($page_match) {
    drupal_add_js(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/lib/jquery-1.7.1.min.js');
    drupal_add_css(drupal_get_path('theme', 'ashly') . '/css/mookie.css');
	drupal_add_css(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/lib/jquery.mousewheel-3.0.6.pack.js.css');
	drupal_add_css(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/source/jquery.fancybox.css');
	drupal_add_js(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/source/jquery.fancybox.pack.js');
	drupal_add_css(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/source/helpers/jquery.fancybox-buttons.css');
	drupal_add_js(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/source/helpers/jquery.fancybox-buttons.js');
	drupal_add_css(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/source/helpers/jquery.fancybox-thumbs.css');
	drupal_add_js(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/source/helpers/jquery.fancybox-thumbs.js');
	
  } **/
  
  //this is for the home page, used same formula as above
   // Test for a path
  $matches2 = "login"/*\n<front>"*/; // Could also be node/34 or <front> or any alias.
  $path = drupal_get_path_alias($_GET['q']);
  $page_match = drupal_match_path($path, $matches2);
  if ($path != $_GET['q']) {
    $page_match = $page_match || drupal_match_path($_GET['q'], $matches2);
  }
  if ($page_match) { 
    drupal_add_css(drupal_get_path('theme', 'ashly') . '/css/mookie.css');
  }
  
  /*************   $match 5 is for pages that have slideshow gallery or slider css3 *************************/
  
  $matches5 = "home\nportfolio\nzajack"; //there are several different pages here. make sure the format stays the same
  $path5 = drupal_get_path_alias($_GET['q']);
  $page_match5 = drupal_match_path($path5, $matches5);
  if ($path5 != $_GET['q']) {
    $page_match5 = $page_match5 || drupal_match_path($_GET['q'], $matches5);
  }
  if ($page_match5) { 
   //drupal_add_js(drupal_get_path('theme', 'ashly') . '/js/modernizr.custom.28468.js');
   drupal_add_css(drupal_get_path('theme', 'ashly') . '/css/style2.css');
   drupal_add_css(drupal_get_path('theme', 'ashly') . '/css/demo.css');
   drupal_add_css(drupal_get_path('theme', 'ashly') . '/css/jamesMenu.css');
   drupal_add_css(drupal_get_path('theme', 'ashly') . '/css/fade-slideshow.css');
  }
  
  // This will be used to add fancybox for node/8.  
  /** JH- took this out and added it to html--node--8.tpl.php 4-20-2012 **/
  /*$matches3 = "node/8"/*\n<front>"*/; // Could also be node/34 or <front> or any alias.
  //$path = drupal_get_path_alias($_GET['q']);
  //$page_match = drupal_match_path($path, $matches3);
  //if ($path != $_GET['q']) {
  //  $page_match = $page_match || drupal_match_path($_GET['q'], $matches3);
  //}
  //if ($page_match) {
    //drupal_add_css(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/source/jquery.fancybox.css');
	//drupal_add_js(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/source/jquery.fancybox.js');
	//drupal_add_js(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/source/jquery.fancybox.pack.js');
	//drupal_add_js(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/lib/jquery.mousewheel-3.0.6.pack.js');
	//drupal_add_js(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/source/fancybox-triggers.js');
	//drupal_add_css(drupal_get_path('theme', 'ashly') . '/ashlyFancybox/source/jquery.fancybox.css');
  //}
  
  
  
  // Test for a role
 /* $role = 'anonymous user';
  if (in_array($role, $variables['user']->roles)) {
    drupal_add_js(drupal_get_path('theme', 'ashly') . '/js/ashly.js');
  }*/
  
//} //closing bracket for the whole preprocess


// Add 'CLICK ME!' to every link.
/* function ashly_preprocess_link(&$variables) {

  $variables['text'] .= 'CLICK ME!';  
}*/

// Change every image to a Druplicon.  Remember**** the path starts at the root of the whole site
/*function ashly_preprocess_image(&$variables) {
  $variables['path'] = 'sites/theme-site/files/jake.png' ;
}*/

// Change text of 'Read more' links.
/** JH- below is a preprocess example of changing text, made it a comment 4-20-2012 **/
/*function ashly_preprocess_link(&$variables) {
  if (strpos($variables['text'], 'Read more') !== FALSE) {
    $variables['text'] = str_replace('Read more', 'Show me!', $variables['text']);
  }
}*/

// Change every image to a Druplicon if the user is anonymous.
/** below is preprocess function for changing images, made it a comment 4-20-2012 **/
/*function ashly_preprocess_image(&$variables) {
  global $user;
  if ($user->uid == 0) {
    $variables['path'] = 'sites/theme-site/files/hayley.jpg';
  }
}*/


/***********************  this part covers suggestions/suggestion *************************************************/

// Use different page templates based on various conditions.
//JH - these are examples of preprocess functions that change elements due to certain condintions, commented out 4-20-2012**/
/*function ashly_preprocess_page(&$variables) {
 
  
  // Choose a different page template for anonymous users.
  // Look in $variables['theme_hook_suggestions'] for possible template file names.
  if ($variables['user']->uid == 0 && $_GET['q'] != 'user') {
    $variables['log_in'] = l('log in', 'user');    //JH this variable is being added to navigate to log in page
    $variables['theme_hook_suggestion'] = 'page__anonymous';
  }
  
 
  
  // Chose a different page template based on node type.
  if (isset($variables['node'])) {
    $variables['theme_hook_suggestion'] = 'page__' . $variables['node']->type;
  }
  
 
  
  // Add additonal suggestions for the anonymous / node type combination.
  // Change above example to use theme_hook_suggestions.
  if ($variables['user']->uid == 0 && $_GET['q'] != 'user') {
    if (isset($variables['node'])) {
      $variables['theme_hook_suggestions'][] = 'page__anonymous__' . $variables['node']->type;
    }
  }
  */
// commented out ashly_preprocess_page()}

/*****************************************  finding-changing theme functions *********************************************/

/*function ashly_image($variables) {
  $attributes = $variables['attributes'];
  $attributes['src'] = file_create_url($variables['path']);

  foreach (array('width', 'height', 'alt', 'title') as $key) {

    if (isset($variables[$key])) {
      $attributes[$key] = $variables[$key];
    }
  }

  return '<img' . drupal_attributes($attributes) . ' /><div>This is a test caption</div>';
}*/
/*function ashly_username($variables) {
$variables['name'] .= "ADDED";
  if (isset($variables['link_path'])) {
    // We have a link path, so we should generate a link using l().
    // Additional classes may be added as array elements like
    // $variables['link_options']['attributes']['class'][] = 'myclass';
    $output = l($variables['name'] . $variables['extra'], $variables['link_path'], $variables['link_options']);
  }
  else {
  
    // Modules may have added important attributes so they must be included
    // in the output. Additional classes may be added as array elements like
    // $variables['attributes_array']['class'][] = 'myclass';
    $output = '<span' . drupal_attributes($variables['attributes_array']) . '>' . $variables['name'] . $variables['extra'] . '</span>';
  }
  return $output;
}*/

/********************************** adding css classes ***************************************************/

// Add a class to the html.tpl.php.
/*function ashly_preprocess_html(&$variables) {
  $variables['classes_array'][] = 'htmlclass';
}

// Add a class to node.tpl.php.
function ashly_preprocess_node(&$variables) {
  $variables['classes_array'][] = 'nodeclass';
}

// Add a class to page.tpl.php.
function ashly_preprocess_page(&$variables) {
  $variables['classes_array'][] = 'pageclass';
}*/

/********************************** adding classes with conditions ***********************************************/
// Add a class to the html.tpl.php.
// Now we can override classes using .body-authenticated .someclass { }.
function ashly_preprocess_html(&$variables) {                           //JH put ashly in before preprocess
  if (in_array('authenticated user', $variables['user']->roles)) {      //JH check to see if user has authenticated role
    $variables['classes_array'][] = 'body-authenticated';               //JH create new class 'body-authenticated'
  }
   drupal_add_js('http://html5shim.googlecode.com/svn/trunk/html5.js', array('type' => 'external', 'browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE)));
   drupal_add_js('http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js', array('type' => 'external', 'browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE)));
}

// Add a class to node.tpl.php.
/** JH add class to node , commented out 4-20-201 **/
/*function ashly_preprocess_node(&$variables) {
  $variables['classes_array'][] = 'nodeclass';
}*/

// Add a class to page.tpl.php.
/* JH add a class to page, commented out 4-20-2012 */
/*function ashly_preprocess_page(&$variables) {
  $variables['classes_array'][] = 'pageclass';
}*/

/************************************** create user-login page *****************************/
// Page is only for non-signed in users....anonymous users


function hook_theme($existing, $type, $theme, $path){
return array(
'user_login' => array(
'arguments' => array('form' => NULL),
'template' => 'user-login',
),
);
}

//function hook_preprocess_user_login(&$variables) {

//}
/***************** JH- remove search form on search results page (if not, there would be 2 forms displaying) **************************/

function ashly_page_alter(&$page) {  // This assumes everything being output in the "content" page region.

  // Logged in
  if (!empty($page['content']['system_main']['content']['search_form'])) {
    unset($page['content']['system_main']['content']['search_form']);
  }

  // Not logged in
  if (!empty($page['content']['system_main']['search_form'])) {
    unset($page['content']['system_main']['search_form']);
  }
}

/***************************** change search box content *********************************/

//function ashly_form_alter(&$form, &$form_state, $form_id) {
 // if ($form_id == 'search_block_form') {
    //$form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    //$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    //$form['search_block_form']['#size'] = 40;  // define size of the textfield
 //   $form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
   // $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
   // $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search-button.png');

// Add extra attributes to the text box
//    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
//    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
//  }
//} 

/****************************************************** v v ************************************************************************/
// this allows for a different template based on content type. example: page--marissa.tpl.php
//function ashly_process_page(&$variables) {
//  $variables['theme_hook_suggestions'][] = 'page__'. $variables['node']->type;
//}


/** ##############################################################################################################
This is for the image gallery, can be used for image gallery on user added images
############################################################################################################ **/

function imageGallery_websites() {

$imgs2 = scandir("sites/hemsley.com/files");
/** Unset the first 2 items in the array since they contain . and .. respectively **/
unset($imgs2[0]);
unset($imgs2[1]);

print " <div id='thumbs'>";

foreach($imgs2 as $img2)
{
    /* 
      Here we get the file extension 
      If the value of $file = "photo.jpeg"; this returns "jpeg"
    */
	$period = '.' ;    /* the period here is turned into variable so it can be passed to end() with no errors */
    $ext =  explode($period, $img2);   
	$imgExt = end($ext); 
	
    $dash = '-' ;                      /** used to seperate number from letter(size) **/
    $number = explode($dash, $img2);   /** explode $img2 into array (one in front of dash and behind it **/
    $sizing = end($number);             /** this is the second half of $number array (ex: s.png) **/
	$sizer = explode($period, $sizing);  /** turns $sizing into array  (ex: $sizer[0]== s or $sizer[1] == png) **/
    /** Checking if file is an image **/
    if($imgExt  == 'jpg' || $imgExt   == 'png' || $imgExt   == 'gif'|| $imgExt   == 'jpeg')
    {
         
	if ($sizer[0] == 'menu' ) 
       {
	print 
    
	"<a href='sites/hemsley.com/files/" . "$number[0]" . "-" . "menu" . 
	"$period" . "$sizer[1]'" . "rel='menu' title='Menus'" . 
    "style='background-image:url(sites/hemsley.com/files/" . "$number[0]" . "-" . "menu" . 
	"$period" . "$sizer[1]" . ")'></a>"	; 
       }
	 
	   

		
    }
	
}
print "</div>";
}
/** ###################################################################################################################
END image gallery
################################################################################################################### **/ 

/** function ashly_preprocess_image(&$variables) {
    // If this image is of the type 'Staff Photo' then assign additional classes to it:
    if ($variables['style_name'] == 'gallery-shots') {
        $variables['attributes']['class'][] = 'fancybox';
        $variables['attributes']['class'][] = 'wideborder';
    }
} **/
