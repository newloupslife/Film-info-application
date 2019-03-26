<?php

try {
    $db = new db();
    $post = $db->query("SELECT * FROM film_information.films WHERE id=:id", array("id"=>$film_id));
    $about = $db->query("SELECT info FROM film_information.about_film WHERE film_id=:id", array("id"=>$film_id));
    $db->CloseConnection();
} catch (PDOException $e) {
    echo $e->getMessage();
}

