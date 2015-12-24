<?php
echo "Reptile";

echo htmlentities(access_url("http://www.baidu.com"));

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

?>