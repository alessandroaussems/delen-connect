<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'isometriks_spam.form.extension.type.timed_spam' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractTypeExtension.php';
include_once $this->targetDirs[3].'/vendor/isometriks/spam-bundle/Form/Extension/Spam/Type/FormTypeTimedSpamExtension.php';
include_once $this->targetDirs[3].'/vendor/isometriks/spam-bundle/Form/Extension/Spam/Provider/TimedSpamProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/isometriks/spam-bundle/Form/Extension/Spam/Provider/SessionTimedSpamProvider.php';

return $this->privates['isometriks_spam.form.extension.type.timed_spam'] = new \Isometriks\Bundle\SpamBundle\Form\Extension\Spam\Type\FormTypeTimedSpamExtension(new \Isometriks\Bundle\SpamBundle\Form\Extension\Spam\Provider\SessionTimedSpamProvider(($this->services['session'] ?? $this->getSessionService())), ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ['min' => 7, 'max' => 3600, 'global' => false, 'message' => 'You are doing that too quickly']);
