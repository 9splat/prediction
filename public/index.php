<?php

require_once '../vendor/autoload.php';

$user = new App\User();


$user->setFirstName('Naren');
echo $user->getFirstName();

$match = new App\Match();

$match->setHomeTeam('France');
echo $match->getHomeTeam();

$prediction = new App\Prediction;
echo $prediction->getHomeTeamScore();