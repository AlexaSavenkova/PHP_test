<?php

namespace GeekBrains\Models;

class Post
{
    private int $id;
    private int $author_id;

    public function __construct(
        private string $title,
        private string $text
    )
    {}

    public function __toString(): string
    {
        return $this->title . ' >>>  ' . $this->text;
    }
}