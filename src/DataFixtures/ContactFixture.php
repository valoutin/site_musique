<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Contact;

class ContactFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 100; $i++) {
          $contact = new Contact();
          $contact->setTitre("la $i demande de contact");
          $contact->setMail("michel@hotmail.fr");
          $contact->setResquest("J'aime pas tro se que vous faite mais sa me lait quand meme j'esere qu'on ourras se revoir un jour salut bisous la bise.");
          $contact->setRaisonSociale('les frites');
          $manager->persist($contact);
        }
        $manager->flush();

    }
}
