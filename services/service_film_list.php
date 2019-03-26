<?php

require_once("/opt/lampp/htdocs/FilmInformation/database/database.php");
require_once("/opt/lampp/htdocs/FilmInformation/models/post/postCollection.php");
require_once("/opt/lampp/htdocs/FilmInformation/models/entity/post.php");
require_once ("/opt/lampp/htdocs/FilmInformation/database/filtered_query.php");

$posts = new postCollection();

$filtered_sql = new filtered_query();
$sql = $filtered_sql->sql("film_information.films",$asc, $by, $text);
try {
    $db = new db();
    $posts_array = $db->query($sql);
    $db->CloseConnection();
}
catch (PDOException $e){
    echo $e->getMessage();
}

foreach ($posts_array as $arr)
{
    extract($arr);
    $film = new Post($id,$name,$year,$format,$stars);
    $posts->addPost($film);

}

