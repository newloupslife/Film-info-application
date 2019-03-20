<?php

require_once ("/opt/lampp/htdocs/FilmInformation/core/database.php");
require_once ("/opt/lampp/htdocs/FilmInformation/Post/PostCollection.php");
require_once ("/opt/lampp/htdocs/FilmInformation/Entity/Post.php");

$db = new db();
$posts = new PostCollection();

$posts_array = $db->query("SELECT * FROM film_information.films");

foreach ($posts_array as $arr)
{
    extract($arr);
    $film = new Post($id,$name,$year,$format,$actors);
    $posts->addPost($film);
}

$iterator = $posts->getItterator();

?>

