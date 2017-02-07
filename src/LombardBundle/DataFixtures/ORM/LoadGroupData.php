<?php

namespace LombardBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use LombardBundle\Entity\Group;

class LoadGroupData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $group = new Group();
        $group->setName('золото');
        $this->addReference('group1', $group);
        $manager->persist($group);

        $group2 = new Group();
        $group2->setName('серебро');
        $this->addReference('group2', $group2);
        $manager->persist($group2);



        $manager->flush();
    }

    public function getOrder() {
        return 1; // the order in which fixtures will be loaded
    }

}
