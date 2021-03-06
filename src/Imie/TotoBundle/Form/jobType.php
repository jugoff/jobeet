<?php

namespace Imie\TotoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class jobType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('company')
            ->add('logo')
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('howToApply')
            ->add('token')
            ->add('isPublic')
            ->add('isActivated')
            ->add('email')
            ->add('expireAt', 'datetime')
            ->add('createdAt', 'datetime')
            ->add('updatedAt', 'datetime')
            ->add('category')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imie\TotoBundle\Entity\job'
        ));
    }
}
