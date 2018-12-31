<?php
header('Content-type:text/html; charset=utf-8');//设置编码
require_once('../inc/mima.php');
if(IPPASS !=""){
if(IPPASS != $_SERVER["REMOTE_ADDR"] ){
?>
<script language="javascript"> 
<!-- 

alert("您的IP为外来入侵者不在IP白名单内！无法访问！"); 
window.location.href="/" 

--> 
</script> 
<?php
 exit();
}
}



$ppdaas="1";

if(isset($_POST['submit'])){
	if ( USERNAME != $_POST['username']) {
?>
<script language="javascript"> 
<!-- 

alert("账号错误"); 
window.location.href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>" 

--> 
</script> 
<?php			
		
		$ppdaas="0";
	}
	if ( PASSWORD != $_POST['password']) {
?>
<script language="javascript"> 
<!-- 

alert("密码错误"); 
window.location.href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>" 

--> 
</script> 
<?php	
		$ppdaas="0";
	}	
	if ( IPPASS != $_SERVER["REMOTE_ADDR"]) {

	if( IPPASS != ""){
	
?>
<script language="javascript"> 
<!-- 

alert("您的ip：<?php echo $_SERVER["REMOTE_ADDR"];?>不在白名单之内无法进入后台！"); 
window.location.href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>" 

--> 
</script> 
<?php		
$ppdaas="0";

}


	}
	
	
	if($ppdaas == "1"){
		setcookie('username',$_POST['username']);
		setcookie('password',$_POST['password']);
		
		
		$time= date('y-m-d h:i:s',time());
		$ip = $_SERVER['REMOTE_ADDR'];
		$iptime = $ip."$$$$".$time."\n";
		$files = '../inc/ip.php';
		$ff = fopen($files,'a+');
		fwrite($ff,$iptime);
		fclose($ff);
		
		

		

		
	
		header('location:index.php');		
	}



}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('inc_head.php') ?>
</head>
<body>
<div style="background-color: #000; padding: 120px 0;">
	<div class="container">
		<p style="font-size: 50px; color: #FFF; text-align: center;">管理系统 <span class="badge">第一版</span></p>
	</div>
</div>
<div class="container">
	<div style="width: 360px; margin: 50px auto;">
		<form method="post">
			<div class="form-group">
				<div class="label"><label for="a_name">用户名/USER NAME</label></div>
				<div class="field">
					<input id="a_name" class="input" name="username" type="text" data-validate="required:请输入用户名" value="" />
				</div>
			</div>
			<div class="form-group">
				<div class="label"><label for="a_password">密码/PASSWORD</label></div>
				<div class="field">
					<input id="a_password" class="input" name="password" type="password" data-validate="required:请输入密码" value="" />
				</div>
			</div>

			<div class="form-group">
				<div class="label"><label></label></div>
				<div class="field">
					<input id="login_submit" class="btn btn-block bg-black" name="submit" type="submit" value="登录后台" />
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
    //屏蔽鼠标右键
    document.oncontextmenu = function () {
        return false;
    }
    document.onkeydown = function () {
        var e = window.event || arguments[0];
        //屏蔽F12
        if (e.keyCode == 123) {
            return false;
            //屏蔽Ctrl+Shift+I
        } else if ((e.ctrlKey) && (e.shiftKey) && (e.keyCode == 73)) {
            return false;
            //屏蔽Shift+F10
        } else if ((e.shiftKey) && (e.keyCode == 121)) {
            return false;
        }
    };
</script>
</body>
</html>