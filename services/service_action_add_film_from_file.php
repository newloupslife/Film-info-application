<?php

try {

    $db = new db();
    foreach ($films as $film) {

        validation::titleValid($film['title']);
        validation::yearValid($film['year']);
        validation::formatValid($film['format']);
        validation::starsValid($film['stars']);

        $db->query(
            "INSERT INTO film_information.films(name,year,format,stars)
            VALUES(:n,:year,:f,:stars)", array("n" => $film['title'],
                "year" => $film['year'],
                "f" => $film['format'],
                "stars" => $film['stars'])
        );

        $last_id = $db->lastInsertId();
        $db->query(
            "INSERT INTO film_information.about_film(film_id,info)
            VALUES(:f,:i)", array("f" => $last_id, "i" => $film['about']));
    }

    $db->CloseConnection();

    header('Location:film');

} catch (Exception $e) {
    $db->CloseConnection();
    echo $e->getMessage();
    echo "<br><a href='add_film'>back</a>";
}