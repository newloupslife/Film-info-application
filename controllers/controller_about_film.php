<?php
require_once("/opt/lampp/htdocs/FilmInformation/database/database.php");

$film_id = $_GET["id"];

require_once ("services/service_about_film.php");
require_once ("views/view_about_film.php");
