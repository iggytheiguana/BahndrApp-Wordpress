<?php

$themename = get_option('current_theme');
$shortname = "ptthemes";
$current_theme = str_replace(' ','+',get_option('current_theme'));
$template = get_option('template');
$customcssurl = "".trailingslashit( get_bloginfo('url') )."wp-admin/theme-editor.php?file=/themes/$template/custom.css&theme=$current_theme&dir=style";
$generaloptionsurl = "".trailingslashit( get_bloginfo('url') )."wp-admin/options-general.php";
$widgetsurl = "".trailingslashit( get_bloginfo('url') )."wp-admin/widgets.php";
$bloghomeurl = "".trailingslashit( get_bloginfo('url') )."";

  $functions_path = TEMPLATEPATH . '/library/functions/';
  $includes_path = TEMPLATEPATH . '/library/includes/';
  $javascript_path = TEMPLATEPATH . '/library/js/';
  $css_path = TEMPLATEPATH . '/library/css/';

?>