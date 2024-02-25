<?php

namespace App\Controller;

use App\Entity\Res;
use App\Form\ResType;
use App\Repository\ResRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/res')]
class ResController extends AbstractController
{
    #[Route('/', name: 'app_res_index', methods: ['GET'])]
    public function index(ResRepository $resRepository): Response
    {
        return $this->render('res/index.html.twig', [
            'res' => $resRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_res_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $re = new Res();
        $form = $this->createForm(ResType::class, $re);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($re);
            $entityManager->flush();

            return $this->redirectToRoute('app_res_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('res/new.html.twig', [
            're' => $re,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_res_show', methods: ['GET'])]
    public function show(Res $re): Response
    {
        return $this->render('res/show.html.twig', [
            're' => $re,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_res_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Res $re, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ResType::class, $re);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_res_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('res/edit.html.twig', [
            're' => $re,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_res_delete', methods: ['POST'])]
    public function delete(Request $request, Res $re, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$re->getId(), $request->request->get('_token'))) {
            $entityManager->remove($re);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_res_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/confirm', name: 'confirm_reservation', methods: ['GET'])]
    public function confirmReservation(Res $res, EntityManagerInterface $entityManager): Response
    {
        $res->setConfirmed(true);
        $entityManager->flush();

        
        return $this->redirectToRoute('app_res_index');
    }

    #[Route('/{id}/cancel', name: 'cancel_reservation', methods: ['GET'])]
    public function cancelReservation(Res $res, EntityManagerInterface $entityManager): Response
    {
       
        $entityManager->remove($res);
        $entityManager->flush();

       
        return $this->redirectToRoute('app_res_index');
    }
}


    

