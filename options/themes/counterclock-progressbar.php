<?php
if ( ! defined( 'ABSPATH' ) ) {	exit;}
if($wl_rmmuc_options['maintenance_date']!=''){  ?>
<script>
jQuery(document).ready(function(jQuery) {
	countdown('<?php echo esc_attr($wl_rmmuc_options['maintenance_date']); ?>', rmmuc_callback); /* Date format ('MM/DD/YYYY  HH:MM:SS TT'); */
	function rmmuc_callback(){
		//jQuery('.container-fluid.count').hide();
		//location.reload(true);		
	};
});

</script>
<?php } ?>
<div class="row count" id="timer">
	<div class="col-lg-12">
		<h2 class="section-title wow flipInX" data-sr="enter top"><?php echo esc_html($wl_rmmuc_options['counter_title']);?></h2>
		<p class="section-sub-heading"><?php echo esc_html($wl_rmmuc_options['counter_msg']);?> </p>	
		<?php  
		if($wl_rmmuc_options['maintenance_date']!=''){ ?>
		<div class="row countDown" data-sr="enter bottom">
			<div class="rotate wow rubberBand">
				<div class="days wow fadeInUp" id="days" data-sr="enter bottom over 1s and move 110px wait 0.3s">
					<?php esc_html_e('00','RMMUC_TEXT_DOMAIN'); ?> 
				</div>
			</div>    <!-- Remaining Days,id="days"-->
			<div class="rotate wow rubberBand">
				<div class="hours wow fadeInUp" id="hours" data-sr="enter bottom over 1s and move 110px wait 0.3s">
					<?php esc_html_e('00','RMMUC_TEXT_DOMAIN'); ?>
				</div>
			</div>  <!-- Remaining hours ,id="hours"-->
			<div class="rotate wow rubberBand">
				<div class="minutes wow fadeInUp" id="minutes" data-sr="enter bottom over 1s and move 110px wait 0.3s">
					<?php esc_html_e('00','RMMUC_TEXT_DOMAIN'); ?>
				</div>
			</div> <!-- Remaining minutes,id="minutes"-->
			<div class="rotate wow rubberBand">
				<div class="seconds wow fadeInUp" id="seconds" data-sr="enter bottom over 1s and move 110px wait 0.3s">
					<?php esc_html_e('00','RMMUC_TEXT_DOMAIN'); ?>
				</div>
			</div>  <!-- Remaining secounds,id="secounds"-->
		</div>
		<?php } ?> 
	</div>
</div>