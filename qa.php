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
		<style>
			ul.level2{
				display:none;
			}
			 li:hover ul{
				margin:5px;
				display:block;
			}
			 li.l1{
				height:3px;
				display:inline-table;
			}
		</style>
			<?php
				if(empty($_POST["lan"])==0){
					$lan=$_POST["lan"];
					if($lan==1){
						echo "
						<li class='l1'>什麼是鹿鹿雜貨書鋪
							<ul class='level2'>
								<li>鹿鹿雜貨書舖，一個有溫度的所在；友善舒適的環境，適合您與好友<br>親友飲好茶看好書共度好時光。堅持健康的食物無負擔，不添加過多<br>的調味品嘗食物單純的好味道：手作肉羹、自製優格、水果沙拉、<br>自產木瓜、無糖飲料，就在鹿鹿雜貨書舖！</li>
							</ul>
						</li>
						&nbsp
						<li class='l1'>鹿鹿雜貨書鋪的發展
							<ul class='level2'>
								<li>7月7日與房東小姐相約，打開藍色鐵門，空曠不大的空間，最吸引我的<br>卻是長滿雜草的後院，接著我就阿莎力的承租了這間屋子。<br>我腦海中的藍圖：二手書區、 用餐區、 教室區 ，20坪的空間可否容納<br>我想要呈現的書屋世界，跟我的孩子們討論，以及他們的身體力行的支<br>持（朱殷、芊涵的油漆和嘟嘟的油漆與美工設計，朱磊的鋪設地板與清<br>洗冷氣並最後並與嘟嘟一起整理的後院、朱顏的網頁管理等），鹿鹿雜<br>貨書舖才能慢慢成形中。</li>
							</ul>
						</li>
						&nbsp
						<li class='l1'>鹿鹿雜貨書鋪提供的服務
							<ul class='level2'>
								<li>美食</li>
								<li>課後服務</li>
								<li>雜貨和書籍</li>
							</ul>
						</li>
						";
					}else if($lan==2){
						echo "
						<li class='l1'> what is lulusgrocerybookstore
							<ul class='level2'>
								lulusgrocerybookstore is a worm place.<br>Friendly and comfortable environment for you and your friends
								Friends and relatives drink good tea, <br>read books and spend a good time together. Stick to healthy food without burden,<br> don't add too much
								Seasoned tasting food with simple good taste: <br>hand-made meat stew, homemade yogurt, fruit salad,
								Produce papaya and sugar-free drinks <br>at the Lulu grocery store!
							</ul>
						</li>
						&nbsp
						<li class='l1'>history of lulusgrocerybookstore
							<ul class='level2'>
								<li>On July 7th, I met with the landlord and opened the blue iron door. The empty space was the most attractive to me. <br> It was the backyard covered with weeds. Then I rented the house at once. <br> The blueprint in my mind: second-hand book area, dining area, classroom area,<br> whether the space of 20 pings can accommodate <br> I want to present the world of the book house, discuss with my children, and their physical support <br> Chi (Zhu Yin, Han Han ’s paint and Dudu ’s paint and art design, Zhu Lei ’s flooring and cleaning <br> Backyard washing and final cleaning with Dudu, Zhu Yan ’s web management ),lulusgrocerybookstore <br> The goods book shop can slowly take shape.</li>
							</ul>
						</li>
						&nbsp
						<li class='l1'>what kind services do we have
							<ul class='level2'>
								<li>good food to eat</li>
								<li>after school programs</li>
								<li>grocery and books</li>
							</ul>
						</li>
						";
					}else if($lan==3){
						echo "
						<li class='l1'>lulusgrocerybookstore
							<ul class='level2'>
								<li>lulusgrocerybookstoreはワームの場所です。<br>あなたとあなたの友人のためのフレンドリーで快適な環境
								友人や親はおいしいお茶を飲み、<br>本を読んで一緒に楽しい時間を過ごします。 <br>負担なく健康食品にこだわる
								シンプルで良い味の味付けされたテイスティングフード：<br>手作り肉シチュー、自家製ヨーグルト、フルーツサラダ、
								<br>lulusgrocerybookstoreでパパヤと無糖の飲み物を作りましょう！</li>
							</ul>
						</li>
						&nbsp
						<li class='l1'>lulusgrocerybookstore の歴史
							<ul class='level2'>
								<li><7月7日、私は家主と会い、青い鉄の扉を開けたが、スペースが私にとって最も魅力的だった<br>雑草に覆われた裏庭だったのでそれからあさりのためにこの部屋を借りました<br>私の頭の中の青写真：古本屋エリア、ダイニングエリア、教室エリア20ピンのスペースは、<br>提示したい本屋の世界に対応できますか？<br>子どもたちと身体的サポートについて話し合うホールド<br>lulusgrocerybookstoreでのみ形をとることができます</li>
							</ul>
						</li>
						&nbsp
						<li class='l1'>サービス
							<ul class='level2'>
								<li>美食</li>
								<li>放課後サービス(学童保育)</li>
								<li>食料品と本</li>
							</ul>
						</li>
						";
					}
				}
			?>
				
			</div>
		</footer>
	</body>
</html>