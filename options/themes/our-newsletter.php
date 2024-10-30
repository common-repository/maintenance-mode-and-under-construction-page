<?php if ( ! defined( 'ABSPATH' ) ) {	exit;} ?> 
<div class="container-fluid com_news row">
	<section class="col-md-6 space c_get">
		<h2 class="section-title wow flipInX"><?php echo esc_html($wl_rmmuc_options['subscriber_form_title']);?></h2>			
		<?php if ($wl_rmmuc_options['subscriber_form_icon'] == null) { ?><span class="wow rubberBand"> <span class="<?php echo esc_attr($wl_rmmuc_options['subscriber_form_icon']);?>  icon"></span> </span>
		<?php } else { ?>
		<span class="wow rubberBand">..........   <span class="<?php echo esc_attr($wl_rmmuc_options['subscriber_form_icon']);?>  icon"></span>   ..........</span>
		<?php } ?>
		<h3 class="section_sub_title" data-sr="enter top"><?php echo esc_html($wl_rmmuc_options['subscriber_form_sub_title']);?></h3>
		<p class="section-title-desc">
		<?php print(rmmuc_truncateString($wl_rmmuc_options['subscriber_form_message'], 300, true));?>
	</section>
	<section class="col-md-6 space c_get_detail">
		<?php if ($wl_rmmuc_options['subscribe_select']=='wp_mail'){ ?>	
			<script>
				function validateForm1() {
					var x = document.forms["subscriber-form"]["subscribe_email"].value;
					var atpos = x.indexOf("@");
					var dotpos = x.lastIndexOf(".");
					var error_msg = ".sub_error_msg";
					if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
						jQuery(error_msg).show();
						return false;
					}
				}
			</script>
			<form method="post" action="" onsubmit="return validateForm1()" class="subscriber-form" name="subscriber-form">
				<div class="form-group" data-sr="enter bottom over 1s and move 110px wait 0.5s">					
					<div class="subscribe-message">	
						<?php
						// Session messages	
						if(isset($_SESSION['mail_sent'])){
							echo esc_html($_SESSION['mail_sent']);
							unset($_SESSION['mail_sent']);
						}	
						if(isset($_SESSION['mail_sent_msg'])){
							echo esc_html($_SESSION['mail_sent_msg']);
							unset($_SESSION['mail_sent_msg']);
						}
						if(isset($_SESSION['subscribe_msg'])){	
							echo esc_html($_SESSION['subscribe_msg']);	
							unset($_SESSION['subscribe_msg']);	
						}										
						// subscription activate logic	
						if(isset($_GET['act_code']) && $_GET['email']){
							$act_code = sanitize_text_field($_GET['act_code']);		
							$email = sanitize_email($_GET['email']);		
							//search & match the email & activation code
							global $wpdb;			
							$table_name = $wpdb->prefix . 'rmmuc_subscribers';
							$user_search_result = $wpdb->get_row("SELECT * FROM `$table_name` WHERE `email` LIKE '$email' AND `act_code` LIKE '$act_code'");
							if(count($user_search_result)) {
								// check user is already subscribed	
								if($user_search_result->flag == 1) {	
								echo "<h4 class='alert alert-info'>".$wl_rmmuc_options['sub_form_subscribe_already_confirm_message']."</h4>";	
								} else {
									// update user subscription active	
									if($wpdb->query("UPDATE `$table_name` SET `flag` = '1' WHERE `email` = '$email'")) {
										echo "<h4 class='alert alert-info'>".$wl_rmmuc_options['sub_form_subscribe_confirm_success_message']."</h4>";			
									}
								}		
							} else {
								echo "<h4 class='alert alert-info'>".$wl_rmmuc_options['sub_form_invalid_confirmation_message']."</h4>";
							}					
						} ?>					
					</div> 
					<div id="error_email2" class="validation_error error_email"></div>
					<div class="row">					
						<div class="col-md-6 form-group">
						<input type="text" name="f_name"  class="form-control wow slideInUp" placeholder="<?php echo esc_attr($wl_rmmuc_options['sub_form_button_f_name']);?>" required="required">
						</div>
						<div class="col-md-6 form-group">
							<input type="text" name="l_name"  class="form-control wow slideInUp " placeholder="<?php echo esc_attr($wl_rmmuc_options['sub_form_button_l_name']);?>" required="required">
						</div>
						<div class="col-md-12 form-group">
							<input type="mail" name="subscribe_email" id="edmm-sub-email2" class="form-control wow slideInUp subscribe-input-layout1 s2email" placeholder="<?php echo esc_attr($wl_rmmuc_options['sub_form_subscribe_title']);?>" required="required">
							<span class="sub_error_msg" style="display:none; color:red;"><span style="color:red; font-size: 14px;"><?php esc_html_e("* ","weblizar"); ?></span><?php esc_html_e("Invalid email address.","weblizar"); ?></span>
						</div>	
					</div>
					<?php /*** Creating a nonce field ***/
					wp_nonce_field( 'subscriber-nonce', 'subscriber_nonce_field' ); ?>						
					<div class="col-md-12 sub_btn form-group">					
						<button name="submit_subscriber" class="btn wow slideInUp subscriber_submit sub-submit" type="submit"><?php echo esc_html($wl_rmmuc_options['sub_form_button_text']);?></button>
					</div>
				</div>
			</form><?php
		} ?>
		<?php if($wl_rmmuc_options['subscribe_select']=='php_mail' || $wl_rmmuc_options['subscribe_select']=='smtp_mail' ) { ?>
				<script>
					function validateForm2() {
						var x = document.forms["php_subscriber-form"]["subscribe_email"].value;
						var atpos = x.indexOf("@");
						var dotpos = x.lastIndexOf(".");
						var error_msg = ".sub1_error_msg";
						if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
							jQuery(error_msg).show();
							return false;
						}
					}
				</script>	
				<form method="post" action="" onsubmit="return validateForm2()" class="php_subscriber-form" name="php_subscriber-form">
					<div class="subscribe-message">	
						<?php
						// Session messages	
						if(isset($_SESSION['mail_sent'])){
							echo esc_html($_SESSION['mail_sent']);
							unset($_SESSION['mail_sent']);
						}	
						if(isset($_SESSION['mail_sent_msg'])){
							echo esc_html($_SESSION['mail_sent_msg']);
							unset($_SESSION['mail_sent_msg']);
						}
						if(isset($_SESSION['subscribe_msg'])){	
							echo esc_html($_SESSION['subscribe_msg']);	
							unset($_SESSION['subscribe_msg']);	
						}										
						// subscription activate logic	
						if(isset($_GET['act_code']) && $_GET['email']){
							$act_code = sanitize_text_field($_GET['act_code']);		
							$email = sanitize_email($_GET['email']);		
							//search & match the email & activation code
							global $wpdb;			
							$table_name = $wpdb->prefix . 'rmmuc_subscribers';
							$user_search_result = $wpdb->get_row("SELECT * FROM `$table_name` WHERE `email` LIKE '$email' AND `act_code` LIKE '$act_code'");
							if(count($user_search_result)) {
								// check user is already subscribed	
								if($user_search_result->flag == 1) {	
								echo "<h4 class='alert alert-info'>".$wl_rmmuc_options['sub_form_subscribe_already_confirm_message']."</h4>";	
								} else {
									// update user subscription active	
									if($wpdb->query("UPDATE `$table_name` SET `flag` = '1' WHERE `email` = '$email'")) {
										echo "<h4 class='alert alert-info'>".$wl_rmmuc_options['sub_form_subscribe_confirm_success_message']."</h4>";
									}
								}		
							} else {
								echo "<h4 class='alert alert-info'>".$wl_rmmuc_options['sub_form_invalid_confirmation_message']."</h4>";
							}					
						} ?>					
					</div>   
					<div id="error_email2" class="validation_error error_email"></div>				
					<div class="form-group" data-sr="enter bottom over 1s and move 110px wait 0.5s">
						<div class="row"></div>					
						<div class="col-md-6 form-group">
							<input type="text" name="f_name"  class="form-control wow slideInUp" placeholder="<?php echo esc_attr($wl_rmmuc_options['sub_form_button_f_name']);?>" required="required">
						</div>
						<div class="col-md-6 form-group">
							<input type="text" name="l_name"  class="form-control wow slideInUp " placeholder="<?php echo esc_attr($wl_rmmuc_options['sub_form_button_l_name']);?>" required="required">
						</div>
						<div class="col-md-12 form-group">
							<input type="mail" name="subscribe_email" id="edmm-sub-email2" class="form-control wow slideInUp subscribe-input-layout1 s2email" placeholder="<?php echo esc_attr($wl_rmmuc_options['sub_form_subscribe_title']);?>" required="required">
							<span class="sub1_error_msg" style="display:none; color:red;"><span style="color:red; font-size: 14px;"><?php esc_html_e("* ","weblizar"); ?></span><?php esc_html_e("Invalid email address.","weblizar"); ?></span>
						</div>
					</div> 
					<div class="col-md-12">					
						<button name="php_submit_subscriber" class="btn wow slideInUp subscriber_submit" type="submit"><?php echo esc_html($wl_rmmuc_options['sub_form_button_text']);?></button>
					</div>
				</form><?php
			} ?>
		</section>	
</div>