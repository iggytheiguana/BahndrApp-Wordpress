<?php if($_REQUEST['tp']!='ajax'){?>
<?php get_header(); ?>

<div id="page">
	<div id="wrapper" class="clearfix" >
         <div id="content">
 <?php }?>          
   <h1 class="head"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1> 
			<?php if(have_posts()) : ?>
 			<?php while(have_posts()) : the_post() ?>
                <div id="post-<?php the_ID(); ?>" class="posts">
                    <p class="postmetadata">Posted on <?php the_time('F j, Y') ?>  // 
                    <span class="commentcount"> <a href="<?php the_permalink(); ?>#commentarea"><?php comments_number('0 Comments', '1 Comments', '% Comments'); ?></a></span></p>
                   
                    <?php if ( get_post_meta($post->ID,'image', true) ) { ?>
        <div class="post_img clearfix"> 
        <img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;w=500&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>"  class="img"   />
        </div>
        <?php } ?>
			<?php the_content(); ?>
            <p class="post_bottom">Category : <?php the_category(" &amp;"); ?></p>
                </div><!--/post-->
				<div id="comments"><?php comments_template(); ?></div>
            <?php endwhile; ?>
		<?php endif; ?>
<?php if($_REQUEST['tp']!='ajax'){?> 
	     </div> <!-- content  #end -->
  <?php get_sidebar(); ?>
    </div> <!-- page #end -->
</div> <!-- wrapper #end -->	
<?php get_footer(); ?>
<?php }?>