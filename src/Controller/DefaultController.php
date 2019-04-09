<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use App\EventListener;

/*====== USE DE BASE ======*/

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request): Response
    {
        $contact = new Contact;
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($contact);
          $entityManager->flush();

          $this->addFlash('info', 'Le Message a bien été envoyé.');

          return $this->redirectToRoute('home');
      }

        return $this->render('default/contact.html.twig', [
            'contact' => $contact,
            'form'    => $form->createView(),
        ]);
    }

    /**
     * @Route("/evenements", name="event")
     */
    public function event()
    {
      return $this->render('default/event.html.twig', [
      ]);
    }
}
