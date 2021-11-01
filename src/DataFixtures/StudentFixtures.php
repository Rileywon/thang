<?php

namespace App\DataFixtures;

use App\Entity\Student;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class StudentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            $student = new Student();
            $student->setName("student $i");
            $student->setAge("22");
            $student->setPhone("123");
            $student->setEmail("student@example.com");
            $manager->persist($student);
        }

        $manager->flush();
    }
}
