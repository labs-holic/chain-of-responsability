<?php namespace Acme;

class Alarm extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn) {
            throw new \Exception('The alarm are not set!! Abort Abort!!');
        }

        $this->next($home);
    }
}
