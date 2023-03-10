<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseCController extends AbstractController
{
    #[Route('/', name: 'app_base_c')]
    public function index1(): Response
    {
        return $this->render('base_c/index.html.twig', [
            'controller_name' => 'BaseCController',
        ]);
    }

    #[Route('/eleve', name: 'app_eleve')]
    public function index2(): Response
    {
        return $this->render('base_c/eleve.html.twig', [
            'controller_name' => 'BaseCController',
        ]);
    }

    #[Route('/dons', name: 'app_dons')]
    public function index3(): Response
    {
        return $this->render('base_c/dons.html.twig', [
            'controller_name' => 'BaseCController',
        ]);
    }

    #[Route('/ancien', name: 'app_ancien')]
    public function index4(UserRepository $UserRepository): Response
    {
        return $this->render('base_c/ancien.html.twig', [
            'controller_name' => 'BaseCController',
            'users' => $UserRepository->findAll(), // on envoie toutes les user (findAll) à la vue
        ]);
    }

    #[Route('/stage', name: 'app_stage')]
    public function index5(): Response
    {
        return $this->render('base_c/stage.html.twig', [
            'controller_name' => 'BaseCController',
        ]);
    }
}
