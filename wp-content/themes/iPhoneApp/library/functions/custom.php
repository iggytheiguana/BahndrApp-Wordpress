<?php

function wp_list_pages_custom()
{
	$list_page = wp_list_pages('title_li=&depth=0&exclude=' . get_inc_pages("pag_exclude_") .'&sort_column=menu_order&echo=0');
	$list_page_arr_li = explode('<li ',$list_page);
	for($l=0;$l<count($list_page_arr_li);$l++)
	{
		if($list_page_arr_li[$l])
		{
			$list_page_arr_li[$l] = ' id="page_menu_li'.$l.'" '.$list_page_arr_li[$l];
		}
	}
	$list_page = implode('<li ',$list_page_arr_li);
	$list_page_arr = explode('<a ',$list_page);
	$hyperlink_arr = array();
	$hyperlink_arr_rep = array();
	echo '<script>var links_arr_sub = new Array();</script>';
	for($p=0;$p<count($list_page_arr);$p++)
	{
		$list_page_arr1 = explode('" ',$list_page_arr[$p]);
		if(strstr($list_page_arr1[0],'href="'))
		{
			$page_link = str_replace('href="','',$list_page_arr1[0]);
			$hyperlink_arr[]='"'.$page_link.'"';
			$page_menu_li = '';
			$page_menu_li = 'page_menu_li'.$p;
			$hyperlink_arr_rep[] = '"'."javascript:void(0);\" onclick=\"content_loader_js('".$page_link."','".$page_menu_li."');".'"';
			echo '<script>links_arr_sub['.$p.'] = "'.$page_menu_li.'";</script>';
		}
	}
	echo str_replace($hyperlink_arr,$hyperlink_arr_rep,$list_page);
}

function get_previous_posts_link_custom( $label = '&laquo; Previous Page' ) {
	global $paged;

	if ( !is_single() && $paged > 1 ) {
		$attr = apply_filters( 'previous_posts_link_attributes', '' );
		echo '<a href="javascript:void(0);" onclick="content_loader_js(\'' . previous_posts( false ) . "')\" $attr>". preg_replace( '/&([^#])(?![a-z]{1,8};)/', '&#038;$1', $label ) .'</a>';
	}
}

function get_next_posts_link_custom( $label = 'Next Page &raquo;', $max_page = 0 ) {
	global $paged, $wp_query;

	if ( !$max_page ) {
		$max_page = $wp_query->max_num_pages;
	}

	if ( !$paged )
		$paged = 1;

	$nextpage = intval($paged) + 1;

	if ( !is_single() && ( empty($paged) || $nextpage <= $max_page) ) {
		$attr = apply_filters( 'next_posts_link_attributes', '' );
		echo '<a href="javascript:void(0);" onclick="content_loader_js(\'' . next_posts( $max_page, false ) . "')\" $attr>". preg_replace('/&([^#])(?![a-z]{1,8};)/', '&#038;$1', $label) .'</a>';
	}
}
?>