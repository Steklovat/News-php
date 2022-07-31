<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $newsItem['title'];?></title>
	<link href="/templates/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/templates/fonts/opensans.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class = "wrap">
		<div class = "news-container">
			<div class = "news-content">
				<h1><?php echo $newsItem['title'];?></h1>
				<div class = "news">
					<p>
						<?php echo $newsItem['content'];?>
					</p>
				</div>
				<a class = "f-s-18" href="/news/">Все новости >></a>
			</div>
		</div>
	</div>
</body>
</html>


