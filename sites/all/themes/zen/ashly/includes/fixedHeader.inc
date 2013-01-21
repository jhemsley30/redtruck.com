 <script>
    function UpdateTableHeaders() {
       $(".theWrap").each(function() {
       
           var el             = $(this),
               offset         = el.offset(),
               scrollTop      = $(window).scrollTop(),
               floatingHeader = $(".floatingHeader", this)
			  
           
           if ((scrollTop > offset.top) && (scrollTop < offset.top + el.height())) {
               floatingHeader.css({
                "visibility": "visible"
               });
			 
			   
           } else {
               floatingHeader.css({
                "visibility": "hidden"
               }); 
             			   
           };
       });
    }
    
    // DOM Ready      
    $(function() {
    
       var clonedHeaderRow;
    
       $(".theWrap").each(function() {
           clonedHeaderRow = $(".newHeaderWrap", this);
           clonedHeaderRow
             .before(clonedHeaderRow.clone())
             // JH, did this so the width doesn't get messed up.css("width", clonedHeaderRow.width())
             .addClass("floatingHeader");
		 
             
       });
       
       $(window)
        .scroll(UpdateTableHeaders)
        .trigger("scroll");
       
    });
  </script>