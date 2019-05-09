<?php

namespace App\Controller;

/*====== USE EVENT ======*/

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;

/*====== USE CONTACT ======*/

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;

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
    public function index(Request $request, EventRepository $eventRepository, ContactRepository $contactRepository)
    {
      $contact = new Contact;
      $form_contact = $this->createForm(ContactType::class, $contact);
      $form_contact->handleRequest($request);

        if ($form_contact->isSubmitted() && $form_contact->isValid()) {
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($contact);
          $entityManager->flush();

          $this->addFlash('info', 'Le Message a bien été envoyé.');
        }

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'events' => $eventRepository->selectManyEvent(0, 5),
            'contact' => $contact,
            'form_contact' => $form_contact ->createView(),
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request): Response
    {

    }


}
