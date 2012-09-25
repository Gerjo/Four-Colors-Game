<?php
	header("Content-Type: text/cache-manifest");

	print "CACHE MANIFEST" . PHP_EOL;
	print "# version 1" . PHP_EOL;

	foreach(scandir('./') as $v) {
		$info = pathinfo($v);
		if(in_array($info['extension'], array('gif', 'png', 'css', 'html', 'jpg', 'js'))) 
			print $v . PHP_EOL;
	}
	
?>



