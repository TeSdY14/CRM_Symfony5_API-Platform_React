<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use App\Entity\Invoice;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for ($u = 0; $u < 10; $u++) {
            $user = new User();
            $chrono = 1;
            $user
                ->setFirstName($faker->firstName())
                ->setLastName($faker->lastName)
                ->setEmail($faker->email)
                ->setPassword($this->encoder->encodePassword($user, "mdp"))
            ;

            $manager->persist($user);
            for ($i = 0; $i < mt_rand(5, 20); $i++) {
                $client = new Customer();
                $client
                    ->setFirstname($faker->firstName())
                    ->setLastname($faker->lastName)
                    ->setEmail($faker->email)
                    ->setCompany($faker->company)
                    ->setUser($user)
                ;

                $manager->persist($client);
                for ($j = 0; $j < mt_rand(3, 10); $j++) {
                    $invoice = new Invoice();
                    $invoice
                        ->setAmount($faker->randomFloat(2, 250, 5000))
                        ->setSentAt($faker->dateTimeBetween('-6 months'))
                        ->setStatus($faker->randomElement(['SENT', 'PAID', 'CANCELED']))
                        ->setCustomer($client)
                        ->setChrono($chrono++)
                    ;

                    $manager->persist($invoice);
                }
            }
        }

        $manager->flush();
    }
}
