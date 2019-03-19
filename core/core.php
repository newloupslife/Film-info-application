<?php
	session_start();
	require_once('routing.php');	

	function loadPage(){
		$page=getPage();
		routing($page);
		
	}
	
	function getPage(){
		$result='film';
		$array=explode('/',$_SERVER['REQUEST_URI']);
		$page=array_pop($array);
		if ($page){
			$array=explode('?',$page);
			$result=array_shift($array);
		}
		return $result;
	}
?>

