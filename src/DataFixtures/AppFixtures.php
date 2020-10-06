<?php

namespace App\DataFixtures;

use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i < 20; $i++) { 
            $user = new User();
            $user->setEmail('users'.$i.'@gmail.com');
    
            $password = $this->encoder->encodePassword($user, '123456');
            $user->setPassword($password);
    
            $manager->persist($user);
        }
        $manager->flush();
    }
}
