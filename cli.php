<?php
require_once 'vendor/autoload.php';
use GeekBrains\Models\User;
use GeekBrains\Models\Post;

$faker = Faker\Factory::create();

switch ($argv[1]) {
    case 'user':
        $user = new User($faker->firstName, $faker->lastName);
        echo $user . PHP_EOL;
        break;
    case 'post':
        $post = new Post($faker->sentence(4), $faker->text(120));
        echo $post . PHP_EOL;
        break;
    case 'comment':
        $comment = new \GeekBrains\Models\Comment($faker->text(100));
        echo $comment . PHP_EOL;
        break;
    default:
        echo 'Error' . PHP_EOL;
}