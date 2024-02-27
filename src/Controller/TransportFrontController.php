<?php

namespace App\Controller;

use App\Entity\Transport;
use App\Form\Transport1Type;
use App\Repository\TicketsRepository;
use App\Repository\TransportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/front/transport')]
class TransportFrontController extends AbstractController
{
    #[Route('/', name: 'app_transport_front_index', methods: ['GET'])]
    public function index(Request $request, TransportRepository $transportRepository, PaginatorInterface $paginator): Response
    {
        // Paginate the transports with 3 items per page
        $pagination = $paginator->paginate(
            $transportRepository->findAll(), // Query to paginate
            $request->query->getInt('page', 1), // Current page number, default to 1 if not provided
            3 // Number of items per page
        );

        return $this->render('transport_front/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }


    #[Route('/new', name: 'app_transport_front_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $transport = new Transport();
        $form = $this->createForm(Transport1Type::class, $transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($transport);
            $entityManager->flush();

            return $this->redirectToRoute('app_transport_front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('transport_front/new.html.twig', [
            'transport' => $transport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_transport_front_show', methods: ['GET'])]
    public function show(Transport $transport,TicketsRepository $ticketsRepository): Response
    {
        return $this->render('transport_front/show.html.twig', [
            'transport' => $transport,
            'ticketss' => $ticketsRepository->findByTransport($transport),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_transport_front_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Transport $transport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Transport1Type::class, $transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_transport_front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('transport_front/edit.html.twig', [
            'transport' => $transport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_transport_front_delete', methods: ['POST'])]
    public function delete(Request $request, Transport $transport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$transport->getId(), $request->request->get('_token'))) {
            $entityManager->remove($transport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_transport_front_index', [], Response::HTTP_SEE_OTHER);
    }
    
}
