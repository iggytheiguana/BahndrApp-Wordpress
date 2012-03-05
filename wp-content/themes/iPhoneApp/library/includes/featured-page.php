<?php
if($_REQUEST['tp']=='ajax')
{
?>
<?php 
if ( get_option('ptthemes_homepage_features') != "") 
{ 
	   echo stripslashes(get_option('ptthemes_homepage_features'));
} ?>
<?php
}else
{
?>
<div id="page">
	<div id="wrapper" class="clearfix" >
         <div id="content">
         
        
        <?php if ( get_option('ptthemes_homepage_features') != "") { ?>
                   <?php echo stripslashes(get_option('ptthemes_homepage_features'));  ?>  
    		<?php } ?>
        	 
         </div> <!-- content  #end -->
        
  <?php get_sidebar(); ?>
         
		
    </div> <!-- page #end -->
</div> <!-- wrapper #end -->
<?php }?>