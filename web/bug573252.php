<?php
	if($_SERVER['QUERY_STRING']) exit($_SERVER['QUERY_STRING']);
?><!DOCTYPE html>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<?php
for($i = 0; $i < 5; $i++) {
	$rand = mt_rand(100, 500);
	$nums[] = $rand;
	?>
	<div style="display: inline-block; text-align: center;">
		<?= $rand ?><br>
		<custom-element-<?= $rand ?> />
	</div>
	<?
}
?>
<script type="text/javascript">
	$(function() {
		<?php
		foreach($nums as $num)
			echo "$('custom-element-$num').replaceWith('<iframe src=\"?$num\" style=\"width: 40px; height: 40px;\"></iframe>');\r\n";
		?>
	});
</script>
<br>
<a href="http://www.google.com">Click here to navigate elsewhere then click the Back button and compare the numbers.</a>
</body>
</html>