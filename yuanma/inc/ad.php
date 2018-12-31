<?php


include("../inc/tou_ad_inc.php");
include("../inc/bf_ad_inc.php");
include("check.php");
 $wap_ad=file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/inc/wap_ad.js');
if (isset($_POST['save'])) {

$tou_ad ="<center>";
$tou_ad1 ="";$tou_ad1s ="";
$tou_ad2 ="";$tou_ad2s ="";
$tou_ad3 ="";$tou_ad3s ="";
$tou_ad4 ="";$tou_ad4s ="";
$tou_ad5 ="";$tou_ad5s ="";
if(!empty($_POST['tou_ad1'])){
$tou_ad .='<a href="'.$_POST['tou_ad1'].'" target="_blank"><img style="width:100%" src="'.$_POST['tou_ad1s'].'"></a>';
$tou_ad1 =$_POST['tou_ad1'];$tou_ad1s =$_POST['tou_ad1s'];
}
if(!empty($_POST['tou_ad2'])){
$tou_ad .='<a href="'.$_POST['tou_ad2'].'" target="_blank"><img style="width:100%" src="'.$_POST['tou_ad2s'].'"></a>';
$tou_ad2 =$_POST['tou_ad2'];$tou_ad2s =$_POST['tou_ad2s'];
}
if(!empty($_POST['tou_ad3'])){
$tou_ad .='<a href="'.$_POST['tou_ad3'].'" target="_blank"><img style="width:100%" src="'.$_POST['tou_ad3s'].'"></a>';
$tou_ad3 =$_POST['tou_ad3'];$tou_ad3s =$_POST['tou_ad3s'];
}
if(!empty($_POST['tou_ad4'])){
$tou_ad .='<a href="'.$_POST['tou_ad4'].'" target="_blank"><img style="width:100%" src="'.$_POST['tou_ad4s'].'"></a>';
$tou_ad4 =$_POST['tou_ad4'];$tou_ad4s =$_POST['tou_ad4s'];
}
if(!empty($_POST['tou_ad5'])){
$tou_ad .='<a href="'.$_POST['tou_ad5'].'" target="_blank"><img style="width:100%" src="'.$_POST['tou_ad5s'].'"></a>';
$tou_ad5 =$_POST['tou_ad5'];$tou_ad5s =$_POST['tou_ad5s'];
}
$tou_ad .="</center>";	
$files = '../inc/tou_ad.php';
$ff = fopen($files,'w+');
fwrite($ff,$tou_ad);

$tou_ad_inc ='';
	$tou_ad_inc .= '<?php';
	$tou_ad_inc .= "\n";
$tou_ad_inc .= 'define(\'tou_ad1\', \''.$tou_ad1.'\');';$tou_ad_inc .= "\n";$tou_ad_inc .= 'define(\'tou_ad1s\', \''.$tou_ad1s.'\');';$tou_ad_inc .= "\n";
$tou_ad_inc .= 'define(\'tou_ad2\', \''.$tou_ad2.'\');';$tou_ad_inc .= "\n";$tou_ad_inc .= 'define(\'tou_ad2s\', \''.$tou_ad2s.'\');';$tou_ad_inc .= "\n";
$tou_ad_inc .= 'define(\'tou_ad3\', \''.$tou_ad3.'\');';$tou_ad_inc .= "\n";$tou_ad_inc .= 'define(\'tou_ad3s\', \''.$tou_ad3s.'\');';$tou_ad_inc .= "\n";
$tou_ad_inc .= 'define(\'tou_ad4\', \''.$tou_ad4.'\');';$tou_ad_inc .= "\n";$tou_ad_inc .= 'define(\'tou_ad4s\', \''.$tou_ad4s.'\');';$tou_ad_inc .= "\n";
$tou_ad_inc .= 'define(\'tou_ad5\', \''.$tou_ad5.'\');';$tou_ad_inc .= "\n";$tou_ad_inc .= 'define(\'tou_ad5s\', \''.$tou_ad5s.'\');';$tou_ad_inc .= "\n";
	$tou_ad_inc .= '?>';
$files = '../inc/tou_ad_inc.php';
$ff = fopen($files,'w+');
fwrite($ff,$tou_ad_inc);
$bf_ad ="<center>";
$bf_ad1 ="";$bf_ad1s ="";
$bf_ad2 ="";$bf_ad2s ="";
$bf_ad3 ="";$bf_ad3s ="";
$bf_ad4 ="";$bf_ad4s ="";
$bf_ad5 ="";$bf_ad5s ="";
if(!empty($_POST['bf_ad1'])){
$bf_ad .='<a href="'.$_POST['bf_ad1'].'" target="_blank"><img style="width:100%" src="'.$_POST['bf_ad1s'].'"></a>';
$bf_ad1 =$_POST['bf_ad1'];$bf_ad1s =$_POST['bf_ad1s'];
}
if(!empty($_POST['bf_ad2'])){
$bf_ad .='<a href="'.$_POST['bf_ad2'].'" target="_blank"><img style="width:100%" src="'.$_POST['bf_ad2s'].'"></a>';
$bf_ad2 =$_POST['bf_ad2'];$bf_ad2s =$_POST['bf_ad2s'];
}
if(!empty($_POST['bf_ad3'])){
$bf_ad .='<a href="'.$_POST['bf_ad3'].'" target="_blank"><img style="width:100%" src="'.$_POST['bf_ad3s'].'"></a>';
$bf_ad3 =$_POST['bf_ad3'];$bf_ad3s =$_POST['bf_ad3s'];
}
if(!empty($_POST['bf_ad4'])){
$bf_ad .='<a href="'.$_POST['bf_ad4'].'" target="_blank"><img style="width:100%" src="'.$_POST['bf_ad4s'].'"></a>';
$bf_ad4 =$_POST['bf_ad4'];$bf_ad4s =$_POST['bf_ad4s'];
}
if(!empty($_POST['bf_ad5'])){
$bf_ad .='<a href="'.$_POST['bf_ad5'].'" target="_blank"><img style="width:100%" src="'.$_POST['bf_ad5s'].'"></a>';
$bf_ad5 =$_POST['bf_ad5'];$bf_ad5s =$_POST['bf_ad5s'];
}
$bf_ad .="</center>";	
$files = '../inc/bf_ad.php';
$ff = fopen($files,'w+');
fwrite($ff,$bf_ad);

$bf_ad_inc ='';
	$bf_ad_inc .= '<?php';
	$bf_ad_inc .= "\n";
$bf_ad_inc .= 'define(\'bf_ad1\', \''.$bf_ad1.'\');';$bf_ad_inc .= "\n";$bf_ad_inc .= 'define(\'bf_ad1s\', \''.$bf_ad1s.'\');';$bf_ad_inc .= "\n";
$bf_ad_inc .= 'define(\'bf_ad2\', \''.$bf_ad2.'\');';$bf_ad_inc .= "\n";$bf_ad_inc .= 'define(\'bf_ad2s\', \''.$bf_ad2s.'\');';$bf_ad_inc .= "\n";
$bf_ad_inc .= 'define(\'bf_ad3\', \''.$bf_ad3.'\');';$bf_ad_inc .= "\n";$bf_ad_inc .= 'define(\'bf_ad3s\', \''.$bf_ad3s.'\');';$bf_ad_inc .= "\n";
$bf_ad_inc .= 'define(\'bf_ad4\', \''.$bf_ad4.'\');';$bf_ad_inc .= "\n";$bf_ad_inc .= 'define(\'bf_ad4s\', \''.$bf_ad4s.'\');';$bf_ad_inc .= "\n";
$bf_ad_inc .= 'define(\'bf_ad5\', \''.$bf_ad5.'\');';$bf_ad_inc .= "\n";$bf_ad_inc .= 'define(\'bf_ad5s\', \''.$bf_ad5s.'\');';$bf_ad_inc .= "\n";
	$bf_ad_inc .= '?>';
$files = '../inc/bf_ad_inc.php';
$ff = fopen($files,'w+');
fwrite($ff,$bf_ad_inc);

$wap_ad="../inc/wap_ad.js"; 
$myfile = fopen($wap_ad, "w") or die("Unable to open file!");
fwrite($myfile, $_POST['wap_ad']);
fclose($myfile);	

?>
<script language="javascript"> 
<!-- 

alert("恭喜修改成功！"); 
window.location.href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>" 

--> 
</script> 
<?php	
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
				<div class="hd-1">广告设置</div>
				<div class="bd-1">


					<form method="post">
						<div class="line-big">


							<div class="fc"></div>
							<div class="x4" style="width: 100%;height: 400px;">
								<div class="form-group">
									<div class="label"><label for="s_seoname">头部横幅广告管理:如若不添加广告留空即可</label></div>
									<div class="field">
									<div class="bd-1">
					<table class="table table-bordered">
						<tbody><tr>
							<th>横幅位置</th>
							<th>广告链接</th>
							<th>图片地址</th>						
						</tr>
						<tr>
							<td>1</td>
							<td><input id="s_seoname" class="input" name="tou_ad1" type="text" size="60" value="<?php echo tou_ad1?>"></td>
							<td><input id="s_seoname" class="input" name="tou_ad1s" type="text" size="60" value="<?php echo tou_ad1s?>"></td>
						</tr>
						<tr>
							<td>2</td>
							<td><input id="s_seoname" class="input" name="tou_ad2" type="text" size="60" value="<?php echo tou_ad2?>"></td>
							<td><input id="s_seoname" class="input" name="tou_ad2s" type="text" size="60" value="<?php echo tou_ad2s?>"></td>
						</tr>						
						<tr>
							<td>3</td>
							<td><input id="s_seoname" class="input" name="tou_ad3" type="text" size="60" value="<?php echo tou_ad3?>"></td>
							<td><input id="s_seoname" class="input" name="tou_ad3s" type="text" size="60" value="<?php echo tou_ad3s?>"></td>
						</tr>
						<tr>
							<td>4</td>
							<td><input id="s_seoname" class="input" name="tou_ad4" type="text" size="60" value="<?php echo tou_ad4?>"></td>
							<td><input id="s_seoname" class="input" name="tou_ad4s" type="text" size="60" value="<?php echo tou_ad4s?>"></td>
						</tr>
						<tr>
							<td>5</td>
							<td><input id="s_seoname" class="input" name="tou_ad5" type="text" size="60" value="<?php echo tou_ad5?>"></td>
							<td><input id="s_seoname" class="input" name="tou_ad5s" type="text" size="60" value="<?php echo tou_ad5s?>"></td>
						</tr>						
											</tbody></table>
				</div>
		
									</div>
								</div>
							</div>	

							<div class="x4" style="width: 100%;height: 400px;">
								<div class="form-group">
									<div class="label"><label for="s_seoname">播放器页面下方横幅广告管理:如若不添加广告留空即可</label></div>
									<div class="field">
									<div class="bd-1">
					<table class="table table-bordered">
						<tbody><tr>
							<th>横幅位置</th>
							<th>广告链接</th>
							<th>图片地址</th>						
						</tr>
						<tr>
							<td>1</td>
							<td><input id="s_seoname" class="input" name="bf_ad1" type="text" size="60" value="<?php echo bf_ad1?>"></td>
							<td><input id="s_seoname" class="input" name="bf_ad1s" type="text" size="60" value="<?php echo bf_ad1s?>"></td>
						</tr>
						<tr>
							<td>2</td>
							<td><input id="s_seoname" class="input" name="bf_ad2" type="text" size="60" value="<?php echo bf_ad2?>"></td>
							<td><input id="s_seoname" class="input" name="bf_ad2s" type="text" size="60" value="<?php echo bf_ad2s?>"></td>
						</tr>						
						<tr>
							<td>3</td>
							<td><input id="s_seoname" class="input" name="bf_ad3" type="text" size="60" value="<?php echo bf_ad3?>"></td>
							<td><input id="s_seoname" class="input" name="bf_ad3s" type="text" size="60" value="<?php echo bf_ad3s?>"></td>
						</tr>
						<tr>
							<td>4</td>
							<td><input id="s_seoname" class="input" name="bf_ad4" type="text" size="60" value="<?php echo bf_ad4?>"></td>
							<td><input id="s_seoname" class="input" name="bf_ad4s" type="text" size="60" value="<?php echo bf_ad4s?>"></td>
						</tr>
						<tr>
							<td>5</td>
							<td><input id="s_seoname" class="input" name="bf_ad5" type="text" size="60" value="<?php echo bf_ad5?>"></td>
							<td><input id="s_seoname" class="input" name="bf_ad5s" type="text" size="60" value="<?php echo bf_ad5s?>"></td>
						</tr>						
											</tbody></table>
				</div>
									</div>
								</div>
							</div>	
							<div class="fc"></div>
							<div class="x4" style="width: 100%;height: 300px;">
								<div class="form-group">
									<div class="label"><label for="s_seoname">移动端浮漂广告管理:请用js代码，所有浮漂广告代码都可以放在里面</label></div>
									<div class="field">
									<textarea style="height:250px"   class="input" name="wap_ad" /><?php echo $wap_ad;?></textarea>	
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