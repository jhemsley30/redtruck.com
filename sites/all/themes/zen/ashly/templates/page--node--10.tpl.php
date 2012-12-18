<div id='headerContainerRT' class='clearfix'>
     <div id='redtruckLogo'><img src='http://setdesign-la.com/redtruck-images/redtruck-logo.png' alt='Red Truck' /></div> 
	 <div id="headerRT" class='clearfix'>
		 <div id="main-navRT" class="clearfix">
				<?php print render($page['bagelmania_menu']); ?>
		</div>  <!-- main-navRT -->
	</div> <!-- END header -->		
</div> <!-- headerContainer -->

<div id="pagewrapRT">
  <div class="content1 clearfix">
		<div class="content1-one">
		   <div id='slideContainer'>
		     <p class='defaultImage'>We.<br/>Build.<br/>Imagination.</p>
			 <p class='defaultImage2'>We.<br/>Build.<br/>Imagination.</p>
			 <div id="slideshow">
		   		  <img src="http://setdesign-la.com/redtruck-images/truck-s.png"  alt="Red Truck" title='Red Truck' class="active" /> 
		     </div>	<!-- end slideshow -->
		    
	             <p class='moveContentLayout moveContent'> <b>Welcome</b> to our new site.</p>
				 <p class='moveTitleLayout moveTitle'><img src="http://setdesign-la.com/redtruck-images/redtruck-logo.png" alt='Red Truck'/></p>	
	             <p class='moveContentLayout moveContent2'> <b>We</b> are your set construction specialist </p>						 
				 <p class='moveTitleLayout moveTitle2'>About Us</p>
	             <p class='moveContentLayout moveContent3'> <b>Our Company</b> has over 20 years of professional experience </p>
				 <p class='moveTitleLayout moveTitle3'>Experience</p>	           
	             <p class='moveContentLayout moveContent4'> <b>Providing</b> quality craftsmanship to our customers </p>
				 <p class='moveTitleLayout moveTitle4'>Commitment</p>
			
         </div><!-- END slidecontainer -->
	 </div><!-- END content1-one -->	
   </div> <!-- END content1 -->
   <div class='content2 clearfix'>
        <div class='ourServices'>Our Services</div>
		<div class='content2-one'>
			<div class='shortBox green'>
				<h1>Planning</h1>
				<p>Let's create a strategy together</p>
			</div>
			<div class='longBoxLast yellow'>
				<h1>Design</h1>
				<p>The design can be a collaboration</p>
			</div>
			<div class='shortBox blue'>
				<h1>Project Management</h1>
				<p>We will supervise from start to finish</p>
			</div>
			<div class='shortBox red'>
				<h1>Construction</h1>
				<p>All builds will be in our warehouse</p>
			</div>
			<div class='shortBoxLast orange'>
				<h1>Art Fabrication</h1>
				<p>Putting together all the pieces</p>
			</div>
			<div class='longBox green'>
				<h1 class='blackBackground'>Installation</h1>
				<p  class='blackBackground'>On-site installs</p>
			</div>
			<div class='shortBoxLast yellowImage'>
				<h1>Tear Down</h1>
				<p>Removal of all construction</p>
			</div>			
		</div><!-- END content2-one -->
		 <div class='ourServices'>Clients</div>
		<div class='content2-two'>
			<div class='clients grey'>Jacobs</div>
			<div class='clients grey'>Atlas</div>
			<div class='clients grey'>Mike Peter's</div>
			<div class='clientsLast grey'>The Design Store</div>
			<div class='clients grey'>Lacin</div>
			<div class='clients grey'>Last Shot</div>
			<div class='clients grey'>The Grey Foundation</div>
			<div class='clientsLast grey'>Apple</div>
			
		</div>
		<div class='ourServices'>Contact</div>
		<div class='contact'>Red Truck Inc.<br/>1300 N. Grand St.<br/>Los Angeles, Cakifornia 90046</div>
   </div><!-- END content2 -->
   
   
   	<!-- ##################################################################################################################### 
	     JH this is the content section that can be edited on interface page 
		 ##################################################################################################################### -->		
		<?php print render($page['highlighted']); ?>
		<?php if ($tabs = render($tabs)): ?>
                <div class="tabs"><?php print $tabs; ?></div>
               <?php endif; ?>
      
                               <?php if ($title): ?>
                <h1 class="title" id="page-title"><?php print $title; ?></h1>
                <?php endif; ?>
               
               <?php print render($page['content']); ?>	
	<!-- ######################################################################################################################
         END of page content entered in page
         ###################################################################################################################### -->

		 
		 
</div> <!-- pagewrapRT --> 
	
	
	

        
	<footer id="footer">
	 <div class='contentBorder'></div>
		<p>Red Truck Inc. is located in Los Angeles, Ca. Red Truck &copy; 2012</p>
		
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
    print "<a href='login'>Log In</a>";
	}
	?>
  </p>
<!---------------------------------- END jTest ------------------------------------------------------------>
	</footer>
	<!-- /#footer --> 
	
</div><!-- END pagewrap -->

<script>

      $(document).ready(function() {
		$(".fancybox").fancybox();
	});
	</script> 
 