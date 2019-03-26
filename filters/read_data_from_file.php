<?php


final class readDatafromfile
{
    private $info;
    private $new_info=[];


    public function __construct($info)
    {
        $this->info = $info;
    }

    public function showInfo()
    {
        echo $this->info;
    }

    public function explodeStringToArray()
    {
        foreach ($this->info as $film) {
            $film_array['title'] = $this->findTitle($film);
            $film_array['year'] = $this->findYear($film);
            $film_array['format'] = $this->findFormat($film);
            $film_array['stars'] = $this->findStars($film);
            $film_array['about'] = $this->findAbout($film);
            $this->new_info[] = $film_array;
        }
        return $this->new_info;
    }

    private function findTitle($film)
    {
        preg_match('/Title:([^"]*)Release/', $film, $title);
        return ltrim(rtrim($title[1]));
    }

    private function findYear($film)
    {
        preg_match('/Year:([^"]*)Format/', $film, $year);
        return ltrim(rtrim($year[1]));
    }

    private function findFormat($film)
    {
        preg_match('/Format:([^"]*)Stars/', $film, $format);
        return ltrim(rtrim($format[1]));
    }

    private function findStars($film)
    {
        preg_match('/Stars:([^"]*)About/', $film, $stars);
        return ltrim(rtrim($stars[1]));
    }

    private function findAbout($film)
    {
        preg_match('/About:([^"]*)/', $film, $about);
        return ltrim(rtrim($about[1]));
    }
}