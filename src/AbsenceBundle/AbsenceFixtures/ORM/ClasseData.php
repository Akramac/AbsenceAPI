<?php

namespace AbsenceBundle\AbsenceFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use AbsenceBundle\Entity\Classe;

class ClasseData implements FixtureInterface {
    public function load(ObjectManager $manager){
      $Classe1=new Classe();
      $Classe1=setNom('Shasles');


      $manager->persist($Classe1);

      $Classe2=new Classe();
      $Classe2=setNom('Victor Hugo');


      $manager->persist($Classe2);

      $Classe3=new Classe();
      $Classe3=setNom('Ibn Sina');


      $manager->persist($Classe3);

      $Classe4=new Classe();
      $Classe4=setNom('Jack Ma');


      $manager->persist($Classe4);

      $manager->flush();

    }
}
