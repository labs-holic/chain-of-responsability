<?php

require 'vendor/autoload.php';

use Acme\Alarm;
use Acme\HomeStatus;
use Acme\Lights;
use Acme\Locks;

$locks = new Locks();
$lights = new Lights();
$alarm = new Alarm();

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus());
