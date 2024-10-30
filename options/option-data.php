<?php
if ( ! defined( 'ABSPATH' ) ) {	exit;}
if(isset($_POST['security'])) {
	$wl_rmmuc_options = weblizar_rmmuc_get_options(); 
	if ( wp_verify_nonce( $_POST['security'], 'maint_mode_action' ) ) {
		/*
		 * General settings save
		 */
		if(isset($_POST['weblizar_rmmuc_settings_save_general_option'])) {
			if($_POST['weblizar_rmmuc_settings_save_general_option'] == 1)  {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}
				if($_POST['search_robots']) {
					echo esc_html($wl_rmmuc_options['search_robots']=sanitize_text_field($_POST['search_robots']));
				}  else {
					echo esc_html($wl_rmmuc_options['search_robots']="off"); 
				}
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}
			
			if($_POST['weblizar_rmmuc_settings_save_general_option'] == 2) {
				rmmuc_general_setting();
			}
		}

		/*
		 * Appearance settings save
		 */

		if(isset($_POST['weblizar_rmmuc_settings_save_appearance_option'])) {
			if($_POST['weblizar_rmmuc_settings_save_appearance_option'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key] = sanitize_text_field($_POST[$key]);	
				}
				
				if($_POST['layout_status']) {
					echo esc_html($wl_rmmuc_options['layout_status']=sanitize_text_field($_POST['layout_status'])); 
				} else {
					echo esc_html($wl_rmmuc_options['layout_status']="deactivate");
				}
				$p=0;
				foreach($_POST['select_pageandpost'] as $select_pageandpost){
					if($select_pageandpost!=''){ $value_get[$p] = $select_pageandpost;}				
				$p++;}
				$wl_rmmuc_options['select_pageandpost']= $value_get;	
					
				if($_POST['button_onoff']) {
					echo esc_html($wl_rmmuc_options['button_onoff']=sanitize_text_field($_POST['button_onoff']));
				} else {
					echo esc_html($wl_rmmuc_options['button_onoff']="off");
				}
				if($_POST['link_admin']) {
					echo esc_html($wl_rmmuc_options['link_admin']=sanitize_text_field($_POST['link_admin']));
				} else {
					echo esc_html($wl_rmmuc_options['link_admin']="off");
				}			
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}
			if($_POST['weblizar_rmmuc_settings_save_appearance_option'] == 2) {
				rmmuc_appearance_setting();
			}
		}

		/*
		* Access Control setting 
		*/
		if(isset($_POST['weblizar_rmmuc_settings_save_access_control_option'])) {	
			if($_POST['weblizar_rmmuc_settings_save_access_control_option'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}
				$i=0;
				foreach($_POST['user_value'] as $user_value) {
					if($user_value!=''){ $value_get[$i] = $user_value;}				
					$i++;
				}
				$wl_rmmuc_options['user_value']= $value_get;	
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));			
			}		
			if($_POST['weblizar_rmmuc_settings_save_access_control_option'] == 2) {				
				rmmuc_access_control_setting();			
			}
		}
			
		/*
		 * Layout Swapping Settings
		 */
		if(isset($_POST['weblizar_rmmuc_settings_save_pagelayoutmanger'])) {
			if($_POST['weblizar_rmmuc_settings_save_pagelayoutmanger'] == 2) {
				rmmuc_page_layout_swap_setting();
			}
		}

		if(isset($_POST['rmmuc_layout_data'])) {
			if($_POST['rmmuc_layout_data'] ) {
				/*send data hold*/
				$datashowredify = $_POST['rmmuc_layout_data'];
				$hold = strstr($datashowredify,'|');
				$datashowredify = str_replace('|', '' ,$hold);				
				$data = explode(",",$datashowredify);				
				/*data save*/
				$wl_rmmuc_options['page_layout_swap']=$data;
				/*update all field*/
				update_option('weblizar_rmmuc_options' , $wl_rmmuc_options);				
			}
		}
			
		/*
		 * Skin Layout Settings
		 */
		if(isset($_POST['weblizar_rmmuc_settings_save_skin-layout_option'])) {	
			if($_POST['weblizar_rmmuc_settings_save_skin-layout_option'] == 1) {	
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}	
			if($_POST['weblizar_rmmuc_settings_save_skin-layout_option'] == 2) {
				rmmuc_skin_layout_setting();
			}
		}

		/**
		 * social media link Settings
		 */
		if(isset($_POST['weblizar_rmmuc_settings_save_social_option'])) {	
			if($_POST['weblizar_rmmuc_settings_save_social_option'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);
				}
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}
			if($_POST['weblizar_rmmuc_settings_save_social_option'] == 2) {
				rmmuc_social_setting();
			}
		}

		/*
		 *    Subscriber Form Setting
		 */
		if(isset($_POST['weblizar_rmmuc_settings_save_subscriber_option'])) {
			if($_POST['weblizar_rmmuc_settings_save_subscriber_option'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}	
				if(isset($_POST['subscriber_form'])) {
					$wl_rmmuc_options['subscriber_form'] = sanitize_text_field($_POST['subscriber_form']);
				} else {
					$wl_rmmuc_options['subscriber_form'] = "off";
				} 
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}	
			if($_POST['weblizar_rmmuc_settings_save_subscriber_option'] == 2) {	
				rmmuc_subscriber_form_setting();
			}
		}
			
		if(isset($_POST['weblizar_rmmuc_settings_save_subscriber_provider_option'])) {
			if($_POST['weblizar_rmmuc_settings_save_subscriber_provider_option'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}			
				if(isset($_POST['confirm_email_subscribe'])) {
					$wl_rmmuc_options['confirm_email_subscribe'] = sanitize_text_field($_POST['confirm_email_subscribe']);
				} else {
					$wl_rmmuc_options['confirm_email_subscribe'] = "off";
				} 
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}
			if($_POST['weblizar_rmmuc_settings_save_subscriber_provider_option'] == 2) {
				rmmuc_subscriber_provider_setting();			
			}
		}

		if(isset($_POST['weblizar_rmmuc_settings_save_subscriber_list_option'])) {
			if($_POST['weblizar_rmmuc_settings_save_subscriber_list_option'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}	
			if($_POST['weblizar_rmmuc_settings_save_subscriber_list_option'] == 2) {	
				rmmuc_subscriber_list_setting();
			}
		}
			
		/*
		 * Subscriber Form table Data setting 
		 */
		if(isset($_POST['weblizar_rmmuc_subscriber_users_action'])) {
		   if($_POST['weblizar_rmmuc_subscriber_users_action'] == 1) {
				global $wpdb;
				header('Content-Type: text/csv');
				header('Content-Disposition: inline; filename="all-subscriber-list-'.date('YmdHis').'.csv"');  
				$results = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix . "rmmuc_subscribers");
				echo "Email, Date, Activate-code, Status\r\n";			   
				if (count($results))  {
					foreach($results as $row) {
						 if($row->flag == '1') {$flags='Subscribed';}else{$flags='Pending';}
					echo esc_html($row->email.", ".$row->date.", ".$row->act_code.", ".$flags."\r\n");
					}
				}								
			}
			if($_POST['weblizar_rmmuc_subscriber_users_action'] == 3) {
				global $wpdb;				
				$filename = "pending-subscriber-list-'.date('YmdHis').'.csv";
				header( 'Content-Description: File Transfer' );
				header( 'Content-Disposition: attachment; filename=' . $filename );
				header( 'Content-Type: text/csv; charset=' . get_option( 'blog_charset' ), true );
				$results = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix . "rmmuc_subscribers WHERE flag = '0'");
				echo "Email, Date, Activate-code\r\n";
				if (count($results))  {
					foreach($results as $row) {
						echo esc_html($row->email.", ".$row->date.", ".$row->act_code."\r\n");
					}
				}					
			}
			if($_POST['weblizar_rmmuc_subscriber_users_action'] == 2) {						
				require_once('export-subscribed-csv.php');							
			}
		}
			
		/*
		* Subscriber Form Data save setting 
		*/
		if(isset($_POST['weblizar_rmmuc_settings_save_subscribe_form'])) {
			if($_POST['weblizar_rmmuc_settings_save_subscribe_form'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}
				if($_POST['auto_sentto_activeusers']) {
					echo esc_html($wl_rmmuc_options['auto_sentto_activeusers']=sanitize_text_field($_POST['auto_sentto_activeusers']));
				}  else {
					echo esc_html($wl_rmmuc_options['auto_sentto_activeusers']="off"); 
				}	
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}	
			if($_POST['weblizar_rmmuc_settings_save_subscribe_form'] == 2) {
				rmmuc_subscriber_list_setting();		
			}
		}
			
			
		/**
		 * Subscriber Form Mailed to Subscribers Users as selected action and Subscriber Form Data Removed setting 
		 */	
		if(isset($_POST['weblizar_rmmuc_submit_subscriber'])){
			global $wpdb;
			$table_name = $table_name = $wpdb->prefix . "rmmuc_subscribers";	
			if($_POST['weblizar_rmmuc_submit_subscriber'] == 1) {						
				$email_check =$wpdb->get_results( "SELECT * FROM $table_name WHERE id !=0" );
			}elseif ($_POST['weblizar_rmmuc_submit_subscriber'] == 2){								
				$z=0;
				if(is_array($_POST['rem'])){ 
					foreach($_POST['rem'] as $subscribe_id){
						if($subscribe_id!=''){
							$email_check = $wpdb->get_results( "SELECT * FROM $table_name WHERE id = $subscribe_id" );										
						}
						$z++; 
					}
				}		
			}elseif ($_POST['weblizar_rmmuc_submit_subscriber'] == 3){
				$email_check =$wpdb->get_results( "SELECT * FROM $table_name WHERE flag = 0" );		
			}elseif ($_POST['weblizar_rmmuc_submit_subscriber'] == 4){
				$email_check =$wpdb->get_results( "SELECT * FROM $table_name WHERE flag = 1" );		
			}elseif ($_POST['weblizar_rmmuc_submit_subscriber'] == 5){
				$email_check =$wpdb->get_results( "SELECT * FROM $table_name WHERE flag = 2" );		
			}elseif($_POST['weblizar_rmmuc_submit_subscriber'] == 6) {						
				global $wpdb;
				$table_name =  $wpdb->prefix . "rmmuc_subscribers";
				$j=0;
					if (is_array($_POST['rem'])) { 
						foreach($_POST['rem'] as $subscribe_ids) {
							if($subscribe_ids!=''){
							$wpdb->delete( $table_name, array( 'id' => $subscribe_ids ), array( '%d' ) );
						}
						$j++; 
					}
				}		
			}elseif($_POST['weblizar_rmmuc_submit_subscriber'] == 7) {

				global $wpdb;
				$table_name =  $wpdb->prefix . "rmmuc_subscribers";
				$wpdb->query( $wpdb->prepare( "DELETE FROM $table_name WHERE flag != %d", 30 ) );
			}
			$email_check =$wpdb->get_results( "SELECT * FROM $table_name WHERE id !=0" );	
			if($email_check){		
				foreach($email_check as $all_emails){
					$subscriber_email = $all_emails->email;
					$f_name = $all_emails->f_name;
					$l_name = $all_emails->l_name;
					$flag_act = $all_emails->flag;
					$current_time = current_time( 'Y-m-d h:i:s' );
					$adminemail = $wl_rmmuc_options['wp_mail_email_id'];						 
					$plugin_url = site_url();             
					$headers = 'Content-type: text/html'."\r\n"."From:$plugin_url <$adminemail>"."\r\n".'Reply-To: '.$adminemail . "\r\n".'X-Mailer: PHP/' . phpversion();			
					$subject = $_POST['subscriber_mail_subject'].': Confirmation Subscription';
					$message = 'Hi '.$f_name.' '.$l_name.', <br/>';
					global $current_user;
					wp_get_current_user();
					$plugin_site_url = site_url();  
					$message .= $_POST['subscriber_mail_message'];
					$wp_mails= wp_mail( $subscriber_email, $subject, $message, $headers);
					//if($wp_mails){	
						//$user_search_result = $wpdb->get_row("SELECT * FROM `$table_name` WHERE `email` LIKE '$subscriber_email' AND `flag` LIKE '$flag_act'");
						//if(count($user_search_result)) {
							// check user is already subscribed	
						//	if($user_search_result->flag != 2) {
							//	$wpdb->query("UPDATE `$table_name` SET `flag` = '2' WHERE `email` = '$subscriber_email'");
							//}
						//}
					//} 		
				}							
			}				
		}


		/*
		* Counter Clock Settings
		*/
		if(isset($_POST['weblizar_rmmuc_settings_save_counter_clock_option'])) {
			if($_POST['weblizar_rmmuc_settings_save_counter_clock_option'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}
				//google map on conatact page
				if(isset($_POST['disable_the_plugin'])) {
					$wl_rmmuc_options['disable_the_plugin'] = $_POST['disable_the_plugin'];
				} else {
					$wl_rmmuc_options['disable_the_plugin'] = "off";	
				}
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}	
			if($_POST['weblizar_rmmuc_settings_save_counter_clock_option'] == 2) {
				rmmuc_counter_clock_setting();		
			}
		}
			
		if(isset($_POST['weblizar_rmmuc_settings_save_counter_clock_layout_option'])) {
			if($_POST['weblizar_rmmuc_settings_save_counter_clock_layout_option'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}	
			if($_POST['weblizar_rmmuc_settings_save_counter_clock_layout_option'] == 2) {
				rmmuc_counter_clock_layout_setting();		
			}
		}
			
		/*
		* footer area setting 
		*/
		if(isset($_POST['weblizar_rmmuc_settings_save_footer_option'])) {
			if($_POST['weblizar_rmmuc_settings_save_footer_option'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}			
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}	
			if($_POST['weblizar_rmmuc_settings_save_footer_option'] == 2) {
				rmmuc_footer_setting();
			}
		}
			
			
		/*
		* Advance Settings
		*/
		if(isset($_POST['weblizar_rmmuc_settings_save_advance_settings_option'])) {
			if($_POST['weblizar_rmmuc_settings_save_advance_settings_option'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}
				// Social Icons section yes or on
				if(isset($_POST['show_notice_bar'])) {
					$wl_rmmuc_options['show_notice_bar'] = sanitize_text_field($_POST['show_notice_bar']);
				} else {
					$wl_rmmuc_options['show_notice_bar'] = "off";
				} 
				
				// Social Icons section yes or on
				if(isset($_POST['show_admin_link'])) {
					$wl_rmmuc_options['show_admin_link'] = sanitize_text_field($_POST['show_admin_link']);
				} else {
					$wl_rmmuc_options['show_admin_link'] = "off";
				}		
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));		
			}
			if($_POST['weblizar_rmmuc_settings_save_advance_settings_option'] == 2) { 
				rmmuc_advance_option_setting();
			}
		}


		if(isset($_POST['weblizar_rmmuc_settings_all_restored_settings_option'])) {
			if($_POST['weblizar_rmmuc_settings_all_restored_settings_option'] == 2){
				rmmuc_general_setting();
				rmmuc_appearance_setting();
				rmmuc_access_control_setting();
				rmmuc_page_layout_swap_setting();
				rmmuc_skin_layout_setting();
				rmmuc_social_setting();
				rmmuc_subscriber_form_setting();
				rmmuc_subscriber_provider_setting();
				rmmuc_subscriber_list_setting();
				rmmuc_counter_clock_setting();
				rmmuc_counter_clock_layout_setting();
				rmmuc_footer_setting();
				rmmuc_advance_option_setting();		
			}		
		}
		/**
		 * feedback area setting 
		 */
		if(isset($_POST['weblizar_rmmuc_settings_save_feedback_form_option'])) {
			if($_POST['weblizar_rmmuc_settings_save_feedback_form_option'] == 1) {
				foreach($_POST as  $key => $value) {
					$wl_rmmuc_options[$key]=sanitize_text_field($_POST[$key]);	
				}
				update_option('weblizar_rmmuc_options', stripslashes_deep($wl_rmmuc_options));
			}	
			if($_POST['weblizar_rmmuc_settings_save_feedback_form_option'] == 2) {
				rmmuc_feedback_setting();
			}
		}
		
		/**
		 * subscriber list file generate 
		 */
		if(isset($_POST['list_type']) && isset($_POST['file_date_time'])) {
			//print_r($_POST);
			global $wpdb;
			$list_type = $_POST['list_type'];
			//set file parameter
			$upload_dir_all = wp_upload_dir();
			$upload_dir_path = $upload_dir_all['basedir'];
			$upload_dir_url = $upload_dir_all['baseurl'];
			$file_date_time = $_POST['file_date_time'];			
				
			// all subscribers list
			if($list_type == "subscribers"){		
				//create a file & write header
				$file_name = "all-subscribers-list-".$file_date_time.".csv";
				$report_file = fopen($upload_dir_path."/".$file_name, "w") or die("Unable to create report file!");
				$csv_headertext = "Name, Email, Date, Subscription Status, Activate-code \r \n";
				fwrite($report_file, $csv_headertext);
			
				//fetch all data
				$results = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix . "rmmuc_subscribers");
				if (count($results))  {
					foreach($results as $row) {
						if($row->flag == '1') {
							 $flags='Subscribed';
						} else {
							$flags='Pending';
						}
						$txt = $row->f_name ." ".$row->l_name .", ".$row->email .", ".$row->date .", ".$flags.",".$row->act_code ."\r \n";
						fwrite($report_file, $txt);
					}
				}				
			}
			
			// active subscribers list
			if($list_type == "active"){
				//create a file & write header
				$file_name = "all-active-list-".$file_date_time.".csv";
				$report_file = fopen($upload_dir_path."/".$file_name, "w") or die("Unable to create report file!");
				$csv_headertext = "Name, Email, Date, Subscription Status, Activate-code \r \n";
				fwrite($report_file, $csv_headertext);
				
				//fetch all data
				$results = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix . "rmmuc_subscribers WHERE flag = '1'");
				if (count($results))  {
					foreach($results as $row) {
						if($row->flag == '1') {
							 $flags='Subscribed';
						} else {
							$flags='Pending';
						}
						$txt = $row->f_name ." ".$row->l_name .", ".$row->email .", ".$row->date .", ".$flags.",".$row->act_code ."\r \n";
						fwrite($report_file, $txt);
					}
				}				
			}
			
			// pending subscribers list
			if($list_type == "pending"){
				//create a file & write header
				$file_name = "all-pending-list-".$file_date_time.".csv";
				$report_file = fopen($upload_dir_path."/".$file_name, "w") or die("Unable to create report file!");
				$csv_headertext = "Name, Email, Date, Subscription Status, Activate-code \r \n";
				fwrite($report_file, $csv_headertext);
				
				//fetch all data
				$results = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix . "rmmuc_subscribers WHERE flag = '0'");
				if (count($results))  {
					foreach($results as $row) {
						if($row->flag == '1') {
							 $flags='Subscribed';
						} else {
							$flags='Pending';
						}
						$txt = $row->f_name ." ".$row->l_name .", ".$row->email .", ".$row->date .", ".$flags.",".$row->act_code ."\r \n";
						fwrite($report_file, $txt);
					}
				}			
			}			
		}
	}
}	
?>