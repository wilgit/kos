<?php
// src/Wilson/WilsonBundle/Controller/PageController.php

namespace Wilson\WilsonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// Importa el nuevo espacio de nombres
use Wilson\WilsonBundle\Entity\Enquiry;
use Wilson\WilsonBundle\Form\EnquiryType;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('WilsonBundle:Page:index.html.twig');
    }

    public function nosotrosAction()
    {
        return $this->render('WilsonBundle:Page:nosotros.html.twig');
    }

    public function blogAction()
    {
        return $this->render('WilsonBundle:Page:blog.html.twig');
    }

    public function serviciosAction()
    {
        return $this->render('WilsonBundle:Page:servicios.html.twig');
    }

    public function galeriaAction()
    {
        return $this->render('WilsonBundle:Page:galeria.html.twig');
    }

    public function contactoAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // realiza alguna acción, como enviar un correo electrónico

                // Redirige - Esto es importante para prevenir que el usuario
                // reenvíe el formulario si actualiza la página
                return $this->redirect($this->generateUrl('WilsonBundle_contacto'));
            }
        }

        return $this->render('WilsonBundle:Page:contacto.html.twig', array(
            'form' => $form->createView()
        ));
    }
}