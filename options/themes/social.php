<!-- Social -->
<?php if ( ! defined( 'ABSPATH' ) ) {	exit;} ?>
<section class="col-md-12 c_social">	
	<ul class="social">			
		<?php for($i=1; $i<=$wl_rmmuc_options['total_Social_links']; $i++){
			if($wl_rmmuc_options['social_icon_'.$i]!=''){
		
			$social_class = $wl_rmmuc_options['social_icon_'.$i];
			//$social_class = str_replace("fa fa-","",$social_class);

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
		<li class="social_div social-<?php echo esc_attr($result); ?>"><a target="<?php if($wl_rmmuc_options['link_tab_'.$i]=='on') echo '_blank'; ?>" href="<?php echo esc_url($wl_rmmuc_options['social_link_'.$i]); ?>"><i class="<?php echo esc_attr($wl_rmmuc_options['social_icon_'.$i]); ?> icon"></i></a></li>
			<?php }
		} ?>
	</ul>	
</section>
<!-- Social -->

