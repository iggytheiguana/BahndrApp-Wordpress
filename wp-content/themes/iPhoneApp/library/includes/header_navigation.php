<?php
$sidebar_widget = get_option('sidebars_widgets');

if(empty($sidebar_widget['sidebar-5'])){

?>
<ul class="sf-menu">
<?php

	if(get_option('ptthemes_remove_pageajax'))
	{
	?>
		<li  <?php if ( is_home()) { ?> class="current_page_item" <?php } ?> id="home_menu_li" ><a href="<?php echo get_option('home'); ?>"> Home </a></li> 
		<?php wp_list_pages('title_li=&depth=0&exclude='.get_inc_pages("pag_exclude_")); ?>
		<?php if ( get_option('ptthemes_blogcategory') <> "" && $catid) { ?>
		<li <?php if ( is_category() || is_search() || is_single() || is_tag() || is_search() || is_archive() ) { ?> class="current_page_item" <?php } ?> id="blog_menu_li">		
		<a href="<?php echo get_category_link( $catid ); ?>" title="<?php echo $blogcatname; ?>"><?php echo $blogcatname; ?></a></li>
		<?php } ?>
	<?php
	}else
	{
	?>
		<li  <?php if ( is_home()) { ?> class="current_page_item" <?php } ?> id="home_menu_li" ><a href="javascript:void(0);" onClick="content_loader_js('<?php echo get_option('home'); ?>','home_menu_li');"> Home </a></li> 
		
		<?php wp_list_pages_custom(); ?>
		<?php if ( get_option('ptthemes_blogcategory') <> "" && $catid ) { ?>
		<li <?php if ( is_category() || is_search() || is_single() || is_tag() || is_search() || is_archive() ) { ?> class="current_page_item" <?php } ?> id="blog_menu_li">
		
		<a href="javascript:void(0);" onClick="content_loader_js('<?php echo get_category_link( $catid ); ?>','blog_menu_li');" title="<?php echo $blogcatname; ?>"><?php echo $blogcatname; ?></a></li>
		<?php } ?>
	<?php }?>  
</ul>
<?php 	
}
else{

	if (function_exists('dynamic_sidebar') && dynamic_sidebar(5) ) {}
}

 ?>        