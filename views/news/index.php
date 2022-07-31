<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Новости</title>
	<link href="/templates/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/templates/fonts/opensans.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class = "wrap">
		<div class = "news-container">
			<div class = "news-content">
				<h1>Новости</h1>
				<div class = "news-list">
					<?php foreach ($newsList as $newsItem):?>
						<div class = "news-item">
							<div class = "news-date">
								<span><?php echo $newsItem['idate'];?></span>
							</div>
							<div class = "news-theme">
								<a href='/news/?id=<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'];?></a>
							</div>
							<div class = "news-announce">
								<p><?php echo $newsItem['announce'];?></p>
							</div>
						</div>
					<?php endforeach;?>
				</div>
				<div class = "pagination">
					<h3>Страницы:</h3>
					<?php echo $pagination->get(); ?>
				</div> 
			</div>
		</div>
	</div>
</body>
</html>


