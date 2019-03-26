<?php

final class post
{
    private $id;
    private $name;
    private $year;
    private $format;
    private $stars;
    private $about;

    public function __construct(int $id, string $name, int $year, string $format = '', string $stars = '', string $about='')
    {
        $this->id = $id;
        $this->name = $name;
        $this->year = $year;
        $this->format = $format;
        $this->stars = $stars;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function getStars()
    {
        return $this->stars;
    }

    public function getAbout()
    {
        return $this->about;
    }
}