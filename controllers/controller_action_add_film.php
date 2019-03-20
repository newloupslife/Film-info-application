<?php


require_once ("core/database.php");

$film = [$_POST['username'],$_POST['year'],$_POST['format'],$_POST['stars']];

require_once ("models/model_action_add_film.php");


header('Location:film');