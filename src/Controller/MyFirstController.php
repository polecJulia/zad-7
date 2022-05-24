<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuperController extends AbstractController
{

    #[Route('/firstcon', name: 'app_my_first')]
    public function index(): Response
    {
        $tab=[
            'BLUE',
            'BLACK',
            'WHITE',
            'YELLOW',

        ];
        return $this->render('my_first/index.html.twig', [
            'headerMessage' => 'My controller:',
            'colors'=>'colors',
            'tab'=>$tab,
        ]);
    }
}
