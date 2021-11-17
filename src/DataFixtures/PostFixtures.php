<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->setName($faker->name);
            $post->setContent($faker->text);
            $post->setCreatedAt($faker->dateTime($max = 'now', $timezone = null));
            $post->setAuthor($this->getReference('author_reference_' . rand(1, 10)));
            $manager->persist($post);
        }
        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [AuthorFixtures::class];
    }
}
