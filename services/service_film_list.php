<?php

require_once("/opt/lampp/htdocs/FilmInformation/core/database.php");
require_once("/opt/lampp/htdocs/FilmInformation/Post/PostCollection.php");
require_once("/opt/lampp/htdocs/FilmInformation/Entity/Post.php");

$posts = new PostCollection();

try {
    $db = new db();
    $posts_array = $db->query("SELECT * FROM film_information.films");
    $db->CloseConnection();
}
catch (PDOException $e){
    echo $e->getMessage();
}

foreach ($posts_array as $arr)
{
    extract($arr);
    $film = new Post($id,$name,$year,$format,$actors);
    $posts->addPost($film);
}
