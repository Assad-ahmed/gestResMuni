<?php

namespace App\Controller;

use App\Entity\Site;
use App\Form\SiteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    #[Route('/addSite', name: 'add_site')]
    public function addSite(): Response
    {
        $site = new Site();
        $form = $this->createForm(SiteType::class, $site);
        return $this->render('site/add_site.html.twig', [
            'form'=>$form->createView()
        ]);
    }
}
