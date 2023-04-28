<?php

namespace App\Controller\Admin;

use App\Entity\Stage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class StageController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Stage::class;
    }
    public function configureFields(string $pageName): iterable
    {
        yield DateField::new('date_s_start');
        yield DateField::new('date_s_end');
        yield IdField::new('info');
        yield ColorField::new('color');
    }
}

?>