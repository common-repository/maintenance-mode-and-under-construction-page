<?php
if ( ! defined( 'ABSPATH' ) ) {	exit;}
/**
 * Export to CSV for subscriber list.
 */
require_once '../../../../wp-load.php';
header('Content-Type: text/csv');
header('Content-Disposition: inline; filename="active-subscriber-list-current_'.date('YmdHis').'.csv"');  
$results = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix . "rmmuc_subscribers WHERE flag = '1'");
echo "Name, Email, Date, Subscription Status, Activate-code\r\n";
if (count($results))  {
	foreach($results as $row) {
		if($row->flag == '1') {
			$flags='Subscribed';
		} else {
			$flags='Pending';
		}
		echo esc_html($row->f_name ." ".$row->l_name .", ".$row->email .", ".$row->date .", ".$flags.",".$row->act_code ."\r\n");
	}
}