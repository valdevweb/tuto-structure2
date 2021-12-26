<?php 

require_once 'controllers/MainController.php';

$controller=new MainController();


try {
	
	if(empty($_GET['page'])){
		$page= "accueil";
	}else{
		$url=explode("/",filter_var($_GET['page'], FILTER_SANITIZE_URL));
		$page=$url[0];
	}
	switch ($page) {
		case 'accueil':

		$controller->accueil();

		break;

		case 'page1':
		$page_descriptif="page 1";
		$page_content="page 1";
		$page_title="titre page 1";
		break;

		case 'page2':
		$page_descriptif="descriptif page 2";
		$page_content="contenu page 2";
		$page_title="titre page 2";
		break;

		case 'page3':
		$page_descriptif="descriptif page 3";
		$page_content="contenu page 3";
		$page_title="titre page 3";
		break;

		default:
		throw new Exception("La page n'existe pas");

		break;
	}
} catch (Exception $e) {
	$page_descriptif="page de gestion d'erreur";
	$page_content=$e->getMessage();
	$page_title="page d'erreur";
	
}



require_once('views/common/template.php');