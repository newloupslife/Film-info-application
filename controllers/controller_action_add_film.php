<?php

require_once ("core/database.php");

$film = [$_POST['username'],$_POST['year'],$_POST['format'],$_POST['stars'],$_POST['about']];

require_once("services/service_action_add_film.php");

header('Location:film');