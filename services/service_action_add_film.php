<?php

try {
    $db = new db();
    $db->query(
        "INSERT INTO film_information.films(name,year,format,actors)
            VALUES(:n,:year,:f,:actors)", array("n" => $film['title'],
                                                "year" => $film['year'],
                                                "f" => $film['format'],
                                                "actors" => $film['stars'])
    );

    $last_id = $db->lastInsertId();
    $db->query(
        "INSERT INTO film_information.about_film(film_id,info)
            VALUES(:f,:i)", array("f" => $last_id, "i" => $film['about']));
    $db->CloseConnection();
}
catch (PDOException $e){
    echo $e->getMessage();
}