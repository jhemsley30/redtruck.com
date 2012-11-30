


<a class="fancybox"  rel="group" href="#inline">
	login
</a>
	<div id='inline' style='display:none;'>
	<h1 class='loginTitle'>Red Truck Inc.</h1>
	
	 <form action="user/login" method="post" id="user-login" accept-charset="UTF-8"><div><div  class="form-item form-type-textfield form-item-name" > 
  <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
 <input type="text" id="edit-name" name="name" value="User Name" size="50" maxlength="128" class="form-text topText required rounded" onFocus="this.value=' '" />
<div class="description"><!-- Enter your Theme Exchange username. -->&nbsp;</div>
</div> <!-- End ashContent -->
<div class="form-item form-type-password form-item-pass">


  <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
 <input type="text" id="edit-pass" name="pass" size="50" maxlength="128" class="form-text required rounded"  value="Password"
    onblur="this.value=!this.value?'Password':this.value;"
    onfocus="this.select()"
    onclick=" if (this.value=='Password'){this.value=''; this.type='password'}"/>
<div class="description"><!-- Enter the password that accompanies your username. -->&nbsp;</div>
</div>
<input type="hidden" name="form_build_id" value="form-I80-7cjV7RBQ7eO1bxGywGBbMGLuh0TbaK2PBKHpHC4" />
<input type="hidden" name="form_id" value="user_login" />
<div class="form-actions form-wrapper" id="edit-actions">
<input type="submit" id="edit-submit" name="op" value="Log in" class="form-submit" /></div></div></form>
	
	</div><!-- end inline -->

	<footer>	
     <!----------------------------- JH added jTest -------------------------------------------------->		
	
		<p class='logIn'>
	  <?php print theme('links__system_secondary_menu', array(
      'links' => $secondary_menu,
      'attributes' => array(
        'id' => 'secondary-menu',
        'class' => array('links', 'inline', 'clearfix'),
      ),
      'heading' => array(
        'text' => $secondary_menu_heading,
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    )); ?> 
	<!-- this checks to see if user is logged in. If not, Log in link will display. -->
	<?php $role = 'anonymous user';
    if (in_array($role, $variables['user']->roles)) {
    print "<a href='login' style='color:#000;' >Log In</a>";
	}
	?>
  </p>
<!---------------------------------- END jTest ------------------------------------------------------------>
	</footer>
	<!-- /#footer --> 
<script>

      $(document).ready(function() {
		$(".fancybox").fancybox();
	});
	</script> 