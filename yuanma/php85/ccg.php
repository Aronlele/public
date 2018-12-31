<?php
include("../inc/jiekou.php");
require_once('../inc/mima.php');

include("../inc/xiton.php");
include("check.php");
if (isset($_POST['save'])) {
	$str = '';
	$str .= '<?php';
	$str .= "\n";
	$str .= '//后台密码';
	$str .= "\n";
	$str .= 'define(\'USERNAME\', \''.$_POST['username'].'\');';
	$str .= "\n";
	$str .= 'define(\'PASSWORD\', \''.$_POST['password'].'\');';
	$str .= "\n";
	$str .= 'define(\'IPPASS\', \''.$_POST['ippass'].'\');';
	$str .= "\n";	
	$str .= '?>';
	$files = '../inc/mima.php';
	$ff = fopen($files,'w+');
	fwrite($ff,$str);
	?>
<script language="javascript"> 
<!-- 

alert("恭喜重置成功！"); 


--> 
</script> 
<?php	
	echo "重置成功！";
	setcookie('username','',time()-1);
setcookie('password','',time()-1);
header('location:login.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include("inc_head.php");?>
<script type="text/javascript">
KindEditor.ready(function(K) {
	K.create('#s_copyright');
	var editor = K.editor();
	K('#picture').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_logo').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_logo').val(url);
				editor.hideDialog();
				}
			});
		});
	});
	K('#weixin').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_weixin').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_weixin').val(url);
				editor.hideDialog();
				}
			});
		});
	});
	K('#dashang').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_dashang').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_dashang').val(url);
				editor.hideDialog();
				}
			});
		});
	});
});
</script>

</head>
<body>

<?php include("inc_header.php");?>
<div id="content">
	<div class="container">
		<div class="line-big">
		<?php include("inc_left.php");?>
			<div class="xx105">
				<div class="hd-1">登录日志</div>
				<div class="bd-1">
									<?php
										function han($file, $line, $length = 1000){
											$returnTxt = null; // 初始化返回
											$i = 1; // 行数
											$handle = @fopen($file, "r");
											if ($handle) {
												while (!feof($handle)) {
													$buffer = fgets($handle, $length);
													if($line == $i) $returnTxt = $buffer;
													$i++;
												}
												fclose($handle);
											}
											return $returnTxt;
										}
										$lujing='../inc/ip.php';
										$line = count(file($lujing));
										
										$han1=han($lujing,$line - 1);
										$iptime=(explode("$$$$",$han1));
										$ip=$iptime['0'];$time=$iptime['1'];

											
								
	
									?>

				
	
						<div class="line-big">		
							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">上次登录ip：<?php echo $ip;?>

									</label></div>
		
								</div>
							</div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_keywords">上次登录时间：<?php echo $time;?></label></div>

								</div>
							</div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_keywords">登录次数总和：<?php echo $line;?></label></div>

								</div>
							</div>							
						</div>
					


				</div>

			</div>		
			<div class="xx105">
				<div class="hd-1">密码重置</div>
				<div class="bd-1">


					<form method="post">
						<div class="line-big">
		
		
							<div class="fc"></div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_seoname">用户名</label></div>
									<div class="field">
										<input id="s_seoname" class="input" name="username" type="text" size="60" value="<?php echo USERNAME?>" />

									</div>
								</div>
							</div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_keywords">密码</label></div>
									<div class="field">
										<input id="s_keywords" class="input" name="password" type="text" size="60" value="<?php echo PASSWORD?>" />

									</div>
								</div>
							</div>
							<div class="x4">
								<div class="form-group">
									<div class="label"><label for="s_keywords">IP白名单为空不设置否则后台只能用这ip访问</label></div>
									<div class="field">
										<input id="s_keywords" class="input" name="ippass" type="text" size="60" value="" />

									</div>
								</div>
							</div>
	


	


						</div>
						<div class="form-group">
							<div class="label"><label></label></div>
							<div class="field">
								<input id="save" class="btn bg-dot btn-block" name="save" type="submit" value="保存" />
							</div>
						</div>
					</form>


				</div>

			</div>
			
			
			
			
		</div>
	</div>
</div>

<?php include("inc_footer.php");?>
</body>
</html>