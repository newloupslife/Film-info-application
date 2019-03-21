<?php

require_once("database/database.php");
require_once ("filters/readDataFromFile.php");

if (isset($_POST['by_file'])){
    if ($_FILES['file']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['file']['tmp_name'])) {
        $file_info =  explode("\n\n",file_get_contents($_FILES['file']['tmp_name']));
        $data = new readDataFromFile($file_info);
        $films = $data->explodeStringToArray();
        require_once("services/service_action_add_film_from_file.php");

    }
}
else {
    $film = ['title' => $_POST['username'],
            'year' => $_POST['year'],
            'format' => $_POST['format'],
            'stars' => $_POST['stars'],
            'about' =>$_POST['about']
    ];
    require_once("services/service_action_add_film.php");
}


header('Location:film');