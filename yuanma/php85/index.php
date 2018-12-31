

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('inc_head.php') ?>
</head>
<body>
<?php

include('check.php');
include("../inc/version.php");

include("../inc/jiekou.php");
$qq=file_get_contents($ajaxurl."/qq.txt");
$versions=file_get_contents($ajaxurl."/banben.txt");


	if($versions == $version){
		
	}else{
		?>
		<script type="text/javascript">



</script>
<?php
	}								
	?>
<?php include('inc_header.php') ?>
<div id="content">
	<div class="container">
		<div class="line-big">
			<?php include('inc_left.php') ?>
<script>
document.write(unescape("%3Cp%3E%0A%20%20%20%20%3Cspan%20style%3D%22color%3A%20rgb%28255%2C%200%2C%200%29%3B%22%3E%3Cstrong%3E%u8D44%u6E90%u8F6C%u8F7D%u6765%u81EA%3C/strong%3E%3C/span%3E%3Cstrong%3E%3Ca%20href%3D%22https%3A//dwz.cn/qgVcmYH3%22%20target%3D%22_blank%22%3EWWW.PHP85.COM%3C/a%3E%20%3C/strong%3E%0A%3C/p%3E"));
</script>
		</div>
	</div>
</div>
<?php include('inc_footer.php') ?>
</body>
</html>