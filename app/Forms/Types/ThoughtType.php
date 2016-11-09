<?php

namespace CMSilex\MoodTracker\Forms\Types;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class ThoughtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('situation')
            ->add('mood', RangeType::class, [
                'attr' => array(
                    'min' => 0,
                    'max' => 100
                )
            ])
            ->add('description', TextareaType::class)
            ->add('timeOfDay', DateTimeType::class)
        ;

    }
}