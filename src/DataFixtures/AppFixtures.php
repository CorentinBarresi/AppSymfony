<?php

namespace App\DataFixtures;

use App\Entity\Trip;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Faker\Factory;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;
    
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        $faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
        $faker->addProvider(new \Mmo\Faker\LoremSpaceProvider($faker));
        
        // TRIP
        for($i=0;$i<25;$i++){
            $trip = new Trip();
            $trip
                ->setDestination($faker->city())
                ->setCreated_At($faker->dateTime())
                ->setDescription($faker->text(200))
                ->setDuree($faker->numberBetween($min = 2, $max = 15))
                ->setImage($faker->picsumUrl(400, 400));
            $manager->persist($trip);
        }

        //USER
        $user = new User();
        $user
            ->setEmail('admin@toor.com')
            ->setRoles(['ROLE_ADMIN'])
            ->setPassword($this->encoder->encodePassword(
                $user,'toor'
             ));

        $manager->persist($user);
        
        $manager->flush();
    }
}
