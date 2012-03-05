<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title>
<?php if ( is_home() ) { ?><?php bloginfo('description'); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_search() ) { ?>Search Results&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_author() ) { ?>Author Archives&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?><?php } ?>
<?php if ( is_page() ) { ?><?php wp_title(''); ?><?php } ?>
<?php if ( is_category() ) { ?><?php single_cat_title(); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_month() ) { ?><?php the_time('F'); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php single_tag_title("", true); } } ?>
</title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_home()) { ?>
<?php if ( get_option('ptthemes_meta_description') <> "" ) { ?>
<meta name="description" content="<?php echo stripslashes(get_option('ptthemes_meta_description')); ?>" />
<?php } ?>
<?php if ( get_option('ptthemes_meta_keywords') <> "" ) { ?>
<meta name="keywords" content="<?php echo stripslashes(get_option('ptthemes_meta_keywords')); ?>" />
<?php } ?>
<?php if ( get_option('ptthemes_meta_author') <> "" ) { ?>
<meta name="author" content="<?php echo stripslashes(get_option('ptthemes_meta_author')); ?>" />
<?php } ?>
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

<?php if ( get_option('ptthemes_favicon') <> "" ) { ?>
<link rel="shortcut icon" type="image/png" href="<?php echo get_option('ptthemes_favicon'); ?>" />
<?php } ?>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('ptthemes_feedburner_url') <> "" ) { echo get_option('ptthemes_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if lt IE 7]>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/pngfix.js"></script>
<![endif]-->
<!-- IE 6 "fixes" -->
<!--[if lt IE 7]>
<link type='text/css' href='<?php bloginfo('template_directory'); ?>/library/css/basic_ie.css' rel='stylesheet' media='screen' />
<![endif]-->
<link type='text/css' href='<?php bloginfo('template_directory'); ?>/library/css/basic.css' rel='stylesheet' media='screen' />
<?php if ( get_option('ptthemes_scripts_header') <> "" ) { echo stripslashes(get_option('ptthemes_scripts_header')); } ?>
 <link href="<?php bloginfo('template_directory'); ?>/library/css/superfish.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/superfish.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/jquery.easing.1.2.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.anythingslider.js" type="text/javascript" charset="utf-8"></script>
 
<script type="text/javascript">
function formatText(index, panel) {
  return index + "";
}

$(function () {

	$('.anythingSlider').anythingSlider({
		easing: "easeInOutExpo",        // Anything other than "linear" or "swing" requires the easing plugin
		autoPlay: true,                 // This turns off the entire FUNCTIONALY, not just if it starts running or not.
		delay: 3000,                    // How long between slide transitions in AutoPlay mode
		startStopped: false,            // If autoPlay is on, this can force it to start stopped
		animationTime: 600,             // How long the slide transition takes
		hashTags: true,                 // Should links change the hashtag in the URL?
		buildNavigation: true,          // If true, builds and list of anchor links to link to each slide
		pauseOnHover: true,             // If true, and autoPlay is enabled, the show will pause on hover
		startText: "Go",             // Start text
		stopText: "Stop",               // Stop text
		navigationFormatter: formatText       // Details at the top of the file on this use (advanced use)
	});
	
	$("#slide-jump").click(function(){
		$('.anythingSlider').anythingSlider(6);
	});
	
});
</script>


<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/library/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/library/js/basic.js'></script>
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
?>
<?php wp_head(); ?>

<?php if ( get_option('ptthemes_customcss') ) { ?>
<link href="<?php bloginfo('template_directory'); ?>/custom.css" rel="stylesheet" type="text/css">
<?php } ?>
</head>

<body <?php body_class(); ?>>


<div id="header">
	<?php if(get_option('ptthemes_video_horizontal_or_vertical') == 'Horizontal') 
	{ 
		require_once (TEMPLATEPATH . '/library/includes/header_horizontal.php');
	}else
	{		
		require_once (TEMPLATEPATH . '/library/includes/header_vertical.php');
	}
	?>
    
     
</div><!-- header #end -->
           