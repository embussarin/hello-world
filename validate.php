<?php
header('P3P: CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');
header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	if(function_exists('curl_init'))
	{
		$curl = curl_init('http://27.254.38.7/~jellopy/system/license.php?domain='.$_SERVER['SERVER_NAME'].'&license='.require_once('./key.php'));
		curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		curl_setopt($curl, CURLOPT_HEADER, FALSE);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
		$curl_content = curl_exec($curl);
		var_dump(htmlspecialchars($curl_content));
		curl_close($curl);
	}
	else
	{
		$curl_content = file_get_contents('http://27.254.38.7/~jellopy/system/license.php?domain='.$_SERVER['SERVER_NAME'].'&license='.require_once('./key.php'));
		var_dump(htmlspecialchars($curl_content));
	}
	if(strpos($curl_content,'validatecomplete'))
	{
		echo 'Correct license';
	}
	else
	{
		echo 'Invalid license';
	}
?>
</body>
</html>