<?php

namespace App\Controller;

use App\Entity\Billet;
use App\Form\BilletType;
use App\Repository\BilletRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

#[Route('/billet')]
class BilletController extends AbstractController
{


    #[Route('/newfront', name: 'app_billet_newfront', methods: ['GET', 'POST'])]
    public function newfront(Request $request, EntityManagerInterface $entityManager): Response
    {
        $billet = new Billet();
        $form = $this->createForm(BilletType::class, $billet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($billet);
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_eventfront', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('billet/newfront.html.twig', [
            'billet' => $billet,
            'form' => $form,
        ]);
    }





    #[Route('/', name: 'app_billet_index', methods: ['GET'])]
    public function index(BilletRepository $billetRepository): Response
    {
        return $this->render('billet/index.html.twig', [
            'billets' => $billetRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_billet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $billet = new Billet();
        $form = $this->createForm(BilletType::class, $billet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($billet);
            $entityManager->flush();

            return $this->redirectToRoute('app_billet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('billet/new.html.twig', [
            'billet' => $billet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_billet_show', methods: ['GET'])]
    public function show(Billet $billet): Response
    {
        return $this->render('billet/show.html.twig', [
            'billet' => $billet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_billet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Billet $billet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BilletType::class, $billet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_billet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('billet/edit.html.twig', [
            'billet' => $billet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_billet_delete', methods: ['POST'])]
    public function delete(Request $request, Billet $billet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$billet->getId(), $request->request->get('_token'))) {
            $entityManager->remove($billet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_billet_index', [], Response::HTTP_SEE_OTHER);
    }




    #[Route('/searchbillet', name: 'searchbillet', methods: ['GET'])]
    public function searchbillet(Request $request,NormalizerInterface $Normalizer,BilletRepository $BilletRepository ): Response
    {

        $requestString=$request->get('searchValue');


        $billets = $BilletRepository->findProduitsBySujet($requestString);
        
        $jsoncontentc =$Normalizer->normalize($billets,'json',['groups'=>'billets']);
        $jsonc=json_encode($jsoncontentc);
        if(  $jsonc == "[]" )
        {
            return new Response(null);
        }
        else{  
            return new Response($jsonc);
        }

    }





}
