<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    /**
     * @Route("/first", name="first")
     */
    public function index()
    {
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }

    public function second()
    {
        return $this->render('first/asynchronous_content.html.twig', [
            'content' => 'asynchronous_content',
        ]);
    }
}
