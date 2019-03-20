<?php

$delete_id = $_GET["id"];

require_once ("services/service_delete_film.php");

header('Location:film');