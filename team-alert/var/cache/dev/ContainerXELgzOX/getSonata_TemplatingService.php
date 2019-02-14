<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.templating' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/templating/EngineInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/templating/StreamingEngineInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/TwigEngine.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/EngineInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/TwigEngine.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Templating/EngineInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Templating/TwigEngine.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Templating/TemplateNameParser.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Templating/TemplateLocator.php';

return $this->privates['sonata.templating'] = new \Sonata\BlockBundle\Templating\TwigEngine(($this->services['twig'] ?? $this->getTwigService()), new \Sonata\BlockBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))), new \Sonata\BlockBundle\Templating\TemplateLocator(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[3].'/src/Resources'), [0 => ($this->targetDirs[3].'/src')]))), $this->targetDirs[0]));
