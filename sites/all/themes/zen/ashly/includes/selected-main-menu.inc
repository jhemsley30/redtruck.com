<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$contact = ' ';
$portfolio = ' ';
$info = ' ';
$home = ' ';
$blog = ' ';


if (false !== strpos($url,'home')) {
    $home = 'active';
    }
    else if (false !== strpos($url,'portfolio')) {
    $portfolio = 'active';
    }
     else if (false !== strpos($url,'info')) {
    $info = 'active';
    }
     else if (false !== strpos($url,'contact')) {
    $contact = 'active';
    }
     else if (false !== strpos($url,'blog')) {
    $blog = 'active';
    }
    else {
    $general = 'active';
    }


   print "<div id='listContainer5' class='clearfix'>
					<div id='listTest5'>
					  <a href='http://setdesign-la.com/zajack/home2'><ul><li class='$home'>Home</li>
					  </ul>
					  <div class='drop homeLogo'></div>
					  </a>
					  <a href='http://setdesign-la.com/zajack/portfolio'><ul><li class='$portfolio'>Portfolio</li>
					  </ul>
					  <div class='drop servicesLogo'></div>
					  </a>
					  <a href='http://setdesign-la.com/zajack/info'><ul><li class='$info'>Info</li>
					  </ul>
					  <div class='drop galleryLogo'></div>
					  </a>
					  <a href='http://setdesign-la.com/zajack/blog'><ul><li class='$blog'>Blog</li>
					  </ul>
					  <div class='drop blogLogo'></div>
					  </a>
					  <a href='http://setdesign-la.com/zajack/contact'><ul><li class='$contact'>Contact</li>
					  </ul>
					  <div class='drop contactLogo'></div>
					  </a>
      
                    </div> <!-- End listTest -->
					<div id='arrow'>
					 <p>&nbsp;</P>					
                     <p>&nbsp;</P>					
                     <p class='active'>&nbsp;</P>					
                     <p>&nbsp;</P>					
                     <p>&nbsp;</P>					
					</div><!-- END arrow -->
                  </div> <!-- END listContainer -->";
 

?>