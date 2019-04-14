<?php 

	ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    $filename_template = "template.conf";
    $fd_template = fopen($filename_template,"r");
    $textFileContents_template = fread($fd_template,filesize($filename_template));
    fclose($fd_template);
    $atas = preg_replace("/[\n\r]/","",explode("\n", $textFileContents_template)[0]);
    $bawah = preg_replace("/[\n\r]/","",explode("\n", $textFileContents_template)[1]);

    function repeatProcess(){

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

		sleep(20);
		repeatProcess();
	}

	// $filename = "ybts.conf";
	// $fd = fopen($filename,"r");
	// $textFileContents = fread($fd,filesize($filename));
	// fclose($fd);
	// $valueMCI = substr($textFileContents, strpos($textFileContents, "Identity.MNC=")+13, 2);
	// $valueRadioBand = substr($textFileContents, strpos($textFileContents, "Radio.Band=")+11, 3);
	// $valueRadioC0 = substr($textFileContents, strpos($textFileContents, "Radio.C0=")+9, 3);
	// $valueRadioC0 = preg_replace('/\s+/','',$valueRadioC0);

 //    $tempResult= $textFileContents;

	// $resultToReplace = "Identity.MNC=".$valueMCI;
	// $resultForReplace = "Identity.MNC=".$_POST['inputMNC'];
	// echo "<script>console.log('".$resultToReplace."');</script>";
	// echo "<script>console.log('".$resultForReplace."');</script>";

	// $radic0_before = "Radio.C0=".$valueRadioC0;
	// $radic0_after = "Radio.C0=".explode("-", $_POST['inputC0'])[1];
	// echo "<script>console.log('".$radioband_after."+".$radic0_after."');</script>";

	// $before = array($resultToReplace, $radic0_before);
	// $after = array($resultForReplace, $radic0_after);

	// $finalResult = str_replace($before,$after,$tempResult);

	// //$fd=fopen("/usr/local/etc/yate/ybts.conf","w");
	// $fd=fopen("ybts.conf","w");
	// fwrite($fd, $finalResult);
	// //echo "<meta http-equiv='refresh' content='0'>";
	// fclose($fd);
?>