<?php

namespace testSymfony\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
Use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller {

	function indexAction() {

		return $this->render("BlogBundle:Public:index.html.twig");
	
	}

	function pageAction($page) {
	
		return $this->render("BlogBundle:Public:page.html.twig", array(
						'page'	=>	$page,
	));

	}

	function articleAction($slug) {

		// return $this->render("BlogBundle:Public:article.html.twig", array(
		// 				'slug' 		=>	$slug,
		// 				'annee'		=>	$annee,
		// 				'lang'		=>	$_locale,
		// 				'format'	=> 	$_format,
		// ));

		$cookies = $this->getRequest()->cookies;
		$cookies->set('pseudo', 'Dieu');

		$session = $this->get('session');
		$session->set('datePublication', new \DateTime());

		$article = array(
			'titre'		=>	"Titre de l'article",
			'contenu'	=>	"Contenu de l'article",
			'auteur'	=>	$cookies->get('pseudo'),
			'date'		=>	$session->get('datePublication'),
			'token'		=>	$this->getRequest()->query->get('token'),
			);

		return $this->render("BlogBundle:Public:article.html.twig", array(
					'article' => $article, 
					));

	}
}