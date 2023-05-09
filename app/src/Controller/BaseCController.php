<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\StageRepository;
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
        $users = $UserRepository->findBy([], ['name' => 'ASC']); // récupère tous les utilisateurs avec leurs promotions

        return $this->render('base_c/ancien.html.twig', [
            'controller_name' => 'BaseCController',
            'users' => $users, // envoie tous les utilisateurs avec leurs promotions à la vue
        ]);
    }

    #[Route('/stage', name: 'app_stage')]
    public function index5(StageRepository $StageRepository): Response
    {
        return $this->render('base_c/stage.html.twig', [
            'controller_name' => 'BaseCController',
            'stages' => $StageRepository->findAll(), // on envoie toutes les stages (findAll) à la vue
        ]);
    }
}
