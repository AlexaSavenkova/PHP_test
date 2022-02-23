<?php

use GeekBrains\Blog\Post;
use GeekBrains\Person\Name;
use GeekBrains\Person\Person;

$post = new Post(
    new Person(
        new Name('Иван', 'Никитин'),
        new DateTimeImmutable()
    ),
    'Всем привет!'
);
echo $post;

