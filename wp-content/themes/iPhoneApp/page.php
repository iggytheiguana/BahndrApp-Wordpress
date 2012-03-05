<?php if($_REQUEST['tp']!='ajax'){?>
<?php get_header(); ?>


<div id="page">
	<div id="wrapper" class="clearfix" >
         <div id="content">
 <?php }?>

 		<?php if(have_posts()) : ?>

			<?php while(have_posts()) : the_post() ?>
            		<?php $pagedesc = get_post_meta($post->ID, 'pagedesc', $single = true); ?>
                    
                    <?php if(get_option('ptthemes_page_title')== 'yes') { ?> 
                     <h1 class="head"><?php the_title(); ?></h1> 
            		<?php } ?>	
        		
                    <div id="post-<?php the_ID(); ?>" >
                        <div class="entry"> 
                            <?php the_content(); ?>
                        </div>
                    </div><!--/post-->
                
            <?php endwhile; else : ?>
        
                    <div class="posts">
                        <div class="entry-head"><h2><?php echo get_option('ptthemes_404error_name'); ?></h2></div>
                        <div class="entry-content"><p><?php echo get_option('ptthemes_404solution_name'); ?></p></div>
                    </div>
        
        <?php endif; ?>
 <?php if($_REQUEST['tp']!='ajax'){?>       
          </div> <!-- content  #end -->
        
  <?php get_sidebar(); ?>
         
		
    </div> <!-- page #end -->
</div> <!-- wrapper #end -->	

<?php get_footer(); ?>
<?php }?>