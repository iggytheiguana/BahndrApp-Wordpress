<?php

$options[] = array(	"type" => "maintabletop");

    /// General Settings
	
	    $options[] = array(	"name" => __("General Settings"),
						"type" => "heading");
						
		    $options[] = array(	"name" => __("Theme Skin"),
						        "toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"desc" => __("Please select the CSS skin of your blog here."),
					                "id" => $shortname."_alt_stylesheet",
					                "std" => __("Select a CSS skin:"),
					                "type" => "select",
					                "options" => $alt_stylesheets);
						
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("Customize Your Design"),
						        "toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"label" => __("Use Custom Stylesheet"),
						            "desc" => __(sprintf("If you want to make custom design changes using CSS enable and <a href='%s'>edit custom.css file here</a>.",$customcssurl)),
						            "id" => $shortname."_customcss",
						            "std" => "false",
						            "type" => "checkbox");	
						
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => "Favicon",
						        "toggle" => "true",
								"type" => "subheadingtop");

				$options[] = array(	"desc" => __("Paste the full URL for your favicon image here if you wish to show it in browsers. <a href='http://www.favicon.cc/'>Create one here</a>"),
						            "id" => $shortname."_favicon",
						            "std" => "",
						            "type" => "text");	
			
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("Header Your Logo Image Set"),
						        "toggle" => "true",
								"type" => "subheadingtop");

                $options[] = array(	"name" => __("Choose Your logo Image"),
				                    "desc" => __("Paste the full URL to your logo image here."),
						            "id" => $shortname."_logo_url",
						            "std" => "",
						            "type" => "file");

				$options[] = array(	"name" => __("Choose Blog Title over Logo"),
				                    "desc" => __(sprintf("This option will overwrite your logo selection above - You can <a href='%s'>change your settings here</a>",$generaloptionsurl)),
						            "label" => __("Show Blog Title."),
						            "id" => $shortname."_show_blog_title",
						            "std" => "true",
						            "type" => "checkbox");	

			$options[] = array(	"type" => "subheadingbottom");
			
 			$options[] = array(	"name" => __("Comments Appearance"),
						        "toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"label" => __("Display Comments Count"),
						            "desc" => __("Show comments count in Front/Archive"),
						            "id" => $shortname."_commentcount",
						            "std" => "false",
						            "type" => "checkbox");	
						
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("Thumbnail Images Appearance"),
						        "toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"label" => __("Display auto resized images"),
						            "desc" => __("Show of thumbnail images displayed in post archives/search results"),
						            "id" => $shortname."_timthumb_all",
						            "std" => "false",
						            "type" => "checkbox");	
									
				$options[] = array(	"label" => __("Show auto resized images in single posts"),
						            "desc" => __("Show thumbnail images displayed in single posts on top right corner"),
						            "id" => $shortname."_show_singleimg",
						            "std" => "false",
						            "type" => "checkbox");	
						
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("Syndication / Feed"),
						        "toggle" => "true",
								"type" => "subheadingtop");			
						
			$options[] = array( "desc" => __("If you are using a service like Feedburner to manage your RSS feed, enter full URL to your feed into box above. If you'd prefer to use the default WordPress feed, simply leave this box blank."),
			    		            "id" => $shortname."_feedburner_url",
			    		            "std" => "",
			    		            "type" => "text");	
						
			$options[] = array(	"type" => "subheadingbottom");
								
 $options[] = array(	"name" => __("Image Setting (Tim thumb setting - Image Cutting Edge)"),
						        "toggle" => "true",
								"type" => "subheadingtop");	

$options[] = array(	"name" => __("Default Image Cutting Edge"),
					                "desc" => __("Set Default Image Cutting Edge Position."),
					                "id" => $shortname."_image_x_cut",
					                "std" => "",
									"options" => array('center','top','bottom','left','right','top right','top left','bottom right','bottom left'),
					                "type" => "select");
				$options[] = array(	"type" => "subheadingbottom");
			 
			 					
		$options[] = array(	"type" => "maintablebreak");
		
		
 /// Contact Settings												
				
		$options[] = array(	"name" => __("Contact Form Settings"),
						    "type" => "heading");
										
			$options[] = array(	"name" => __("Contact Name"),
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("Name Info"),
					                "id" => $shortname."_contact_name",
					                "std" => "",
					                "type" => "text");
				
				$options[] = array(	"type" => "subheadingbottom");
				
				
			 $options[] = array(	"name" => __("Email Address"),
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("Email Address Here"),
					                "id" => $shortname."_contact_email",
					                "std" => "",
					                "type" => "text");
				
				$options[] = array(	"type" => "subheadingbottom");
			
 						
		$options[] = array(	"type" => "maintablebreak");
		
		
    /// Navigation Settings												
				
		$options[] = array(	"name" => __("Navigation Settings"),
						    "type" => "heading");
										
				$options[] = array(	"name" => __("Exclude Pages from Header Menu"),
								"toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"type" => "multihead");
						
				$options = pages_exclude($options);
									
			$options[] = array(	"type" => "subheadingbottom");
			
 						
		$options[] = array(	"type" => "maintablebreak");
		
        /// Banner Page Settings
		$options[] = array(	"name" => __("Home Page Features Settings"),
						    "type" => "heading");
		
		
		$options[] = array(	"name" => __("Description"),
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("Enter Top Home Page iPhone App Description."),
					                "id" => $shortname."_homepage_features",
					                "std" => "",
					                "type" => "textarea");
									
			$options[] = array(	"type" => "subheadingbottom");
		
	
		$options[] = array(	"name" => __("Top Header Settings"),
						    "type" => "heading");
							
			$options[] = array(	"name" => "Sub Title",
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("Sub Title."),
					                "id" => $shortname."_topheader_subtitle",
					                "std" => "",
					                "type" => "text");
				
				$options[] = array(	"type" => "subheadingbottom");
			

 			$options[] = array(	"name" => __("Description"),
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("Enter Top Header content."),
					                "id" => $shortname."_topheader_content",
					                "std" => "",
					                "type" => "textarea");
									
			$options[] = array(	"type" => "subheadingbottom");
									
			$options[] = array(	"name" => __("App Store Image Change"),
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("App Store Image URL (http://templatic.com/images/appstore.png)"),
					                "id" => $shortname."_app_store_img",
					                "std" => "",
					                "type" => "text");
									
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("App Store Image link"),
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("App Store Image 1 link."),
					                "id" => $shortname."_app_store_img_link",
					                "std" => "",
					                "type" => "text");
									
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("Remove Header Navigation Page Link Ajax Loading"),
						        "toggle" => "true",
								"type" => "subheadingtop");
								
			$options[] = array(	"label" => __("Remove Header Navigation Page Link Ajax Loading"),
						            "desc" => __("Do you want to apply page refresh and remove ajax loading? (Ajax loading will not be applied for custom menu.)"),
						            "id" => $shortname."_remove_pageajax",
						            "std" => "false",
						            "type" => "checkbox");	
									
			$options[] = array(	"type" => "subheadingbottom");
			
			/////////////////////////////////////////
 			
			
			$options[] = array(	"name" => __("Top Header iPhone Slider Settings"),
						    "type" => "heading");
							
							
			$options[] = array(	"name" => __("Select iPhone Horizontal or Vertical"),
						        "toggle" => "true",
								"type" => "subheadingtop");
						
			$options[] = array(	"desc" => __("Do you want to header section iPhone Horizontal or Vertical."),
					                "id" => $shortname."_video_horizontal_or_vertical",
					                "std" => "Vertical",
					                "type" => "select",
					                "options" => array('Vertical','Horizontal'));
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("Select Images Slider or Video"),
						        "toggle" => "true",
								"type" => "subheadingtop");
						
			$options[] = array(	"desc" => __("Do you want to header section iPhone Images Slider or Video."),
					                "id" => $shortname."_video_slider_or_video",
					                "std" => "Images Slider",
					                "type" => "select",
					                "options" => array('Imges Slider','Video'));
						
			$options[] = array(	"type" => "subheadingbottom");
			
			
 			$options[] = array(	"name" => __("iPhone App Price"),
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("Enter iPhone App Price (ex.$1.08)"),
					                "id" => $shortname."_iphoneapp_price",
					                "std" => "",
					                "type" => "text");
					
			$options[] = array(	"type" => "subheadingbottom");
			
			
			$options[] = array(	"name" => __("iPhone App PDF Manual URL Link"),
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("Enter iPhone App PDF Manual URL Link"),
					                "id" => $shortname."_iphoneapp_pdf_link",
					                "std" => "",
					                "type" => "text");
					
			$options[] = array(	"type" => "subheadingbottom");
			
			
			
			$options[] = array(	"name" => __("Slider Images"),
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("Enter Slider Image 1 full url link"),
					                "id" => $shortname."_slider_img1",
					                "std" => $template_path . "/images/screen1.png",
					                "type" => "text");
					
 				$options[] = array(	"desc" => __("Enter Slider Image 2 full url link"),
					                "id" => $shortname."_slider_img2",
					                "std" => $template_path . "/images/screen2.png",
					                "type" => "text");
					
 				$options[] = array(	"desc" => __("Enter Slider Image 3 full url link"),
					                "id" => $shortname."_slider_img3",
					                "std" => $template_path . "/images/screen3.png",
					                "type" => "text");
					
 				$options[] = array(	"desc" => __("Enter Slider Image 4 full url link"),
					                "id" => $shortname."_slider_img4",
					                "std" => $template_path . "/images/screen4.png",
					                "type" => "text");
 				
				$options[] = array(	"desc" => __("Enter Slider Image 5 full url link"),
					                "id" => $shortname."_slider_img5",
					                "std" => $template_path . "/images/screen5.png",
					                "type" => "text");
					
		  $options[] = array(	"type" => "subheadingbottom");
		  
		  
		  
		  $options[] = array(	"name" => __("Video Settings"),
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("Enter iPhone App Video Screenshot URL link Here"),
					                "id" => $shortname."_iphoneapp_video_screenshot_image",
					                "std" => "",
					                "type" => "text");
				
				$options[] = array(	"desc" => __("Enter iPhone App Video Embed Code Here"),
					                "id" => $shortname."_iphoneapp_video_embed_code",
					                "std" => "",
					                "type" => "textarea");
					
			$options[] = array(	"type" => "subheadingbottom");
			
			
 		$options[] = array(	"type" => "maintablebreak");
		
 												
$options[] = array(	"type" => "maintablebottom");
				
$options[] = array(	"type" => "maintabletop");


	/// Blog Section Settings												
				
		$options[] = array(	"name" => __("Blog Section Settings"),
						    "type" => "heading");
			
		    $options[] = array(	"name" => __("Pick Category for Your Blog Posts"),
						        "toggle" => "true",
								"type" => "subheadingtop");
				
				$options[] = array(	"name" => __("Select a category for your blog posts"),
			    		            "desc" =>__( "Pick a category where your blog posts will be. It is advisable to create category and name it 'blog'. After that put all other blog categories as child categories of 'blog' so you don't need to change categories in posts."),
									"id" => $shortname."_blogcategory",
			    		            "type" => "select",
			    		            "options" => $pn_categories);
						
		    $options[] = array(	"type" => "subheadingbottom");
			
		$options[] = array(	"name" => "Content Display",
						        "toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"label" => __("Display Full Post Content"),
						            "desc" => __("Instead of default Post excerpts display Full Post Content in Blog Section"),
						            "id" => $shortname."_postcontent_full",
						            "std" => "false",
						            "type" => "checkbox");	
						
			$options[] = array(	"type" => "subheadingbottom");
			
			
			
		$options[] = array(	"name" => __("Show Page Main Title"),
						        "toggle" => "true",
								"type" => "subheadingtop");
						
			$options[] = array(	"desc" => __("Do you want to show Page Title yes or no."),
					                "id" => $shortname."_page_title",
					                "std" => "no",
					                "type" => "select",
					                "options" => array('yes','no'));
						
			$options[] = array(	"type" => "subheadingbottom");
			
 						
		$options[] = array(	"type" => "maintablebreak");

    
		
	/// Blog Stats and Scripts											
				
		$options[] = array(	"name" => __("Site Header & Footer Stats and Scripts"),
						    "type" => "heading");
										
			$options[] = array(	"name" => __("Blog Header Scripts"),
						        "toggle" => "true",
								"type" => "subheadingtop");	
						
				$options[] = array(	"name" => __("Header Scripts"),
					                "desc" => __("If you need to add scripts to your header (like <a href='http://haveamint.com/'>Mint</a> tracking code), do so here."),
					                "id" => $shortname."_scripts_header",
					                "std" => "",
					                "type" => "textarea");
			
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("Blog Footer Scripts"),
						        "toggle" => "true",
								"type" => "subheadingtop");	
						
				$options[] = array(	"name" => __("Footer Scripts"),
					                "desc" => __("If you need to add scripts to your footer (like <a href='http://www.google.com/analytics/'>Google Analytics</a> tracking code), do so here."),
					                "id" => $shortname."_google_analytics",
					                "std" => "",
					                "type" => "textarea");
			
			$options[] = array(	"type" => "subheadingbottom");
						
		$options[] = array(	"type" => "maintablebreak");
		

	/// SEO Options
		$options[] = array(	"name" => __("SEO Options"),
						    "type" => "heading");
						
			$options[] = array(	"name" => __("Home Page <code>&lt;meta&gt;</code> tags"),
						        "toggle" => "true",
								"type" => "subheadingtop");

				$options[] = array(	"name" => __("Meta Description"),
					                "desc" => __("You should use meta descriptions to provide search engines with additional information about topics that appear on your site. This only applies to your home page."),
					                "id" => $shortname."_meta_description",
					                "std" => "",
					                "type" => "textarea");

				$options[] = array(	"name" => __("Meta Keywords (comma separated)"),
					                "desc" => __("Meta keywords are rarely used nowadays but you can still provide search engines with additional information about topics that appear on your site. This only applies to your home page."),
						            "id" => $shortname."_meta_keywords",
						            "std" => "",
						            "type" => "text");
									
				$options[] = array(	"name" => __("Meta Author"),
					                "desc" => __("You should write your <em>full name</em> here but only do so if this blog is writen only by one outhor. This only applies to your home page."),
						            "id" => $shortname."_meta_author",
						            "std" => "",
						            "type" => "text");
						
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("Add <code>&lt;noindex&gt;</code> tags"),
						        "toggle" => "true",
								"type" => "subheadingtop");

				$options[] = array(	"label" =>__( "Add <code>&lt;noindex&gt;</code> to category archives."),
						            "id" => $shortname."_noindex_category",
						            "std" => "true",
						            "type" => "checkbox");
									
				$options[] = array(	"label" => __("Add <code>&lt;noindex&gt;</code> to tag archives."),
						            "id" => $shortname."_noindex_tag",
						            "std" => "true",
						            "type" => "checkbox");
				
				$options[] = array(	"label" => __("Add <code>&lt;noindex&gt;</code> to author archives."),
						            "id" => $shortname."_noindex_author",
						            "std" => "true",
						            "type" => "checkbox");
									
			    $options[] = array(	"label" => __("Add <code>&lt;noindex&gt;</code> to Search Results."),
						            "id" => $shortname."_noindex_search",
						            "std" => "true",
						            "type" => "checkbox");
				
				$options[] = array(	"label" => __("Add <code>&lt;noindex&gt;</code> to daily archives."),
						            "id" => $shortname."_noindex_daily",
						            "std" => "true",
						            "type" => "checkbox");
				
				$options[] = array(	"label" => __("Add <code>&lt;noindex&gt;</code> to monthly archives."),
						            "id" => $shortname."_noindex_monthly",
						            "std" => "true",
						            "type" => "checkbox");
				
				$options[] = array(	"label" => __("Add <code>&lt;noindex&gt;</code> to yearly archives."),
						            "id" => $shortname."_noindex_yearly",
						            "std" => "true",
						            "type" => "checkbox");
				
						
			$options[] = array(	"type" => "subheadingbottom");
			
			
		$options[] = array(	"type" => "maintablebreak");
		
		
	//////Translations		

	    $options[] = array(	"name" => __("Translations"),
						    "type" => "heading");
						
			$options[] = array(	"name" => __("General Text"),
			                    "toggle" => "true",
						        "type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("Change Home link text - next to category menu in header"),
			    		            "id" => $shortname."_home_name",
			    		            "std" => "Home",
			    		            "type" => "text");
						
				$options[] = array(	"desc" => __("Change Search text"),
			    		            "id" => $shortname."_search_name",
			    		            "std" => "Search",
			    		            "type" => "text");
									
				$options[] = array(	"desc" => __("Change Nothing Found for Search text"),
			    		            "id" => $shortname."_search_nothing_found",
			    		            "std" => __("Nothing found, please search again."),
			    		            "type" => "text");
									
				$options[] = array(	"desc" => __("Change Tags text"),
			    		            "id" => $shortname."_general_tags_name",
			    		            "std" => "Tags",
			    		            "type" => "text");
				
			$options[] = array(	"type" => "subheadingbottom");
						
			$options[] = array(	"name" => __("Archives Text"),
			                    "toggle" => "true",
						        "type" => "subheadingtop");
				
				$options[] = array(	"desc" => __("Change Browsing Category text"),
			    		            "id" => $shortname."_browsing_category",
			    		            "std" => __("Browsing Category"),
			    		            "type" => "text");
				
				$options[] = array(	"desc" => __("Change Browsing Tag text"),
			    		            "id" => $shortname."_browsing_tag",
			    		            "std" => __("Browsing Tag"),
			    		            "type" => "text");
									
				$options[] = array(	"desc" => __("Change Browsing Author text"),
			    		            "id" => $shortname."_browsing_author",
			    		            "std" => __("Browsing Posts of Author"),
			    		            "type" => "text");
									
				$options[] = array(	"desc" => __("Change Browsing Search text"),
			    		            "id" => $shortname."_browsing_search",
			    		            "std" => __("Browsing Posts filed under Search Term"),
			    		            "type" => "text");
									
				$options[] = array(	"desc" => __("Change Browsing Day text"),
			    		            "id" => $shortname."_browsing_day",
			    		            "std" => __("Browsing Day"),
			    		            "type" => "text");
									
				$options[] = array(	"desc" => __("Change Browsing Month text"),
			    		            "id" => $shortname."_browsing_month",
			    		            "std" => __("Browsing Month"),
			    		            "type" => "text");
									
				$options[] = array(	"desc" => __("Change Browsing Year text"),
			    		            "id" => $shortname."_browsing_year",
			    		            "std" => __("Browsing Year"),
			    		            "type" => "text");
				
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("404 Error Text"),
						        "toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"desc" => __("Change 404 error text"),
			    		            "id" => $shortname."_404error_name",
			    		            "std" => __("Error 404 | Nothing found!"),
			    		            "type" => "text");
						
				$options[] = array(	"desc" => __("Change 404 error solution text"),
			    		            "id" => $shortname."_404solution_name",
			    		            "std" => __("Sorry, but you are looking for something that is not here."),
			    		            "type" => "text");
						
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" =>__("Comments Text"),
						        "toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"desc" => __("Change password protected text"),
			    		            "id" => $shortname."_password_protected_name",
			    		            "std" => __("This post is password protected. Enter the password to view comments."),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change no responses text"),
			    		            "id" => $shortname."_comment_responsesa_name",
			    		            "std" => __("No Comments"),
			    		            "type" => "text");
				
				$options[] = array( "desc" => __("Change one response text"),
			    		            "id" => $shortname."_comment_responsesb_name",
			    		            "std" => __("One Comment"),
			    		            "type" => "text");
				
				$options[] = array( "desc" => __("Change multiple responses text, leave % intact!"),
			    		            "id" => $shortname."_comment_responsesc_name",
			    		            "std" => __("% Comments"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change trackbacks text"),
			    		            "id" => $shortname."_comment_trackbacks_name",
			    		            "std" => __("Trackbacks For This Post"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change comment moderation text"),
			    		            "id" => $shortname."_comment_moderation_name",
			    		            "std" => "Your comment is awaiting moderation.",
			    	             	"type" => "text");
						
				$options[] = array( "desc" => "Change start conversation text",
			    		            "id" => $shortname."_comment_conversation_name",
			    		            "std" => __("Be the first to start a conversation"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change closed comments text"),
			    		            "id" => $shortname."_comment_closed_name",
			    		            "std" => __("Comments are closed."),
			    		            "type" => "text");
									
				$options[] = array( "desc" => __("Change disabled comments text"),
			    		            "id" => $shortname."_comment_off_name",
			    		            "std" => __("Comments are off for this post"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change leave a reply text"),
			    		            "id" => $shortname."_comment_reply_name",
			    		            "std" => __("Leave a Reply"),
			    		            "type" => "text");
				
				$options[] = array( "desc" => __("Change 'you must be' text"),
			    		            "id" => $shortname."_comment_mustbe_name",
			    		            "std" => __("You must be"),
			    		            "type" => "text");
				
				$options[] = array( "desc" => __("Change 'logged in' text"),
			    		            "id" => $shortname."_comment_loggedin_name",
			    		            "std" => __("logged in"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change 'to post a comment' text"),
			    		            "id" => $shortname."_comment_postcomment_name",
			    		            "std" => __("to post a comment."),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change Logout text"),
			    		            "id" => $shortname."_comment_logout_name",
			    		            "std" => __("Logout"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change name text"),
			    		            "id" => $shortname."_comment_name_name",
			    		            "std" => "Name",
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change mail text"),
			    		            "id" => $shortname."_comment_mail_name",
			    		            "std" => __("Mail"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change website text"),
			    		            "id" => $shortname."_comment_website_name",
			    		            "std" => __("Website"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change add comment text"),
			    		            "id" => $shortname."_comment_addcomment_name",
			    		            "std" => __("Add Comment"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change 'reply' to threaded comment text"),
			    		            "id" => $shortname."_comment_justreply_name",
			    		            "std" => __("Reply"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change 'edit' comment text, only visible to administrators"),
			    		            "id" => $shortname."_comment_edit_name",
			    	            	"std" => __("Edit"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change 'delete' comment text, only visible to administrators"),
			    		            "id" => $shortname."_comment_delete_name",
			    		            "std" => __("Delete"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change 'spam' comment text, only visible to administrators"),
			    		            "id" => $shortname."_comment_spam_name",
			    		            "std" => __("Spam"),
			    		            "type" => "text");
						
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("Pagination Text"),
						        "toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"desc" => __("Change first page text"),
			    		            "id" => $shortname."_pagination_first_name",
			    	 	            "std" => __("First"),
			    		            "type" => "text");
						
				$options[] = array( "desc" => __("Change last page text"),
			    		            "id" => $shortname."_pagination_last_name",
			    		            "std" => __("Last"),
			    		            "type" => "text");
						
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => __("Relative Dates Text"),
						        "toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"desc" => __("Change Posted text"),
			    		            "id" => $shortname."_relative_posted",
			    	 	            "std" => __("Posted"),
			    		            "type" => "text");
				
				$options[] = array(	"desc" => __("Change Ago text"),
			    		            "id" => $shortname."_relative_ago",
			    	 	            "std" => __("ago"),
			    		            "type" => "text");
				
				$options[] = array(	"desc" => __("Change plural text&nbsp;  [ i.e. hour &rarr; hours ]"),
			    		            "id" => $shortname."_relative_s",
			    	 	            "std" => "s",
			    		            "type" => "text");
									
				$options[] = array( "desc" => __("Change Year text"),
			    		            "id" => $shortname."_relative_year",
			    		            "std" => "year",
			    		            "type" => "text");
									
				$options[] = array( "desc" => __("Change Month text"),
			    		            "id" => $shortname."_relative_month",
			    		            "std" => "month",
			    		            "type" => "text");
									
				$options[] = array( "desc" => __("Change Week text"),
			    		            "id" => $shortname."_relative_week",
			    		            "std" => "week",
			    		            "type" => "text");
									
				$options[] = array( "desc" => __("Change Day text"),
			    		            "id" => $shortname."_relative_day",
			    		            "std" => "day",
			    		            "type" => "text");
									
				$options[] = array( "desc" => __("Change Hour text"),
			    		            "id" => $shortname."_relative_hour",
			    		            "std" => "hour",
			    		            "type" => "text");
									
				$options[] = array( "desc" => __("Change Minute text"),
			    		            "id" => $shortname."_relative_minute",
			    		            "std" => "minute",
			    		            "type" => "text");
									
				$options[] = array( "desc" => __("Change Second text"),
			    		            "id" => $shortname."_relative_second",
			    		            "std" => "second",
			    		            "type" => "text");
									
				$options[] = array( "desc" => __("Change Moments text"),
			    		            "id" => $shortname."_relative_moments",
			    		            "std" => "moments",
			    		            "type" => "text");
						
			$options[] = array(	"type" => "subheadingbottom");
						
		$options[] = array(	"type" => "maintablebreak");
						
$options[] = array(	"type" => "maintablebottom");
?>