<?php

namespace App\Controller;

use App\Service\MessageGenerator;
//use App\Service\NameGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NameGeneratorController extends AbstractController
{
    #[Route('/', name: 'app_name_generator')]
       public function index(MessageGenerator $messageGenerator): Response
    {
        return $this->render('name_generator/index.html.twig', [
            'nameGenerator' => $messageGenerator->helloMessage(),
        ]);
    }

}
