<?php

namespace App\Controller\Admin;

use App\Entity\User;// pour afficher la table User il faut l'appeler
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;


class UserController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class; // donne la table User à la vue
    }
}
?>