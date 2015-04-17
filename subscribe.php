<?php

require_once 'inc/MCAPI.class.php';
$api = new MCAPI('0fa41b196073a8f3c3b29b128c52a1b5-us7');
$merge_vars = array();

$kollektiv_school_list = 'f179ab75d4';
$kollektiv_web_list = '746455a945';

$isKollektivSchool = filter_var ($_POST['kollektivSchool'], FILTER_VALIDATE_BOOLEAN);
//THIS IS NOT COMING THROUGH FOR SOME REASON

if ($isKollektivSchool == true) {
	$mc_list = $kollektiv_school_list;
} else {
	$mc_list = $kollektiv_web_list;
}

// Submit subscriber data to MailChimp
// For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
$retval = $api->listSubscribe($mc_list, $_POST["email"], $merge_vars, 'html', true, true ); //change one of these to false to stop double opt in
	
if ($api->errorCode){
	echo "<h4>". //TODO: put error message here
	 $api->errorCode . "</h4>";
} else {

	if ($isKollektivSchool === true) { ?>

		<p>Thank you, School mailing list. <? echo $isKollektivSchool; ?></p>

	<? } else { ?>

		<p>Thank you Kollektiv mailing list. <? echo $isKollektivSchool; ?></p>



	<? }
}
?>
