<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeurphyController extends AbstractController 
{
    #[Route('/meurphy', name: 'app_meurphy')]
    public function index(): Response
    {
        return $this->render('meurphy/index.html.twig', [
            'controller_name' => 'MeurphyController',
        ]);
    }


    #[Route('/page2', name: 'app_page2')]
    public function page2(): Response
    {
        return $this->render('meurphy/page2.html.twig', [
            'controller_name' => 'MeurphyController',
        ]);
    }
}

