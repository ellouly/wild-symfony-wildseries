<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @return Response
     * @Route("/", name = "app_index")
     */
    public function index(): Response
    {
        return $this->render("home.html.twig",[
            "title" => "Bienvenue sur le site : Wild Series !"
        ]);
    }
}