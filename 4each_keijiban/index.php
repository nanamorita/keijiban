<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>4eachblog 掲示板</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header>
		<div class="logo">
			<img src="4eachblog_logo.jpg" alt="4eachblog_logo">
		</div>
		<div class="nav">
			<ul>
				<li>トップ</li>
				<li>プロフィール</li>
				<li>4eachについて</li>
				<li>登録フォーム</li>
				<li>問い合わせ</li>
				<li>その他</li>
			</ul>
		</div>

	</header>
	<main>
		<div class="main-container">
			<div class="left">
				<h1>プログラミングに役立つ掲示板</h1>
				<div class="input_form">
					<form method="post" action="insert.php">
						<div>
							<h3>入力フォーム</h3>
						</div>
						<div>
							<label>ハンドルネーム</label>
							<br>
							<input name="handlename" type="text" size="35" class="text">
						</div>

						<div>
							<label>タイトル</label>
							<br>
							<input name="title" type="text" size="35" class="text">
						</div>
						<div>
							<label>コメント</label>
							<br>
							<textarea name="comments" cols="65" rows="7"></textarea>
						</div>
						<div>
							<input class="contact-submit" type="submit" value="投稿する" />
						</div>
					</form>
				</div>
				<div class="list">
					<?php
						mb_internal_encoding("utf8");
						$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
						$stmt = $pdo->query("select * from 4each_keijiban");

						while ($row = $stmt->fetch()) {
							echo "<div class='kiji'>";
								echo "<h3>".$row['title']."</h3>";
								echo "<div class='contents'>";
									echo $row['comments'];
									echo "<div class='handlename'>posted by".$row['handlename']."</div>";
								echo "</div>";
							echo "</div>";
						}
					?>
				</div>
			</div>
			<div class="right">
				<h2>人気の記事</h2>
				<ul>
					<li>PHPオススメ本</li>
					<li>PHP Myadminの使い方</li>
					<li>今人気のエディタ Top5</li>
					<li>HTMLの基礎</li>
				</ul>

				<h2>オススメリンク</h2>
				<ul>
					<li>インターノウス株式会社</li>
					<li>XAMPPのダウンロード</li>
					<li>Eclipseのダウンロード</li>
					<li>Bracketsのダウンロード</li>
				</ul>

				<h2>カテゴリ</h2>
				<ul>
					<li>HTML</li>
					<li>PHP</li>
					<li>MySQL</li>
					<li>JavaScript</li>
				</ul>
			</div>
		</div>
	</main>
	<footer>
		copyright © internous | 4each blog the which provides A to Z about programming.
	</footer>
</body>

</html>
