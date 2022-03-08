<!DOCTYPE HTML>
<html>
	<head>
		
		<meta charset="UTF-8">
		<link href="/鹿鹿雜貨店/css/style.css" rel="stylesheet" type="text/css">
		<title>鹿鹿.site</title>
	</head>
	<body>
		<header>welcome to lulusgrocerybookstore!!!<br>歡迎光臨鹿鹿雜貨書鋪</header>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			languages <select name="lan" >
			<option value="1">繁體中文</option>
			<option value="2">英文</option>
			<option value="3">日本語</option>
			</select>
			<input type="submit" name="submit" value="submit">
		<footer>
			<?php
				if(empty($_POST["lan"])==0){
					echo "<h3>the author's imformation:</h3><div class='phone'>";
					$lan=$_POST["lan"];
					if($lan==1){
						echo "<li>致電 0908-999-712</li>";
						echo "</div><div style='color:white;'>";
						echo "<li>寫電子郵件至 joe5690@gmail.com</li>";
					}else if($lan==2){
						echo "<li>call 0908-999-712</li>";
						echo "</div><div style='color:white;'>";
						echo "<li>mail to joe5690@gmail.com</li>";
					}else if($lan==3){
						echo "<li>電話する 0908-999-712</li>";
						echo "</div><div style='color:white;'>";
						echo "<li>からの手紙 joe5690@gmail.com</li>";
					}
				}
			?>
				
			</div>
		</footer>
	</body>
</html>