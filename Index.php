<meta charset="UTF-8">
<?php

$seed = curl_file_get_contents("http://www.csdn.net", "Mozilla 5.0");

//$pat = '/<a(.*?)href="(.*?)"(.*?)>(.*?)<\/a>/i';
$pat = '/href="(.*?)"/i';

preg_match_all($pat, $seed, $m);

var_dump($m);

function access_url($url) {
	if ($url=='') return false;
	$fp = fopen($url, 'r') or exit('Open url faild!');
	if($fp){
		while(!feof($fp)) {
			$file.=fgets($fp)."";
		}
		fclose($fp);
	}
	return $file;
}

function curl_file_get_contents($durl){  
	$this_header = array(
			"content-type: application/x-www-form-urlencoded;
charset=UTF-8"
	);
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $durl); 
    curl_setopt($ch,CURLOPT_HTTPHEADER,$this_header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回    
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回    
    $r = curl_exec($ch);  
    curl_close($ch);  
    return $r;  
}

?>