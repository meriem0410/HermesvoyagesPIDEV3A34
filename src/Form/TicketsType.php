<?php

namespace App\Form;

use App\Entity\Tickets;
use App\Entity\Transport;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TicketsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('destination',TextType::class,[
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'max' => 10,
                        'maxMessage' => 'La description doit contenir au max {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('prix')
            ->add('depart',TextType::class,[
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'max' => 10,
                        'maxMessage' => 'La description doit contenir au max {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('arrive',TextType::class,[
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'max' => 10,
                        'maxMessage' => 'La description doit contenir au max {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('Transport', EntityType::class, [
                'class' => Transport::class,
                
                'choice_label' => 'type',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tickets::class,
        ]);
    }
}
