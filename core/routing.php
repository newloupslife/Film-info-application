<?php
	
	
	function routing($page){

		switch($page){
			case 'film':
				$controller='controller_film_list.php';
				$left_controller='controller_filter_film_list.php';
			break;

			default:
				//$controller='controller_film_list.php';
		}
		if (!strpos($page,'action'))
			require_once('views/template_view.php');
		else
			require_once('controllers/'.$controller);
	}

?>

