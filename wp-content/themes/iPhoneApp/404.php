<?php get_header(); ?>
<div id="page">
	<div id="wrapper" class="clearfix" >
         <div id="content">
                <?php if(get_option('ptthemes_page_title')== 'yes') { ?> 
                     <h1 class="head">404 Error ! </h1> 
            		<?php } ?>	
                <h2><?php echo get_option('ptthemes_404error_name'); ?></h2>
				 <p><?php echo get_option('ptthemes_404solution_name'); ?></p> 
                </div> <!-- content  #end -->
  <?php get_sidebar(); ?>
    </div> <!-- page #end -->
</div> <!-- wrapper #end -->	
<?php get_footer(); ?>