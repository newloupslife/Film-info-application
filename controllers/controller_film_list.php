<?php


if (isset($_GET['filter'])) {
    $asc = $_GET['filter'];
} else $asc = 'none';

if (isset($_GET['filter_style'])) {
    $by = $_GET['filter_style'];
    $text = $_GET['filter_text'];
} else {
    $by = '';
    $text = '';
}

require_once('services/service_film_list.php');

$iterator = $posts->getItterator();

require_once('views/view_film_list.php');
