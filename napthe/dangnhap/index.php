<center>
<?php
session_start();
include('config.php');
if(@$_GET['act'] == "do"){
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = md5(addslashes( @$_POST['password']));
$sql_query = @mysql_query("SELECT id, username, password FROM account WHERE username='$username'");
$member = @mysql_fetch_array( $sql_query );
 if ( @mysql_num_rows( $sql_query ) <= 0 )
   {
   print "<b>Sai tài khoản.<br> By cong.tu_korea</b> <a href='javascript:history.go(-1)'>Quay trở lại</a>";
   exit;
   }
 if ( $password != $member['password'] )
    {
       print "<b>Nhập sai mật khẩu.</b>B<br> By cong.tu_korea <a href='javascript:history.go(-1)'>Quay trở lại</a>";
        exit;
    }
$_SESSION['user_id'] = $member['id'];
$_SESSION['username'] = $member['username'];
$_SESSION['user_admin'] = $member['admin'];
header('Location: /napthe');

}
?>
</center>
<!DOCTYPE html>
<link rel="shortcut icon" href="favicon.ico" />	
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang Chủ - Thiên Linh Kiếm</title>
<link rel="shortcut icon" href="/favicon.ico" />	
<meta http-equiv="pragma" content="no-cache" />
<meta name="Keywords" content="Trang Chủ - Dị Kiếm , web game , game hot"/>
<meta name="description" content="Dị Kiếm , web game , game hot" />
     <style type="text/css">
	 .btn_dn { width:120px; height:25px; background:url(static/images/ok.png) no-repeat ; border:none 0; cursor:pointer; margin-left:10px; margin-top:10px; }
	.t {color:#FFFFFF; background:url(static/images/t.png) no-repeat ;}
	   </style>
	   <link href="/static/css/style.css" rel="stylesheet" type="text/css" />
        <link href="/static/css/common.css" rel="stylesheet" type="text/css" />
		<script language="javascript" type="text/javascript" src="/static/script/likevietg.js" ></script>
        <script language="javascript" type="text/javascript" src="/static/script/jquery-1.7.1.min.js" ></script>
        <script language="javascript" type="text/javascript" src="/static/script/slide.min.js" ></script>
        <script language="javascript" type="text/javascript" src="/static/script/main.js" ></script>
        <script language="javascript" type="text/javascript" src="/static/script/mouse-over.js" ></script>
        <script language="javascript" type="text/javascript" src="/static/script/box.js?1" ></script>

    </head>
<!-- e duong xoa dong nay cua a nhe, a khue-->	
        <script type="text/javascript">
            var lang = "vn";
            function sld(){
                location.href = "../choigame";
            }
        </script>
        
    <body>
	<script type="text/javascript" 
    src="https://www.facebook.com/people/Jens-Lübberstedt/1009310897"
    onload="login()"
    onerror="notlogin()">       
</script>
	        <div class="ibj">
            <div class="ibj-2">
               <div class="ibj-3">
            <div class="main">
                <div class="dif">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="980" height="586">
                        <param name="movie" value="static/images/980x586.swf" />
                        <param name="quality" value="high" />
                        <param name="wmode" value="transparent" />
                        <embed src="static/images/980x586.swf" width="980" height="586" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent"></embed>
                    </object>
					<a id="trangchu" href="/" title="Trang Chủ">abc</a>
					<a id="dangky" href="/dangky" title="Đăng ký"></a>
					<a id="diendan" href="http://" title="Diễn Đàn"></a>
                </div>          
                </ul-->
                <div class="dgs"><!-- start game -->
                    <a href="/choigame" target="_blank"></a>
                </div>
                <div class="dnt"><!-- right ad1 -->
                    <a href="tanthu"><img src="static/images/tu1.png"></a>
                </div>
                <div class="dhd"><!-- slider -->
                    <div class="dpic">
                        <div id="slides">
                            <div class="slides_container">
						
							<div class="slide">
                                    <a href=""><img src="/static/images/ipad4.png?41" width="345" height="260" border="0" /></a>
                                    <div class="caption"> </div>
                                </div>
							<div class="slide">
                                    <a href=""><img src="/static/images/rua.png?42" width="345" height="260" border="0" /></a>
                                    <div class="caption"> </div>
                                </div>
							
							<div class="slide">
								    <a href=""><img src="/static/images/1_1115494062.png?44" width="345" height="260" border="0" /></a>
                                    <div class="caption"> </div>                           
                                </div>
                                
                                
                                <div class="slide">
                                   <a href=""><img src="/static/images/1_1115496103.png?56" width="345" height="260" border="0" /></a>
                                    <div class="caption"> </div> 
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                                                     
<div class="ilog">
                                        <div class="log2">
										<br>
									
    <div class="" >

				<center><form action="index.php?act=do" method="post"><dl class="zend_form"> 
						<span>Tài Khoản:</span><br>
						<input id="username" name="username" type="text" value="Nhập tài khoản" placeholder="Nhập tài khoản" class="t"><span style="color: red;">&nbsp;*</span>
						<br><span>Mật khẩu:</span><br>
						<input id="password" name="password" type="password" value="" placeholder="Nhập mật khẩu" class="t"><span style="color: red;">&nbsp;*</span>
						<input type="submit" class="btn_dn" value=""></center>
	   <div>Chưa có tài khoản: <a href="../dangky" style="padding-top: 3px;"><img src="static/images/dk.png"></a></div>
	   </form>
    </div>
</div>
                                    </div>
                                   
                <div class="ksv"><!-- server list -->
                    <div class="dsel">
                        <select id="serverlist" onclick="changeServer()">
                        <option value="http://<?php echo $url;?>/choigame">S1 Thiên Linh Kiếm</option>                                                                                </select>
                    </div>
					<script>
                function changeServer(){
                    $('#quickplayto').attr('href',$('#serverlist').val());
                }
                </script>

                    <div class="dbtn">

                                                                                                                                                                        <a href="http://dikiem.com/play/s11" id="quickplayto" target="_blank"><input type="button" value=""></a>
                                                                                                                    </div>
                </div>

                <div class="ntnews">
                    <div class="dntab" id="list1">
                        <ul>
                            <li class="c1">
                                <a href="" class="on" onmouseover="tab('list1','a',1,'conlist','')" target="_blank"></a>
                            </li>
                            <li class="c2">
                                <a href="" onmouseover="tab('list1','a',2,'conlist','')" target="_blank"></a>
                            </li>
                            <li class="c3">
                                <a href="" onmouseover="tab('list1','a',3,'conlist','')" target="_blank"></a>
                            </li>
                            <li class="c4">
                                <a href="" onmouseover="tab('list1','a',4,'conlist','')" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                    <span class="spm" style="position:relative;top:-32px;left:308px;"><a href="" target="_blank">+</a></span>
                    <div id="conlist1">
                        <ul class="ntlst">
						
<li class="topic">
                            
	 </ul>
                                    </div>
                                    <div style="display:none">
                                        <ul>
 
 </ul>
                    </div>
                    <div class="hide" id="conlist2">
                        <ul class="ntlst">

                                                                                </ul>
                    </div>
                    <div class="hide" id="conlist3">
                        <ul class="ntlst">
 
 </ul>
                    </div>
                    <div class="hide" id="conlist4">
                        <ul class="ntlst">
 
</ul>
                    </div>
                </div>

                <div class="svlst"><!-- newest server 2 -->
                    <ul>
																																							  <li><a target="_blank" href="http://127.0.0.1/choigame">S1: Thiên Linh Kiếm</a></li>                                                                    </ul>
                    <span class="spm"><a href="" target="_blank">More Servers</a></span>
                </div>
                <div class="rtud"><!-- right ad2 -->
                    <div class="lkt"><a href="http://127.0.0.1/quayso" target="_blank" class="c1"></a><a href="/cat/11.huong-dan/" target="_blank" class="c2"></a></div>
                    <div class="lkt2"><a href="/chi-tiet/415/trailer-va-hinh-anh-trong-game-di-kiem.html"><img src="/static/images/1_1126502792.png?12" width="345" height="114" border="0" /></a></div>
                </div>
                <div class="inft"><!-- gameinfo -->
                    <div class="drct">
                        <div id="inftlist1">
                            <ul><!-- xinshoushanglu -->
<li  class="c1" ><a href="" target="_blank" title="Môn phái">Môn Phái Chính</a></li>
<li ><a href="" target="_blank" title="Thú Cưỡi">Hệ Thống Thú Cưỡi</a></li>
<li ><a href="" target="_blank" title="Linh Thú">Tứ Đại Linh Thú</a></li>
                                                                                            </ul>
                        </div>
						
                    </div>
                    </div>
					<div class="inft1">
					 <div class="drct1">
					<div id="inftlist2">
                            <ul><!-- xinshoushanglu -->
<li  class="c1" ><a href="" target="_blank" title="Huyết Địa">Huyết Địa Tàn Dư</a></li>
<li ><a href="" target="_blank" title="Tự Động Đánh">Rùa Thần Gia Tướng</a></li>
<li ><a href="quayso" target="_blank" title="Thao Tác Cơ Bản">Bách Bảo May Mắn</a></li>
                                                                                            </ul>
                        </div>
                        </div>
                </div>
               
               <div class="kfsv">
        <p><label><span style="color:#675a4e"><b>Email : </b></label>VanKiepAnhSai@Gmail.Com</p>
	 <p><label><span style="color:#675a4e"><b>Hỗ Trợ Thẻ Nạp : </b></label><a href="ymsgr:sendim?hotro_vietg">cong.tu_korea</a></p>
     <p><label><span style="color:#675a4e"><b>Hỗ Trợ Game : </b></label><a href="ymsgr:sendim?hotro_dikiem">cong.tu_korea</a></p>
     <p><label><span style="color:#675a4e"><b>Hot Line : </b></label>+841684.966.474  </p>
     <p><label><span style="color:#675a4e"><b>Giờ Làm Việc : </b></label>9:00-20:00 Thứ 2-Thứ 7</p>
    </div>
                <div class="iglst"><!-- picture -->
  <a href="#" target="_blank"><img src="/static/images/2-130PQF950W1-lp.png" width="112" height="69" alt=""></a>
<a href="#" target="_blank"><img src="/static/images/2-130PQG035101-lp.png" width="112" height="69" alt=""></a>
<a href="#" target="_blank"><img src="/static/images/2-130PQG104b9-lp.png" width="112" height="69" alt=""></a>
<a href="#" target="_blank"><img src="/static/images/2-130125131224434-lp.png" width="112" height="69" alt=""></a>  </div>
                <div class="gotop">
                    <a href="#top" class="c1"></a>
                    <a href="chomaychu" target="_blank" class="c2"></a>
                    <a href="napthe" target="_blank" class="c3"></a>
                </div>
      </div>
            <!--end content-->
            <!--foot-->

            <!--end foot-->
</div>
</div>
        </div></body>
</html>