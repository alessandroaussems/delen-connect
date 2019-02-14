<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 2 => 'Sonata\\CoreBundle\\Form\\Type', 3 => 'Sonata\\BlockBundle\\Form\\Type', 4 => 'Sonata\\AdminBundle\\Form\\Type', 5 => 'Sonata\\AdminBundle\\Form\\Type\\Filter', 6 => ''], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 3 => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 4 => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 5 => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 6 => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 7 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 8 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 9 => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 10 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 11 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 12 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 13 => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 14 => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 15 => 'Sonata\\CoreBundle\\Form\\Type\\ColorType', 16 => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 17 => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 18 => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 19 => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 20 => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 21 => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 22 => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 23 => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 24 => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 25 => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 26 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 27 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 28 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 29 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 30 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 31 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 32 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType', 33 => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType', 34 => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsType', 35 => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFieldsType', 36 => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFormsType', 37 => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsLocalesSelectorType', 38 => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslatedEntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\FormTypeFieldExtension', 9 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\MopaCompatibilityTypeFieldExtension', 10 => 'Sonata\\AdminBundle\\Form\\Extension\\ChoiceTypeExtension', 11 => 'Isometriks\\Bundle\\SpamBundle\\Form\\Extension\\Spam\\Type\\FormTypeTimedSpamExtension', 12 => 'Isometriks\\Bundle\\SpamBundle\\Form\\Extension\\Spam\\Type\\FormTypeHoneypotExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser']);

$instance->setName('debug:form');

return $instance;