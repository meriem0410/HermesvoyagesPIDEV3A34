<?php

namespace App\Form;

use App\Entity\Billet;
use App\Entity\Evenement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('datedebut')
            ->add('datefin')
            ->add('lieu')


            ->add('type', ChoiceType::class, array(
                'choices' => array(
                    'festival' => 'festival',
                    'spectacle' => 'spectacle',
                    'culturel' => 'culturel',
                )
            ))



            ->add('image', FileType::class,array('data_class' => null,'required' => false), ['label' => true,] )
            ->add('billet', EntityType::class, [
                'class' => Billet::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
