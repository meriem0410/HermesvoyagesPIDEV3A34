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


#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
    #[Route('/test', name: 'app_user_test', methods: ['GET'])]
    public function test(UserRepository $userRepository): Response
    {
        return $this->render('test.html.twig', [
            'users' => $userRepository->findAll(),
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
    
}
