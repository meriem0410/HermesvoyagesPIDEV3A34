<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use App\Enum\UserRoleEnum;
use App\Entity\User;
use App\Form\SignUpType;
use App\Form\LoginType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

class LoginController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/login', name: 'login')]
    public function login(Request $request, UserRepository $userRepository, SessionInterface $session): Response
    {
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);

        $formSignup = $this->createForm(SignUpType::class);
        $formSignup->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle login form submission
            $userFormData = $form->getData();
            $user = $userRepository->findOneBy(['email' => $userFormData->getEmail()]);

            if ($user !== null && password_verify($userFormData->getPassword(), $user->getPassword())) {
                // Start session and store user data
                $session->set('id', $user->getId());
                $session->set('username', $user->getUsername());
                $session->set('email', $user->getEmail());

                if ($user->getRole() == UserRoleEnum::VOYAGEUR) {
                    return $this->redirectToRoute('app_home');
                } else {
                    return $this->redirectToRoute('app_user_index');
                }
            } else {
                // Handle invalid login
                $this->addFlash('error', 'Invalid email or password.');
            }
        }

        if ($formSignup->isSubmitted() && $formSignup->isValid()) {
            // Handle sign-up form submission
            $formData = $formSignup->getData();
            $existingUser = $userRepository->findOneBy(['email' => $formData->getEmail()]);

            if ($existingUser) {
                $this->addFlash('error', 'Email is already in use.');
            } else {
                // Create a new User object and set its properties
                $user = new User();
                $user->setUsername($formData->getUsername());
                $user->setEmail($formData->getEmail());
                $user->setPassword(password_hash($formData->getPassword(), PASSWORD_DEFAULT));

                // Use EntityManagerInterface to persist and flush
                $this->entityManager->persist($user);
                $this->entityManager->flush();

                $this->addFlash('success', 'Sign-up successful. Please login.');
            }
        }

        return $this->render('login/login.html.twig', [
            'form' => $form->createView(),
            'formSignup' => $formSignup->createView(),
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->invalidate();
        return $this->redirectToRoute('login');
    }
}
