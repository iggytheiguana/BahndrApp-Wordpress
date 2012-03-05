<div id="header-in" class="clearfix ">
             
  <div class="header_content header_content2">
             
				<?php if ( get_option('ptthemes_show_blog_title') ) { ?>
                
                    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a> </h1>
                 <?php } else { ?>
                <a href="<?php echo get_option('home'); ?>/"><img src="<?php if ( get_option('ptthemes_logo_url') <> "" ) { echo get_option('ptthemes_logo_url'); } else { echo get_bloginfo('template_directory').'/images/logo.png'; } ?>" alt="<?php bloginfo('name'); ?>" class="logo"  /></a>
                
                  
                <?php } ?>
            	
                	
                    <?php if ( get_option('ptthemes_topheader_subtitle') != "") { ?>
                            <h2><?php echo stripslashes(get_option('ptthemes_topheader_subtitle'));  ?> </h2>
                         <?php } ?>
                    
                     <?php if ( get_option('ptthemes_topheader_content') != "") { ?>
                             <?php echo stripslashes(get_option('ptthemes_topheader_content'));  ?>  
                         <?php } ?>
                    
                    
                     <?php if ( get_option('ptthemes_app_store_img') != "") { ?>
                               <a href="<?php echo stripslashes(get_option('ptthemes_app_store_img_link'));  ?>" >
                               <img src="<?php echo stripslashes(get_option('ptthemes_app_store_img'));  ?>" alt="" class="app_store"  />
                               </a>
                         <?php } ?>
                         
                          <?php if ( get_option('ptthemes_iphoneapp_pdf_link') != "") { ?>
                          <span class="pdf "><a href="<?php echo stripslashes(get_option('ptthemes_iphoneapp_pdf_link'));  ?>">Download <br /> 
              				PDF Manual</a></span> 
                            <?php } ?>
                           
               
              </div> <!-- header content #end -->
              
              
               <?php if ( get_option('ptthemes_iphoneapp_price') != "") { ?>
                             <div class="price_tag price_tag2"> <?php echo stripslashes(get_option('ptthemes_iphoneapp_price'));  ?>  </div>
                         <?php } ?>
                         
                         
                         
                         <?php if(get_option('ptthemes_video_slider_or_video')== 'Video') { ?> 
                         
                         		<div class="iphone2 video"> 
              		
                         <div class="video_verticle_screen2">
                                   <ul> 
                                    <?php if ( get_option('ptthemes_iphoneapp_video_screenshot_image') != "") { ?>
                                    <li class="photo"><a href="#" class='video' ><img src="<?php echo stripslashes(get_option('ptthemes_iphoneapp_video_screenshot_image'));  ?>" alt="" /></a></li>
                                    <?php } ?>  
                                  </ul>
                           </div><!--wrapper #end -->
                        </div><!--iphone #end -->
                        <div id="basic-modal-content"> <?php echo stripslashes(get_option('ptthemes_iphoneapp_video_embed_code'));  ?> </div>
                        
                         <?php 
					}else
					{
					?>
              
              <div class="iphone2"> 
                                    <div class="anythingSlider">
                                 <div class="wrapper">
                                    <ul>              
                                        <?php if ( get_option('ptthemes_slider_img1') != "") { ?>
                                                <li><img src="<?php echo stripslashes(get_option('ptthemes_slider_img1'));  ?>" alt="" /></li>
                                          <?php } ?>
                                         
                                          <?php if ( get_option('ptthemes_slider_img2') != "") { ?>
                                                <li><img src="<?php echo stripslashes(get_option('ptthemes_slider_img2'));  ?>" alt="" /></li>
                                         <?php } ?>
                                         
                                          <?php if ( get_option('ptthemes_slider_img3') != "") { ?>
                                                <li class="photo"><img src="<?php echo stripslashes(get_option('ptthemes_slider_img3'));  ?>" alt="" /></li>
                                          <?php } ?>
                                         
                                         <?php if ( get_option('ptthemes_slider_img4') != "") { ?>
                                                <li class="photo"><img src="<?php echo stripslashes(get_option('ptthemes_slider_img4'));  ?>" alt="" /></li>
                                          <?php } ?>
                                         
                                         <?php if ( get_option('ptthemes_slider_img5') != "") { ?>
                                               <li class="photo"><img src="<?php echo stripslashes(get_option('ptthemes_slider_img5'));  ?>" alt="" /></li>
                                          <?php } ?>
                                         
                                  </ul>
                                  </div><!--wrapper #end -->
                              </div><!--anythingSlider #end -->
                               </div><!--iphone #end -->
              <?php						
					}
					 ?>
              
              
              <div class="navigation navigation_h">
              	 <?php
					global $wpdb;
					$blogcatname = get_option('ptthemes_blogcategory');
					$catid = $wpdb->get_var("SELECT term_ID FROM $wpdb->terms WHERE name = '$blogcatname'");
					include(TEMPLATEPATH . '/library/includes/header_navigation.php');	
				?>

              </div>
              
</div> <!-- header-in #end -->