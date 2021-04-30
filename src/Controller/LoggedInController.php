<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoggedInController extends AbstractController
{
    /**
     * @Route("/logged/in", name="logged_in")
     */
    public function index(): Response
    {
        return $this->render('logged_in/index.html.twig', [
            'controller_name' => 'LoggedInController',
        ]);
    }
}
