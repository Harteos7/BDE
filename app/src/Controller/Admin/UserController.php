<?php

namespace App\Controller\Admin;

use App\Entity\User;// pour afficher la table User il faut l'appeler
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;


class UserController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class; // donne la table User à la vue
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')->hideOnForm();
        yield EmailField::new('email');
        yield ArrayField::new('roles');
        yield BooleanField::new('is_verified');
        yield BooleanField::new('ancien');
        yield TextField::new('name');
        yield TextField::new('adresse');
        yield AssociationField::new('promo');
    }
}
?>