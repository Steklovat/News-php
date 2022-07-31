<?php
return array(
    'news\/(\?)id=([0-9]+)$' => 'news/view/$2',
    'news\/(\?)page=([0-9]+)$' => 'news/newsPage/$2',
    'news' => 'news/newsPage',
	);