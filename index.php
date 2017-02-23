<?php 
if(isset($_GET['view'])){
	if(file_exists('controlador/'.strtolower($_GET['view']).'Controller.php')){
		include ('controlador/'.strtolower($_GET['view']).'Controller.php');

	}else{
		include ('controlador/errorController.php');
	}

}else{
 include 'controlador/indexController.php';
}