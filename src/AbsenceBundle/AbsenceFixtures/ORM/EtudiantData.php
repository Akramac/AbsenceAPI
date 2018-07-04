<?php

namespace EtudiantBundle\EtudiantFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use EtudiantBundle\Entity\Etudiant;

class EtudiantData implements FixtureInterface {
    public function load(ObjectManager $manager){
      $Etudiant1=new Etudiant();
      $Etudiant1=setNom('Ali');
      $Etudiant1=setClass_id('1');

      $manager->persist($Etudiant1);

      $Etudiant2=new Etudiant();
      $Etudiant2=setNom('JAckline');
      $Etudiant2=setClass_id('1');

      $manager->persist($Etudiant2);

      $Etudiant3=new Etudiant();
      $Etudiant3=setNom('Mark');
      $Etudiant3=setClass_id('3');

      $manager->persist($Etudiant3);

      $Etudiant4=new Etudiant();
      $Etudiant4=setNom('CAmelia');
      $Etudiant4=setClass_id('2');

      $manager->persist($Etudiant4);

      $Etudiant5=new Etudiant();
      $Etudiant5=setNom('Bob');
      $Etudiant5=setClass_id('4');

      $manager->persist($Etudiant5);

      $Etudiant6=new Etudiant();
      $Etudiant6=setNom('Laîla');
      $Etudiant6=setClass_id('4');

      $manager->persist($Etudiant6);

      $manager->flush();

    }
}
