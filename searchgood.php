<!DOCTYPE HTML>
<html>
	<head>
		
		<meta charset="UTF-8">
		<link href="style.css" rel="stylesheet" type="text/css">
		<title>鹿鹿.site</title>
	</head>
	<body>
		<header>welcome to lulusgrocerybookstore!!!<br>歡迎光臨鹿鹿雜貨書鋪</header>
		<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" target="_blank">
			<input type="text" name="service_name"  placeholder="Enter some words">
			<input type="submit" value="submit">
		</form>
		<?php 
			if(empty($_POST["service_name"])==0){
				$service_name=$_POST["service_name"];
				if($service_name=="eat" || $service_name=="eating" || $service_name=="food" || $service_name=="食物" || $service_name=="美食" || $service_name=="食べ物"){
					echo '<img src="/鹿鹿雜貨店/photo/menu.jpg"';
				}else if($service_name=="grocery and books"|| $service_name=="雜貨以及書本" ||$service_name=="食料品" || $service_name=="食料品と本"){
					echo '<img src="/鹿鹿雜貨店/photo/good.jpg""';
				}else if($service_name=="after school programs"|| $service_name=="課後服務"||$service_name=="放課後サービス" || $service_name=="サービス" ){
					echo '<img src="/鹿鹿雜貨店/photo/afterschool.jpg"';
				}
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