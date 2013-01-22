
   
  /** ##########################################################################################################################
      JH- THIS WAS ADDED TO ALLOW 'style="" into rewrite section of views, make sure to replace in updated modules of views
	  
	  look in sites/all/modules/contrib/views/handlers/views_handler_field
	  
	  it will be added at the very bottom of the page
	  
	  REPLACE THIS FUNCTION IN THE NEW VIEWS WITH THIS FUNCTION
	  ########################################################################################################################## **/
  function render_altered($alter, $tokens) {     
    $value = strtr($alter['text'], $tokens);

    return $value;
  }
  /** ###########################################################################################################################
      JH- END OF WHAT I ADDED
	  ########################################################################################################################### **/

