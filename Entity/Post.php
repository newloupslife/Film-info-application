<?php

final class post
{
    private $id;
    private $name;
    private $year;
    private $format;
    private $actors;


    public function __construct(int $id, string $name, int $year, string $format = '', string $actors = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->year = $year;
        $this->format = $format;
        $this->actors = $actors;
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


    public function getActors()
    {
        return $this->actors;
    }










}