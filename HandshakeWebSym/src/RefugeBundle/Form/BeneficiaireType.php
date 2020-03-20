<?php

namespace RefugeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BeneficiaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombeneficiaire')->add('prenombeneficiaire')->add('email')->add('datenaissance')->add('ville')->add('telephone')->add('adressegps')->add('role')->add('besoin')->add('nationalite')->add('userid');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RefugeBundle\Entity\Beneficiaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'refugebundle_beneficiaire';
    }


}
