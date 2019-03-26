<?php

require_once("database/database.php");

try {
    $db = new db();
    $db->query("DELETE FROM film_information.about_film WHERE film_id = :id", array("id" => $delete_id));
    $db->query("DELETE FROM film_information.films WHERE Id = :id", array("id" => $delete_id));
    $db->CloseConnection();
} catch(PDOException $e){
    echo $e->getMessage();
}
