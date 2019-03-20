<?php

try {
    $db = new db();
    $db->query(
        "INSERT INTO film_information.films(name,year,format,actors)
            VALUES(:n,:year,:f,:actors)", array("n" => $film[0], "year" => $film[1], "f" => $film[2], "actors" => $film[3]));
    $last_id = $db->lastInsertId();
    $db->query(
        "INSERT INTO film_information.about_film(film_id,info)
            VALUES(:f,:i)", array("f" => $last_id, "i" => $film[4]));
    $db->CloseConnection();
}
catch (PDOException $e){
    echo $e->getMessage();
}