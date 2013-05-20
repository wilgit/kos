<?php
// src/Wilson/WilsonBundle/Form/EnquiryType.php

namespace Wilson\WilsonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface; 

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre');
        $builder->add('email', 'email');
        $builder->add('asunto');
        $builder->add('texto', 'textarea');
    }

    public function getName()
    {
        return 'contacto';
    }
}