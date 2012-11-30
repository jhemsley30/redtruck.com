<?php





/******************************************** SECOND TEST *******************************************************/	

$imgs2 = scandir("sites/bagelmania.com/files/chicken");
/** Unset the first 2 items in the array since they contain . and .. respectively **/
unset($imgs2[0]);
unset($imgs2[1]);


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
         
	if ($sizer[0] == 's' ) 
       {
	print 
    
	" <div class='flickr_badge_image'><a class='fancybox' href='sites/bagelmania.com/files/chicken/" . "$number[0]" . "-" . "m" . "$period" . "$sizer[1]'" . "rel='gallery' title='Bagelmania.com'> " ; 
       }
	if ($sizer[0] == 's' ) 
	{
	print
	"<img  src='sites/bagelmania.com/files/chicken/" . "$number[0]" . "-" . "s" . "$period" . "$sizer[1]'" . 
	"alt='' width='48' height='48'  /></a></div>";
	}
	
		
    }
	
}


?>