<?php

namespace App\DataFixtures;

use App\entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('This is a description for The Dark Knight');
        $movie->setImagePath('https://marudzenie.pl/wp-content/uploads/2012/07/the_dark_knight_7.jpg');
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers: endgame');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('This is a description for Avengers: EG');
        $movie2->setImagePath('https://techsetter.pl/wp-content/uploads/2019/04/techsetter-avengers-endgame.jpg');
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
