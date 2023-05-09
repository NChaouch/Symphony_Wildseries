<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{ 
    #[Route('/app/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'title' => 'Bienvenue !',
         ]);
    }

}