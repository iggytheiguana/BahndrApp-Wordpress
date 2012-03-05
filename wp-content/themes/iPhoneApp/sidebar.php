<?php if(get_option('ptthemes_video_horizontal_or_vertical') == 'Horizontal') 
	{ 
	?>
		 <div id="sidebar" class="sidebar_top_spacer_none" > 
	<?php
    }else
	{		
		?>
			<div id="sidebar" class="sidebar_top_spacer" > 
	<?php
	}
	?> 
         <div class="xsnazzy">
            <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
            <div class="xboxcontent">
       <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/blogger.js"></script>
 
         <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) )  ?>        
                
              </div> 
         <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b>
     </div>
 </div> <!-- sidebar #end -->