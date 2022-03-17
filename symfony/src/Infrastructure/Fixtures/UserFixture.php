<?php

namespace App\Infrastructure\Fixtures;

use App\Entity\Cardsmile\Category;
use App\Entity\Cardsmile\Customer;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20000; $i++) {
            $category = Customer::create('malverdo');
            $manager->persist($category);
        }

        $manager->flush();
    }
}