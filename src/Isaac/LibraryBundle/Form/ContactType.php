<?php

namespace Isaac\LibraryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', 'text', array(
                'label' => 'First Name',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('lastname', 'text', array(
                'label' => 'Last Name',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('addressline1', 'text', array(
                'label' => 'adressline1',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('addressline2', 'text', array(
                'label' => 'addressline2',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('city', 'text', array(
                'label' => 'city',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('postcode', 'text', array(
                'label' => 'postcode',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('telephonehome', 'text', array(
                'label' => 'telephonehome',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('telephonemobile', 'text', array(
                'label' => 'telephonemobile',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Isaac\LibraryBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'isaac_librarybundle_contact';
    }
}
