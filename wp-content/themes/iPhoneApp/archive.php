<?php if($_REQUEST['tp']!='ajax'){?>
<?php get_header(); ?>


<div id="page">
	<div id="wrapper" class="clearfix" >
         <div id="content">
          
<?php }?>           
          
          <?php if(get_option('ptthemes_page_title')== 'yes') { ?> 
                    
                    <?php if (is_category()) { ?>
                        <h1  class="head" ><?php echo get_option('ptthemes_browsing_category'); ?> <?php echo single_cat_title(); ?> </h1>  
            
                        <?php } elseif (is_day()) { ?>
                        <h1  class="head"><?php echo get_option('ptthemes_browsing_day'); ?> <?php the_time('F jS, Y'); ?> </h1>
            
                        <?php } elseif (is_month()) { ?>
                        <h1  class="head"><?php echo get_option('ptthemes_browsing_month'); ?> <?php the_time('F, Y'); ?> </h1>
            
                        <?php } elseif (is_year()) { ?>
                        <h1  class="head"><?php echo get_option('ptthemes_browsing_year'); ?> <?php the_time('Y'); ?> </h1>
                        
                        <?php } elseif (is_author()) { ?>
                        <h1  class="head"><?php echo get_option('ptthemes_browsing_author'); ?> <?php echo $curauth->nickname; ?> </h1>
                                        
                        <?php } elseif (is_tag()) { ?>
                        <h1  class="head"><?php echo get_option('ptthemes_browsing_tag'); ?> <?php echo single_tag_title('', true); ?> </h1>
                        
                      <?php } ?>
                    
                    
          	<?php } ?>	
						
		     
            
            
               <?php
		
			if(isset($_GET['author_name'])) :
			$curauth = get_userdatabylogin($author_name);
			else :
			$curauth = get_userdata(intval($author));
			endif;
			
		?>

    <?php if (is_paged()) $is_paged = true; ?>
	
	     
		
	 
			<?php if(have_posts()) : ?>
					
			<?php while(have_posts()) : the_post() ?>
        
                <div id="post-<?php the_ID(); ?>" class="posts">
				    						                        
                    
					<div class="post_top">
                    <h2>
					<?php
					if(get_option('ptthemes_remove_pageajax'))
					{
					?>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
					<?php
					}else
					{
					?>
					<a href="javascript:void(0);" onclick="content_loader_js('<?php the_permalink() ?>','');" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" >
					<?php
					}
					?>
					<?php the_title(); ?></a></h2>
                    <p class="postmetadata">Posted on <?php the_time('F j, Y') ?>  // 
                    <span class="commentcount"> <a href="<?php the_permalink(); ?>#commentarea"><?php comments_number('0 Comments', '1 Comments', '% Comments'); ?></a></span></p>
                    </div>
					<?php if (( get_post_meta($post->ID,'image', true) ) && (get_option( 'ptthemes_timthumb_all' )) ) { ?>
                        <a title="Link to <?php the_title(); ?>" href="<?php the_permalink() ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=95&amp;w=95&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>" class="fll" style="margin-right:10px; margin-bottom:10px" /></a>          	
                    <?php } ?>
					<?php if ( get_option( 'ptthemes_postcontent_full' )) { ?> 
					    <?php the_content(); ?>
					<?php } else { ?>
					    <?php the_excerpt(); ?>
					<?php } ?>
					<div class="fix"><!----></div>
					<p class="post_bottom">Category : <?php the_category(" &amp;"); ?></p>
                </div><!--/post-->                            
            <?php endwhile; ?>
			<div class="pagination">
                <?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
            </div>
            <?php endif; ?>
<?php if($_REQUEST['tp']!='ajax'){?>         
	</div> <!-- content  #end -->
  <?php get_sidebar(); ?>
    </div> <!-- page #end -->
</div> <!-- wrapper #end -->	
<?php get_footer(); ?>
<?php }?>