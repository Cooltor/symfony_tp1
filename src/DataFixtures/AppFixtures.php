<?php

namespace App\DataFixtures;

use App\Entity\Pilote;
use App\Entity\Qualification;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $qualification = new Qualification();
        $qualification->setCode('PIL');
        $qualification->setLibelle('Pilote');
        $manager->persist($qualification);


        $pilote = new Pilote();
        $pilote->setNom('Basile');
        $pilote->setPrenom('Timon');
        $pilote->setEmail('timon@mail.fr');
        $pilote->setPilote($qualification);
        $manager->persist($pilote);


        $manager->flush();
    }
}