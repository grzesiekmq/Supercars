<?php

namespace Grupa\ProjektBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecenzjaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tresc')
            ->add('dataRecenzji')
            ->add('statusRecenzji')
            ->add('film')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Grupa\ProjektBundle\Entity\Recenzja'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'grupa_projektbundle_recenzja';
    }
}
