<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Command/SonataDumpDoctrineMetaCommand.php';

return $this->services['console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand'] = new \Sonata\CoreBundle\Command\SonataDumpDoctrineMetaCommand();
