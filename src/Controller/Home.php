<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Home extends AbstractController
{
    #[Route('/', name: 'home')]
    public function homePage(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/real', name: 'real')]
    public function realisationPage(): Response
    {
        return $this->render('real.html.twig');
    }

    #[Route('/devis', name: 'devis')]
    public function devisPage(): Response
    {
        return $this->render('devis.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contactPage(): Response
    {
        return $this->render('contact.html.twig');
    }
}