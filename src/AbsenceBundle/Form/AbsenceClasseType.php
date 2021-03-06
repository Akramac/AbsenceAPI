<?php

namespace AbsenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AbsenceClasseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $optionss
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('nom', TextType::class)
        ;
    }

    public function getParent()
    {
        return EtudiantType::class;
    }
}
