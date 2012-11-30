 <div id='headerContainer'>
 <div id='topBar'></div><!-- END topBar -->
	<header id="header" class='clearfix'>

		<hgroup>
			<h1 id="site-logo"><a href="#">Bagelmania</a></h1>
			<h2 id="site-description">Coffee House</h2> 
		</hgroup>

		<nav>
		
			<?php include('sites/all/themes/zen/ashly/includes/main-menu.inc'); ?>
			
		</nav><!-- /#main-nav --> 

		
	</header>
	<!-- /#header -->
</div><!-- headerContainer -->

<div id="pagewrap">
 
	
	<div id="content">



		<article class="post clearfix">
		
			
	<!-------- JH added content ---------------------------------------------->		
			
		<?php print render($page['highlighted']); ?>
		<?php if ($tabs = render($tabs)): ?>
                <div class="tabs"><?php print $tabs; ?></div>
               <?php endif; ?>
      
                               <?php if ($title): ?>
                <h1 class="title" id="page-title"><?php print $title; ?></h1>
                <?php endif; ?>
               
               <?php print render($page['content']); ?>
               		
			
			
	<!-- END JH jTest ---------------------------------------------------------------->		
			
		
		</article>
		<!-- /.post -->

	</div>
	<!-- /#content --> 
	
	
	<aside id="sidebar">
	
	
	<section class="widget">
			<h4 class="widgettitle">What's new</h4>
	
        <?php  print render($page['top_column']); ?>
</section>
<!-- /.widget -->

		<section class="widget clearfix">
			<h4 class="widgettitle">Like Our Bagels?</h4>
			<ul>
				<li class='us'><a href="#">Urbanspoon</a> </li>
				<li class='zagat'><a href="#">Zagat</a> </li>
				<li class='yelp'><a href="#">Yelp </a></li>
			</ul>
			<br/>
			Share your opinion.
		</section>
		<!-- /.widget -->
		
		<section class="widget  clearfix">
		<h4 class='widgettitle '>Menus</h4>
	
		<?php include('sites/all/themes/zen/ashly/includes/mobileGallery-menu.inc'); ?>
		</section>
	
    	<section class="widget clearfix">
		   
			<h4 class="widgettitle ">PDF Menus</h4>
			 <img class='pdf' src='sites/bagelmania.com/files/pdf2/pdfHover.png'/>
			<?php include('sites/all/themes/zen/ashly/includes/pdf.inc'); ?>
		</section>
		
						
	</aside>
	<!-- /#sidebar -->
	
	    <div class="pollQuestion clearfix">
		 <?php print render($page['poll_question']); ?>	
			
		</div><!-- END  pollQuestion -->
		
	   <div class="topFooter clearfix">
			<a href='' id='bottom' class='donations'>
					<h3>donations</h3>
					<p>Bagelmania loves to give to the community click below too find out how. </p>
			</a><!-- END donations -->
			<a href='' id='bottom' class='wholesale'>
					<h3>wholesale</h3>
					<p>Bagelmania can meet all of your wholesale needs, high schools hotels, colleges. 
					No quantity is too big or small.</p>
			</a><!-- END whaolesale -->
			<a href='' id='bottom' class='contact'>
					<h3>Contact</h3>
					<p>Have a question or suggestion? Need to place an order? 
					We would love to hear from you.</p>
			</a><!-- END contact -->
			<a href='' id='bottom' class='about'>
					<h3>About</h3>
					<p>We are getting ready to celebrate our 20th anneversary. 
					Want to learn how bagelmania began?</p>
			</a><!-- END about -->
		</div><!-- END topFooter-->
		
       

	<footer id="footer">
	
		<p>Bagelmania &copy; 2010. All rights reserved.</p>
		
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
	
</div>
<!-- /#pagewrap -->
 <script src="sites/all/themes/zen/ashly/mobileGallery/assets/touchTouch/touchTouch.jquery.js"></script>
 <script src="sites/all/themes/zen/ashly/mobileGallery/assets/js/script.js"></script>

