<?php

namespace App\Controller\Admin;

use App\Entity\Stage;
use App\Entity\User;
use App\Entity\Promo;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(UserController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('utilisateur/admin.html.twig', [
        //    'controller_name' => 'DashboardController',
        // ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Partie admin');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('User', 'far fa-address-card', User::class);
        yield MenuItem::linkToCrud('Stage', 'fas fa-mobile-alt', Stage::class);
        yield MenuItem::linkToCrud('Classe et promotion', 'fas fa-mobile-alt', Promo::class);
        yield MenuItem::linktoRoute('Retour sur le site', 'fas fa-home', 'app_base_c');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
?>