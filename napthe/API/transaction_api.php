
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SilverHand" />
	<title>Thông báo nạp thẻ</title>
</head>
<body>
<?php
$dbhost ="localhost:3306";
$dbname ="warriors";
$dbuser ="root";
$dbpass ="1234";
$db =mysql_connect("$dbhost","$dbuser","$dbpass") or die("Die connect: ".mysql_error());
mysql_select_db("$dbname") or die("Die select database: ".mysql_error());
mysql_query("SET NAMES 'utf8'", $db);

include('../class/BKTransactionAPI.php');
if(isset($_POST['napthe'])){
	$seri = $_POST['txtseri'];
	$sopin = $_POST['txtpin'];
	$mang = $_POST['chonmang'];
	$user = $_POST['acc'];
//------------Chon mang--------------------
	if($mang==92){
			$ten = "Mobiphone";
		}
	else if($mang==107){
			$ten = "Viettel";
		}
	else if($mang==120){
			$ten = "Gate";
		}
	else if($mang==121){
			$ten = "VTC";
		}
	else $ten ="Vinaphone";
	$num = mysql_query("select * from player where userName = '$user'");
	if(mysql_num_rows($num) <1)
	{
		echo '<script>alert("Tài Khoản Không Tồn Tại !");</script>';
		echo '<script>window.location="../index.php";</script>';
		exit();
	}
	else
	{
//-------end chon mang-----------------

$bk = new BKTransactionAPI("https://www.baokim.vn/the-cao/saleCard/wsdl");//link thật
$transaction_id = time();
$secure_pass = '92f7d157eac0dccf';
	/*
	 * API nap the cao dien thoai cho Merchant
	 * */
	$info_topup = new TopupToMerchantRequest();
	$info_topup->api_username = '4211220125';
	$info_topup->api_password = '4211220125rt4rfgr';
	$info_topup->card_id = $mang;
	$info_topup->merchant_id = '11196';
$info_topup->pin_field = $sopin;
$info_topup->seri_field = $seri;
$info_topup->transaction_id = $transaction_id;

$data_sign_array = (array)$info_topup;
ksort($data_sign_array);

$data_sign = md5($secure_pass . implode('', $data_sign_array));
$info_topup->data_sign = $data_sign;
$test = new TopupToMerchantResponse();
$test = $bk->DoTopupToMerchant($info_topup);

if($test->error_code==0){
//$test->info_card=10000;//nạp sai cũng nhận đc @@
	$nhanknb = $test->info_card;// đc 80, PRI m
	$timezone = +7; //(GMT +7:00)
	$time = gmdate("H:i:s d/m/Y ", time() + 3600*($timezone+date("0")));
		$sql="INSERT INTO `warriors`.`chongzhi` (`id`,`userName`,`chrName`,`costmoney`,`golden`,`chongzhichuli`,chongzhidatatime)VALUES('','$user','$user','0','$nhanknb','0','$time')";
	mysql_query($sql) or die($sql);
	echo '<script>alert("Bạn đã thanh toán thành công thẻ cào '.$ten.' với mệnh giá '.$test->info_card.'");</script>';
}
else {
	echo $test->error_message;
	echo $test->error_code;
	echo '<script>alert("Thôn tin thẻ cào không hợp lệ hoặc đã sữ dụng !");</script>';
}

}
}
?>
<script>
	window.location="../index.php";
</script>
</body>
</html>