<?php

function routing($page){

	switch($page){
		case 'film':
			$controller='controller_film_list.php';
			break;
		case 'add_film':
			$controller='controller_add_film.php';
			break;
        case 'action_add_film':
            $controller='controller_action_add_film.php';
            break;
        case 'delete_film':
            $controller='controller_delete_film.php';
            break;
        case 'about_film':
            $controller='controller_about_film.php';
            break;

		default:
			//$controller='controller_tovar_list.php';
	}
	if (!strpos($page,'action'))
		require_once('views/template_view.php');
	else
		require_once('controllers/'.$controller);
}

