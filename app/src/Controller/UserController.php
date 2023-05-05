<?php
namespace App\Controller;

use App\Entity\Promo;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    public function usersByPromo(string $promoId,UserRepository $UserRepository): Response
    {
        $users = $UserRepository->createQueryBuilder('u')
        ->innerJoin(Promo::class, 'p', 'WITH', 'u.promo = p.id')
        ->where('p.id = :promoId')
        ->orderBy('u.name', 'ASC')
        ->setParameter('promoId', $promoId)
        ->getQuery()
        ->getResult(); // récupère les utilisateur avec la promotion choisite

        return $this->render('promo/list.html.twig', ['users' => $users,'promo' => $promoId]);
    }
}

?>