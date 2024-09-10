<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class Home extends AbstractController
{
    #[Route('/', name: 'home')]
    public function homePage() : Response
    {
        return $this->render('index.html.twig');
    }
}