<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'php_translator.console.status' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/php-translation/symfony-bundle/Command/BundleTrait.php';
include_once $this->targetDirs[3].'/vendor/php-translation/symfony-bundle/Command/StatusCommand.php';
include_once $this->targetDirs[3].'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueCounter.php';

$this->services['php_translator.console.status'] = $instance = new \Translation\Bundle\Command\StatusCommand(($this->services['php_translation.catalogue_counter'] ?? ($this->services['php_translation.catalogue_counter'] = new \Translation\Bundle\Catalogue\CatalogueCounter())), ($this->services['php_translation.configuration_manager'] ?? $this->load('getPhpTranslation_ConfigurationManagerService.php')), ($this->services['php_translation.catalogue_fetcher'] ?? $this->load('getPhpTranslation_CatalogueFetcherService.php')));

$instance->setName('translation:status');

return $instance;
