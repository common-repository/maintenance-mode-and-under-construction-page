<!DOCTYPE html>
<html lang="en">
<?php if ( ! defined( 'ABSPATH' ) ) {	exit;} 
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options'); 
?>
<head>
  <title><?php wp_title('');?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="<?php echo esc_attr($wl_rmmuc_options['page_meta_keywords']); ?>">
  <meta name="description" content="<?php echo esc_attr($wl_rmmuc_options['page_meta_discription']); ?>">
 <?php if($wl_rmmuc_options['search_robots'] == 'on') { ?>
 <meta name="robots" content="<?php echo esc_attr($wl_rmmuc_options['rmmuc_robots_meta']);?>" /> 
<?php } ?>
  <link rel="shortcut icon" href="<?php echo esc_url($wl_rmmuc_options['upload_image_favicon']);?>" />
  <meta name="author" content=""> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Khand:300,400,500,700">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merienda:300,400,500,700">
	<link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ).'../css/bootstrap.min.css'; ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	<link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ).'../css/all.min.css'; ?>" />
	<link href="<?php echo plugin_dir_url( __FILE__ ).'../css/animate.css'?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo plugin_dir_url( __FILE__ ).'../css/animate.min.css'?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo plugin_dir_url( __FILE__ ).'../css/style.css'?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo plugin_dir_url( __FILE__ ).'../css/media-screen.css'?>" rel="stylesheet" type="text/css" />
	<script src="<?php echo plugin_dir_url( __FILE__ ).'../js/countdown.js'; ?>"></script>
	<script src="<?php echo plugin_dir_url( __FILE__ ).'../js/wow.min.js'?>"></script>
	<script src="<?php echo plugin_dir_url( __FILE__ ).'../js/bootstrap.min.js'; ?>"></script>  
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Rock+Salt|Neucha|Sans+Serif|Indie+Flower|Shadows+Into+Light|Dancing+Script|Kaushan+Script|Tangerine|Pinyon+Script|Great+Vibes|Bad+Script|Calligraffitti|Homemade+Apple|Allura|Megrim|Nothing+You+Could+Do|Fredericka+the+Great|Rochester|Arizonia|Astloch|Bilbo|Cedarville+Cursive|Clicker+Script|Dawning+of+a+New+Day|Ewert|Felipa|Give+You+Glory|Italianno|Jim+Nightshade|Kristi|La+Belle+Aurore|Meddon|Montez|Mr+Bedfort|Over+the+Rainbow|Princess+Sofia|Reenie+Beanie|Ruthie|Sacramento|Seaweed+Script|Stalemate|Trade+Winds|UnifrakturMaguntia|Waiting+for+the+Sunrise|Yesteryear|Zeyada|Warnes|Abril+Fatface|Advent+Pro|Aldrich|Alex+Brush|Amatic+SC|Antic+Slab|Candal">
	<?php if($wl_rmmuc_options['google_analytics']!='') { 
			echo '<script>'.$wl_rmmuc_options['google_analytics'].'</script>'; 
		} ?>
	<?php if($wl_rmmuc_options['custom_css']!=''){ 
			echo '<style>'.$wl_rmmuc_options['custom_css'].'</style>'; 
		} ?>
	<?php require_once( 'css/custom-css.php'); ?>
</head>
<body>
	<div id="wrapper">
		<?php 
		$template_bg_select = $wl_rmmuc_options['template_bg_select'];
		if($template_bg_select == 'Background_Color'){ ?>
			<div class="row background_color"> <?php page_data(); ?> </div>
			<?php } else if($template_bg_select == 'Custom_Background'){ ?>
				<div class="row custom_background-image"> <?php page_data(); ?> </div>
		<?php } ?>
		<?php function page_data(){
			$wl_rmmuc_options = get_option('weblizar_rmmuc_options'); ?>
		<div id="main_div_container" class="container">
			<div class="carousel-caption">
				<h4 class="logo_class">
				<?php $site_logo_value = $wl_rmmuc_options['site_logo'];
					if ($site_logo_value == 'logo_text'){ 
						echo esc_html($wl_rmmuc_options['logo_text_value']); 
					} else if ( $wl_rmmuc_options['upload_image_logo'] == null) {
						echo esc_html($wl_rmmuc_options['logo_text_value']);
					} else { ?>
					<img class="wow slideInUp" width="<?php echo esc_attr($wl_rmmuc_options['logo_width']);?>" height="<?php echo esc_attr($wl_rmmuc_options['logo_height']);?>" src="<?php echo esc_url($wl_rmmuc_options['upload_image_logo']); ?>">
				</h4> <?php } ?>							
			    <?php $layout_status = $wl_rmmuc_options['layout_status'];
				if ($layout_status == 'under_construction_switch') { ?>
					<h1 class="wow slideInUp"><?php echo esc_attr($wl_rmmuc_options['under-construction_title']);?></h1>
					<h4 class="wow zoomInUp"><?php echo esc_attr($wl_rmmuc_options['under-construction_sub_title']);?></h4>
					<h3 data-sr="enter top"> <?php echo esc_attr($wl_rmmuc_options['under-construction_message']);?></h3>
					<?php include 'counterclock-progressbar.php'; 
							$button_onoff = $wl_rmmuc_options['button_onoff'];
						if ($button_onoff == 'on')
							{ if($wl_rmmuc_options['button_text']) { ?>	
								<a class="btn wow bounceInUp" href="<?php echo esc_url($wl_rmmuc_options['button_text_link']);?>" data-sr="enter bottom over 1s and move 110px wait 0.3s"><?php echo esc_html($wl_rmmuc_options['button_text']);?></a>
								<?php  } 
							} 
					} else if ($layout_status == 'maintenance_switch'){ ?>
						<h1 class="wow slideInUp"><?php echo esc_html($wl_rmmuc_options['maintenance_title']);?></h1>
						<h2 class="wow zoomInUp"><?php echo esc_html($wl_rmmuc_options['maintenance_sub_title']);?></h2>
						<h4 data-sr="enter top"><?php echo esc_html($wl_rmmuc_options['maintenance_message']);?></h4>
						<?php include 'counterclock-progressbar.php';
							 $button_onoff = $wl_rmmuc_options['button_onoff'];
							if ($button_onoff == 'on'){
								if($wl_rmmuc_options['button_text']) { ?>	
								<a class="btn wow bounceInUp" href="<?php echo esc_url($wl_rmmuc_options['button_text_link']);?>" data-sr="enter bottom over 1s and move 110px wait 0.3s"><?php echo esc_html($wl_rmmuc_options['button_text']);?></a>
							<?php   }
							} 
					} ?>
			</div>
		</div>	
<?php } 
	$data = $wl_rmmuc_options['page_layout_swap'];
	if($data!='')
	{	foreach($data as $key=>$value)
		{	
		switch($value){	
			case 'Subscriber Form':
			include 'subscriber-from-settings.php';   
			include 'our-newsletter.php';
			break; 
			
			case 'Social': 	
			include 'social.php';
			break;
			}
		}
	} ?>
	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 footer_copy">
					<?php echo esc_html($wl_rmmuc_options['footer_copyright_text']);?> 
					<a href="<?php echo esc_url($wl_rmmuc_options['footer_link']); ?>"> 
						<?php echo esc_html($wl_rmmuc_options['footer_link_text']);?> 
					</a>
				</div>
				<div class="col-md-4 col-sm-4 footer_social">
					<ul class="social animated fadeInDownBig">
					<?php for($i=1; $i<=$wl_rmmuc_options['total_Social_links']; $i++){
							if($wl_rmmuc_options['social_icon_'.$i]!=''){
								$social_class = $wl_rmmuc_options['social_icon_'.$i];
								$facebook = "fab fa-facebook-f";
								$gp = "fab fa-google-plus-g";
								$twitter = "fab fa-twitter";
								$linkin = "fab fa-linkedin-in";
								$pint = "fab fa-pinterest-p";

								if($social_class==$facebook){
									$result = "facebook";
								}else if($social_class==$gp){
									$result = "google-plus";
								}
								else if($social_class==$twitter){
									$result = "twitter";
								}
								else if($social_class==$linkin){
									$result = "linkedin";
								}
								else if($social_class==$pint){
									$result = "pinterest";
								}
						?>
						<li class="team-social-<?php echo esc_attr($result); ?>"><a target="<?php if($wl_rmmuc_options['link_tab_'.$i]=='on') echo '_blank'; ?>" href="<?php echo esc_url($wl_rmmuc_options['social_link_'.$i]); ?>"><i class="<?php echo esc_attr($wl_rmmuc_options['social_icon_'.$i]); ?> icon"></i></a></li>
							<?php }
						} ?>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Fooetr -->
	<a href="#" class="back-to-top"><i class="fa fa-angle-left"><?php esc_html_e('Scroll Up','RMMUC_TEXT_DOMAIN'); ?></i></a>
</div>
<?php 
if($wl_rmmuc_options['link_admin']=='on') { 
	if (is_user_logged_in() ) {
		//get logined in user role
		global $current_user;
		wp_get_current_user();
		$LoggedInUserID = $current_user->ID;
		$UserData = get_userdata( $LoggedInUserID );
		//if user role not 'administrator' redirect him to message page
		if($UserData->roles[0] == 'administrator') {
			$admin_link_text = $wl_rmmuc_options['admin_link_text'];
			if($wl_rmmuc_options['admin_link_text']) {	?>
			<a class="btn left_side_link" target="blank" href="<?php echo get_admin_url(); ?>" data-sr="enter bottom over 1s and move 110px wait 0.3s"> <?php echo esc_html__($admin_link_text,'weblizar');?> </a>
			<?php   } 
		}
	}
}?>
<script>
	jQuery(window).scroll(function() {
		var amountScrolled = 300;
		if ( jQuery(window).scrollTop() > amountScrolled ) {
			jQuery('a.back-to-top').fadeIn('slow');
		} else {
			jQuery('a.back-to-top').fadeOut('slow');
		}
	});

	jQuery('a.back-to-top').click(function() {
		jQuery('html, body').animate({
			scrollTop: 100
		}, 700);
		return false;
	});		
	/* Animation */
	 new WOW().init();
	 
	 /* Video */
</script>
</body>
</html>