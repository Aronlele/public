<?php
include("../inc/jiekou.php");
require_once('../inc/mima.php');

include("../inc/xiton.php");
include("check.php");

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
				<div class="hd-1">当前在线人数</div>
				<div class="bd-1">


					<form method="post">
						<div class="line-big">
						
							<div class="x4"style="width: 100%;">
								<div class="form-group">
									<div class="label"><label for="s_keywords"><?php echo file_get_contents("http://".$_SERVER['HTTP_HOST']."/zxrs/index.php");?></label></div>

								</div>
							</div>		
<!--		
							<div class="fc"></div>

							<div class="x4"style="width: 25%;">
								<div class="form-group">
									<div class="label"><label for="s_keywords">本日总IP:1264（个）</label></div>

								</div>
							</div>
							<div class="x4"style="width: 75%;">
								<div class="form-group">
									<div class="label"><label for="s_keywords">本日总PV:13647（次）</label></div>

								</div>
							</div>	
							<div class="fc"></div>

							<div class="x4"style="width: 25%;">
								<div class="form-group">
									<div class="label"><label for="s_keywords">本日IP高峰时间:06:41</label></div>

								</div>
							</div>
							<div class="x4"style="width: 25%;">
								<div class="form-group">
									<div class="label"><label for="s_keywords">同时在线IP:66（个）</label></div>

								</div>
							</div>	


							<div class="x4"style="width: 25%;">
								<div class="form-group">
									<div class="label"><label for="s_keywords">本日IP低谷时间:06:41</label></div>

								</div>
							</div>
							<div class="x4"style="width: 25%;">
								<div class="form-group">
									<div class="label"><label for="s_keywords">同时在线IP:66（个）</label></div>

								</div>
							</div>	
							<div class="fc"></div>

							<div class="x4"style="width: 25%;">
								<div class="form-group">
									<div class="label"><label for="s_keywords">本日PV高峰时间:06:41</label></div>

								</div>
							</div>
							<div class="x4"style="width: 25%;">
								<div class="form-group">
									<div class="label"><label for="s_keywords">同时在线PV:66（次）</label></div>

								</div>
							</div>	


							<div class="x4"style="width: 25%;">
								<div class="form-group">
									<div class="label"><label for="s_keywords">本日PV低谷时间:06:41</label></div>

								</div>
							</div>
							<div class="x4"style="width: 25%;">
								<div class="form-group">
									<div class="label"><label for="s_keywords">同时在线PV:66（次）</label></div>

								</div>
							</div>		
-->

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