<?php


	namespace App\Controller;


	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    class NelegaClaudia extends AbstractController
    {

        public function index(){

           /* $templating = $this->container->get('twig.template_cache_warmer');
            $html = $this->render('genus/nelega_claudia.html.twig', [
                'name'=>$genusName
            ]);
            return new Response($html);*/
            return $this->render('nelega_claudia.html.twig');
        }
    }
