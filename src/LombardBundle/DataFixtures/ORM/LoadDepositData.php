<?php

namespace LombardBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use LombardBundle\Entity\Deposit;

class LoadDepositData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $deposit = new Deposit();
        $deposit->setDate(new \DateTime(2017 - 02 - 01));
        $deposit->setInpPrice(2500);
        $deposit->setOutPrice(3500);        
        $deposit->setDepositTerm(new \DateTime(2017 - 04 - 01));
        $deposit->setClient($this->getReference('client1'));
        $deposit->setProduct($this->getReference('product1'));
        $deposit->setStatus($this->getReference('status1'));
        $manager->persist($deposit);

        $deposit2 = new Deposit();
        $deposit2->setDate(new \DateTime(2017 - 01 - 11));
        $deposit2->setInpPrice(1500);
        $deposit2->setOutPrice(2000);        
        $deposit2->setDepositTerm(new \DateTime(2017 - 03 - 01));
        $deposit2->setClient($this->getReference('client2'));
        $deposit2->setProduct($this->getReference('product2'));
        $deposit2->setStatus($this->getReference('status1'));
        $manager->persist($deposit2);

        $deposit3 = new Deposit();
        $deposit3->setDate(new \DateTime(2016 - 09 - 05));
        $deposit3->setInpPrice(5500);
        $deposit3->setOutPrice(7000);        
        $deposit3->setDepositTerm(new \DateTime(2017 - 01 - 01));
        $deposit3->setClient($this->getReference('client3'));
        $deposit3->setProduct($this->getReference('product3'));
        $deposit3->setStatus($this->getReference('status2'));
        $manager->persist($deposit3);

        $manager->flush();
    }

    public function getOrder() {
        return 5; 
    }

}
