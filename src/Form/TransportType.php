<?php

namespace App\Form;

use App\Entity\Transport;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;


class TransportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('type', TextType::class, [
            'constraints' => [
                new Callback([$this, 'validateType']),
            ],
        ])
            ->add('description', TextType::class,[
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères.',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transport::class,
        ]);
    }
    public function validateType($value, ExecutionContextInterface $context)
    {
        // Vérifiez si la première lettre n'est pas majuscule
        if (ctype_lower($value[0])) {
            // Modifiez la première lettre en majuscule
            $newValue = ucfirst($value);
            // Mettez à jour la valeur du champ
            $context->getRoot()->getData()->setType($newValue);
        } 
    }
}
