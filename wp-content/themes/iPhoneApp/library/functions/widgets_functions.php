<?php

// Register widgetized areas
if ( function_exists('register_sidebar') ) {
    register_sidebars(1,array('name' => 'Sidebar','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	register_sidebars(3,array('name' => 'Footer Widget %d','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	register_sidebars(1,array('name' => 'Header Menu Widget','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
}
	
// Check for widgets in widget-ready areas http://wordpress.org/support/topic/190184?replies=7#post-808787
// Thanks to Chaos Kaizer http://blog.kaizeku.com/
function is_sidebar_active( $index = 1){
	$sidebars	= wp_get_sidebars_widgets();
	$key		= (string) 'sidebar-'.$index;
 
	return (isset($sidebars[$key]));
}

 

// =============================== Dyanmic Sidebar Blockquote widget ======================================
class BlockquoteWidget extends WP_Widget {
	function BlockquoteWidget() {
	//Constructor
		$widget_ops = array('classname' => 'widget Testimonials', 'description' => __('Testimonials') );		
		$this->WP_Widget('widget_blockquote', __('PT &rarr; Testimonials'), $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$quote = array();
		$author = array();
		if($instance['quote1' ])
		{
			$quote[] = empty($instance['quote1' ]) ? '' : apply_filters('widget_quote1', $instance['quote1']);
			$author[] = empty($instance['author1']) ? '' : apply_filters('widget_author1', $instance['author1']);
		}
		if($instance['quote2' ])
		{
			$quote[] = empty($instance['quote2']) ? '' : apply_filters('widget_quote2', $instance['quote2']);
			$author[] = empty($instance['author2']) ? '' : apply_filters('widget_author2', $instance['author2']);
		}
		if($instance['quote3' ])
		{
			$quote[] = empty($instance['quote3']) ? '' : apply_filters('widget_quote3', $instance['quote3']);
			$author[] = empty($instance['author3']) ? '' : apply_filters('widget_author3', $instance['author3']);
		}
		if($instance['quote4' ])
		{
			$quote[] = empty($instance['quote4']) ? '' : apply_filters('widget_quote4', $instance['quote4']);
			$author[] = empty($instance['author4']) ? '' : apply_filters('widget_author4', $instance['author4']);
		}
		if($instance['quote5' ])
		{
			$quote[] = empty($instance['quote5']) ? '' : apply_filters('widget_quote5', $instance['quote5']);
			$author[] = empty($instance['author5']) ? '' : apply_filters('widget_author5', $instance['author5']);
		}
		$more = empty($instance['more']) ? '' : apply_filters('widget_more', $instance['more']);
        if($quote)
	   {
			$key = rand(0,count($quote)-1);
			$quote1 = $quote[$key];
			$author1 = $author[$key];
			?>
            <blockquote class="clearfix"  >
                 	<p><span class="quote"></span> 
                    <?php echo $quote1; ?> </p>
                    <cite><?php echo $author1; ?></cite>
                 </blockquote>
            <?php
	   }
	   ?>
         
        <?php if ( $more <> "" ) { ?>	
        <p class="more"><a href="<?php echo $more; ?>"><?php _e('More reviews and buzz &raquo;')?> </a></p>
         <?php } ?>
         
       
            
            
	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['quote1'] = ($new_instance['quote1']);
		$instance['author1'] = ($new_instance['author1']);
		$instance['quote2'] = ($new_instance['quote2']);
		$instance['author2'] = ($new_instance['author2']);
		$instance['quote3'] = ($new_instance['quote3']);
		$instance['author3'] = ($new_instance['author3']);
		$instance['quote4'] = ($new_instance['quote4']);
		$instance['author4'] = ($new_instance['author4']);
		$instance['quote5'] = ($new_instance['quote5']);
		$instance['author5'] = ($new_instance['author5']);
		$instance['more'] = ($new_instance['more']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'more' => '', 'quote1' => '', 'quote2' => '', 'quote3' => '',  'quote4' => '', 'quote5' => '','author1' => '','author2' => '','author3' => '','author4' => '','author5' => '' ) );		
		$title = strip_tags($instance['title']);
		$quote1 = ($instance['quote1']);
		$author1 = ($instance['author1']);
		$quote2 = ($instance['quote2']);
		$author2 = ($instance['author2']);
		$quote3 = ($instance['quote3']);
		$author3 = ($instance['author3']);
		$quote4 = ($instance['quote4']);
		$author4 = ($instance['author4']);
		$quote5 = ($instance['quote5']);
		$author5 = ($instance['author5']);
		$more = ($instance['more']);
?>
   <p><label for="<?php echo $this->get_field_id('quote1'); ?>"><?php _e('Testimonials 1');?> <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('quote1'); ?>" name="<?php echo $this->get_field_name('quote1'); ?>"><?php echo attribute_escape($quote1); ?></textarea></label></p>
 <p><label for="<?php echo $this->get_field_id('author1'); ?>"><?php _e('Author Name 1');?> <input class="widefat" id="<?php echo $this->get_field_id('author1'); ?>" name="<?php echo $this->get_field_name('author1'); ?>" type="text" value="<?php echo attribute_escape($author1); ?>" /></label></p>
     <p><label for="<?php echo $this->get_field_id('quote2'); ?>"><?php _e('Testimonials 2');?> <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('quote2'); ?>" name="<?php echo $this->get_field_name('quote2'); ?>"><?php echo attribute_escape($quote2); ?></textarea></label></p>
 <p><label for="<?php echo $this->get_field_id('author2'); ?>"><?php _e('Author Name 2');?> <input class="widefat" id="<?php echo $this->get_field_id('author2'); ?>" name="<?php echo $this->get_field_name('author2'); ?>" type="text" value="<?php echo attribute_escape($author2); ?>" /></label></p>
 <p><label for="<?php echo $this->get_field_id('quote3'); ?>"><?php _e('Testimonials 3');?> <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('quote3'); ?>" name="<?php echo $this->get_field_name('quote3'); ?>"><?php echo attribute_escape($quote3); ?></textarea></label></p>
 <p><label for="<?php echo $this->get_field_id('author3'); ?>"><?php _e('Author Name 3');?> <input class="widefat" id="<?php echo $this->get_field_id('author3'); ?>" name="<?php echo $this->get_field_name('author3'); ?>" type="text" value="<?php echo attribute_escape($author3); ?>" /></label></p>
 <p><label for="<?php echo $this->get_field_id('quote4'); ?>"><?php _e('Testimonials 4');?> <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('quote4'); ?>" name="<?php echo $this->get_field_name('quote4'); ?>"><?php echo attribute_escape($quote4); ?></textarea></label></p>
 <p><label for="<?php echo $this->get_field_id('author4'); ?>"><?php _e('Author Name 4');?><input class="widefat" id="<?php echo $this->get_field_id('author4'); ?>" name="<?php echo $this->get_field_name('author4'); ?>" type="text" value="<?php echo attribute_escape($author4); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('quote5'); ?>"><?php _e('Testimonials 5');?> <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('quote5'); ?>" name="<?php echo $this->get_field_name('quote5'); ?>"><?php echo attribute_escape($quote5); ?></textarea></label></p>
 <p><label for="<?php echo $this->get_field_id('author5'); ?>"><?php _e('Author Name 5');?> <input class="widefat" id="<?php echo $this->get_field_id('author5'); ?>" name="<?php echo $this->get_field_name('author5'); ?>" type="text" value="<?php echo attribute_escape($author5); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('more'); ?>"><?php _e('More reviews and buzz url link here (ex.http://templatic.com/review)');?> <input class="widefat" id="<?php echo $this->get_field_id('more'); ?>" name="<?php echo $this->get_field_name('more'); ?>" type="text" value="<?php echo attribute_escape($more); ?>" /></label></p>
       
<?php
	}}
register_widget('BlockquoteWidget');



// =============================== Connect Widget ======================================
class ConnectWidget extends WP_Widget {
	function ConnectWidget() {
	//Constructor
		$widget_ops = array('classname' => 'widget Connect', 'description' => __('Connect') );		
		$this->WP_Widget('Widget_Connect', __('PT &rarr; Connect'), $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
 		$linkedin = empty($instance['linkedin']) ? '' : apply_filters('widget_linkedin', $instance['linkedin']);
		$twitter = empty($instance['twitter']) ? '' : apply_filters('widget_twitter', $instance['twitter']);
		$facebook = empty($instance['facebook']) ? '' : apply_filters('widget_facebook', $instance['facebook']);
		$technorati = empty($instance['technorati']) ? '' : apply_filters('widget_technorati', $instance['technorati']);
		$digg = empty($instance['digg']) ? '' : apply_filters('widget_digg', $instance['digg']);
		$delicious = empty($instance['delicious']) ? '' : apply_filters('widget_delicious', $instance['delicious']);
		$rssfeed = empty($instance['rssfeed']) ? '' : apply_filters('widget_rssfeed', $instance['rssfeed']);
		$desc1 = empty($instance['desc1']) ? '' : apply_filters('widget_desc1', $instance['desc1']);
		 ?>						

	 
      <h3> <?php echo $title; ?> </h3>
        
     
        <?php if ( $desc1 <> "" ) { ?>	
         <?php echo $desc1; ?> 
         <?php } ?>
		
        
        <div class="iSocialize_icons">
        	
          <?php if ( $twitter <> "" ) { ?>	
         <a href="<?php echo $twitter; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/i_twitter.png" alt=""  /></a>
         <?php } ?>
         
          <?php if ( $linkedin <> "" ) { ?>	
         <a href="<?php echo $linkedin; ?>"> 
		 <img src="<?php bloginfo('template_directory'); ?>/images/i_linkedin.png" alt=""  /></a>
		 <?php } ?>
         
         <?php if ( $facebook <> "" ) { ?>	
         <a href="<?php echo $facebook; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/i_facebook.png" alt=""  /></a>
         <?php } ?>
         
         
            <?php if ( $digg <> "" ) { ?>	
         <a href="<?php echo $digg; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/i_digg.png" alt=""  /></a>
         <?php } ?>
         
          
         <?php if ( $rssfeed <> "" ) { ?>	
         <a href="<?php echo $rssfeed; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/i_rss.png" alt=""  /></a>
         <?php } ?>
           
         </div>
        
      
            
<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['linkedin'] = ($new_instance['linkedin']);
		$instance['twitter'] = ($new_instance['twitter']);
		$instance['facebook'] = ($new_instance['facebook']);
 		$instance['technorati'] = ($new_instance['technorati']);
		$instance['digg'] = ($new_instance['digg']);
		$instance['delicious'] = ($new_instance['delicious']);
		$instance['rssfeed'] = ($new_instance['rssfeed']);
		$instance['desc1'] = ($new_instance['desc1']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'linkedin' => '', 'twitter' => '', 'facebook' => '',  'technorati' => '', 'digg' => '', 'delicious' => '', 'rssfeed' => '', 'desc1' => '' ) );		
		$title = strip_tags($instance['title']);
		$linkedin = ($instance['linkedin']);
		$twitter = ($instance['twitter']);
		$facebook = ($instance['facebook']);
		$technorati = ($instance['technorati']);
		$digg = ($instance['digg']);
		$delicious = ($instance['delicious']);
		$rssfeed = ($instance['rssfeed']);
		$img1 = ($instance['img1']);		
		$desc1 = ($instance['desc1']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title:');?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
         <p><label for="<?php echo $this->get_field_id('desc1'); ?>"><?php _e('Text Under Title:');?>  <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('desc1'); ?>" name="<?php echo $this->get_field_name('desc1'); ?>"><?php echo attribute_escape($desc1); ?></textarea></label></p>

   <p><label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter: (write full URL)');?> 
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo attribute_escape($twitter); ?>" /></label></p>
   <p><label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('LinkedIn: (write full URL)');?> 
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo attribute_escape($linkedin); ?>" /></label></p>
 <p><label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook: (write full URL)');?> 
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo attribute_escape($facebook); ?>" /></label></p>
 <p><label for="<?php echo $this->get_field_id('digg'); ?>"><?php _e('Digg It: (write full URL)');?> 
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('digg'); ?>" type="text" value="<?php echo attribute_escape($digg); ?>" /></label></p>
 <p><label for="<?php echo $this->get_field_id('rssfeed'); ?>"><?php _e('RSS FEED: (write full URL)');?> 
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('rssfeed'); ?>" type="text" value="<?php echo attribute_escape($rssfeed); ?>" /></label></p>
<?php
	}}
register_widget('ConnectWidget');


 
// =============================== About us Widget ======================================
class TextWidget extends WP_Widget {
	function TextWidget() {
	//Constructor
		$widget_ops = array('classname' => 'About us', 'description' => __('About us Widget') );		
		$this->WP_Widget('widget_text', __('PT &rarr; About us'), $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
		$desc1 = empty($instance['desc1']) ? '&nbsp;' : apply_filters('widget_desc1', $instance['desc1']);
		 ?>						
  		<h3><?php echo $title; ?> </h3>
        <?php if ( $desc1 <> "" ) { ?>	
         <?php echo $desc1; ?> 
         <?php } ?>
 	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['desc1'] = ($new_instance['desc1']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 't1' => '', 't2' => '', 't3' => '',  'img1' => '', 'desc1' => '' ) );		
		$title = strip_tags($instance['title']);
		$desc1 = ($instance['desc1']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title:');?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
     
        <p><label for="<?php echo $this->get_field_id('desc1'); ?>"><?php _e('Description');?> <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('desc1'); ?>" name="<?php echo $this->get_field_name('desc1'); ?>"><?php echo attribute_escape($desc1); ?></textarea></label></p>
       
<?php
	}}
register_widget('TextWidget');


// =============================== Navigation us Widget ======================================
class NavWidget extends WP_Widget {
	function NavWidget() {
	//Constructor
		$widget_ops = array('classname' => 'Footer Navigation', 'description' => __('Footer Navigation') );		
		$this->WP_Widget('widget_nav', __('PT &rarr; Footer Navigation'), $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
		$pageid = empty($instance['pageid']) ? '&nbsp;' : apply_filters('widget_pageid', $instance['pageid']);
		 ?>						
       		<h3><?php echo $title; ?> </h3>
          
         <?php if ( $pageid <> "" ) { ?>
        <ul class="links">
        <?php wp_list_pages('title_li=&depth=1&include=' . $pageid . '&sort_column=menu_order'); ?>
        </ul>
    <?php } ?>
 	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['pageid'] = ($new_instance['pageid']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'pageid' => '' ) );		
		$title = strip_tags($instance['title']);
		$pageid = ($instance['pageid']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title:');?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
     
        <p><label for="<?php echo $this->get_field_id('pageid'); ?>"><?php _e('Page id (ex:3,2,4)');?><input class="widefat" id="<?php echo $this->get_field_id('pageid'); ?>" name="<?php echo $this->get_field_name('pageid'); ?>" type="text" value="<?php echo attribute_escape($pageid); ?>" /></label></p>
       
<?php
	}}
register_widget('NavWidget');



// =============================== Feedburner Subscribe widget ======================================
function subscribeWidget()
{
	$settings = get_option("widget_subscribewidget");

	$id = $settings['id'];
	$title = $settings['title'];
	$text = $settings['text'];	

?>
    <div class="widget" >	
     
  <h3><?php echo $title; ?></h3>
    
  	<p><?php echo $text; ?> </p>
	  <form  class="subscribe clearfix" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow"  onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $id; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
      
     
     <input type="text" class="subscribe_textield" onFocus="if (this.value == '<?php _e('Your Email Address');?>') {this.value = '';}" onBlur="if (this.value == '') {this.value = '<?php _e('Your Email Address');?>';}" name="email"/>
      <input type="hidden" value="<?php echo $id; ?>" name="uri"/><input type="hidden" name="loc" value="en_US"/>
       <input type="image" src="<?php bloginfo('template_url'); ?>/images/none.png"   value="Subscribe" class="bsubscribe" />
        
       </form>
 	</div> 
<?php
}

function subscribeWidgetAdmin() {

	$settings = get_option("widget_subscribewidget");

	// check if anything's been sent
	if (isset($_POST['update_subscribe'])) {
		$settings['id'] = strip_tags(stripslashes($_POST['subscribe_id']));
		$settings['title'] = strip_tags(stripslashes($_POST['subscribe_title']));
		$settings['text'] = strip_tags(stripslashes($_POST['subscribe_text']));		

		update_option("widget_subscribewidget",$settings);
	}

	echo '<p>
			<label for="subscribe_title">'.__('Title:').'
			<input id="subscribe_title" name="subscribe_title" type="text" class="widefat" value="'.$settings['title'].'" /></label></p>';
	echo '<p>
			<label for="subscribe_text">'.__('Text Under Title:').'
			<input id="subscribe_text" name="subscribe_text" type="text" class="widefat" value="'.$settings['text'].'" /></label></p>';
	echo '<p>
			<label for="subscribe_id">'.__('Feedburner ID <small>(example: templatic/eKPs)</small>:').'
			<input id="subscribe_id" name="subscribe_id" type="text" class="widefat" value="'.$settings['id'].'" /></label></p>';			
	echo '<input type="hidden" id="update_subscribe" name="update_subscribe" value="1" />';

}

register_sidebar_widget('PT &rarr; Subscribe', 'subscribeWidget');
register_widget_control('PT &rarr; Subscribe', 'subscribeWidgetAdmin', 400, 200);


 


// =============================== Flickr widget ======================================

function flickrWidget()
{
	$settings = get_option("widget_flickrwidget");

	$id = $settings['id'];
	$number = $settings['number'];

?>

<div class="widget clearfix flickr ">
 		
        <h3><?php _e('Flickr Photostream');?></h3>
	      <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $number; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo $id; ?>"></script>  
</div>		

<?php
}
function flickrWidgetAdmin() {

	$settings = get_option("widget_flickrwidget");

	// check if anything's been sent
	if (isset($_POST['update_flickr'])) {
		$settings['id'] = strip_tags(stripslashes($_POST['flickr_id']));
		$settings['number'] = strip_tags(stripslashes($_POST['flickr_number']));

		update_option("widget_flickrwidget",$settings);
	}

	echo '<p>
			<label for="flickr_id">'.__('Flickr ID (<a href="http://www.idgettr.com">idGettr</a>):').'
			<input id="flickr_id" name="flickr_id" type="text" class="widefat" value="'.$settings['id'].'" /></label></p>';
	echo '<p>
			<label for="flickr_number">'.__('Number of photos:').'
			<input id="flickr_number" name="flickr_number" type="text" class="widefat" value="'.$settings['number'].'" /></label></p>';
	echo '<input type="hidden" id="update_flickr" name="update_flickr" value="1" />';

}

register_sidebar_widget('PT &rarr; Flickr Photos', 'flickrWidget');
register_widget_control('PT &rarr; Flickr Photos', 'flickrWidgetAdmin', 250, 200);

 
// =============================== Popular Posts Widget ======================================

function PopularPostsSidebar()
{

    $settings_pop = get_option("widget_popularposts");

	$name = $settings_pop['name'];
	$number = $settings_pop['number'];
	if ($name <> "") { $popname = $name; } else { $popname = __('Popular Posts'); }
	if ($number <> "") { $popnumber = $number; } else { $popnumber = '10'; }

?>

<div class="widget popular">

	<h3 class="hl"><span><?php echo $popname; ?></span></h3>
	
		<ul>
			 
			<?php
			global $wpdb;
            $now = gmdate("Y-m-d H:i:s",time());
            $lastmonth = gmdate("Y-m-d H:i:s",gmmktime(date("H"), date("i"), date("s"), date("m")-12,date("d"),date("Y")));
            $popularposts = "SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS 'stammy' FROM $wpdb->posts, $wpdb->comments WHERE comment_approved = '1' AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status = 'publish' AND post_date < '$now' AND post_date > '$lastmonth' AND comment_status = 'open' GROUP BY $wpdb->comments.comment_post_ID ORDER BY stammy DESC LIMIT $popnumber";
            $posts = $wpdb->get_results($popularposts);
            $popular = '';
            if($posts){
                foreach($posts as $post){
	                $post_title = stripslashes($post->post_title);
		               $guid = get_permalink($post->ID);
					   
					      $first_post_title=substr($post_title,0,26);
            ?>
		        <li>
                    <a href="<?php echo $guid; ?>" title="<?php echo $post_title; ?>"><?php echo $first_post_title; ?></a>
                    <br style="clear:both" />
                </li>
            <?php } } ?>

		</ul>
</div>

<?php
}
function PopularPostsAdmin() {

	$settings_pop = get_option("widget_popularposts");

	// check if anything's been sent
	if (isset($_POST['update_popular'])) {
		$settings_pop['name'] = strip_tags(stripslashes($_POST['popular_name']));
		$settings_pop['number'] = strip_tags(stripslashes($_POST['popular_number']));

		update_option("widget_popularposts",$settings_pop);
	}

	echo '<p>
			<label for="popular_name">'.__('Title:').'
			<input id="popular_name" name="popular_name" type="text" class="widefat" value="'.$settings_pop['name'].'" /></label></p>';
	echo '<p>
			<label for="popular_number">'.__('Number of popular posts:').'
			<input id="popular_number" name="popular_number" type="text" class="widefat" value="'.$settings_pop['number'].'" /></label></p>';
	echo '<input type="hidden" id="update_popular" name="update_popular" value="1" />';

}

register_sidebar_widget('PT &rarr; Popular Posts', 'PopularPostsSidebar');
register_widget_control('PT &rarr; Popular Posts', 'PopularPostsAdmin', 250, 200);


// =============================== Twitter widget ======================================
// Plugin Name: Twitter Widget
// Plugin URI: http://seanys.com/2007/10/12/twitter-wordpress-widget/
// Description: Adds a sidebar widget to display Twitter updates (uses the Javascript <a href="http://twitter.com/badges/which_badge">Twitter 'badge'</a>)
// Version: 1.0.3
// Author: Sean Spalding
// Author URI: http://seanys.com/
// License: GPL

function widget_Twidget_init() {

	if ( !function_exists('register_sidebar_widget') )
		return;

	function widget_Twidget($args) {

		// "$args is an array of strings that help widgets to conform to
		// the active theme: before_widget, before_title, after_widget,
		// and after_title are the array keys." - These are set up by the theme
		extract($args);

		// These are our own options
		$options = get_option('widget_Twidget');
		$account = $options['account'];  // Your Twitter account name
		$title = $options['title'];  // Title in sidebar for widget
		$show = $options['show'];  // # of Updates to show
		$follow = $options['follow'];  // # of Updates to show

        // Output
		echo $before_widget ;

		// start
		echo '<div class="widget"> ';      
		echo '<h3> '.$title.' </h3>';
		echo '<ul id="twitter_update_list"><li></li></ul>';
		echo '<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/'.$account.'.json?callback=twitterCallback2&amp;count='.$show.'"></script>';
		echo '<a href="http://www.twitter.com/'.$account.'/" title="'.$follow.'" class="b_followusontwitter">Follow us on twitter </a>  </div>';
			
				
		// echo widget closing tag
		echo $after_widget;
	}

	// Settings form
	function widget_Twidget_control() {

		// Get options
		$options = get_option('widget_Twidget');
		// options exist? if not set defaults
		if ( !is_array($options) )
			$options = array('account'=>'rbhavesh', 'title'=>__('Twitter Updates'), 'show'=>'3');

        // form posted?
		if ( $_POST['Twitter-submit'] ) {

			// Remember to sanitize and format use input appropriately.
			$options['account'] = strip_tags(stripslashes($_POST['Twitter-account']));
			$options['title'] = strip_tags(stripslashes($_POST['Twitter-title']));
			$options['show'] = strip_tags(stripslashes($_POST['Twitter-show']));
			$options['follow'] = strip_tags(stripslashes($_POST['Twitter-follow']));
			$options['linkedin'] = strip_tags(stripslashes($_POST['Twitter-linkedin']));
			$options['facebook'] = strip_tags(stripslashes($_POST['Twitter-facebook']));
			update_option('widget_Twidget', $options);
		}

		// Get options for form fields to show
		$account = htmlspecialchars($options['account'], ENT_QUOTES);
		$title = htmlspecialchars($options['title'], ENT_QUOTES);
		$show = htmlspecialchars($options['show'], ENT_QUOTES);
		$follow = htmlspecialchars($options['follow'], ENT_QUOTES);

		// The form fields
		echo '<p style="text-align:left;">
				<label for="Twitter-account">' . __('Twitter Account ID:') . '
				<input style="width: 280px;" id="Twitter-account" name="Twitter-account" type="text" value="'.$account.'" />
				</label></p>';
		echo '<p style="text-align:left;">
				<label for="Twitter-title">' . __('Title:') . '
				<input style="width: 280px;" id="Twitter-title" name="Twitter-title" type="text" value="'.$title.'" />
				</label></p>';
		echo '<p style="text-align:left;">
				<label for="Twitter-show">' . __('Show Twitter Posts:') . '
				<input style="width: 280px;" id="Twitter-show" name="Twitter-show" type="text" value="'.$show.'" />
				</label></p>';
		echo '<input type="hidden" id="Twitter-submit" name="Twitter-submit" value="1" />';
	}


	// Register widget for use
	register_sidebar_widget(array(__('PT &rarr; Twitter'), 'widgets'), 'Widget_Twidget');

	// Register settings for use, 300x200 pixel form
	register_widget_control(array(__('PT &rarr; Twitter'), 'widgets'), 'Widget_Twidget_control', 300, 200);
	
}

// Run code and init
add_action('widgets_init', 'widget_Twidget_init');
?>