<?php
/*
Template Name: Home Page
*/
?>
<?php

if($_REQUEST['tp']=='ajax')
{
include(TEMPLATEPATH . '/library/includes/featured-page.php');
}else
{
?>
<?php get_header(); ?>

    <!-- Featured Page: START -->
	
        <?php include(TEMPLATEPATH . '/library/includes/featured-page.php'); ?>
		
 
<?php get_footer(); ?>    
<?php }?>  
      