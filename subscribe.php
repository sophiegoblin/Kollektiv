<?php

require_once 'inc/MCAPI.class.php';
$api = new MCAPI('0fa41b196073a8f3c3b29b128c52a1b5-us7');
$merge_vars = array();

$kollektiv_school_list = 'f179ab75d4';
$kollektiv_web_list = '746455a945';

if(isset($_POST['kollektivSchool']) && $_POST['kollektivSchool'] == 'Yes') {
	$mc_list = $kollektiv_school_list;
} else {
	$mc_list = $kollektiv_web_list;
}

// Submit subscriber data to MailChimp
// For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
$retval = $api->listSubscribe($mc_list, $_POST["email"], $merge_vars, 'html', true, true );
	
if ($api->errorCode){
	echo "<h4>". $api->errorCode . "</h4>";
} else {

	if ($mc_list === $kollektiv_school_list){ ?>

		<p>Thank you, School mailing list.</p>

	<? } elseif ($mc_list === $kollektiv_web_list){ ?>

		<h4>Thank you Kollektiv mailing list.</h4>

	<? } else { ?>

		<h4>Thank you, you have been added to our mailing list.</h4>
	<? }
}

?>
