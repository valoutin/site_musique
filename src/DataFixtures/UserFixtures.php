<?php
namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
      $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
          $user_admin = new User();
          $user_admin->setNom('laura');
          $user_admin->setPrenom('reboux');
          $user_admin->setEmail('laura.reboux@hotmail.fr');
          $user_admin->setPassword($this->passwordEncoder->encodePassword(
              $user_admin,
              'michel'
          ));
          $user_admin->setRoles(['ROLE_SUPER_ADMIN']);
          $manager->persist($user_admin);


          $names = ['jean', 'paul', 'antoine', 'michel', 'damien', 'frederic', 'tartine'];
          for ($i=0; $i < 100; $i++) {
            $name = $names[rand(0, count($names) - 1)].$i;
            $user = new User();
            $user->setNom($name);
            $user->setPrenom('michel');
            $user->setEmail("$name@hotmail.fr");
            $user->setPassword($this->passwordEncoder->encodePassword(
                  $user,
                  'michel'
              ));
            $manager->persist($user);
          }
          $manager->flush();
    }
}
