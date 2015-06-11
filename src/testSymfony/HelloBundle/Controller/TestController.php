<?php

namespace testSymfony\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
	function indexAction(){
		return $this->render("HelloBundle:Test:index.html.twig");
	}
}
