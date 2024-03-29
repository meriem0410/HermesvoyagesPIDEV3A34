<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\CreateNewType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/user')]
class UserController extends AbstractController
{
     #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository, Request $request, PaginatorInterface $paginator): Response
    {
        // Get the search term from the request query parameters
        $searchTerm = $request->query->get('search');

        // If search term is provided, filter users by username or role
        if ($searchTerm) {
            $users = $userRepository->findByUsernameOrRole($searchTerm); // Assuming you have a custom query method for search
        } else {
            // If no search term provided, fetch all users
            $users = $userRepository->findAll(); // Assuming you have a custom query method for fetching all users
        }

        // Paginate the results
        $pagination = $paginator->paginate(
            $users, // Query
            $request->query->getInt('page', 1), // Page number
            5 // Items per page
        );

        // Render the template with the paginated users
        return $this->render('user/index.html.twig', [
            'pagination' => $pagination,
            'users' => $users,
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository): Response {
    $user = new User();
    $form2 = $this->createForm(CreateNewType::class, $user);
    
    // Handle form submission
    if ($request->isMethod('POST')) {
        $form2->handleRequest($request);
        
        // Check if the form is submitted and valid
        if ($form2->isSubmitted() && $form2->isValid()) {
            // Get form data
            $formData = $form2->getData();
            
            // Check if the email already exists
            $existingUser = $userRepository->findOneBy(['email' => $formData->getEmail()]);
            
            if ($existingUser) {
                $this->addFlash('error', 'Email is already in use.');
            } else {
                // Create a new User object and set its properties
                $user->setUsername($formData->getUsername());
                $user->setEmail($formData->getEmail());
                $user->setPassword(password_hash($formData->getPassword(), PASSWORD_DEFAULT));
                $user->setRole($formData->getRole());
                $user->setVerified(1);
                // Persist the user entity
                $entityManager->persist($user);
                $entityManager->flush();
                
                $this->addFlash('success', 'Account created successfully');
            }
            return $this->redirectToRoute('app_user_index'); 
        }
    }
    
    return $this->render('user/new.html.twig', [
        'form2' => $form2->createView(),
    ]);
}

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }
/*
    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
*/
    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/ban', name: 'app_user_ban', methods: ['POST'])]
    public function banUser(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('ban'.$user->getId(), $request->request->get('_token'))) {
            $user->setIsBanned(true);
            $entityManager->flush();
            $this->addFlash('success', 'User banned successfully');
        }

        return $this->redirectToRoute('app_user_index');
    }

    #[Route('/{id}/unban', name: 'app_user_unban', methods: ['POST'])]
    public function unbanUser(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('unban'.$user->getId(), $request->request->get('_token'))) {
            $user->setIsBanned(false);
            $entityManager->flush();
            $this->addFlash('success', 'User unbanned successfully');
        }

        return $this->redirectToRoute('app_user_index');
    }
    
}