<?php
set_time_limit(0);
global  $wpdb;
//require_once (TEMPLATEPATH . '/delete_data.php');

/////////////// TERMS & products START ///////////////
$category_array = array('Blog');
$dummy_image_path = get_template_directory_uri().'/images/dummy/';

$post_array = array();
$post_info = array();
$post_info[] = array(
					"post_title"	=>	'Sample Lorem Ipsum Post',
					"post_content"	=>	'What is Lorem Ipsum?<br><br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
<br><br>Where does it come from?',
					);
$post_info[] = array(
					"post_title"	=>	'another sample post',
					"post_content"	=>	'What is Lorem Ipsum?<br><br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
<br><br>Where does it come from?',
					);
$post_info[] = array(
					"post_title"	=>	'Sample Blog Post',
					"post_content"	=>	'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
					);
$post_info[] = array(
					"post_title"	=>	'What is Lorem Ipsum?',
					"post_content"	=>	'What is Lorem Ipsum?<br><br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
<br><br>Where does it come from?',
					);
$post_info[] = array(
					"post_title"	=>	'Letraset sheets',
					"post_content"	=>	'What is Lorem Ipsum?<br><br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
<br><br>Where does it come from?',
					);
$post_info[] = array(
					"post_title"	=>	'Why do we use it?',
					"post_content"	=>	'What is Lorem Ipsum?<br><br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
<br><br>Where does it come from?',
					);				
$post_array['Blog'] = $post_info;
///===========================///
for($c=0;$c<count($category_array);$c++)
{
	$cat_name = $category_array[$c];
	if(is_array($cat_name))
	{
		$parent_cat_id = '0';
		$cat_name_arr = $cat_name;
		for($i=0;$i<count($cat_name_arr);$i++)
		{
			$cat_id = '';
			$cat_name = $cat_name_arr[$i];
			$cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name=\"$cat_name\"");
			if($cat_id=='')
			{
				$srch_arr = array(' &amp; ',' ');
				$replace_arr = array('-','-');
				$slug = str_replace($srch_arr,$replace_arr,$cat_name);
				$cat_sql = "insert into $wpdb->terms (name,slug) values (\"$cat_name\",\"$slug\")";
				$wpdb->query($cat_sql);
				$last_cat_id = $wpdb->get_var("SELECT max(term_id) FROM $wpdb->terms");
				$cat_id  = $last_cat_id;
				$count = count($post_array[$cat_name]);
				$tt_sql = "insert into $wpdb->term_taxonomy (term_id,taxonomy,parent,count) values (\"$last_cat_id\",'category',\"$parent_cat_id\",\"$count\")";
				$wpdb->query($tt_sql);
				$last_tt_id = $wpdb->get_var("SELECT max(term_taxonomy_id) FROM $wpdb->term_taxonomy");
				if($post_array[$cat_name])
				{
					$post_info_arr = $post_array[$cat_name];
					set_post_info_autorun($post_info_arr);
				}				
			}else
			{
				$last_cat_id = $cat_id;
				$count = count($post_array[$cat_name]);
				$last_tt_id = $wpdb->get_var("SELECT tt.term_taxonomy_id FROM $wpdb->term_taxonomy tt where tt.term_id=\"$last_cat_id\" and tt.taxonomy='category'");
				if($post_array[$cat_name])
				{
					$post_info_arr = $post_array[$cat_name];
					set_post_info_autorun($post_info_arr);
				}
				$tt_update_sql = "update $wpdb->term_taxonomy set count=count+$count where term_id=\"$last_cat_id\"";
				$wpdb->query($tt_update_sql);
			}
			if($i==0)
			{
				$parent_cat_id = $last_cat_id;
			}
		}
	}else
	{
		$cat_id = '';
		$cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name=\"$cat_name\"");
		if($cat_id=='')
		{
			$srch_arr = array(' &amp; ',' ');
			$replace_arr = array('-','-');
			$slug = str_replace($srch_arr,$replace_arr,$cat_name);
			$cat_sql = "insert into $wpdb->terms (name,slug) values (\"$cat_name\",\"$slug\")";
			$wpdb->query($cat_sql);
			$last_cat_id = $wpdb->get_var("SELECT max(term_id) FROM $wpdb->terms");
			$count = count($post_array[$cat_name]);
			$parent_cat_id = 0;
			$tt_sql = "insert into $wpdb->term_taxonomy (term_id,taxonomy,parent,count) values (\"$last_cat_id\",'category',\"$parent_cat_id\",\"$count\")";
			$wpdb->query($tt_sql);
			$last_tt_id = $wpdb->get_var("SELECT max(term_taxonomy_id) FROM $wpdb->term_taxonomy");
			if($post_array[$cat_name])
			{
				$post_info_arr = $post_array[$cat_name];
				set_post_info_autorun($post_info_arr);
			}	
		}else
		{
			$last_cat_id = $cat_id;
			$count = count($post_array[$cat_name]);
			$tt_update_sql = "update $wpdb->term_taxonomy set count=count+$count where term_id=\"$last_cat_id\"";
			$wpdb->query($tt_update_sql);
			$last_tt_id = $wpdb->get_var("SELECT tt.term_taxonomy_id FROM $wpdb->term_taxonomy tt where tt.term_id=\"$last_cat_id\" and tt.taxonomy='category'");
			if($post_array[$cat_name])
			{
				$post_info_arr = $post_array[$cat_name];
				set_post_info_autorun($post_info_arr);
			}
		}
	}
}
/////////////// TERMS END ///////////////
/////////////// Design Settings START ///////////////
$blog_cat_name = 'Blog';
update_option("ptthemes_blogcategory",$blog_cat_name);
update_option("ptthemes_slider_img1",$dummy_image_path.'screen1.png');
update_option("ptthemes_homepage_features",'<h3 class="title"> This is a Wordpress page. You can add any kind of elements
audio, video, images or any content as per your wish </h3>
             	<div class="features">
                  <img src="'.$dummy_image_path.'f1.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                 </div> 
                 <div class="features">
                  <img src="'.$dummy_image_path.'f2.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                </div> 
                 <div class="features">
                   <img src="'.$dummy_image_path.'f3.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                </div> 
                 <p class="hightlight"> 
               	<strong>You can even highlight some pagagraphs</strong> like this simply by apppying a css class . Aenean sagittis. Etiam leo pede, <a href="#">rhoncus venenatis</a>, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti vulputate at. </p>
                 <ul>
                	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                </ul>
');
update_option("ptthemes_feedburner_url",'http://templatic.com/templatic/eKPs');
update_option("ptthemes_topheader_subtitle",'Use this part to convince the site visitor to take action on the following buttons.  Use this part to convince the.');
update_option("ptthemes_topheader_content",'<p> Use this part to convince the site visitor to take action on the following buttons.  Use this part to convince the site 
 visitor to take action on the following buttons.  </p>');
update_option("ptthemes_app_store_img",$dummy_image_path.'appstore.png');
update_option("ptthemes_app_store_img_link",'http://apple.com');
update_option("ptthemes_iphoneapp_price",'$2.08');
update_option("ptthemes_slider_img1",$dummy_image_path.'screen1.png');
update_option("ptthemes_slider_img2",$dummy_image_path.'screen2.png');
update_option("ptthemes_slider_img3",$dummy_image_path.'screen3.png');
update_option("ptthemes_slider_img4",$dummy_image_path.'screen4.png');
update_option("ptthemes_slider_img5",$dummy_image_path.'screen5.png');


/////////////// Design Settings END ///////////////
function set_widget_info($widget_name,$sidebar_position,$mywidget_info1)
{
	global $wpdb;
	$sidebars_widgets = get_option('sidebars_widgets');
	$widget_info = get_option('widget_'.$widget_name);
	$key_arr = array();
	if($widget_info && is_array($widget_info))
	{
		foreach($widget_info as $key1=>$val1)
		{
			if(is_int($key1))
			{
				$key_arr[] = $key1; 
			}
		}
		$info_key = max($key_arr)+1;
	}else
	{
		$info_key = 1;	
	}
	
	$widget_info[$info_key] = $mywidget_info1;
	$widget_info_str = serialize($widget_info);
	$delsql = "delete from $wpdb->options where option_name='widget_".$widget_name."'";
	$wpdb->query($delsql);
	$insertsql = "insert into $wpdb->options (option_name,option_value) values ('widget_".$widget_name."','".$widget_info_str."')";
	$wpdb->query($insertsql);
	
	$sidebars_widgets[$sidebar_position][] = "$widget_name-$info_key";
	update_option('sidebars_widgets',$sidebars_widgets);  //save widget iformations
}
function set_widget_info2($widget_name,$sidebar_position,$sideber_widget_name,$subscribe_info)
{

	update_option('widget_'.$widget_name,$subscribe_info);
	$subscribe_info = get_option('widget_'.$widget_name);
	$sidebars_widgets = get_option('sidebars_widgets');		
	$sidebars_widgets[$sidebar_position][] = $sideber_widget_name;
	update_option('sidebars_widgets',$sidebars_widgets);  //save widget iformations
}
function set_post_tag($pid,$post_tags)
{
	global $wpdb;
	$post_tags_arr = explode(',',$post_tags);
	for($t=0;$t<count($post_tags_arr);$t++)
	{
		$posttag = $post_tags_arr[$t];
		$term_id = $wpdb->get_var("SELECT t.term_id FROM $wpdb->terms t join $wpdb->term_taxonomy tt on tt.term_id=t.term_id where t.name=\"$posttag\" and tt.taxonomy='post_tag'");
		if($term_id == '')
		{
			$srch_arr = array('&amp;',"'",'"',"?",".","!","@","#","$","%","^","&","*","(",")","-","+","+"," ",';',',','_');
				$replace_arr = array('','','','','','','','','','','','','','','','','','','','',',','','');
			$posttagslug = str_replace($srch_arr,$replace_arr,$posttag);
			$termsql = "insert into $wpdb->terms (name,slug) values (\"$posttag\",\"$posttagslug\")";
			$wpdb->query($termsql);
			$last_termsid = $wpdb->get_var("SELECT max(term_id) as term_id FROM $wpdb->terms");
		}else
		{
			$last_termsid = $term_id;
		}
		$term_taxonomy_id = $wpdb->get_var("SELECT term_taxonomy_id FROM $wpdb->term_taxonomy where term_id=\"$last_termsid\" and taxonomy='post_tag'");
		if($term_taxonomy_id=='')
		{
			$termpost = "insert into $wpdb->term_taxonomy (term_id,taxonomy,count) values (\"$last_termsid\",'post_tag',1)";
			$wpdb->query($termpost);
			$term_taxonomy_id = $wpdb->get_var("SELECT term_taxonomy_id FROM $wpdb->term_taxonomy where term_id=\"$last_termsid\" and taxonomy='post_tag'");
		}else
		{
			$termpost = "update $wpdb->term_taxonomy set count=count+1 where term_taxonomy_id=\"$term_taxonomy_id\"";
			$wpdb->query($termpost);
		}
		$termsql = "insert into $wpdb->term_relationships (object_id,term_taxonomy_id) values (\"$pid\",\"$term_taxonomy_id\")";
		$wpdb->query($termsql);
	}
}
function set_post_info_autorun($post_info_arr)
{
	if(count($post_info_arr)>0)
	{
		global $last_tt_id,$feature_cat_name,$post_author,$wpdb;
		for($p=0;$p<count($post_info_arr);$p++)
		{
			$post_title = $post_info_arr[$p]['post_title'];
			$post_content = $post_info_arr[$p]['post_content'];
			$post_date = date('Y-m-d H:s:i');
			$post_IDs = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like \"$post_title\" and post_type='post'");
			if($post_IDs==0)
			{
				$post_name = strtolower(str_replace(array('&amp;',"'",'"',"?",".","!","@","#","$","%","^","&","*","(",")","-","+","+"," ",';',',','_','/'),array('','','','','','','','','','','','','','','','','','','','',',','','',''),$post_title));
				$post_name_count = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_name like \"$post_name%\" and post_type='post'");
				if($post_name_count>0)
				{
					$post_name = $post_name.'-'.($post_name_count+1);
				}
				$post_sql = "insert into $wpdb->posts (post_author,post_date,post_date_gmt,post_content,post_title,post_name) values (\"$post_author\", \"$post_date\", \"$post_date\", \"$post_content\", \"$post_title\", \"$post_name\")";
				$wpdb->query($post_sql);
				$last_post_id = $wpdb->get_var("SELECT max(ID) FROM $wpdb->posts");
				$guid = get_option('siteurl')."/?p=$last_post_id";
				$guid_sql = "update $wpdb->posts set guid=\"$guid\" where ID=\"$last_post_id\"";
				$wpdb->query($guid_sql);
				if($post_info_arr[$p]['post_meta'])
				{
					foreach($post_info_arr[$p]['post_meta'] as $mkey=>$mval)
					{
						update_post_meta( $last_post_id, $mkey, $mval );
					}
				}
				update_post_meta( $last_post_id, 'pt_dummy_content', 1 );
				if($post_info_arr[$p]['post_tags'])
				{
					set_post_tag($last_post_id,$post_info_arr[$p]['post_tags']);
				}
				$ter_relation_sql = "insert into $wpdb->term_relationships (object_id,term_taxonomy_id) values (\"$last_post_id\",\"$last_tt_id\")";
				$wpdb->query($ter_relation_sql);
				$post_feature = $post_info_arr[$p]['post_feature'];
				$feature_cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name=\"$feature_cat_name\"");
				
				if($post_feature && $feature_cat_id)
				{
					$ter_relation_sql = "insert into $wpdb->term_relationships (object_id,term_taxonomy_id) values (\"$last_post_id\",\"$feature_cat_id\")";
					$wpdb->query($ter_relation_sql);
					$tt_update_sql = "update $wpdb->term_taxonomy set count=count+1 where term_id=\"$feature_cat_id\"";
					$wpdb->query($tt_update_sql);
				}
			}
		}
	}
}
$pages_array = array('Features','Screenshots',array('About','Sub Page 1','Sub Page 2'),'Support','Contact');
$page_info_arr = array();
$page_info_arr['Contact'] = '<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages like this one or sub-pages as you like and manage all of your content inside of WordPress. </p>

<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>
 
<blockquote> <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p> </blockquote>
 					<ul>
                	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Qhasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Ahasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Thasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                </ul>
  <h3>Fermentum id, molestie in, commodo  porttitor, felis</h3>
 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus.  </p>
 					<ol>
                	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Qhasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Ahasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Thasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                </ol>';
$page_info_arr['Features'] = '<h3 class="title"> This is a Wordpress page. You can add any kind of elements
audio, video, images or any content as per your wish </h3>
 			
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy.  </p>
 
<blockquote> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p></blockquote>

             	<div class="features">
                  <img src="'.$dummy_image_path.'f1.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>

                </div>  
				<div class="features">
                  <img src="'.$dummy_image_path.'f2.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                </div>  
				<div class="features">
                  <img src="'.$dummy_image_path.'f3.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                </div> 
				<div class="features">
                  <img src="'.$dummy_image_path.'f1.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                 </div> 
  <div class="features">
                  <img src="'.$dummy_image_path.'f2.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                </div> 
                 <h3> Quisque ornare risus quis  ligula</h3> 
                <ul>
                	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                </ul>';
$page_info_arr['Contact'] = '<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages like this one or sub-pages as you like and manage all of your content inside of WordPress. </p>

<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>
 
<blockquote> <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p> </blockquote>
 					<ul>
                	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Qhasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Ahasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Thasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                </ul>
  <h3>Fermentum id, molestie in, commodo  porttitor, felis</h3>
 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus.  </p>
 					<ol>
                	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Qhasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Ahasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Thasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                </ol>';
$page_info_arr['About'] = '<h3 class="title"> This is a Wordpress page. You can add any kind of elements
audio, video, images or any content as per your wish </h3>
 			
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy.  </p>
 
<blockquote> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p></blockquote>

             	<div class="features">
                  <img src="'.$dummy_image_path.'f1.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>

                </div>  
				<div class="features">
                  <img src="'.$dummy_image_path.'f2.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                </div>  
				<div class="features">
                  <img src="'.$dummy_image_path.'f3.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                </div> 
				<div class="features">
                  <img src="'.$dummy_image_path.'f1.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                 </div> 
  <div class="features">
                  <img src="'.$dummy_image_path.'f2.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                </div> 
                 <h3> Quisque ornare risus quis  ligula</h3> 
                <ul>
                	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                </ul>';
$page_info_arr['Screenshots'] = '			
            	<div class="features">
                  <img src="'.$dummy_image_path.'f1.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                 </div>  
				 <div class="features">
                  <img src="'.$dummy_image_path.'f2.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                </div> 
				<div class="features">
                  <img src="'.$dummy_image_path.'f3.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                </div> 
<div class="features">
                  <img src="'.$dummy_image_path.'f1.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                 </div>  
				 <div class="features">
                  <img src="'.$dummy_image_path.'f2.png" alt=""  />	<h3> Built for iPhone application developers</h3> 
                    <p>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspenadisse potenti vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. </p>
                </div> 
                <h3> Aenean sagittis. Etiam leo pede</h3>
                <ul>
                	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Qhasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Ahasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Thasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                </ul>';
$page_info_arr['Support'] = ' <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>
 <h3>Support </h3>
 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. </p> 
 				<ul>
                	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Qhasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Ahasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Thasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                </ul>
 <h3>Fermentum id, molestie in, commodo  porttitor, felis</h3>
 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. </p>
 				<ol>
                	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Qhasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Ahasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                    <li>Thasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. </li>
                </ol>';
$page_info_arr['Sub Page 1'] = ' <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p><p>
Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p>
<ul>
	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</li>
	<li>Ahasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</li>
	<li>Qhasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</li>
	<li>Ahasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</li>
</ul>';
$page_info_arr['Sub Page 2'] = ' <p>Praesent aliquam, justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id, libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut, sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh. Donec nec libero.
</p><p>
Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p>
<ul>
	<li>Phasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</li>
	<li>Ahasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</li>
	<li>Qhasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</li>
	<li>Ahasellus tristique purus a augue condimentum adipiscing. Aenean sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</li>
</ul>';

set_page_info_autorun($pages_array,$page_info_arr);
$contactid = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_name='Contact' and post_type='page'");
update_post_meta( $contactid, '_wp_page_template', 'tpl_contact.php' );
function set_page_info_autorun($pages_array,$page_info_arr_arg)
{
	global $post_author,$wpdb;
	$last_tt_id = 1;
	if(count($pages_array)>0)
	{
		$page_info_arr = array();
		for($p=0;$p<count($pages_array);$p++)
		{
			if(is_array($pages_array[$p]))
			{
				for($i=0;$i<count($pages_array[$p]);$i++)
				{
					$page_info_arr1 = array();
					$page_info_arr1['post_title'] = $pages_array[$p][$i];
					$page_info_arr1['post_content'] = $page_info_arr_arg[$pages_array[$p][$i]];
					$page_info_arr1['post_parent'] = $pages_array[$p][0];
					$page_info_arr[] = $page_info_arr1;
				}
			}
			else
			{
				$page_info_arr1 = array();
				$page_info_arr1['post_title'] = $pages_array[$p];
				$page_info_arr1['post_content'] = $page_info_arr_arg[$pages_array[$p]];
				$page_info_arr1['post_parent'] = '';
				$page_info_arr[] = $page_info_arr1;
			}
		}
		
		if($page_info_arr)
		{
			for($j=0;$j<count($page_info_arr);$j++)
			{
				$post_title = $page_info_arr[$j]['post_title'];
				$post_content = $page_info_arr[$j]['post_content'];
				$post_parent = $page_info_arr[$j]['post_parent'];
				if($post_parent)
				{
					$post_parent_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_name=\"$post_parent\" and post_type='page'");
				}else
				{
					$post_parent_id = 0;
				}
				$post_date = date('Y-m-d H:s:i');
				$post_name = strtolower(str_replace(array('&amp;',"'",'"',"?",".","!","@","#","$","%","^","&","*","(",")","-","+","+"," ",';',',','_','/'),array('','','','','','','','','','','','','','','','','','','','',',','','',''),$post_title));
				$post_name_count = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_name=\"$post_name%\" and post_type='page'");
				if($post_name_count>0)
				{
					$post_name = $post_name.'-'.($post_name_count+1);
				}
				$pstcount = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_title=\"$post_title\" and post_type='page' and post_status in ('publish','draft')");
				if($pstcount==0)
				{
					$post_content = addslashes($post_content);
					$post_author = 1;
					$post_sql = "insert into $wpdb->posts (post_author,post_date,post_date_gmt,post_content,post_title,post_name,post_parent,post_type) values (\"$post_author\", \"$post_date\", \"$post_date\", \"$post_content\", \"$post_title\", \"$post_name\",\"$post_parent_id\",'page')";
					$wpdb->query($post_sql);
					$last_post_id = $wpdb->get_var("SELECT max(ID) FROM $wpdb->posts");
					$guid = get_option('siteurl')."/?p=$last_post_id";
					$guid_sql = "update $wpdb->posts set guid=\"$guid\" where ID=\"$last_post_id\"";
					$wpdb->query($guid_sql);
					$ter_relation_sql = "insert into $wpdb->term_relationships (object_id,term_taxonomy_id) values (\"$last_post_id\",\"$last_tt_id\")";
					$wpdb->query($ter_relation_sql);
					update_post_meta( $last_post_id, 'pt_dummy_content', 1 );
				}
			}
		}
	}
}

/////////////// WIDGET SETTINGS START ///////////////
update_option('sidebars_widgets',array());
////widget 1 start//
$mywidget_info = array();
$mywidget_info = array(
					"title"				=>  'Connect',
					"linkedin"			=>	'http://linkedin.com',
					"twitter"			=>	'http://twitter.com/rbhavesh',
					"facebook"			=>	'http://facebook.com',
					"technorati"		=>	'',
					"digg"				=>	'http://digg.com',
					"delicious"			=>	'',
					"rssfeed"			=>	'http://feeds.feedburner.com/Templatic',
					"desc1"				=>	'<p>If you like to stay updated with all our latest news please enter your e-mail address here</p>',
					);

$widget_name = 'widget_connect';
$sidebar_position = 'sidebar-3';
set_widget_info($widget_name,$sidebar_position,$mywidget_info);
////widget 1 end//
////widget 2 start//
$mywidget_info = array();
$mywidget_info = array(
					"title"				=>	'About Us',
					"desc1"				=>	'<img src="'.$dummy_image_path.'about_logo.png" alt="" class="imgleft" >
<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus</p>
<p><a href="#">Read More</a>  </p> ',
					);

$widget_name = 'widget_text';
$sidebar_position = 'sidebar-2';
set_widget_info($widget_name,$sidebar_position,$mywidget_info);
////widget 2 end//
////widget 3 start//
$page_ids = $wpdb->get_var("SELECT GROUP_CONCAT(ID) FROM $wpdb->posts group by post_type having post_type='page'");
$mywidget_info = array();
$mywidget_info = array(
					"title"				=>	'Navigation',
					"pageid"			=>	"$page_ids",
					);

$widget_name = 'widget_nav';
$sidebar_position = 'sidebar-4';
set_widget_info($widget_name,$sidebar_position,$mywidget_info);
////widget 3 end//
////widget 4 start//
$mywidget_info = array();
$mywidget_info = array(
					"title"				=>	'Testimonials ',
					"quote1"			=>	'Seriously, this is the first and best - out of the box WordPress theme that creates a strategically designed iPhone application website in minutes.',
					"author1"			=>	'- R. Bhavesh',
					"quote2"			=>	'Seriously, this is the first and best - out of the box WordPress theme that creates a strategically designed iPhone application website in minutes.',
					"author2"			=>	'- John Smith',
					"quote3"			=>	'Seriously, this is the first and best - out of the box WordPress theme that creates a strategically designed iPhone application website in minutes.',
					"author3"			=>	'- Steven',
					"quote4"			=>	'Seriously, this is the first and best - out of the box WordPress theme that creates a strategically designed iPhone application website in minutes.',
					"author4"			=>	'- Linda',
					"quote5"			=>	'Seriously, this is the first and best - out of the box WordPress theme that creates a strategically designed iPhone application website in minutes.',
					"author5"			=>	'- Brain Storm',
					"more"				=>	'http://google.com',
					);
$widget_name = 'widget_blockquote';
$sidebar_position = 'sidebar-1';
set_widget_info($widget_name,$sidebar_position,$mywidget_info);
////widget 4 end//
////widget 6 start//
$subscribe_info = array();
$subscribe_info = array(
					"title"			=>	'Subscribe',
					"id"			=>	'templatic/eKPs',
					"text"			=>	'If youd like to stay updated with all our latest news please enter your e-mail address here ',
					);
$subscribe_info['_multiwidget'] = '1';
$sidebar_position='sidebar-1';
$widget_name='subscribewidget';
$sideber_widget_name='pt-subscribe';
set_widget_info2($widget_name,$sidebar_position,$sideber_widget_name,$subscribe_info);
////widget 6 end//
////widget 5 start//
$subscribe_info = array();
$subscribe_info = array(
					"account"		=>	'rbhavesh',
					"title"			=>	'Twitter Updates',
					"show"			=>	'3',
					"show"			=>	'3',
					"follow"		=>	'',
					);
$subscribe_info['_multiwidget'] = '1';
$sidebar_position='sidebar-1';
$widget_name='Twidget';
$sideber_widget_name='pt-twitter';
set_widget_info2($widget_name,$sidebar_position,$sideber_widget_name,$subscribe_info);

////widget 5 end//
/////////////// WIDGET SETTINGS END ///////////////
if($_REQUEST['myact'] != 'active')
{
echo '<form name="themefrm" method="get" action="'.$_SERVER['HTTP_REFERER'].'"><input type="hidden" name="myact" value="active"><input type="hidden" name="activated" value="true"></form>';
echo '<script>document.themefrm.submit();</script>';
}
?>