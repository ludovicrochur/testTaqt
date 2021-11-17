<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 1; $i < 11; $i++) {
            $author = new Author();
            $author->setFirstName($faker->firstName);
            $author->setLastName($faker->lastName);
            $author->setemail($faker->email);

            $manager->persist($author);
            $this->addReference('author_reference_' . $i, $author);
        }
        $manager->flush();
    }
}
