<?php

namespace App\Controller;

use App\Entity\Tickets;
use App\Form\Tickets1Type;
use App\Repository\TicketsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/front/tickets')]
class TicketsFrontController extends AbstractController
{
    #[Route('/', name: 'app_tickets_front_index', methods: ['GET'])]
    public function index(Request $request, TicketsRepository $ticketRepository, PaginatorInterface $paginator): Response
    {
       // Paginate the transports with 3 items per page
       $pagination = $paginator->paginate(
        $ticketRepository->findAll(), // Query to paginate
        $request->query->getInt('page', 1), // Current page number, default to 1 if not provided
        3 // Number of items per page
    );

    return $this->render('tickets_front/index.html.twig', [
        'pagination' => $pagination,
    ]);
    }

    #[Route('/new', name: 'app_tickets_front_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ticket = new Tickets();
        $form = $this->createForm(Tickets1Type::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ticket);
            $entityManager->flush();

            return $this->redirectToRoute('app_tickets_front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tickets_front/new.html.twig', [
            'ticket' => $ticket,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_tickets_front_show', methods: ['GET'])]
    public function show(Tickets $ticket): Response
    {
        return $this->render('tickets_front/show.html.twig', [
            'ticket' => $ticket,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tickets_front_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tickets $ticket, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Tickets1Type::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_tickets_front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tickets_front/edit.html.twig', [
            'ticket' => $ticket,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_tickets_front_delete', methods: ['POST'])]
    public function delete(Request $request, Tickets $ticket, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ticket->getId(), $request->request->get('_token'))) {
            $entityManager->remove($ticket);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_tickets_front_index', [], Response::HTTP_SEE_OTHER);
    }
}
