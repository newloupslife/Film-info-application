<?php


final class postCollection
{
    private $posts;

    public function __construct(...$post)
    {
        $this->posts = $post;
    }

    public function addPost($post)
    {
        $this->posts[] = $post;
    }

    public function getItterator()
    {
        return new ArrayIterator($this->posts);
    }
}