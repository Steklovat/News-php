<?php

include_once ROOT. '/models/News.php';

class NewsController {
	public function actionView($id)
	{
		if ($id) {
			$newsItem = News::getNewsItemByID($id);

			require_once(ROOT . '/views/news/view.php');

		}

		return true;

	}

	public function actionNewsPage($page = 1)
	{
    $newsList = News::getNewsLimit($page);
    $total = News::getCountNews();
    $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, 'page');
    require_once(ROOT . '/views/news/index.php');
    return true;
	}

}

