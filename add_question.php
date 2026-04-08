<?php

use App\Entity\Quiz;

// require_once '/src/Entity/Quiz.php';

$quiz = new Quiz();
$quiz->setQuestion("Qu'est ce qu'un bon mot de passe ?");
$quiz->setOptions(['123456','password','azerty','admin','F5f{@rEv#x]_yU-W']);
$quiz->setRigthAnswer([4]);
$quiz->setCorrecitionOption('Un mot de passe long et complexe avec des lettre, des chiffres et des caractère spécial');

$entityManager->persist($quiz);
$entityManager->flush();

echo "Tâche créée avec l'ID " . $quiz->getId();