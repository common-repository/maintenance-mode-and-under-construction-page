<!-- Call the option setting -->
<?php 
if ( ! defined( 'ABSPATH' ) ) {	exit;}
$wl_rmmuc_options = weblizar_rmmuc_get_options();?>
<?php $maint_mode_action_nonce = wp_create_nonce("maint_mode_action"); ?>
<div class="col-xs-8 tab-content" id="spa_general"> <!-- plugin dashboard Main class div setting -->
	<div class="cms_head"><?php esc_html_e('Maintenance Mode And Under Construction Page ','RMMUC_TEXT_DOMAIN');?></div>
	<?php $site_layout =$wl_rmmuc_options['layout_status'];?>	
	<div class="class_live <?php if ( $site_layout == 'deactivate' || $site_layout =='service_unavailable_switch' || $site_layout =='redirect_switch') echo "deactive";?>" >
		<a class="class_live" href="<?php echo esc_url(home_url("/?rmmuc_live_preview=yes")); ?>" target="_blank"><span class="button fas fa-eye"><?php esc_html_e(' Live Preview','RMMUC_TEXT_DOMAIN');?></span></a>
	</div>		

	<div class="tab-pane col-md-12 active" id="templates-option"> <!-- plugin template selection setting -->
		<div class="row">
		<div class="col-md-12 option">
			<h1><?php esc_html_e('Templates Options','RMMUC_TEXT_DOMAIN');?></h1>			
			<div class="tab-content">
				<div id="weblizar-template" class="tab-pane fade in active"><!-- plugin template free theme layout selection setting -->		
					<form method="post" id="weblizar_rmmuc_template_option">						
						<?php for($i=1; $i<=1; $i++){ ?>
						<div class="row">
						<div style="width:100%" class="col-md-12 col-sm-6 op_tem site_template <?php if($wl_rmmuc_options['select_template']=='select_template'.$i) echo 'active'; ?>" id="select_template<?php echo esc_attr($i); ?>">	
							<div class="selected_template active">	
								<div class="row op_show" data-orient="top">
									<div class="op_weblizar-pics-activated">
										<span class="image-shop-scroll" style="background-image: url('<?php echo plugin_dir_url( __FILE__ ).'images/screen-shot'.$i.'.jpg'; ?>');" ></span>
									</div>
								</div>
								<h4 class="op_name"><?php esc_html_e('Template '.$i.'  ','RMMUC_TEXT_DOMAIN');?><a class="cms_btn" target="_new" href="http://demo.weblizar.com/coming-soon-page-pro/template-1/" rel="nofollow"><?php esc_html_e('View Demo','RMMUC_TEXT_DOMAIN'); ?></a></h4>
								<span class="op_name1 green"><span class="activate"><?php esc_html_e('Template Activated','RMMUC_TEXT_DOMAIN'); ?></span></span>
							</div>
						</div>
						</div>	
						<?php } ?>
						<?php for($i=2; $i<=9; $i++){ ?>
						<div class="row">
						<div style="width:100%" class="col-md-12 col-sm-6 op_tem site_template <?php if($wl_rmmuc_options['select_template']=='select_template'.$i) echo 'active'; ?>" id="select_template<?php echo esc_attr($i); ?>">	
							<div class="selected_template active">	
								<div class="row op_show" data-orient="top">
									<div class="op_weblizar-pics">
										<span class="image-shop-scroll" style="background-image: url('<?php echo plugin_dir_url( __FILE__ ).'images/screen-shot'.$i.'.jpg'; ?>');" ></span>
									</div>
								</div>
								<h4 class="op_name"><?php esc_html_e('Template '.$i.'  ','RMMUC_TEXT_DOMAIN');?><a class="cms_btn" target="_new" href="http://demo.weblizar.com/coming-soon-page-pro/template-<?php echo esc_attr($i); ?>/" rel="nofollow"><?php esc_html_e('View Demo','RMMUC_TEXT_DOMAIN'); ?></a></h4>
								
							</div>
						</div>
						</div>	
						<?php } ?>																		
					</form>								
				</div>								
				<div id="weblizar-pro-template" class="tab-pane fade in"><!-- plugin template Pro theme layout selection setting -->											
					<form method="post" id="weblizar_rmmuc_pro_template_option">
						<div class="col-md-12 form-group">
							<div class="col-md-3 col-sm-6 op_tem">
								<div class="row op_show" data-orient="top">
									<div class="op_weblizar-pics">
										<span class="image-shop-scroll" style="background-image: url('<?php echo plugin_dir_url( __FILE__ ) ?>images/screen-shot1.jpg');"></span>
									</div>
								</div>
								<h2 class="op_name"><a href=""><?php esc_html_e('Coming Soon Pro 1','RMMUC_TEXT_DOMAIN');?></a></h2>
							</div>										
						</div>									
					</form>	
				</div>
			</div>
		</div>		
		
		</div>	
	</div>
	<div class="tab-pane col-md-12" id="general-settings"><!-- plugin General selection setting -->
		<div class="row">
		<div class="col-md-12 option">
			<h1><?php esc_html_e('General Settings','RMMUC_TEXT_DOMAIN'); ?></h1>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#appearance"><?php esc_html_e('Appearance Settings','RMMUC_TEXT_DOMAIN'); ?></a></li>
				<li><a data-toggle="tab" href="#general-option"><?php esc_html_e('SEO Settings','RMMUC_TEXT_DOMAIN'); ?></a></li>
				<li><a data-toggle="tab" href="#access-control"><?php esc_html_e('Access Control Settings','RMMUC_TEXT_DOMAIN'); ?></a></li>
				<li><a data-toggle="tab" href="#layout"><?php esc_html_e('Layout Option','RMMUC_TEXT_DOMAIN'); ?></a></li>
			</ul>
			<div class="tab-content">
				<div id="appearance" class="tab-pane fade in active"> <!-- Appearance selection setting -->
					<form method="post" id="weblizar_rmmuc_appearance_option">
						<h1><?php esc_html_e('Appearance Selection Settings','RMMUC_TEXT_DOMAIN'); ?></h1>
						<div class="col-md-12 form-group">
							<?php $site_layout =$wl_rmmuc_options['layout_status'];?>
							<label><?php esc_html_e('Status','RMMUC_TEXT_DOMAIN'); ?></label>
							<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enable Coming Soon and 503 service unavailable Mode on Site.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a> </label>
							<br/>
							<div class="col-md-6" id="weblizar_rmmuc_layout_switch">
								<select id="layout_status" name="layout_status" class="form-control">
									<option value="deactivate" <?php echo selected($site_layout, 'deactivate' ); ?> ><?php esc_html_e('Deactivate','RMMUC_TEXT_DOMAIN'); ?></option>
									<option value="under_construction_switch" <?php echo selected($site_layout, 'under_construction_switch' ); ?> ><?php esc_html_e('Activate Under Construction Mode','RMMUC_TEXT_DOMAIN'); ?></option>
									<option value="maintenance_switch" <?php echo selected($site_layout, 'maintenance_switch' ); ?> ><?php esc_html_e('Activate Maintainance Mode','RMMUC_TEXT_DOMAIN'); ?></option>
									<option value="service_unavailable_switch" <?php echo selected($site_layout, 'service_unavailable_switch' ); ?> ><?php esc_html_e('503 - Service unavailable','RMMUC_TEXT_DOMAIN'); ?></option>
								</select>
							</div>
						</div>
						<div class="layout-options <?php if ($site_layout=='deactivate') echo "active";?>" id="deactivate">
							<div class="col-md-12 form-group">
								<label><?php esc_html_e('How Plugin Deactivate Mode Works?','RMMUC_TEXT_DOMAIN'); ?></label><br/>
								<ul class="instruction_points">
									<li><?php esc_html_e('Plugin deactivated, You can choose any action from following list.','RMMUC_TEXT_DOMAIN'); ?></li>
								</ul>
								<hr style="border-color:#999;">
								<label><?php esc_html_e('How Under Construction Mode Works?','RMMUC_TEXT_DOMAIN'); ?></label><br/>
								<ul class="instruction_points">
									<li><?php esc_html_e('Hide the only selected below pages and post of the site from users and show the Only Under Construction Mode page template','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Please change the seo title, description and keywords from general settings to maintain the site SEO as message page template' ,'weblizar'); ?></li>
								</ul>
								<hr style="border-color:#999;">
								<label><?php esc_html_e('How Under Maintenance Mode Works?','RMMUC_TEXT_DOMAIN'); ?></label><br/>
								<ul class="instruction_points">
									<li><?php esc_html_e('Hide the all site from the users for a specific time frame and show the Only Under Maintenance Mode page template','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Please change the seo title, description and keywords from general settings to maintain the site SEO as message page template' ,'weblizar'); ?></li>
								</ul>
								<hr style="border-color:#999;">
								<label><?php esc_html_e('How 503 - Service unavailable Mode Action','RMMUC_TEXT_DOMAIN'); ?></label><br/>
								<ul class="instruction_points">
									<li><?php esc_html_e('The Web server (running the Web site) is currently unable to handle the HTTP request due to a temporary overloading or maintenance of the server.','RMMUC_TEXT_DOMAIN');?></li>
								</ul>
							</div>
						</div>
						<div class="layout-options <?php if ($site_layout=='under_construction_switch') echo "active";?>" id="under_construction_switch">
							<div class="col-md-12 form-group">
								<label><?php esc_html_e('How Under Construction Mode Works?','RMMUC_TEXT_DOMAIN'); ?></label><br/>
								<ul class="instruction_points">
									<li><?php esc_html_e('Hide the only selected below pages and post of the site from users and show the Only Under Construction Mode page template','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Please change the seo title, description and keywords from general settings to maintain the site SEO as message page template' ,'weblizar'); ?></li>
								</ul>
							</div>
							<div class="col-md-12 form-group">
								<h4><?php esc_html_e('Under Construction Mode Settings','RMMUC_TEXT_DOMAIN'); ?></h4><br/>
								<div class="row">
								<div class="col-md-2">
								<label><?php esc_html_e('Title','RMMUC_TEXT_DOMAIN'); ?></label>
								<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type Here Page Heading","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
								</div>
								<div class="col-md-10">
									<input  class="form-control" type="text" name="under-construction_title" id="under-construction_title"  value="<?php echo esc_attr($wl_rmmuc_options['under-construction_title']); ?>" >
								</div>
								</div>
								<div class="row">
								<div class="col-md-2">
								<label><?php esc_html_e('Sub Title','RMMUC_TEXT_DOMAIN'); ?></label>
								<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type Here Page Sub Heading","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
								</div>
								<div class="col-md-10">
									<input  class="form-control" type="text" name="under-construction_sub_title" id="under-construction_sub_title"  value="<?php echo esc_attr($wl_rmmuc_options['under-construction_sub_title']); ?>" >
								</div>
								</div>													
								<div class="row">
								<div class="col-md-2">
								<label><?php esc_html_e('Message','RMMUC_TEXT_DOMAIN'); ?></label>
								<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type Here A Message","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
								</div>
								<div class="col-md-10">
									<textarea class="form-control" rows="8" cols="8" id="under-construction_message" name="under-construction_message"><?php if($wl_rmmuc_options['under-construction_message']!='') { echo esc_html($wl_rmmuc_options['under-construction_message']); } ?></textarea>											
								</div>
								</div>
							</div>
							<div class="col-md-12 form-group">				
								<label><?php esc_html_e('Select Page and Post to show the under construction message','RMMUC_TEXT_DOMAIN');?></label>
								<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Google Map Embeded URL"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
								<div class="col-md-6">
									<select id='select_pageandpost' name="select_pageandpost[]" multiple ="multiple" class="form-control">
										<optgroup label="Page">
											<?php $pages = get_pages(); 
												if (is_array($pages)) { foreach($pages as $page) { ?>
												<option value="<?php echo esc_attr($page->ID); ?>" <?php if (is_array($wl_rmmuc_options['select_pageandpost'])) { foreach($wl_rmmuc_options['select_pageandpost'] as $selected_list)
										{if($selected_list == $page->ID) echo 'selected="selected"';}} ?>><?php esc_html_e( $page->post_title,'weblizar');?></option>
											<?php } }?> 
										</optgroup>
										<optgroup label="Post">
											<?php $posts = get_posts(); 
												if (is_array($posts)) { foreach($posts as $post) {?>
												<option value="<?php echo esc_attr($post->ID);?>" <?php if (is_array($wl_rmmuc_options['select_pageandpost'])) {foreach($wl_rmmuc_options['select_pageandpost'] as $selected_list)
										{if($selected_list == $post->ID) echo 'selected="selected"';}} ?>><?php esc_html_e( $post->post_title,'weblizar');?></option>
											<?php } }?> 
										</optgroup>
									</select>
								</div>
							</div>
						</div>
						<div class="layout-options <?php if ($site_layout=='maintenance_switch') echo "active";?>" id="maintenance_switch">
							<div class="col-md-12 form-group">
								<label><?php esc_html_e('How Under Maintenance Mode Works?','RMMUC_TEXT_DOMAIN'); ?></label><br/>
								<ul class="instruction_points">
									<li><?php esc_html_e('Hide the all site from the users for a specific time frame and show the Only Under Maintenance Mode page template','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Please change the seo title, description and keywords from general settings to maintain the site SEO as message page template' ,'weblizar'); ?></li>
								</ul>
							</div>
							<div class="col-md-12 form-group">
								<h4><?php esc_html_e('Maintenance Mode Settings','RMMUC_TEXT_DOMAIN'); ?></h4>
								<div class="row">
									<label><?php esc_html_e('Title','RMMUC_TEXT_DOMAIN'); ?></label>
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type Here Page Heading","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
									<br/>
									<div class="col-sm-12">
										<input  class="form-control" type="text" name="maintenance_title" id="maintenance_title"  value="<?php echo esc_attr($wl_rmmuc_options['maintenance_title']); ?>" >
									</div>
								</div>
								<div class="row">
									<label><?php esc_html_e('Sub Title','RMMUC_TEXT_DOMAIN'); ?></label>
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type Here Page Sub Heading","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
									<br/>
									<div class="col-sm-12">
										<input  class="form-control" type="text" name="maintenance_sub_title" id="maintenance_sub_title"  value="<?php echo esc_attr($wl_rmmuc_options['maintenance_sub_title']); ?>" >
									</div>
								</div>													
								<div class="row">
									<label><?php esc_html_e('Message','RMMUC_TEXT_DOMAIN'); ?></label>
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type Here A Message","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
									<br/>
									<div class="col-md-6">
										<textarea class="form-control" rows="8" cols="8" id="maintenance_message" name="maintenance_message"><?php if($wl_rmmuc_options['maintenance_message']!='') { echo esc_html($wl_rmmuc_options['maintenance_message']); } ?></textarea>														
									</div>
								</div>
							</div>
						</div>
						<div class="all_content_show layout-options <?php if ($site_layout=='service_unavailable_switch') echo "active";?>" id="service_unavailable_switch">
							<div class="col-md-12 form-group">
								<label><?php esc_html_e('The Web server (running the Web site) is currently unable to handle the HTTP request due to a temporary overloading or maintenance of the server.','RMMUC_TEXT_DOMAIN');?></label>
							</div>
						</div>
						<div class="all_content_hide <?php if ( $site_layout == 'deactivate' || $site_layout=='service_unavailable_switch') echo "active";?>" id="service_unavailable_switch">
							<div class="all_content_hide" id="deactivate"> <!-- Add this div to hide all setting when deactivate mode on-->
								<div class="col-md-12 form-group">
									<label><?php esc_html_e('Your Site Logo','RMMUC_TEXT_DOMAIN'); ?></label>
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Select logo as text and image ","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
									<br/>
									<div class="col-md-6">
										<?php $site_logo =$wl_rmmuc_options['site_logo'];?>
										<select name="site_logo" id="site_logo" class="form-control">
											<option value="logo_text"<?php echo selected($site_logo, 'logo_text' ); ?>><?php esc_html_e('Logo Text','RMMUC_TEXT_DOMAIN'); ?></option>
											<option value="logo_image"<?php echo selected($site_logo, 'logo_image' ); ?>><?php esc_html_e('Logo Image','RMMUC_TEXT_DOMAIN'); ?></option>
										</select>
									</div>
								</div>
								<div class="col-md-12 form-group logo-option <?php if ($site_logo=='logo_text') echo "active";?>" id="logo_text">
									<label><?php esc_html_e('Logo Text ','RMMUC_TEXT_DOMAIN');?></label>
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add your site logo text here ","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
									<br/>
									<div class="col-md-6">
										<input class="form-control"  type="text" name="logo_text_value" id="logo_text_value" value="<?php echo esc_attr($wl_rmmuc_options['logo_text_value']); ?>" >
									</div>
								</div>
								<div class="col-md-12 form-group logo-option <?php if ($site_logo=='logo_image') echo "active";?>" id="logo_image">
									<div class="row">
										<div class="col-sm-12 no-pad">
											<label><?php esc_html_e('Logo Image ','RMMUC_TEXT_DOMAIN'); ?></label>
											<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add your site logo here suggested size is 250X150","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
											<br/>
											<div class="col-md-12">
												<input class="form-control" type="text" value="<?php if($wl_rmmuc_options['upload_image_logo']!='') { echo esc_attr($wl_rmmuc_options['upload_image_logo']); } ?>" id="upload_image_logo" name="upload_image_logo" size="50" class="upload has-file">
												<button type="button" class="btn upload_image_button"><?php esc_html_e('Upload Your Logo','RMMUC_TEXT_DOMAIN');?></button>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label><?php esc_html_e('Logo Width ','RMMUC_TEXT_DOMAIN'); ?></label>
											<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Default Logo Width : 250px, if you want to increase than specify your value","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
											<div class="col-md-12">
												<input  class="form-control" type="text" name="logo_width" id="logo_width"  value="<?php echo esc_attr($wl_rmmuc_options['logo_width']); ?>" >
											</div>
										</div>
										<div class="col-md-6">
											<label><?php esc_html_e('Logo Height ','RMMUC_TEXT_DOMAIN');?></label>
											<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Default Logo Height : 150px, if you want to increase than specify your value","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
											<div class="col-md-12">
												<input class="form-control" type="text" name="logo_height" id="logo_height" value="<?php echo esc_attr($wl_rmmuc_options['logo_height']); ?>" >
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 form-group">
									<label><?php esc_html_e('Select Background Type','RMMUC_TEXT_DOMAIN');?> </label>
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("With the Help of selection box you can show page background as your wish","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a> </label>
									<br/>
									<div class="col-md-3">
										<?php $theme_bg =$wl_rmmuc_options['template_bg_select'];?>
										<select name="template_bg_select" id="template_bg_select" class="form-control">
											<option value="Background_Color" <?php echo selected($theme_bg, 'Background_Color' ); ?>><?php esc_html_e('Color','RMMUC_TEXT_DOMAIN');?></option>
											<option value="Custom_Background" <?php echo selected($theme_bg, 'Custom_Background' ); ?>><?php esc_html_e('Image','RMMUC_TEXT_DOMAIN');?></option>
										</select>
									</div>
								</div>
								<div class="col-md-12 form-group template-option <?php if ($theme_bg=='Custom_Background') echo "active";?>" id="Custom_Background">
									<label><?php esc_html_e('Background Image','RMMUC_TEXT_DOMAIN');?></label>
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add Background Image","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
									<br/>
									<div class="col-sm-12">
										<div class="row">
											<input class="form-control" type="text" value="<?php if($wl_rmmuc_options['custom_bg_img']!='') { echo esc_attr($wl_rmmuc_options['custom_bg_img']); } ?>" id="custom_bg_img" name="custom_bg_img" size="50" class="upload has-file"/>
											<button type="button" class="btn upload_image_button"><?php esc_html_e('Upload Image','RMMUC_TEXT_DOMAIN');?></button>
										</div>
									</div>
								</div>
								<div class="col-md-12 form-group template-option <?php if ($theme_bg=='Background_Color') echo "active";?>" id="Background_Color">
									<label><?php esc_html_e('Background Color','RMMUC_TEXT_DOMAIN');?></label>
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Change Background Color","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
									<br/>
									<div class="col-md-6 no-pad">
										<div class="row">
											<input class="color no-sliders" type="text" value="<?php echo esc_attr($wl_rmmuc_options['bg_color']); ?>" id="bg_color" name="bg_color" class="colorpicker"/>
										</div>
									</div>
								</div>
								<div class="col-md-12 form-group">
									<label><?php esc_html_e('Button Link On/Off','RMMUC_TEXT_DOMAIN');?></label>
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enable Button Link of top Image, Video, Slider.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a> </label>
									<div class="col-md-12">
										<input data-toggle="toggle" data-offstyle="off" type="checkbox" <?php if($wl_rmmuc_options['button_onoff']=='on') echo "checked='checked'"; ?> id="button_onoff" name="button_onoff" >
									</div>
								</div>
								<div class="col-md-12 form-group button_show-option <?php if($wl_rmmuc_options['button_onoff']=='on') echo "active"; ?>" id="rmmuc_button_onoff">
									<div class="row">
									<div class="col-md-6">
										<label><?php esc_html_e('Button Text','RMMUC_TEXT_DOMAIN');?></label>
										<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add text of button ","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a> </label>
										<div class="row">
											<div class="col-sm-12">
												<input class="form-control" type="text" name="button_text" id="button_text" value="<?php echo esc_attr($wl_rmmuc_options['button_text']); ?>" >
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<label><?php esc_html_e('Button Link','RMMUC_TEXT_DOMAIN');?></label>
										<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add link on button","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
										<div class="row">
											<div class="col-sm-12">
											    <input class="form-control" type="text" name="button_text_link" id="button_text_link" value="<?php esc_attr_e($wl_rmmuc_options['button_text_link'],'RMMUC_TEXT_DOMAIN'); ?>">
											</div>
										</div>
									</div>
									</div>
								</div>
								<div class="col-md-12 form-group">
									<div class="col-md-6 info">
										<label><?php esc_html_e('Link to Admin','RMMUC_TEXT_DOMAIN');?></label>
										<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enable Admin Link of Dashboard for Users.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
										<input data-toggle="toggle" data-offstyle="off" type="checkbox" <?php if($wl_rmmuc_options['link_admin']=='on') echo "checked='checked'"; ?> id="link_admin" name="link_admin" >
									</div>
								</div>
								<div class="col-md-12 form-group link_admin-option <?php if($wl_rmmuc_options['link_admin']=='on') echo "active"; ?>" id="rmmuc_link_admin">
									<div class="col-md-6">
										<label><?php esc_html_e('Link To Admin Text ','RMMUC_TEXT_DOMAIN');?></label>
										<label><a href="#" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add text name for Admin Link of Dashboard for Users.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
										<input class="form-control" type="text" name="admin_link_text" id="admin_link_text" value="<?php echo esc_attr($wl_rmmuc_options['admin_link_text']); ?>" >
									</div>
								</div>
							</div>
							<!-- End of the all content hide class div for deactivate mode-->
						</div>

						<!-- End of the all content hide class div for 503 service unavailable mode on-->
						<div class="restore">
							<input type="hidden" id="security" name="security" value="<?php echo esc_attr($maint_mode_action_nonce); ?>" />
							<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_appearance_option" name="weblizar_rmmuc_settings_save_appearance_option" />
							<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_reset('appearance_option');">							
							<input class="button button-primary left" type="button" value="<?php esc_attr_e('Save Options','RMMUC_TEXT_DOMAIN');?>" name="weblizar_rmmuc_option_data_save_appearance_option" id="weblizar_rmmuc_option_data_save_appearance_option" >
						</div>
					</form>
				</div>
				
				<!-- General selection setting -->	
				<div id="general-option" class="tab-pane fade in">
					<form method="post" id="weblizar_rmmuc_general_option">
						<h1> <?php esc_html_e('General Selection Settings','RMMUC_TEXT_DOMAIN'); ?></h1>
						<div class="col-md-12 form-group">
							<div class="row">
								<label><?php esc_html_e('Page Meta Title','RMMUC_TEXT_DOMAIN');?></label>
								<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type here meta title for seo","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
								<br/>
								<div class="col-md-12">
									<input  class="form-control" type="text" name="page_meta_title" id="page_meta_title"  value="<?php echo esc_attr($wl_rmmuc_options['page_meta_title']); ?>" >
								</div>
							</div>
							<div class="row">
								<label><?php esc_html_e('Page Meta Keywords','RMMUC_TEXT_DOMAIN');?></label>
								.<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add relative keywords for page and site seo","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
								<br/>
								<div class="col-md-12">
									<textarea class="form-control" rows="8" cols="8" id="page_meta_keywords" placeholder="Enter comma separated keywords here which is related to your website" name="page_meta_keywords"><?php if($wl_rmmuc_options['page_meta_keywords']!='') { echo esc_html($wl_rmmuc_options['page_meta_keywords']); } ?></textarea>
								</div>
							</div>
							<div class="row">
								<label><?php esc_html_e('Page Meta Description','RMMUC_TEXT_DOMAIN');?></label>
								<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type here the page related short and relevent description","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
								<br/>
								<div class="col-md-12">
									<textarea class="form-control" rows="8" cols="8" id="page_meta_discription" name="page_meta_discription"><?php if($wl_rmmuc_options['page_meta_discription']!='') { echo esc_html($wl_rmmuc_options['page_meta_discription']); } ?></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-12 form-group">
							<label><?php esc_html_e('Enable Search Robots','RMMUC_TEXT_DOMAIN'); ?></label>
							<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enable the Robot for search","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
							<br/>
							<div class="col-md-6">
								<input data-toggle="toggle" data-offstyle="off" type="checkbox" <?php if($wl_rmmuc_options['search_robots']=='on') echo "checked='checked'"; ?> id="search_robots" name="search_robots" >
							</div>
						</div>
						<div class="col-md-12 form-group search-option <?php if($wl_rmmuc_options['search_robots']=='on') echo "active"; ?>" id="rmmuc_search_robots">
							<label><?php esc_html_e('Select Robots Meta Tag','RMMUC_TEXT_DOMAIN'); ?></label>
							<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Search engines like Google, Yahoo and AltaVista show Metatags in their search results. Robot tag tell the spider ( Search engines ) if you want your whole website or single page to be crawled or not.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
							<br/>
							<div class="col-md-12">
								<?php $rmmuc_robots =$wl_rmmuc_options['rmmuc_robots_meta'];?>
								<select class="form-control rmmuc_select" name="rmmuc_robots_meta" id="rmmuc_robots_meta">
									<option value="index follow" <?php echo selected($rmmuc_robots, 'index follow' ); ?> ><?php esc_html_e('Index, Follow','RMMUC_TEXT_DOMAIN'); ?></option>
									<option value="index nofollow" <?php echo selected($rmmuc_robots, 'index nofollow' ); ?> ><?php esc_html_e('Index, NoFollow','RMMUC_TEXT_DOMAIN'); ?></option>
									<option value="noindex follow" <?php echo selected($rmmuc_robots, 'noindex follow' ); ?> ><?php esc_html_e('NoIndex, Follow','RMMUC_TEXT_DOMAIN'); ?></option>
									<option value="noindex nofollow" <?php echo selected($rmmuc_robots, 'noindex nofollow' ); ?> ><?php esc_html_e('NoIndex, NoFollow','RMMUC_TEXT_DOMAIN'); ?></option>
								</select>
							</div>
						</div>
						<div class="col-md-12 form-group">
							<label><?php esc_html_e('Your Site Favicon','RMMUC_TEXT_DOMAIN');?></label>
							<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Make sure you upload .ico image type which is not more then 25X25 px.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
							<br/>
							
							<div class="row fev-icon">
								<div class="col-sm-12 no-pad">
									<input class="form-control" type="text" value="<?php if($wl_rmmuc_options['upload_image_favicon']!='') { echo esc_attr($wl_rmmuc_options['upload_image_favicon']); } ?>" id="upload_image_favicon" name="upload_image_favicon" size="36" class="upload has-file"/>
									<input type="button" id="upload_button" value="<?php esc_attr_e('Upload Favicon Icon','RMMUC_TEXT_DOMAIN');?>" class="btn upload_image_button" />
								</div>
							</div>
						</div>
						<div class="restore">
							<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_general_option" name="weblizar_rmmuc_settings_save_general_option" />
							<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_reset('general_option','<?php echo esc_attr($maint_mode_action_nonce); ?>');">
							<input class="button button-primary left" type="button" value="<?php esc_attr_e('Save Options','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_save('general_option','<?php echo esc_attr($maint_mode_action_nonce); ?>')" >
						</div>
					</form>
				</div>

				
				<!-- Access control setting -->
				<div id="access-control" class="tab-pane fade in">
					<form action="post" id="weblizar_rmmuc_access_control_option" >
						<h1> <?php esc_html_e('Access Control Settings','RMMUC_TEXT_DOMAIN'); ?></h1>	
						<div class="col-md-12 form-group show_page-option active" id="as_role">						
							<label><?php esc_html_e('Hide The Site For The Following Role Users','RMMUC_TEXT_DOMAIN');?></label>
							<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Select Users for showing coming soon page and hide the site whenever users login or not","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a> </label>
							<br/>
							<div class="col-md-4 no-pad">
								<select multiple="multiple" name="user_value[]" class="form-control">
									<?php global $wp_roles;        
									$wp_roles = new WP_Roles();
									$all_roles = $wp_roles->get_names();
									if (isset($all_roles)) {
										foreach($all_roles as $roles) { ?>
											<option value="<?php echo esc_attr($roles); ?>" <?php if (isset($wl_rmmuc_options['user_value'])) { foreach($wl_rmmuc_options['user_value'] as $roles_users) { if($roles_users == $roles) echo 'selected="selected"';} } ?>>
												<?php esc_html_e( $roles ,'RMMUC_TEXT_DOMAIN');?>
											</option>
											<?php
										} 
									}?> 
								</select>
							</div>
						</div>
						<div class="restore">
							<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_access_control_option" name="weblizar_rmmuc_settings_save_access_control_option" />
							<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_reset('access_control_option','<?php echo esc_attr($maint_mode_action_nonce); ?>');">
							<input class="button button-primary left" type="button" value="<?php esc_attr_e('Save Options','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_save('access_control_option','<?php echo esc_attr($maint_mode_action_nonce); ?>')" >
						</div>
					</form>
				</div>
				
				<!-- Layout swap control setting -->
				<div id="layout" class="tab-pane fade in"> 
					<div id="page-layout" class="tab-pane fade in active">
						<form action="post" id="weblizar_rmmuc_pagelayoutmanger">
							<h1> <?php esc_html_e('Layout Manager','RMMUC_TEXT_DOMAIN'); ?></h1>	
							<div class="col-md-12 option section">
								<table  class="form-table">
									<div class="dhe-example-section-content">
										<div id="page_layout_swap">
											<div class="column left first">
												<font color="#333333" size="+2"> <?php esc_html_e('Disabled','RMMUC_TEXT_DOMAIN');?></font><p></p>
												<div class="sortable-list" id="disable">
													<?php
													$data = $wl_rmmuc_options['page_layout_swap'];
													$home_page_data = array('Social','Subscriber Form');
													$todisable=array_diff($home_page_data, $data);
													if($todisable != '') {
														foreach($todisable as $value) { ?>
															<div class="sortable-item" id="<?php echo esc_attr($value); ?>">
															<?php echo ucfirst($value); ?>
															</div>
															<?php 
														}	
													} ?>
												</div>
											</div>
											<div class="column left">
												<font color="#333333" size="+2"> <?php esc_html_e('Enabled','RMMUC_TEXT_DOMAIN'); ?></font><p></p>
												<div class="sortable-list" id="enable">
													<?php
													$enable =$wl_rmmuc_options['page_layout_swap'];
													if($enable[0] != '') {
														foreach($enable as $value) { ?>
															<div class="sortable-item" id="<?php echo esc_attr($value); ?>">
																<?php  echo ucfirst($value); ?>
																</div><?php
														}
													} ?>
												</div>
											</div>
										</div>
									</div>
									<!--end redify_frontpage -->
								</table>
							</div>
							<div class="restore">
								<input type="hidden" id="security" name="security" value="<?php echo esc_attr($maint_mode_action_nonce); ?>" />
								<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_pagelayoutmanger" name="weblizar_rmmuc_settings_save_pagelayoutmanger" />
								<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" id="weblizar_home_layout_reset_pagelayoutmanger">
								<input class="button button-primary left" type="button" id="weblizar_home_layout_save_pagelayoutmanger" value="<?php esc_attr_e('Save Options','RMMUC_TEXT_DOMAIN');?>" >
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>		
		</div>
	</div>	
	<!-- plugin General selection setting -->
	<div class="tab-pane col-md-12" id="skin-layout-settings">
		<div class="row">
		<div class="col-md-12 option">
			<h1><?php esc_html_e('Skin Color Settings','RMMUC_TEXT_DOMAIN'); ?></h1>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#skin-layout"><?php esc_html_e('Skin Color Selection Settings','RMMUC_TEXT_DOMAIN'); ?></a></li>
			</ul>			
			<div class="tab-content">
				<div id="skin-layout" class="tab-pane fade in active"> <!-- Layout selection setting -->
					<form method="post" id="weblizar_rmmuc_skin-layout_option">
						<h1> <?php esc_html_e('Skin Color Selection Settings','RMMUC_TEXT_DOMAIN'); ?></h1>
						<div class="col-md-12 form-group">
							<?php $theme_color_schemes =$wl_rmmuc_options['theme_color_schemes'];?>
							<label><?php esc_html_e('Theme Color Schemes','RMMUC_TEXT_DOMAIN'); ?></label>
							<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Select color Schemes for page theme layout.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
							<div class="col-md-3" id="weblizar_rmmuc_layout_color_switch">
								<select id="theme_color_schemes" name="theme_color_schemes" class="form-control">
									<option value="#FF6347" <?php echo selected($theme_color_schemes, '#FF6347' ); ?> ><?php esc_html_e('Default','RMMUC_TEXT_DOMAIN'); ?></option>
									<option value="#33ADFF" <?php echo selected($theme_color_schemes, '#33ADFF' ); ?> ><?php esc_html_e('Blue','RMMUC_TEXT_DOMAIN'); ?></option>
									<option value="#29AB87" <?php echo selected($theme_color_schemes, '#29AB87' ); ?> ><?php esc_html_e('Green','RMMUC_TEXT_DOMAIN'); ?></option>
									<option value="#FF6347" <?php echo selected($theme_color_schemes, '#FF6347' ); ?> ><?php esc_html_e('Red','RMMUC_TEXT_DOMAIN'); ?></option>
									<option value="#FF69B4" <?php echo selected($theme_color_schemes, '#FF69B4' ); ?> ><?php esc_html_e('Pink','RMMUC_TEXT_DOMAIN'); ?></option>
								</select>
							</div>
						</div>
						<div class="restore">
							<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_skin-layout_option" name="weblizar_rmmuc_settings_save_skin-layout_option" />
							<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_reset('skin-layout_option','<?php echo esc_attr($maint_mode_action_nonce); ?>');">
							<input class="button button-primary left" type="button" value="<?php esc_html_e('Save Options','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_save('skin-layout_option','<?php echo esc_attr($maint_mode_action_nonce); ?>')" >
						</div>
					</form>
				</div>
			</div>
		</div>		
		</div>
	</div>
	
	<!-- Social Media setting -->
	<div class="tab-pane col-md-12" id="social">
		<div class="row">
		<div class="col-md-12 option">
			<h1><?php esc_html_e('Social Media Options','RMMUC_TEXT_DOMAIN');?></h1>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#page-social"><?php esc_html_e('Social Media Options','RMMUC_TEXT_DOMAIN');?></a></li>
			</ul>
			<div class="tab-content">
				<div id="page-social" class="tab-pane fade in active"> <!-- Social link and icon setting -->
					<form action="post" id="weblizar_rmmuc_social_option">
						<h1> <?php esc_html_e('Social Link And Icon Settings','RMMUC_TEXT_DOMAIN'); ?></h1>
						<div class="social-option active" id="rmmuc_social">
							<div id="rmmuc_social_fields">
								<?php for($i=1;$i<=5; $i++) { ?>
									<div class="col-md-12 form-group" id="rmmuc_social-<?php echo esc_attr($i);?>">
										<label><?php esc_html_e('Social Icon ','RMMUC_TEXT_DOMAIN'); echo esc_html($i); ?></label>
										<br/>
										<div class="row">								
											<div class="col-md-6">
												<input  class="form-control" type="text" name="social_icon_<?php echo esc_attr($i);?>" id="social_icon_<?php echo esc_attr($i);?>"  value="<?php echo esc_attr($wl_rmmuc_options['social_icon_'.$i]); ?>" >
												<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enter FontAwesome Social Icon Here","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
											</div>
											
										
											<div class="col-md-6">
												<input  class="form-control" type="text" name="social_link_<?php echo esc_attr($i);?>" id="social_link_<?php echo esc_attr($i);?>"  value="<?php echo esc_attr($wl_rmmuc_options['social_link_'.$i]); ?>" >
												<label><?php esc_html_e('Open As New Tab  ','RMMUC_TEXT_DOMAIN');?></label>
												<input data-toggle="toggle" data-offstyle="off" type="checkbox" <?php if($wl_rmmuc_options['link_tab_'.$i]=='on') echo "checked='unchecked'"; ?> id="link_tab_<?php echo esc_attr($i);?>" name="link_tab_<?php echo esc_attr($i);?>" >
												<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Link Open Into New Tab ON/OFF","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
											</div>
											
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="restore">
							<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_social_option" name="weblizar_rmmuc_settings_save_social_option" />
							<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_reset('social_option','<?php echo esc_attr($maint_mode_action_nonce); ?>');">
							<input class="button button-primary left" type="button" value="<?php esc_attr_e('Save Options','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_save('social_option','<?php echo esc_attr($maint_mode_action_nonce); ?>')" >
						</div>
					</form>
				</div>
			</div>
		</div>		
		</div>
	</div>
	
	<!-- Subscriber Form option setting -->
	<div class="tab-pane col-md-12" id="subscriber">
		<div class="row">
		<div class="col-md-12 option">
			<h1><?php esc_html_e('Subscriber','RMMUC_TEXT_DOMAIN');?></h1>
			<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#subscriber-settings"><?php esc_html_e('Subscriber Form Settings','RMMUC_TEXT_DOMAIN');?></a></li>
			<li><a data-toggle="tab" href="#subscriber-provider-option"><?php esc_html_e('Subscriber Email Settings','RMMUC_TEXT_DOMAIN');?></a></li>
			<li><a data-toggle="tab" href="#subscriber-list"><?php esc_html_e('Subscriber List','RMMUC_TEXT_DOMAIN');?></a></li>
			</ul>
			<div class="tab-content">
				<!-- Subscriber Form general settings -->
				<div id="subscriber-settings" class="tab-pane fade in active">
					<form action="post" id="weblizar_rmmuc_subscriber_option">
						<h1><?php esc_html_e('Subscriber Form Settings','RMMUC_TEXT_DOMAIN'); ?></h1>
						<div class="col-md-12 form-group subscriber-option active" id="rmmuc_subscriber">
							<h4><?php esc_html_e('Subscriber Form Text','RMMUC_TEXT_DOMAIN'); ?></h4><br/>
							<div class="row">
								<label><?php esc_html_e('Title','RMMUC_TEXT_DOMAIN'); ?></label>
								<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type here subscriber form Heading","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
								<br/>
								<div class="col-md-12">
									<input  class="form-control" type="text" name="subscriber_form_title" id="subscriber_form_title"  value="<?php echo esc_attr($wl_rmmuc_options['subscriber_form_title']); ?>" >
								</div>
							</div>
							<div class="row">
								<label><?php esc_html_e('Font Awesome Icons','RMMUC_TEXT_DOMAIN'); ?></label>
								<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add relevant FontAwesome Icon Here","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
								<div class="col-md-12">
									<input  class="form-control" type="text" name="subscriber_form_icon" id="subscriber_form_icon"  value="<?php echo esc_attr($wl_rmmuc_options['subscriber_form_icon']); ?>">
								</div>
							</div>
							<div class="row">
								<label><?php esc_html_e('Sub Title','RMMUC_TEXT_DOMAIN'); ?></label>
								<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type here subscriber form Sub Heading","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
								<div class="col-md-12">
									<input  class="form-control" type="text" name="subscriber_form_sub_title" id="subscriber_form_sub_title"  value="<?php echo esc_attr($wl_rmmuc_options['subscriber_form_sub_title']); ?>" >
								</div>
							</div>
							<div class="row">
								<label><?php esc_html_e('Message','RMMUC_TEXT_DOMAIN'); ?></label>
								<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type here subscriber form Message","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
								<div class="col-md-12">
									<textarea class="form-control" rows="8" cols="8" id="subscriber_form_message" name="subscriber_form_message" ><?php if($wl_rmmuc_options['subscriber_form_message']!='') { echo esc_html($wl_rmmuc_options['subscriber_form_message']); } ?></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-12 form-group subscriber-option active" id="rmmuc_subscriber"> 
							<label><?php esc_html_e('Subscriber Form Button Text & Message Settings','RMMUC_TEXT_DOMAIN'); ?></label>
							<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Type here subscriber form Setting","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
							<div class="row checkbox">						
								<div class="col-md-4">
									<label><?php esc_html_e('Button Text','RMMUC_TEXT_DOMAIN');?></label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control color-control" name="sub_form_button_text" id="sub_form_button_text" value="<?php echo esc_attr($wl_rmmuc_options['sub_form_button_text']); ?>" size="20">						
								</div> 					
							</div>
							<div class="row checkbox">
								<div class="col-md-4">
									<label><?php esc_html_e('First Name Placeholder ','RMMUC_TEXT_DOMAIN');?></label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control color-control" name="sub_form_button_f_name" id="sub_form_button_f_name" value="<?php echo esc_attr($wl_rmmuc_options['sub_form_button_f_name']); ?>" size="20">						
								</div>
							</div>
							<div class="row checkbox">						
								<div class="col-md-4">
									<label><?php esc_html_e('Last Name Placeholder ','RMMUC_TEXT_DOMAIN');?></label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control color-control" name="sub_form_button_l_name" id="sub_form_button_l_name" value="<?php echo esc_attr($wl_rmmuc_options['sub_form_button_l_name']); ?>" size="20">						
								</div>
							</div>	
							<div class="row checkbox">
								<div class="col-md-4">
									<label><?php esc_html_e('Email Placeholder ','RMMUC_TEXT_DOMAIN');?></label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control color-control" name="sub_form_subscribe_title" id="sub_form_subscribe_title" value="<?php echo esc_attr($wl_rmmuc_options['sub_form_subscribe_title']); ?>" size="20">						
								</div>					
							</div>			
							<div class="row">
								<div class="col-md-4">
									<label><?php esc_html_e('Subscribe Success Message','RMMUC_TEXT_DOMAIN');?></label>
									
								</div>
								<div class="col-md-8">						
									<input type="text" class="form-control" name="sub_form_subscribe_seuccess_message" id="sub_form_subscribe_seuccess_message" value="<?php echo esc_attr($wl_rmmuc_options['sub_form_subscribe_seuccess_message']); ?>">
								</div>
							</div>					
							<div class="row">
								<div class="col-md-4">
									<label><?php esc_html_e('Subscribe Invalid Message','RMMUC_TEXT_DOMAIN');?></label>
								</div>
								<div class="col-md-8">							
									<input type="text" class="form-control" name="sub_form_subscribe_invalid_message" id="sub_form_subscribe_invalid_message" value="<?php echo esc_attr($wl_rmmuc_options['sub_form_subscribe_invalid_message']); ?>">
								</div>
							</div>					
							<div class="row">
								<div class="col-md-4">
									<label><?php esc_html_e('Subscribe After Confirmation Success Message','RMMUC_TEXT_DOMAIN');?></label>
								</div>
								<div class="col-md-8">								
									<input type="text" class="form-control" name="sub_form_subscribe_confirm_success_message" id="sub_form_subscribe_confirm_success_message" value="<?php echo esc_attr($wl_rmmuc_options['sub_form_subscribe_confirm_success_message']); ?>">
								</div>
							</div>					
							<div class="row">
								<div class="col-md-4">
									<label><?php esc_html_e('Already Subscribed Information Message','RMMUC_TEXT_DOMAIN');?></label>
								</div>
								<div class="col-md-8">									
									<input type="text" class="form-control" name="sub_form_subscribe_already_confirm_message" id="sub_form_subscribe_already_confirm_message" value="<?php echo esc_attr($wl_rmmuc_options['sub_form_subscribe_already_confirm_message']); ?>">
								</div>
							</div>					
							<div class="row">
								<div class="col-md-4">							
									<label><?php esc_html_e('Invaid Details send Error Message','RMMUC_TEXT_DOMAIN');?></label>
								</div>
								<div class="col-md-8">					
									<input type="text" class="form-control" name="sub_form_invalid_confirmation_message" id="sub_form_invalid_confirmation_message" value="<?php echo esc_attr($wl_rmmuc_options['sub_form_invalid_confirmation_message']); ?>">
								</div>
							</div>
						</div>
						<div class="restore">
							<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_subscriber_option" name="weblizar_rmmuc_settings_save_subscriber_option" />
							<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_reset('subscriber_option','<?php echo esc_attr($maint_mode_action_nonce); ?>');">
							<input class="button button-primary left" type="button" value="<?php esc_attr_e('Save Options','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_save('subscriber_option','<?php echo esc_attr($maint_mode_action_nonce); ?>')" >
						</div>
					</form>
				</div>
				
				<!-- Subscriber Form provider option setting -->
				<div id="subscriber-provider-option" class="tab-pane fade in ">
					<form action="post" id="weblizar_rmmuc_subscriber_provider_option">
						<h1> <?php esc_html_e('Subscriber Email Settings','RMMUC_TEXT_DOMAIN'); ?></h1>
						<div class="col-md-12 form-group">
							<div class="col-md-6 checkbox">
								<label><?php esc_html_e('Enable Email Based Subscriptions','RMMUC_TEXT_DOMAIN');?></label><br/>
								<div class="info">
									<input data-toggle="toggle" data-offstyle="off" type="checkbox" <?php if($wl_rmmuc_options['confirm_email_subscribe'] == 'on') echo "checked='unchecked'"; ?> id="confirm_email_subscribe" name="confirm_email_subscribe" >
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enable the email confirmation system for valid subscribers.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a> </label>
								</div>
							</div>
						</div>			
						<div class="form_deactivate-option <?php if($wl_rmmuc_options['confirm_email_subscribe'] == 'off') echo "active"; ?>" id="deactivated_confirm_email_subscribe">
							<div class="col-md-12 form-group">
								<ul class="instruction_points">
									<li><?php esc_html_e('If Email Subscription is Enable: You have option "Wp Mail" to mail the subscribers and confirm its subscription through email.', 'RMMUC_TEXT_DOMAIN');?></li>
									<li style="list-style: none;">&nbsp;</li>
									<li><?php esc_html_e('If email subscription option is disable: Email confirmation process not required. Users/Visitors will be added at subscriber list as active subscriber.', 'RMMUC_TEXT_DOMAIN');?></li>
								</ul>				
							</div>			
						</div>
						<div class="form_select-option <?php if($wl_rmmuc_options['confirm_email_subscribe'] == 'on') echo "active"; ?>" id="confirm_email_subscribe">
							<div class="col-md-12 form-group">
								<label><?php esc_html_e('Select Email Carrier Type', 'RMMUC_TEXT_DOMAIN');?> </label>
								<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Select a email carrier type to send subscriber mails","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
								<div class="col-md-6">
									<?php $subscribe_select =$wl_rmmuc_options['subscribe_select'];?>
									<select name="subscribe_select" id="subscribe_select" class="form-control">
										<option value="wp_mail" <?php echo selected($subscribe_select, 'wp_mail' ); ?>><?php esc_html_e('WP Mail','RMMUC_TEXT_DOMAIN');?></option>
									</select>
									<ul class="instruction_points theme_msg_heading">
										<li><?php esc_html_e('WordPress Guideline: PHP Mailer Library Removed due to not supported by WordPress.org 4.7.2.', RMMUC_TEXT_DOMAIN ); ?></li>
										
									</ul>
								</div>
							</div>
							<div class="col-md-12 form-group subscribe-option <?php if ($subscribe_select=='wp_mail') echo "active";?>" id="wp_mail">
								<label><?php esc_html_e('WP Mail Subscriber','RMMUC_TEXT_DOMAIN');?></label><br/><br/>
								<div class="col-md-12">
									<div class="col-md-6">
										<label><?php esc_html_e('Mail ID','RMMUC_TEXT_DOMAIN');?></label>
										<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add Sender Email Id. By default User mail id has added","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
										<input type="text" class="form-control" name="wp_mail_email_id" id="wp_mail_email_id" value="<?php echo esc_attr($wl_rmmuc_options['wp_mail_email_id']); ?>" />
									</div>
								</div>
							</div>
						</div>
						<div class="restore">
							<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_subscriber_provider_option" name="weblizar_rmmuc_settings_save_subscriber_provider_option" />
							<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_reset('subscriber_provider_option','<?php echo esc_attr($maint_mode_action_nonce); ?>');">
							<input class="button button-primary left" type="button" value="<?php esc_attr_e('Save Options','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_save('subscriber_provider_option','<?php echo esc_attr($maint_mode_action_nonce); ?>')" >
						</div>
					</form>
				</div>
			
				<!-- Get the Subscriber Form database output setting -->
				<div id="subscriber-list" class="tab-pane fade in">					
					<form action="post" id="weblizar_rmmuc_subscribe_form">						
						<h1> <?php esc_html_e('Subscribers Options and List','RMMUC_TEXT_DOMAIN'); ?></h1>
						<div class="col-md-12 form-group">
							<div class="col-md-12">
								<label><?php esc_html_e('Auto Email sent to Subscribed Active Users after site Lunched','RMMUC_TEXT_DOMAIN');?></label><br/>
								<div class="info">
									<input data-toggle="toggle" data-offstyle="off" type="checkbox" <?php if($wl_rmmuc_options['auto_sentto_activeusers'] == 'on') echo "checked='unchecked'"; ?> id="auto_sentto_activeusers" name="auto_sentto_activeusers" >
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enable auto email option to subscribed active users after site lunched.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a> </label>
								</div>
							</div>
						</div>		
						<div class="col-md-12 form-group">
						<div class="col-md-6">
							<label><?php esc_html_e('Manual E-Mail To Subscribers','RMMUC_TEXT_DOMAIN');?></label>
							<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("This section used for mail to subscriber user","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
							<?php $sub_mail_option =$wl_rmmuc_options['subscriber_users_mail_option'];?>
							<br/>
						<span><?php esc_html_e('Select options','RMMUC_TEXT_DOMAIN'); ?></span>
						<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Below selection option have some types of user list (Active users , Pending users, Already mailed users)","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a> </label>
						<br/>
						<div class="col-md-12 no-pad" id="weblizar_rmmuc_layout_switch">
							<select id="subscriber_users_mail_option" name="subscriber_users_mail_option" class="form-control">
								<option value="all_users" <?php echo selected($sub_mail_option, 'all_users' ); ?> ><?php esc_html_e('All Users','RMMUC_TEXT_DOMAIN'); ?></option>
								<option value="selected_users" <?php echo selected($sub_mail_option, 'selected_users' ); ?> ><?php esc_html_e('Selected Users','RMMUC_TEXT_DOMAIN'); ?></option>
								<option value="pending_users" <?php echo selected($sub_mail_option, 'pending_users' ); ?> ><?php esc_html_e('Pending Users','RMMUC_TEXT_DOMAIN'); ?></option>
								<option value="active_users" <?php echo selected($sub_mail_option, 'active_users' ); ?> ><?php esc_html_e('Active Users','RMMUC_TEXT_DOMAIN'); ?></option>
								<option value="already_mailed_users" <?php echo selected($sub_mail_option, 'already_mailed_users' ); ?> ><?php esc_html_e('Mail Received Users','RMMUC_TEXT_DOMAIN'); ?></option>
							</select>
						</div>
						<span><?php esc_html_e('Subject','RMMUC_TEXT_DOMAIN');?></span>
						<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add a Subject for sending mail.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
						<input  class="form-control" type="text" name="subscriber_mail_subject" id="subscriber_mail_subject"  value="<?php echo esc_attr($wl_rmmuc_options['subscriber_mail_subject']); ?>">
						<span><?php esc_html_e('Message','RMMUC_TEXT_DOMAIN');?></span>
						<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add a Message to send subscriber users","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
						<textarea class="form-control" rows="8" cols="8" id="subscriber_mail_message" name="subscriber_mail_message" placeholder="<?php esc_attr_e('Add a Message to send subscriber Users','RMMUC_TEXT_DOMAIN');?>"><?php if($wl_rmmuc_options['subscriber_mail_message']!='') { echo esc_html($wl_rmmuc_options['subscriber_mail_message']); } ?></textarea>
						<!--<button name="submit_subscriber" class="subscriber_submit btn" type="submit"><?php// esc_attr_e('Send','RMMUC_TEXT_DOMAIN');?></button> -->
						<input type="hidden" value="1" id="weblizar_rmmuc_submit_subscriber" name="weblizar_rmmuc_submit_subscriber" />
						<input class="subscriber_submit btn" id="submit_subscriber" name="submit_subscriber" type="button" value="<?php esc_attr_e('Send','RMMUC_TEXT_DOMAIN');?>" >
						</div>
						</div> 
						<div class="col-md-12 form-group">
							<div class="subscribers-settings-wrap settings-content" >
								<h2><?php esc_html_e('Manage Subscriptions','RMMUC_TEXT_DOMAIN');?></h2>
								<div class="row o_buttons m-0">
									<div class="col-md-12 form-group">
										<strong><?php esc_html_e('Export List as CSV','RMMUC_TEXT_DOMAIN');?></strong>
                                        <div class="row m-0">
                                        	<div class="col-sm-12">

										<!--
										<a class="button button1" href="<?php //echo plugins_url( 'export-all-csv.php', __FILE__ ); ?>"><?php //_e('All Subscriber','RMMUC_TEXT_DOMAIN');?></a>
										<a class="button button2" href="<?php //echo plugins_url( 'export-subscribed-csv.php', __FILE__ ); ?>"><?php //_e('Active Subscriber','RMMUC_TEXT_DOMAIN');?></a>
										<a class="button button3" href="<?php //echo plugins_url( 'export-pending-csv.php', __FILE__ ); ?>"><?php //_e('Pending Subscriber','RMMUC_TEXT_DOMAIN');?></a>
										-->
										<span class="button" onclick="return download_list('subscribers', '<?php echo esc_attr($maint_mode_action_nonce); ?>', '<?php echo date("d-m-Y-H-i-s"); ?>');">All Subscribers</span>
										<span class="button" onclick="return download_list('active', '<?php echo esc_attr($maint_mode_action_nonce); ?>', '<?php echo date("d-m-Y-H-i-s"); ?>');">Active Subscribers</span>
										<span class="button" onclick="return download_list('pending', '<?php echo esc_attr($maint_mode_action_nonce); ?>', '<?php echo date("d-m-Y-H-i-s"); ?>');">Pending Subscribers</span>
										<?php
										$upload_dir_all = wp_upload_dir();
										$upload_dir_url = $upload_dir_all['baseurl']; 
										?>
										<script>
										function download_list(list_type, security, file_date_time){
											var rmmuc_data_string = "list_type=" + list_type + "&security=" + security + "&file_date_time=" + file_date_time;
											var weblizar_settings_download_success = ".download-msg";
											var weblizar_loding = ".msg-overlay";
											var full_file_name = "all-" + list_type + "-list-" + file_date_time + ".csv";
											var full_file_name_url = "<?php echo esc_url($upload_dir_url); ?>/" + full_file_name;
											//alert(full_file_name_url);
											jQuery(weblizar_loding).show();	
											jQuery.ajax({
												url: '?page=rmmuc-weblizar',
												type:'post',
												data : rmmuc_data_string,
												success : function(data){
													jQuery(weblizar_settings_download_success).show();
													jQuery(weblizar_settings_download_success).fadeOut(3000);
													jQuery(weblizar_loding).fadeOut(4000);													
													window.open(full_file_name_url, '_blank');
												}
											});											
										}
										</script>
										</div>
										</div>
									</div>
									<div class="col-md-12 form-group">
										<?php 
										global $wpdb;
										$table_name = $table_name = $wpdb->prefix . "rmmuc_subscribers";
										$user_sets_all = $wpdb->get_results("SELECT * FROM $table_name");
									
										if ($user_sets = $user_sets_all )
										if (count($user_sets) > 0) { ?>
										<input class="button button5 red left" name="remove_subs" type="button" value="<?php esc_attr_e('Remove Selected Subscriber','RMMUC_TEXT_DOMAIN');?>" id="remove-sub">
										<input class="button red button4 right" type="button" name="remove-all-subs" value="<?php esc_attr_e('Removed All Users','RMMUC_TEXT_DOMAIN');?>" id="remove-all-subs">
										<?php } ?>
									</div>
									<div class="modal fade" id="appearance_removed_option" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h2 class="modal-title"><?php esc_html_e('Data Delete SuccessFully','RMMUC_TEXT_DOMAIN');?></h2>
												</div>
												<div class="modal-body">
													<p><?php esc_html_e('Your Selected Data Removed SuccessFully','RMMUC_TEXT_DOMAIN');?></p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal"><?php esc_html_e('Close','RMMUC_TEXT_DOMAIN');?></button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
								global $wpdb;
								$table_name = $table_name = $wpdb->prefix . "rmmuc_subscribers";
								$user_sets_unsubscribe = $wpdb->get_results("SELECT * FROM $table_name WHERE flag = '0' ");
								$user_sets_subscribe = $wpdb->get_results("SELECT * FROM $table_name WHERE flag = '1' ");
								$user_sets_all = $wpdb->get_results("SELECT * FROM $table_name");
								?>
								<table class="wp-list-table widefat fixed posts" id="dataTables-example" data-wp-lists="list:post">
									<thead>
										<tr>
											<th scope="col" id="sub_cbx" class="manage-column column-title sortable asc" style=""></th>
											<th scope="col" id="sub_cbx" class="manage-column column-title sortable asc" style="">
												<span><?php esc_html_e('First Name', 'RMMUC_TEXT_DOMAIN'); ?></span>
											</th>
											<th scope="col" id="sub_cbx" class="manage-column column-title sortable asc" style="">
												<span><?php esc_html_e('Last Name', 'RMMUC_TEXT_DOMAIN'); ?></span>
											</th>
											<th scope="col" id="sub_email" class="manage-column column-title sortable asc" style="">
												<span><?php esc_html_e('Email', 'RMMUC_TEXT_DOMAIN'); ?></span>
											</th>
											<th scope="col" id="sub_date" class="manage-column column-shortcode" style="">
												<span><?php esc_html_e('Date', 'RMMUC_TEXT_DOMAIN'); ?></span>
											</th>
											<th scope="col" id="act_code" class="manage-column column-shortcode" style="">
												<span><?php esc_html_e('Subscription Status', 'RMMUC_TEXT_DOMAIN'); ?></span>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										if ($user_sets = $user_sets_all )
											if (count($user_sets) > 0) {
												foreach ($user_sets as $user_set) { ?>
													<tr style="background-color: #f9f6f6;" class="all_users">
														<td class="check-column" ><?php echo '<input type="checkbox" name="rem[]" class="select_subs" value="'.esc_js(esc_html($user_set->id)).'">'; ?></td>
														<td class="shortcode column-shortcode"><?php echo esc_html($user_set->f_name); ?></td>
														<td class="shortcode column-shortcode"><?php echo esc_html($user_set->l_name); ?></td>
														<td class="shortcode column-shortcode"><?php echo esc_html($user_set->email); ?></td>
														<td class="shortcode column-shortcode"><?php echo esc_html($user_set->date); ?></td>
														<td class="shortcode column-shortcode"><?php if($user_set->flag == '1') {echo 'Active';}elseif($user_set->flag == '2'){echo 'Mail Send';}else{echo 'Pending';}?></td>
													</tr>
													<?php 
												}
											} else { ?>
													<tr>
														<td colspan="2"><div class="edmm-noresult"><?php esc_html_e('No Subscribers Found.','RMMUC_TEXT_DOMAIN');?></div></td>
													</tr>
													<?php   
											} ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="restore">
							<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_subscribe_form" name="weblizar_rmmuc_settings_save_subscribe_form" />
							<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_reset('subscribe_form','<?php echo esc_attr($maint_mode_action_nonce); ?>');">
							<input class="button button-primary left" type="button" value="<?php esc_attr_e('Save Options','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_save('subscribe_form','<?php echo esc_attr($maint_mode_action_nonce); ?>')" >
						</div>
					</form>
				</div>
			</div>
		</div>		
		</div>
	</div>
	
	<!-- Counter Clock and progress Bar Setting -->
	<div class="tab-pane col-md-12" id="counter-clock">
		<div class="row">
		<div class="col-md-12 option">
			<h1><?php esc_html_e('Counter Clock','RMMUC_TEXT_DOMAIN');?></h1>
			<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#counter-settings"><?php esc_html_e('Settings','RMMUC_TEXT_DOMAIN');?></a></li>
			</ul>
			<div class="tab-content">
				<div id="counter-settings" class="tab-pane fade in active"> <!-- Counter Clock and Progress Bar General Settings -->
					<form action="post" id="weblizar_rmmuc_counter_clock_option">
						<h1> <?php esc_html_e('Counter Clock Timer Settings','RMMUC_TEXT_DOMAIN'); ?></h1>
						<div class="counter-option active" id="counter_clock">
							<div class="col-md-12 form-group">
								<div class="col-md-12">
									<div class="row">
										<label><?php esc_html_e('Icon','RMMUC_TEXT_DOMAIN');?></label>
										<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enter Relevant FontAwesome Icon Here","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
										<br/>
										<div class="col-md-12">
											<input  class="form-control" type="text" name="counter_title_icon" id="counter_title_icon" value="<?php echo esc_attr($wl_rmmuc_options['counter_title_icon']); ?>">
										</div>
									</div>
									<div class="row">
										<label><?php esc_html_e('Title','RMMUC_TEXT_DOMAIN');?></label>
										<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enter Counter Clock Title Here","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
										<div class="col-md-12">
											<input  class="form-control" type="text" name="counter_title" id="counter_title" value="<?php echo esc_html($wl_rmmuc_options['counter_title']); ?>">
										</div>
									</div>
									<div class="row">
										<label><?php esc_html_e('Description','RMMUC_TEXT_DOMAIN');?></label>
										<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enter Counter Clock Message Here","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
										<div class="col-md-12">
											<input  class="form-control" type="text" name="counter_msg" id="counter_msg" value="<?php echo esc_html($wl_rmmuc_options['counter_msg']); ?>">
										</div>
									</div>
									<div class="row">
										<label id="maintenance_time-label"><?php esc_html_e('Time To Live','RMMUC_TEXT_DOMAIN');?></label>
										<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Add Live time here.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
										<div class="col-md-12">
											<input  class="form-control" type="text" name="maintenance_date" id="maintenance_date" value="<?php if($wl_rmmuc_options['maintenance_date']!='') { echo esc_attr($wl_rmmuc_options['maintenance_date']); } ?>">
											<label><?php esc_html_e('When does your site launch? Server time is :','RMMUC_TEXT_DOMAIN');?> <?php echo '<em>' . esc_html( current_time( get_option( 'date_format' ) ) . ' ' . esc_html( get_option( 'time_format' ) ) ) . '</em> <a href="' . esc_url( admin_url( 'options-general.php' ) ) . '" target="_blank">(' . esc_html__( 'Edit', 'RMMUC_TEXT_DOMAIN' );'</a>';?>
											</label>
										</div>
										<script>
										jQuery('#maintenance_date').datetimepicker();
										</script>
									</div>
								</div>
							</div>
							<div class="col-md-12 form-group">
							<div class="col-md-6">
								<label><?php esc_html_e('Auto site Launched','RMMUC_TEXT_DOMAIN');?></label><br/>
								<div class="info">
									<input data-toggle="toggle" data-offstyle="off" type="checkbox" <?php if($wl_rmmuc_options['disable_the_plugin'] == 'on') echo "checked='unchecked'"; ?> id="disable_the_plugin" name="disable_the_plugin" >
									<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enable and disable option to auto site launched and diactivate the coming soon page.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a> </label>
								</div>
							</div>
						</div>	
						</div>
						<div class="restore">
							<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_counter_clock_option" name="weblizar_rmmuc_settings_save_counter_clock_option" />
							<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_reset('counter_clock_option','<?php echo esc_attr($maint_mode_action_nonce); ?>');">
							<input class="button button-primary left" type="button" value="<?php esc_attr_e('Save Options','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_save('counter_clock_option','<?php echo esc_attr($maint_mode_action_nonce); ?>')" >
						</div>
					</form>
				</div>
			</div>
		</div>	
		</div>
	</div>
	
	<!-- Footer Section Setting -->
	<div class="tab-pane col-md-12" id="footer">
		<div class="row">
		<div class="col-md-12 option">
			<h1><?php esc_html_e('Footer Options','RMMUC_TEXT_DOMAIN');?></h1>
			<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#footer-setting"><?php esc_html_e('Footer Options','RMMUC_TEXT_DOMAIN');?></a></li>
			</ul>
			<div class="tab-content">
				<div id="footer-setting" class="tab-pane fade in active"> <!--Footer Section General Setting-->
					<form action="post" id="weblizar_rmmuc_footer_option">
						<h1> <?php esc_html_e('Footer Settings','RMMUC_TEXT_DOMAIN'); ?></h1>
						<div class="col-md-12 form-group">
						<label><?php esc_html_e('Footer Copyright Text','RMMUC_TEXT_DOMAIN');?></label>
						<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enter Footer Copyright Text Here","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
						<div class="col-md-12">
							<input  class="form-control" type="text" name="footer_copyright_text" id="footer_copyright_text"  value="<?php echo esc_attr($wl_rmmuc_options['footer_copyright_text']); ?>" >
						</div>
						</div>
						<div class="col-md-12 form-group">
							<label><?php esc_html_e('Footer Link','RMMUC_TEXT_DOMAIN');?></label>
							<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enter Footer Copyright Link Here","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
							<br/>
							<div class="col-md-12">
								<input  class="form-control" type="text" name="footer_link" id="footer_link"  value="<?php echo esc_attr($wl_rmmuc_options['footer_link']); ?>" >
							</div>
						</div>
						<div class="col-md-12 form-group">
							<label><?php esc_html_e('Footer Link Text','RMMUC_TEXT_DOMAIN');?></label>
							<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Enter Footer Link Text Here","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label><br/>
							<div class="col-md-12">
								<input  class="form-control" type="text" name="footer_link_text" id="footer_link_text"  value="<?php echo esc_attr($wl_rmmuc_options['footer_link_text']); ?>" >
							</div>
						</div>
						<div class="restore">
							<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_footer_option" name="weblizar_rmmuc_settings_save_footer_option" />
							<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_reset('footer_option','<?php echo esc_attr($maint_mode_action_nonce); ?>');">
							<input class="button button-primary left" type="button" value="<?php esc_attr_e('Save Options','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_save('footer_option','<?php echo esc_attr($maint_mode_action_nonce); ?>')" >
						</div>
					</form>
				</div>
			</div>
		</div>		
		</div>
	</div>
	
	<!-- Advance options Setting -->
	<div class="tab-pane col-md-12" id="advance">
		<div class="row">
		<div class="col-md-12 option">
			<h1><?php esc_html_e('Advance Options','RMMUC_TEXT_DOMAIN');?></h1>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#advance-settings"><?php esc_html_e('Advance Options Settings','RMMUC_TEXT_DOMAIN');?></a></li>
			</ul>
			<div class="tab-content">
				<div id="advance-settings" class="tab-pane fade in active">	 <!-- Advance options General Setting -->
					<form action="post" id="weblizar_rmmuc_advance_settings_option">
						<h1><?php esc_html_e('Advance Options Settings','RMMUC_TEXT_DOMAIN');?></h1>								
						<div class="col-md-12 form-group">
							<label><?php esc_html_e('Custom CSS Editor','RMMUC_TEXT_DOMAIN');?> <a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("This is a powerful feature provided here. No need to use custom css plugin, just paste your css code and see the magic.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
							<textarea class="form-control" rows="12" cols="8" id="custom_css" name="custom_css" placeholder="<?php esc_attr_e("Please type css directly. Don't add <style> tag after before CSS.","RMMUC_TEXT_DOMAIN");?>"><?php if($wl_rmmuc_options['custom_css']!='') { echo esc_html($wl_rmmuc_options['custom_css']); } ?></textarea>
						</div>
						<div class="col-md-12 form-group">
							<label><?php esc_html_e('Google Analytic Tracking Code','RMMUC_TEXT_DOMAIN');?> <a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Paste your Google Analytics tracking code here. This will be added into themes footer. Copy only scripting code i.e no need to use script tag ","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a></label>
							<textarea class="form-control" rows="12" cols="8" id="google_analytics" name="google_analytics" placeholder="<?php esc_attr_e("Please directly copy and paste your Google Analytics script code here. Don't add <script> tag after before code.","RMMUC_TEXT_DOMAIN");?>"><?php if($wl_rmmuc_options['google_analytics']!='') { echo esc_html($wl_rmmuc_options['google_analytics']); } ?></textarea>
						</div>
						<div class="col-md-12 form-group">
							<label><?php esc_html_e('All Settings Restored','RMMUC_TEXT_DOMAIN'); ?></label>
							<label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="<?php esc_attr_e("Use This button only when you want resotred all section default data.","RMMUC_TEXT_DOMAIN");?>"><i class="fa fa-info-circle tt-icon"></i></a> </label>
								<ul class="instruction_points">
									<li><?php esc_html_e('This option will deleted the all saved settings and Restored as default.','RMMUC_TEXT_DOMAIN'); ?></li>
								</ul>
							<div class="restored">	
								<input type="hidden" value="1" id="weblizar_rmmuc_settings_all_restored_settings_option" name="weblizar_rmmuc_settings_all_restored_settings_option" />				
								<input class="button red" type="button" name="weblizar_rmmuc_option_data_restored" value="<?php esc_attr_e('Restored All Default Settings','RMMUC_TEXT_DOMAIN');?>" id="weblizar_rmmuc_option_data_restored">			
							</div>		
						</div>		
						<div class="restore">		  
							<input type="hidden" value="1" id="weblizar_rmmuc_settings_save_advance_settings_option" name="weblizar_rmmuc_settings_save_advance_settings_option" />
							<input class="button left" type="button" name="reset" value="<?php esc_attr_e('Restore Defaults','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_reset('advance_settings_option','<?php echo esc_attr($maint_mode_action_nonce); ?>');">
							<input class="button button-primary left" type="button" value="<?php esc_attr_e('Save Options','RMMUC_TEXT_DOMAIN');?>" onclick="weblizar_rmmuc_option_data_save('advance_settings_option','<?php echo esc_attr($maint_mode_action_nonce); ?>')" >
						</div> 
					</form>
				</div>
			</div>
		</div>		
		</div>
	</div>

	<!-- Offers tab -->
	<div class="tab-pane col-md-12" id="offers_main">
		<div class="col-md-12 option">
			<h1><?php esc_html_e('Our Offers','RCSM_TEXT_DOMAIN');?></h1>
			<div class="tab-content">
				<div id="offers_main" class="tab-pane fade in active">	 <!-- Offers tab -->
					<div class="col-md-12 form-group">
					<?php 
						include('offers.php');?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Get Pro options Setting -->
	<div class="tab-pane col-md-12" id="get_pro">
		<div class="col-md-12 option">
			<h1><?php esc_html_e('Get Premium Version','RMMUC_TEXT_DOMAIN');?></h1>
			<div class="tab-content">
				<div id="get_pro-settings" class="tab-pane fade in active">	 <!-- Advance options General Setting -->
					<div class="col-md-12 form-group">
						<div class="row weblizar-theme-feature-detail">
							<div class="col-md-4 no-pad">
								<ul class="weblizar-pricing compaire">
									<li class="pricing-heading"><?php esc_html_e('Feature Set','RMMUC_TEXT_DOMAIN'); ?><span> &nbsp;</span></li>
									<li class="table-price-tag"><span data-before="" class="price"><?php esc_html_e('Feature Set','RMMUC_TEXT_DOMAIN'); ?><?php esc_html_e('Price','RMMUC_TEXT_DOMAIN'); ?></span>
									</li>
									<li><?php esc_html_e('Email Newsletter API','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Multiple Pro Template','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Multiple Modes','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('News Letter Subscription','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Download Subscriber List','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Automatic Website Launch','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Auto &amp; Manual Notification','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Major Browser Compatible','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('SEO Friendly','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Google Analytic Tracking','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Access Control Settings','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Drag &amp; Drop Layout Manager','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Multi Site and Multilingual','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Social Media Promotion','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Custom CSS','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Custom HTML Editor','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Font Family','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Custom Color Schemes','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Live Preview','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Unlimited Color Schemes','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Redirect Mode','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('IP Block','RMMUC_TEXT_DOMAIN'); ?></li>
									
									<li><?php esc_html_e('Background Slide Show','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Background Video','RMMUC_TEXT_DOMAIN'); ?></li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="weblizar-pricing">
									<li class="pricing-heading"><?php esc_html_e('Free Version','RMMUC_TEXT_DOMAIN'); ?> <span> &nbsp;</span></li>
									<li class="table-price-tag"><span data-before="" class="price"><?php esc_html_e('$0','RMMUC_TEXT_DOMAIN'); ?></span>
										<!--<div class="button-wrap">
											<a href="https://wordpress.org/plugins/responsive-coming-soon-page/" class="btn"><strong>Sign Up Today!</strong></a>
										</div>-->
									</li>
									<li><?php esc_html_e('WPMail','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('1','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><i class="icon fas fa-check success"></i></li>
									<li><i class="icon fas fa-check success"></i></li>
									<li><i class="icon fas fa-check success"></i></li>
									<li><i class="icon fas fa-check success"></i></li>
									<li><i class="icon fas fa-check success"></i></li>
									<li><i class="icon fas fa-check success"></i></li>
									<li><i class="icon fas fa-check success"></i></li>
									<li><?php esc_html_e('Few','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Few','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><i class=" icon fas fa-check success"></i></li>
									<li><?php esc_html_e('Few','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><i class=" icon fas fa-check success"></i></li>
									<li><i class=" icon fas fa-times danger"></i></li>
									<li><?php esc_html_e('General Fonts','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Few','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><i class=" icon fas fa-check success"></i></li>
									<li><i class=" icon fas fa-times danger"></i></li>
									<li><i class=" icon fas fa-times danger"></i></li>
									<li><i class=" icon fas fa-times danger"></i></li>
									<li><i class=" icon fas fa-times danger"></i></li>
									<li><i class="icon fas fa-times danger"></i></li>
									<li><i class="icon fas fa-times danger"></i></li>
								</ul>
							</div>
							<div class="col-md-4 no-pad">
								<ul class="weblizar-pricing extended-table">
									<li class="pricing-heading"><?php esc_html_e('Premium Version','RMMUC_TEXT_DOMAIN'); ?>  <span><?php esc_html_e('(For Single Site)','RMMUC_TEXT_DOMAIN'); ?> &nbsp;</span></li>
									<li class="table-price-tag"><span data-before="$24" class="price"><?php esc_html_e('$12','RMMUC_TEXT_DOMAIN'); ?></span>
										<!--<div class="button-wrap">
											<a href="https://weblizar.com/amember/signup/coming-soon-page-maintenance-mode-pro" class="btn">
											<strong>Sign Up Today!</strong></a>
										</div>-->
									</li>
									<li><?php esc_html_e('7+','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('9+','RMMUC_TEXT_DOMAIN'); ?>	</li>
									<li><?php esc_html_e('5+','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><?php esc_html_e('500+ Google Fonts','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><?php esc_html_e('Unlimited','RMMUC_TEXT_DOMAIN'); ?></li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>									
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li><i class="icon fas fa-check success"></i>
									</li>
									<li class="price-info">
										<a class="btn-cart" href="https://weblizar.com/amember/signup/coming-soon-page-maintenance-mode-pro"><i class="fa fa-shopping-cart icon"></i>
										<?php esc_html_e('Buy Now','RMMUC_TEXT_DOMAIN'); ?> </a>
										<!--<a class="btn-view" href=""><i class="fas fa-eye icon"></i> View Demo</a>-->
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>