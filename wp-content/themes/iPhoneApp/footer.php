<script>
<?php if(!get_option('ptthemes_remove_pageajax')){?>
function content_loader_js(url_link,link_li) // ajax page loader
{
	var links_arr = Array('home_menu_li','blog_menu_li');
	for(j=0;j<links_arr_sub.length;j++)
	{
		if(links_arr_sub[j])
		{
			//document.getElementById( links_arr_sub[j] ).setAttribute("class", "page_item");
			removeClass(document.getElementById(links_arr_sub[j]), "current_page_item")
			addClass(document.getElementById(links_arr_sub[j]), "page_item");


		}
	}
	for(i=0;i<links_arr.length;i++)
	{
		removeClass(document.getElementById(links_arr[i]), "current_page_item")
		addClass(document.getElementById(links_arr[i]), "page_item");
	}
	if(link_li)
	{
		addClass(document.getElementById(link_li), "current_page_item");
	}
	
	document.getElementById('content').innerHTML = '<center><img src="<?php bloginfo('template_directory'); ?>/images/preloader.gif" alt=""><br><br><b>Loading ...</b></center>';
	if(url_link.indexOf("?")<0)
	{
		url_link1 = url_link + "?tp=ajax";
	}else
	{
		url_link1 = url_link + "&tp=ajax";
	}
	$.ajax({
		url: url_link1,
		type: 'GET',
		dataType: 'html',
		timeout: 9000,
		error: function(){
			alert('Error loading information');
		},
		success: function(html){
			document.getElementById('content').innerHTML=html;
		}
	});
	return false;
}
<?php }?>

function hasClass(ele,cls) 
{
	if(eval(ele)){
	return ele.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)'));
	}
}

function addClass(ele,cls) 
{
	if(eval(ele)){
	if (!this.hasClass(ele,cls)) ele.className += " "+cls;
	}
}

function removeClass(ele,cls) 
{
	if(eval(ele)){
		if (hasClass(ele,cls)) {
			var reg = new RegExp('(\\s|^)'+cls+'(\\s|$)');
			ele.className=ele.className.replace(reg,' ');
		}
	}
}
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/contact_us_validation.js"></script>    
    <div id="bottom" class="clearfix" >
    
    
    <div class="psnazzy">
            <b class="ptop"><b class="pb1"></b><b class="pb2"></b><b class="pb3"></b><b class="pb4"></b></b>
            <div class="pboxcontent clearfix">
     	 
              <div class="widget bottom1">
                    <?php dynamic_sidebar(2);  ?>
            </div> <!-- widget #end -->
           
            <div class="widget bottom2">
                 <?php dynamic_sidebar(3);  ?>
            </div> <!-- widget #end -->
            
            <div class="widget bottom3">
                 <?php dynamic_sidebar(4);  ?>
            </div> <!-- widget #end -->
            
            
            
            </div> 
         <b class="pbottom"><b class="pb4"></b><b class="pb3"></b><b class="pb2"></b><b class="pb1"></b></b>
     </div>
         
    </div> <!-- bottom #end -->
    
    
    <div id="footer">
     <div class="footer-in container_12 clearfix">
        	<p class="fl"> &copy; <?php the_time('Y'); ?> Blue Label Solutions LLC All right reserved. </p>
            
            <p class="copyright fr"> iPhone App Theme by  <a href="http://templatic.com" title="templatic.com">Templatic</a>    </p>
            
           
     </div> <!-- footer in #end -->
    </div><!-- footer #end -->

 <?php wp_footer(); ?><?php if ( get_option('ptthemes_google_analytics') <> "" ) { echo stripslashes(get_option('ptthemes_google_analytics')); } ?>

<script type="text/javascript">
jQuery(function(){
	jQuery('ul.sf-menu').superfish();
});
jQuery(function(){
	jQuery('ul.menu').superfish();
});

</script>

</body>

</html>
		