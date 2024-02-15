<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(name: 'app')]
class HomeController extends AbstractController
{
    #[Route('/', name: '_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


}

D:\DEV\Tresorerie>    git config --global user.name "Armelina HUBERT-BALLO"

D:\DEV\Tresorerie>    git config --global user.email ahubertballo2023@campus-eni.fr