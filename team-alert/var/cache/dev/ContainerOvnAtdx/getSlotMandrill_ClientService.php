<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'slot_mandrill.client' shared service.

include_once $this->targetDirs[3].'/vendor/mandrill/mandrill/src/Mandrill.php';

return $this->services['slot_mandrill.client'] = new \Mandrill('---');
