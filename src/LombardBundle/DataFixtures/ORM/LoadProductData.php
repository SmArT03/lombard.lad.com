<?php

namespace LombardBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use LombardBundle\Entity\Product;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $product = new Product();
        $product->setName('браслет');
        $product->setDescription('Браслет от производителя КЮЗ ');
        $product->setGroup($this->getReference('group2'));
        $this->addReference('product1', $product);
        $manager->persist($product);

        $product2 = new Product();
        $product2->setName('серьги');
        $product2->setDescription('Серьги от производителя КЮЗ ');
        $product2->setGroup($this->getReference('group1'));
        $this->addReference('product2', $product2);
        $manager->persist($product2);

        $product3 = new Product();
        $product3->setName('кольцо');
        $product3->setDescription('Кольцо высшей пробы');
        $product3->setGroup($this->getReference('group1'));
        $this->addReference('product3', $product3);
        $manager->persist($product3);

        $manager->flush();
    }

    public function getOrder() {
        return 2; // the order in which fixtures will be loaded
    }

}
