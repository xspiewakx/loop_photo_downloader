<?php
	/* CONFIG */
	DEFINE("ITEM_FIRST", 1);
	DEFINE("ITEM_ALL", 320);
	DEFINE("TIME_LIMIT", 0);
	error_reporting(0);
	/* CONFIG */
	
	set_time_limit(TIME_LIMIT); 
	if (!is_writable('./')){ die('Error: directory is not writable'); }
	echo '*** START ***<br/>';
	for($i=ITEM_FIRST; $i <= ITEM_ALL; $i++){
		$string = $i;
		if($i<100) $string = '0'.$i;
		if($i<10) $string = '00'.$i;
		$target_file = '<remote>/DSC_'.$string.'.jpg';
		
		echo $i."/".ITEM_ALL.'<br/>';
		
		$file = file_get_contents($target_file);
		if($file) file_put_contents('DSC_'.$string.'.jpg', $file);
		else { echo 'Error: File '.$target_file.' - not found<br/>'; }
		
	}
	echo '*** STOP ***';
?>