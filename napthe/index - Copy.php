<center>
<?php
session_start();
$user_id = intval($_SESSION['user_id']);
if(!$_SESSION['user_id'])
{
header('Location: /dangnhap');
}
include('config.php');
$sql_query = @mysql_query("SELECT * FROM account WHERE id='{$user_id}'");
$member = @mysql_fetch_array( $sql_query );
$bcoin = $member['bcoin'];
$username = $member['username']; 
mysql_query("SET NAMES 'UTF8_unicode'");
?>
</center>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script src="jsbk/js_min_bk.js"></script>
<script src="jsbk/js_bk.js"></script>
<link rel="stylesheet" style="text/css" href ="baokim.css">
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function validate(){

var temp
if (document.napthebk.txtpin.value=="") {
alert("Bạn chưa nhập Số Pin !")
return false
}
if (document.napthebk.txtseri.value=="") {
alert("Bạn chưa nhập Số Seri")
return false
}
return true
}// End -->
</SCRIPT>
<body>
	<!--- ảnh nạp thẻ -->
	<tr>
    	<td colspan="2" align="center">
						<center><h2>Hồn Kiếm Vô Song</h2>
        	<h2>Nạp thẻ điện thoại - Gate - Vcoin</h2>
			<h2> <font color=red>Chú ý: Bắt đầu mở sự kiện Even x2 thẻ nạp từ ngày 20 tới 25/7</h2>
			</center>
		</tr>
	<!--- giao diện  nạp thẻ popup --->
	<div id="card-box" class="card-popup">
       
        <form name="napthebk" method="post" class="form-cardbk" action="API/transaction_api.php?act=do" onSubmit="return validate()">
               
				<ul id="image_card">
					<li><label for="rad1"><img  src="imagebk/gate.png"/></label></li>
					<li><label for="rad2"><img  src="imagebk/vcoin.png"/></label></li>
					<li><label for="rad3"><img  src="imagebk/mobi.png"/></label></li>
					<li><label for="rad4"><img  src="imagebk/vina1.png"/></label></li>
					<li><label for="rad5"><img  src="imagebk/vt.png"/></label></li>
				</ul>
				<ul id ="mang_bk">
					<li><input  id="rad1" class="rad_bk" type="radio" for="1"  name="chonmang" value="120"  /></li>
					<li><input id="rad2" class="rad_bk" type="radio"  name="chonmang" value="121"  /></li>
					<li><input id="rad3" class="rad_bk" type="radio" checked="true"  name="chonmang" value="92" /></li>
					<li><input id="rad4" class="rad_bk" type="radio"  name="chonmang" value="93"  /></li>
					<li><input  id="rad5" class="rad_bk" type="radio"  name="chonmang" value="107" /></li>
				</ul>
				 <fieldset class="textbox">   
                <span>Mã Thẻ:</span>
                <input class="txtbk" id="txtpin" name="txtpin" value="" type="text" autocomplete="on">  
				<a id="imgstore" href="http://store.baokim.vn/" target="_blank"></a>				
                <span>Số Seri:</span>
                <input class="txtbk" id="txtseri" name="txtseri" type="text" value="">	
				<span>Tên Tài Khoản:</span>
                <input class="txtbk" id="acc" name="acc" type="text" value="">
                <input type="submit" id="submitbk" value="" name="napthe"/>    
                </fieldset>
          </form>
		  <br>
		  </br>
<div class="titlebar"><h3><center>Bảng Giá ( VNĐ )</center></h3><a href="#" class="toggle">&nbsp;</a></div>
<div class="block_cont"><center><b> 
<td align="center"><table width="364" border="3" align="center">  
<tr><td width="99" align="center"><strong><font color=red>10.000 VNĐ</strong></td>
<td width="186" align="center"><strong>150.000 KNB</strong></td>  </tr> <tr>  
<td align="center"><strong><font color=red>20.000 VNĐ</strong></td> 
<td align="center"><strong>300.000 KNB</strong></td> </tr> <tr> 
<td align="center"><strong><font color=red>50.000 VNĐ</strong></td>
<td align="center"><strong>750.000 KNB</strong></td></tr><tr>
<td align="center"><strong><font color=red>100.000 VNĐ</strong></td>
<td align="center"><strong>1.500.000 KNB</strong></td></tr><tr>
<td align="center"><strong><font color=red>200.000 VNĐ</strong></td>
<td align="center"><strong>3.000.000 KNB</strong></td></tr><tr>
<td align="center"><strong><font color=red>500.000 VNĐ</strong></td>
<td align="center"><strong>7.500.000 KNB</strong></td></tr>
</table>
</td>
</div>
<br></br>
<label style='align:right;'><center><strong>Copyright © 2013 <font color=red>Hồn Kiếm</font> - Phát triển bởi <font color=red>Bin Cô Đơn</label></strong>

<div id="footerSlideContainer"><div id="footerSlideButton"></div><div id="footerSlideContent"><div id="footerSlideText">
<span class="titles">Hỗ trợ 1 ( Bin Cô Đơn ) : Vấn Đề Lỗi Nạp</span>
<ul>
<center>
<a href="ymsgr:sendim?hotro.honkiem"><font size="2" face="Arial"><img vspace="5" border="0" align="absmiddle" alt="Click để Chat với Admin !" src="http://opi.yahoo.com/online?u=hotro.hotro.honkiem&amp;m=g&amp;t=14&amp;l=us" title="Click để Chat với Support 1!"></font></a>
</center>
</ul>
<div class="line"></div>
<span class="titles">Hỗ trợ 2 ( Bin Cô Đơn ) : Vấn Đề Account</span>
<ul>
<center>
<a href="ymsgr:sendim?cong.tu_korea"><font size="2" face="Arial"><img vspace="5" border="0" align="absmiddle" alt="Click để Chat với Support 2!" src="http://opi.yahoo.com/online?u=cong.tu_korea&amp;m=g&amp;t=14&amp;l=us" title="Click để Chat với Support 2"></font></a
></center>		  
	</div>  <!--- End popup -->

</body>

</html>
