<?php

namespace App\Controller\Admin;

use App\Entity\Promo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PromoController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Promo::class;
    }
}

?>