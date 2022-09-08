<?php

namespace App\DataFixtures;


use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public const ACTOR_DENZEL = "ACTOR_DENZEL";
    public const ACTOR_RYAN = "ACTOR_RYAN";
    public const ACTOR_MATT = "ACTOR_MATT";
    public const ACTOR_BEN = "ACTOR_BEN";
    public const ACTOR_ROBIN = "ACTOR_ROBIN";
    public const ACTOR_TOM = "ACTOR_TOM";
    public const ACTOR_RUSSELL = "ACTOR_RUSSELL";
    public const ACTOR_SEAN = "ACTOR_SEAN";
    public const ACTOR_JOSH = "ACTOR_JOSH";


    public function load(ObjectManager $manager): void
    {
        $actor = new Actor();
        $actor->setLastname("Washington");
        $actor->setFirstname("Denzel");
        $actor->setDateBirthday(new \DateTime("1954/12/28"));
        $actor->setImgActor("https://usercontent.one/wp/www.screentune.com/wp-content/uploads/2021/12/Portrait_Denzel_Washington_ScreenTune.png");
        $this->addReference(self::ACTOR_DENZEL,$actor);
        $manager->persist($actor);

        $actor = new Actor();
        $actor->setLastname("Gosling");
        $actor->setFirstname("Ryan");
        $actor->setDateBirthday(new \DateTime('1980/11/12'));
        $actor->setImgActor("https://cdn.artphotolimited.com/images/5a09bb8dcfe9056714cea41c/1000x1000/ryan-gosling.jpg");
        $this->addReference(self::ACTOR_RYAN,$actor);
        $manager->persist($actor);

        $actor = new Actor();
        $actor->setLastname("Damon");
        $actor->setFirstname("Matt");
        $actor->setDateBirthday(new \DateTime("1970/10/08"));
        $actor->setImgActor("https://www.fundraisers.fr/sites/default/files/public/img/article/matt_damon.jpg");
        $this->addReference(self::ACTOR_MATT,$actor);
        $manager->persist($actor);

        $actor = new Actor();
        $actor->setLastname("Affleck");
        $actor->setFirstname("Ben");
        $actor->setDateBirthday(new \DateTime("1970/10/08"));
        $actor->setImgActor("https://i.pinimg.com/236x/76/93/b9/7693b910e160ecc026d3d634dad7cc6b.jpg");
        $this->addReference(self::ACTOR_BEN,$actor);
        $manager->persist($actor);

        $actor = new Actor();
        $actor->setLastname("Williams");
        $actor->setFirstname("Robin");
        $actor->setDateBirthday(new \DateTime("1970/10/08"));
        $actor->setImgActor("https://i.pinimg.com/originals/31/75/8c/31758c13582f2b13ddd0ca4bb308a5de.jpg");
        $this->addReference(self::ACTOR_ROBIN,$actor);
        $manager->persist($actor);

        $actor = new Actor();
        $actor->setLastname("Hanks");
        $actor->setFirstname("Tom");
        $actor->setDateBirthday(new \DateTime("1956/07/09"));
        $actor->setImgActor("https://www.palacescope.com/wp-content/uploads/2020/02/AU11285267.jpg");
        $this->addReference(self::ACTOR_TOM,$actor);
        $manager->persist($actor);

        $actor = new Actor();
        $actor->setLastname("Crowe");
        $actor->setFirstname("Russell");
        $actor->setDateBirthday(new \DateTime("1964/04/07"));
        $actor->setImgActor("https://p6.storage.canalblog.com/66/65/466416/48669777.jpg");
        $this->addReference(self::ACTOR_RUSSELL,$actor);
        $manager->persist($actor);

        $actor = new Actor();
        $actor->setLastname("Astin");
        $actor->setFirstname("Sean");
        $actor->setDateBirthday(new \DateTime("1971/02/25"));
        $actor->setImgActor("https://static.wikia.nocookie.net/strangerthings/images/b/be/Sean_Astin.jpg/revision/latest?cb=20171010132550&path-prefix=fr");
        $this->addReference(self::ACTOR_SEAN,$actor);
        $manager->persist($actor);

        $actor = new Actor();
        $actor->setLastname("Brolin");
        $actor->setFirstname("Josh");
        $actor->setDateBirthday(new \DateTime("1968/02/12"));
        $actor->setImgActor("https://i.pinimg.com/originals/07/8e/78/078e78605340bd326a3d798ee226eadb.jpg");
        $this->addReference(self::ACTOR_JOSH,$actor);
        $manager->persist($actor);

        $manager->flush();
    }
}
