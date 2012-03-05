<?php
/*
Template Name: Contact Us
*/
?>
<?php
if($_POST)
{
	if($_POST['your-email'])
	{
		if(get_option('ptthemes_contact_name'))
		{
			$toEmailName = get_option('ptthemes_contact_name');
		}else
		{
			$toEmailName = get_option('blogname');
		}
		if(get_option('ptthemes_contact_email'))
		{
			$toEmail = get_option('ptthemes_contact_email');
		}else
		{
			$toEmail = get_option('admin_email');
		}
			
			$subject = $_POST['your-subject'];
			$message = '';
			$message .= '<p>Dear '.$toEmailName.',</p>';
			$message .= '<p>'.nl2br($_POST['your-message']).'</p>';
			$message .= '<p>Thank You, '.$toEmailName.'</p>';
			
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			// Additional headers
			// $headers .= 'To: '.$toEmailName.' <'.$toEmail.'>' . "\r\n";
			$headers .= 'From: '.$_POST['your-name'].' <'.$_POST['your-email'].'>' . "\r\n";
			
			// Mail it
			wp_mail($toEmail, $subject, $message, $headers);
			if(strstr($_SERVER['REQUEST_URI'],'?'))
			{
			wp_redirect($_SERVER['REQUEST_URI'].'&msg=success');
			}else
			{
				wp_redirect($_SERVER['REQUEST_URI'].'?msg=success');	
			}
	}
}
?>
<?php if($_REQUEST['tp']!='ajax'){?>
<?php get_header(); ?>


<div id="page">
	<div id="wrapper" class="clearfix" >
         <div id="content">
		  
<?php }?>
			<?php
			global $post;
			echo $post->post_content;
			?>
			<?php
			if($_REQUEST['msg'] == 'success')
			{
			?>
			<p class="success_msg">Thank you. Your information was sent successfully</p>
			<?php
			}
			?>
			<div class="wpcf7" id="wpcf7-f1-p9-o1">
			<?php
			$req_url_arr = explode('tp=ajax',$_SERVER['REQUEST_URI']);
			$request_url = $req_url_arr[0];
			?>
			<form action="<?php echo $request_url;?>" method="post" id="contact_frm" name="contact_frm" class="wpcf7-form">

            <p><?php _e('Your Name (required)');?><br />
                <span class="wpcf7-form-control-wrap your-name">
				<input type="text" name="your-name" id="your-name" value="" class="wpcf7-validates-as-required" size="40" /><br />
				<span id="your_name_Info"></span>
				</span> </p>
            <p><?php _e('Your Email (required)');?><br />
                <span class="wpcf7-form-control-wrap your-email">
				<input type="text" name="your-email" id="your-email" value="" class="wpcf7-validates-as-email wpcf7-validates-as-required" size="40" /><br />
				<span id="your_emailInfo"></span>
				</span> </p>
            <p><?php _e('Subject');?><br />
                <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" id="your-subject" value="" size="40" /><br />
				<span id="your_subjectInfo"></span>
				</span> </p>
            <p><?php _e('Your Message');?><br />
             <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" id="your-message" cols="40" rows="10"></textarea><br />
			<span id="your_messageInfo"></span>
			</span> </p>
        <p><input type="submit" value="<?php _e('Send');?>" /> </p>
        </form> 
		</div>    

<?php if($_REQUEST['tp']!='ajax'){?>       
         </div> <!-- content  #end -->
  <?php get_sidebar(); ?>
    </div> <!-- page #end -->
</div> <!-- wrapper #end -->	

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/contact_us_validation.js"></script>    

<?php get_footer(); ?>
<?php }?>