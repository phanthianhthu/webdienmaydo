<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://dauiapgreatbrq:41b2803fb1bd0bcc8c9d7149f3a4507c152f8703a0b854372da0070d59d2eee9@ec2-44-195-240-222.compute-1.amazonaws.com:5432/dcqh067a6mvd6j");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>