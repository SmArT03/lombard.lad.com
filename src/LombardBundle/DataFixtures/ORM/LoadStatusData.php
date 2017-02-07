<?php

namespace LombardBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use LombardBundle\Entity\Status;

class LoadStatusData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $status = new Status();
        $status->setName('действующий');
        $this->addReference('status1', $status);
        $manager->persist($status);

        $status2 = new Status();
        $status2->setName('завершенный');
        $this->addReference('status2', $status2);
        $manager->persist($status2);



        $manager->flush();
    }

    public function getOrder() {
        return 4; // the order in which fixtures will be loaded
    }

}
