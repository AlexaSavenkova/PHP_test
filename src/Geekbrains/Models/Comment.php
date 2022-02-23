<?php

namespace GeekBrains\Models;

class Comment
{
    private int $id;
    private int $author_id;
    private int $post_id;

    public function __construct(
        private string $text
    )
    {}

    public function __toString(): string
    {
        return $this->text;
    }
}