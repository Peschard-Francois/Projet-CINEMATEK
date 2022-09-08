<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setName("Le Livre d'Eli");
        $movie->setReleaseDate(new \DateTime('2010/01/10'));
        $movie->setSynopsis("Trente ans après qu'une guerre a dévasté le monde, Eli, un guerrier solitaire, erre dans un paysage en ruines, ramenant l'espoir à l'humanité.");
        $movie->setImgMovie("https://www.ecranlarge.com/uploads/image/001/268/leyqramxqjpuvc3axfjeaa3orng-014.jpg");
        $movie->addActor($this->getReference(ActorFixtures::ACTOR_DENZEL));
        $manager->persist($movie);

        $movie = new Movie();
        $movie->setName("Le Plus Beau des combats");
        $movie->setReleaseDate(new \DateTime('2001/04/18'));
        $movie->setSynopsis("En 1971, dans la petite ville d'Alexandria, en Virginie, la population noire se retrouve intégrée au sein du lycée T.C.");
        $movie->setImgMovie("https://images.justwatch.com/poster/243955848/s718/remember-the-titans.%7Bformat%7D");
        $movie->addActor($this->getReference(ActorFixtures::ACTOR_DENZEL));
        $manager->persist($movie);


        $movie = new Movie();
        $movie->setName("La Ligne verte");
        $movie->setReleaseDate(new \DateTime('2000/03/01'));
        $movie->setSynopsis("Paul Edgecomb, pensionnaire centenaire d'une maison de retraite, est hanté par ses souvenirs. Gardien-chef du pénitencier de Cold Mountain, en 1935, en Louisiane.");
        $movie->setImgMovie("https://www.ecranlarge.com/uploads/image/001/123/lnne9vghx4rmfb3r11dlrexkw7-061.jpg");
        $movie->addActor($this->getReference(ActorFixtures::ACTOR_TOM));
        $manager->persist($movie);

        $movie = new Movie();
        $movie->setName("Il faut sauver le soldat Ryan");
        $movie->setReleaseDate(new \DateTime('1998/09/30'));
        $movie->setSynopsis("Tandis que les forces alliées débarquent à Omaha Beach, Miller doit conduire son escouade derrière les lignes ennemies pour une mission particulièrement dangereuse.");
        $movie->setImgMovie("https://www.ecranlarge.com/uploads/image/001/198/mlssqwiqv0nkiqqrqri0yi9gqk8-880.jpg");
        $movie->addActor($this->getReference(ActorFixtures::ACTOR_TOM));
        $manager->persist($movie);

        $movie = new Movie();
        $movie->setName("Will Hunting");
        $movie->setReleaseDate(new \DateTime('1998/03/04'));
        $movie->setSynopsis("Will Hunting est un authentique génie mais également un rebelle aux élans imprévisibles. Il est né dans le quartier populaire de South Boston et a arrêté très tôt ses études.");
        $movie->setImgMovie("https://www.ecranlarge.com/media/cache/1600x1200/uploads/image/001/219/9anmnqnog4x2vlsfblyg1pnsq3v-003.jpg");
        $movie->addActor($this->getReference(ActorFixtures::ACTOR_ROBIN));
        $movie->addActor($this->getReference(ActorFixtures::ACTOR_BEN));
        $movie->addActor($this->getReference(ActorFixtures::ACTOR_MATT));
        $manager->persist($movie);

        $movie = new Movie();
        $movie->setName("Les Goonies");
        $movie->setReleaseDate(new \DateTime('1985/12/04'));
        $movie->setSynopsis("Alors que leurs maisons du quartier des Goon Docks vont être prochainement saisies et qu'ils passent leurs derniers jours ensemble.");
        $movie->setImgMovie("http://letiroirdelamemoire.ca/wp-content/uploads/2017/09/affiche-film-goonies.jpg");
        $movie->addActor($this->getReference(ActorFixtures::ACTOR_SEAN));
        $manager->persist($movie);

        $movie = new Movie();
        $movie->setName("Gladiator");
        $movie->setReleaseDate(new \DateTime('2000/07/20'));
        $movie->setSynopsis("Le général romain Maximus est le plus fidèle soutien de l'empereur Marc Aurèle, qu'il a conduit de victoire en victoire.");
        $movie->setImgMovie("https://qph.cf2.quoracdn.net/main-qimg-169c722cdb8a9098353e08a4665bb7bc-lq");
        $movie->addActor($this->getReference(ActorFixtures::ACTOR_RUSSELL));
        $manager->persist($movie);


        $manager->flush();
    }

    public function getDependencies(){
        return[
            ActorFixtures::class
        ];
    }
}
