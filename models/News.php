<?php


class News
{

	const SHOW_BY_DEFAULT = 5;

	public static function getNewsItemByID($id)
	{
		$id = intval($id);

		if ($id) {

			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM news WHERE id=' . $id);

			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;
		}

	}

	public static function getNewsLimit($page=1){
    $limit = self::SHOW_BY_DEFAULT;
    $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
    $db = Db::getConnection();
    $sql = 'SELECT * FROM news ORDER BY idate DESC LIMIT :limit OFFSET :offset ';
    $result = $db->prepare($sql);
    $result->bindParam(':limit', $limit, PDO::PARAM_INT);
    $result->bindParam(':offset', $offset, PDO::PARAM_INT);
    $result->execute();
    $i = 0;
    $newsItem = array();
    while ($row = $result->fetch()) {
        $newsItem[$i]['id'] = $row['id'];
        $newsItem[$i]['title'] = $row['title'];
        $newsItem[$i]['idate'] = date("d.m.Y", $row['idate']);
        $newsItem[$i]['announce'] = $row['announce'];
        $newsItem[$i]['content'] = $row['content'];
        $i++;
    }
    return $newsItem;
	}

	public static function getCountNews(){
    $db = Db::getConnection();
    $sql = 'SELECT count(id) AS count FROM news';
    $result = $db->prepare($sql);
    $result->execute();
    $row = $result->fetch();
    return $row['count'];
	}

}