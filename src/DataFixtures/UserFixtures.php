<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;
    private $params;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder, ParameterBagInterface $params)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->params = $params;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail($this->params->get('SUPER_EMAIL'));
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            $this->params->get('SUPER_PASSWORD')
        ));
        $user->setRoles(['ROLE_SUPER_ADMIN']);

        $manager->persist($user);
        $manager->flush();
    }
}
