<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface; // Import EntityManagerInterface
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

class SignUpType extends AbstractType
{
    private $entityManager; // Define entityManager property

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class)
            ->add('email', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter an email',
                    ]),
                    new Email([
                        'message' => 'The email "{{ value }}" is not a valid email.',
                    ]),
                    new Callback([$this, 'validateUniqueEmail']),

                ],

            ])
            ->add('password', PasswordType::class, [
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('captcha', Recaptcha3Type::class, [
                'constraints' => new Recaptcha3 ([
                    'message' => 'karser_recaptcha3.message',
                    'messageMissingValue' => 'karser_recaptcha3.message_missing_value',
                ]),
           ])
            ->add('submit', SubmitType::class, [
                'label' => 'Sign Up',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }

    public function validateUniqueEmail($value, ExecutionContextInterface $context)
    {
        $existingUser = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $value]);
        
        if ($existingUser) {
            $context->buildViolation('This email is already registered.')
                ->atPath('email')
                ->addViolation();
        }
    }
}