<?php namespace Acme;

class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->locked) {
            throw new \Exception('The home is not locked!! Abort Abort!!');
        }

        $this->next($home);
    }
}
