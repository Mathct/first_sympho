<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{

    #[Route('home')]

    public function index(){
        
        $titre = "mon titre";
        $description = "la description de mon site";
        $data = [
            'title' => $titre,
            'description' => $description

        ];
        return $this->render('home/index.html.twig', ['data' => $data]);
        
    }
}