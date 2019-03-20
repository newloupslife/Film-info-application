<?php

require_once ("core/database.php");

try {
    $db = new db();
    $db->query("DELETE FROM film_information.films WHERE Id = :id", array("id" => $delete_id));
    $db->CloseConnection();
}
catch(PDOException $e){
    echo $e->getMessage();
}
