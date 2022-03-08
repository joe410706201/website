<!DOCTYPE HTML>
<html>
	<head>
		
		<meta charset="UTF-8">
		<link href="/鹿鹿雜貨店/css/style.css" rel="stylesheet" type="text/css">
		<title>鹿鹿.site</title>
	</head>
	<body>
		<header>welcome to lulusgrocerybookstore!!!<br>歡迎光臨鹿鹿雜貨書鋪</header>
		<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<textarea type="textarea" name="commet"  placeholder="Enter some words"></textarea>
			<input type="submit" value="submit">
		</form>
		<?php 
			if(empty($_POST["commet"])==0){
				$com=$_POST["commet"];
				echo "thanks for your cooperation<br>";
			}
		?>
		<footer>
			<h3>the author's imformation:</h3>
			<div class="phone">
				phone:0908-999-712
			</div>
			<div style="color:white;">
				E-mail:joe5690@gmail.com
			</div>
		</footer>
	</body>
</html>