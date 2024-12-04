<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // seed de l'api
        $task1 = new Task();
        $task1->setTitle('tache test 1');
        $task1->setDescription('test');
        $task1->setStatus('pending');
        $manager->persist($task1);

        $task2 = new Task();
        $task2->setTitle('Tâche en cours');
        $task2->setDescription('tâche en cours.');
        $task2->setStatus('in_progress');
        $manager->persist($task2);


        $task3 = new Task();
        $task3->setTitle('Tâche terminée');
        $task3->setDescription('tache finie');
        $task3->setStatus('completed');
        $manager->persist($task3);
        
        $manager->flush();
    }
}
