<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Form\HebergementType;
use App\Repository\HebergementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FrontHController extends AbstractController
{
    #[Route('/front/h', name: 'app_front_h',methods: ['GET'])]
    public function index(HebergementRepository $hebergementRepository): Response
    {
        return $this->render('front_h/index.html.twig', [
            'hebergements' => $hebergementRepository->findAll(),
        ]);
    }
}
