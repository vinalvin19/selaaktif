<?php 

	ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    $filename_template = "template.conf";
    $fd_template = fopen($filename_template,"r");
    $textFileContents_template = fread($fd_template,filesize($filename_template));
    fclose($fd_template);
    $atas = preg_replace("/[\n\r]/","",explode("\n", $textFileContents_template)[0]);
    $tengah = preg_replace("/[\n\r]/","",explode("\n", $textFileContents_template)[1]);
    $bawah = preg_replace("/[\n\r]/","",explode("\n", $textFileContents_template)[2]);
    
    $filename_interval = "interval.conf";
    $fd_interval = fopen($filename_interval,"r");
    $textFileContents_interval = fread($fd_interval,filesize($filename_interval));
    fclose($fd_interval);
    $interval_read = preg_replace("/[\n\r]/","",explode("\n", $textFileContents_interval)[0]);
    
	repeatProcess($atas, $tengah, $bawah, $interval_read);
	
    function refresh(){

		$connectTelnet = fsockopen("localhost", 5038, $errno, $errstr, 30);
		if(!$connectTelnet){
			echo "salaahh";
		} else {
			$out = fgets($connectTelnet, 1024);				
			$sendTemplate = "reload";
			usleep(500000);
			fputs($connectTelnet, $sendTemplate."\r\n");
			$out = fgets($connectTelnet, 1024);
		}

		fclose($connectTelnet);
	}
	
	function repeatProcess($atas, $tengah, $bawah, $interval_read) {
		$operator = explode('|', $atas);
		$mnc = explode('|', $tengah);
		$arfcn = explode('|', $bawah);
		$i = 0;
		
		while(true) {
			
			changeConf($operator[$i], $mnc[$i], $arfcn[$i]);
			$i == count($operator) - 2 ? $i=0 : $i++;
				
			sleep($interval_read);
			refresh();	
		}
	}
	
	function changeConf($operator, $mnc, $arfcn){
		echo ($operator." ".$mnc." ".$arfcn.PHP_EOL);
		
		$filename = "/usr/local/etc/yate/ybts.conf";
		//$filename = "ybts.conf";
		$fd = fopen($filename,"r");
		$textFileContents = fread($fd,filesize($filename));
		fclose($fd);
		
		$valueMCI = substr($textFileContents, strpos($textFileContents, "Identity.MNC=")+13, 2);
		$valueRadioBand = substr($textFileContents, strpos($textFileContents, "Radio.Band=")+11, 3);
		$valueRadioC0 = substr($textFileContents, strpos($textFileContents, "Radio.C0=")+9, 3);
		$valueRadioC0 = preg_replace('/\s+/','',$valueRadioC0);

		$tempResult= $textFileContents;

		$resultToReplace = "Identity.MNC=".$valueMCI;
		$resultForReplace = "Identity.MNC=".$mnc;
		//echo "<script>console.log('".$resultToReplace."');</script>";
		//echo "<script>console.log('".$resultForReplace."');</script>";

		$radic0_before = "Radio.C0=".$valueRadioC0;
		$radic0_after = "Radio.C0=".$arfcn;
		//echo "<script>console.log('".$radioband_after."+".$radic0_after."');</script>";

		$before = array($resultToReplace, $radic0_before);
		$after = array($resultForReplace, $radic0_after);
		$finalResult = str_replace($before,$after,$tempResult);

		$fd=fopen("/usr/local/etc/yate/ybts.conf","w");
		//$fd=fopen("ybts.conf","w");
		fwrite($fd, $finalResult);
		//echo "<meta http-equiv='refresh' content='0'>";
		fclose($fd);
	}
?>
