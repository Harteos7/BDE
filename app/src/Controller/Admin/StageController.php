<?php

namespace App\Controller\Admin;

use App\Entity\Stage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class StageController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Stage::class;
    }
}

?>