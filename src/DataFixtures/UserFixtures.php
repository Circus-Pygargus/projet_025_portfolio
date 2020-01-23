<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }


    public function load(ObjectManager $manager)
    {
        $roles[] = 'ROLE_ADMIN';
        $user = new User();
        $user->setUsername('Circus-Pygargus');
        $user->setRoles($roles);
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'mon_password comme d\'hab mais on est sur le portfolio'
        ));

        $manager->persist($user);
        $manager->flush();
    }
}
