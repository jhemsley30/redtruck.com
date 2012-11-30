<?php





/******************************************** SECOND TEST *******************************************************/	

$imgs2 = scandir("sites/bagelmania.com/files/menu");
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
         
	
	print 
    
	"<a href='sites/bagelmania.com/files/menu/" . "$img2" . "'" . "rel='menu' title='$ext[0]'" . 
    "style='background-image:url(sites/bagelmania.com/files/menu/" . "$img2" . ")'></a>"	; 
       
	 
	   

		
    }
	
}
print "</div>";

?>