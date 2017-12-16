<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
		for ($i = 0; $i < 20; $i++) {
			$book = new Book();
			$book->setTitle('Foo bar'. $i);
			$book->setPrice(mt_rand(10, 100));
			$manager->persist($book);
		}

		$manager->flush();
	}
}
