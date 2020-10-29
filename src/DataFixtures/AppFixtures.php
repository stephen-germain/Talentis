<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use App\Entity\HardSkills;
use App\Entity\SoftSkills;
use App\Entity\TestCompetences;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $hard = new Profil();

        $hard->setNom('Broadus');
        $hard->setPrenom('Calvin');
        $hard->setAge(33);
        $hard->setTitre('Chef de projet Informatique');
        $hard->setMetier('Bancaire');
        $hard->setExperience(7);
        $hard->addCompetence('PHP');
        
     

        $manager->persist($hard);
        $manager->flush();
    }
}
