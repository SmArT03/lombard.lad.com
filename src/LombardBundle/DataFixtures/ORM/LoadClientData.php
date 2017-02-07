<?php

namespace LombardBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use LombardBundle\Entity\Client;

class LoadClientData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $client = new Client();
        $client->setFio('Иванов Иван Иванович');
        $client->setPassport('MT 82841');
        $client->setBirthday(new \DateTime(1992 - 05 - 11));
        $client->setAdress('г. Харьков, пл. Свободы 45, 192');
        $client->setPhone(0999419225);
        $client->setIdnumber(241219912731);
        $this->addReference('client1', $client);
        $manager->persist($client);

        $client2 = new Client();
        $client2->setFio('Федоров Дмитрий Сергеевич');
        $client2->setPassport('MT 82841');
        $client2->setBirthday(new \DateTime(1973 - 01 - 15));
        $client2->setAdress('г. Харьков, улица Очкасова 12, 5');
        $client2->setPhone(0939124525);
        $client2->setIdnumber(125459912731);
        $this->addReference('client2', $client2);
        $manager->persist($client2);

        $client3 = new Client();
        $client3->setFio('Кузина Юлия Степановна');
        $client3->setPassport('MT 82841');
        $client3->setBirthday(new \DateTime(1985 - 10 - 17));
        $client3->setAdress('г. Харьков, проспект Правды 21, 123');
        $client3->setPhone(0639416543);
        $client3->setIdnumber(375821912731);
        $this->addReference('client3', $client3);
        $manager->persist($client3);

        $manager->flush();
    }

    public function getOrder() {
        return 3; // the order in which fixtures will be loaded
    }

}
