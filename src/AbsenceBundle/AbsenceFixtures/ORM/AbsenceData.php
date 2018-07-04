<?php

namespace AbsenceBundle\AbsenceFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use AbsenceBundle\Entity\Absence;

class AbsenceData implements FixtureInterface {
    public function load(ObjectManager $manager){
      $Absence1=new Absence();
      $Absence1=setEtudiant_id('3');
      $Absence1=setClass_id('1');
      $Absence1=setDate("2018-05-08");
      $Absence1=setNb_vacation('2');

      $manager->persist($Absence1);

      $Absence2=new Absence();
      $Absence2=setEtudiant_id('3');
      $Absence2=setClass_id('1');
      $Absence2=setDate("2018-03-08");
      $Absence2=setNb_vacation('1');

      $manager->persist($Absence2);

      $Absence3=new Absence();
      $Absence3=setEtudiant_id('4');
      $Absence3=setClass_id('1');
      $Absence3=setDate("2018-05-08");
      $Absence3=setNb_vacation('0');

      $manager->persist($Absence3);

      $Absence4=new Absence();
      $Absence4=setEtudiant_id('1');
      $Absence4=setClass_id('2');
      $Absence4=setDate("2018-07-08");
      $Absence4=setNb_vacation('2');

      $manager->persist($Absence4);

      $manager->flush();

    }
}
