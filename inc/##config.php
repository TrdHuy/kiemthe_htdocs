<?php
	$db_host	= 'localhost';
	$db_name	= 'jxaccount';
	$db_user	= 'root';
	$db_pass	= '1234';
	$max= 10;//So ket qua moi toi da
	$phantrang_number= 15;//So bai viet tren 1 trang
	$max_word=5;//So tu toi da cua ten tren new top
	$link = mysqli_connect ($db_host, $db_user, $db_pass, $db_name) or die ("Cannot access DATA");
function chuyenhuong_meta($link,$time,$m="")
	{
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
		<meta http-equiv=\"refresh\" content=\"$time;url=$link\">";
		echo "<center>$m.</center>";
		echo "<center><a href='$link'>Click here if you dont want wait for...</a></center>";
	}
?>