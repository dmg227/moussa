<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WahidController extends AbstractController
{
    #[Route('/wahid', name: 'app_wahid')]
    public function index(): Response
    {
        return $this->render('wahid/index.html.twig', [
            'controller_name' => 'WahidController',
        ]);
    }
    #[Route('/page3', name: 'app_page3')]
    public function page3(): Response
    {
        return $this->render('wahid/page3.html.twig', [
            'controller_name' => 'WahidController',
        ]);
    }
}

