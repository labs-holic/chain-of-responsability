<?php namespace Acme;

abstract class HomeChecker
{
    protected $succesor;

    abstract public function check(HomeStatus $home);

    public function succeedWith(HomeChecker $succesor)
    {
        $this->succesor = $succesor;
    }

    protected function next(HomeStatus $home)
    {
        if ($this->succesor) {
            $this->succesor->check($home);
        }
    }
}
