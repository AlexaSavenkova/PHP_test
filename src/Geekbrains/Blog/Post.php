<?php

namespace GeekBrains\Blog;

use GeekBrains\Person\Person;

class Post
{
    public function __construct(
        private Person $author,
        public string $text
    ) {
    }

    public function __toString()
    {
        return $this->author . ' пишет: ' . $this->text;
    }
}

