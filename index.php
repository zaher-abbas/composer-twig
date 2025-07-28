<?php
require_once 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('./src/Templates');
$twig = new Environment($loader, [
    'cache' => false,
]);

$member = new stdClass();
$member->name = 'Zaher';
$member->adhesionYear = 23;
$member->isActive = true;
$temperature = 23;
$books = [];
$books[] = ['title' => 'Lord of the Rings', 'author' => 'Zaher'];
$books[] = ['title' => 'The Hobbit', 'author' => 'Majdi'];
$books[] = ['title' => 'Dracula', 'author' => 'Mama'];


echo $twig->render('exercice.html.twig', [
    'member' => $member,
    'temperature' => $temperature,
    'books' => $books
]);
