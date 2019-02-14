<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistry.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';

return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'A2lix\\TranslationFormBundle\\Form\\Type\\TranslatedEntityType' => ['privates', 'a2lix_translation_form.default.type.translatedEntity', 'getA2lixTranslationForm_Default_Type_TranslatedEntityService.php', true],
    'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsType' => ['privates', 'a2lix_translation_form.default.type.translations', 'getA2lixTranslationForm_Default_Type_TranslationsService.php', true],
    'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFieldsType' => ['privates', 'a2lix_translation_form.default.type.translationsFields', 'getA2lixTranslationForm_Default_Type_TranslationsFieldsService.php', true],
    'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFormsType' => ['privates', 'a2lix_translation_form.default.type.translationsForms', 'getA2lixTranslationForm_Default_Type_TranslationsFormsService.php', true],
    'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsLocalesSelectorType' => ['privates', 'a2lix_translation_form.default.type.translationsLocalesSelector', 'getA2lixTranslationForm_Default_Type_TranslationsLocalesSelectorService.php', true],
    'FM\\ElfinderBundle\\Form\\Type\\ElFinderType' => ['privates', 'fm_elfinder.form.type', 'getFmElfinder_Form_TypeService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\AdminType' => ['services', 'sonata.admin.form.type.admin', 'getSonata_Admin_Form_Type_AdminService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => ['services', 'sonata.admin.doctrine_orm.form.type.choice_field_mask', 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => ['services', 'sonata.admin.form.type.collection', 'getSonata_Admin_Form_Type_CollectionService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => ['services', 'sonata.admin.form.filter.type.choice', 'getSonata_Admin_Form_Filter_Type_ChoiceService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => ['services', 'sonata.admin.form.filter.type.daterange', 'getSonata_Admin_Form_Filter_Type_DaterangeService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => ['services', 'sonata.admin.form.filter.type.datetime_range', 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => ['services', 'sonata.admin.form.filter.type.datetime', 'getSonata_Admin_Form_Filter_Type_DatetimeService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => ['services', 'sonata.admin.form.filter.type.date', 'getSonata_Admin_Form_Filter_Type_DateService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => ['services', 'sonata.admin.form.filter.type.default', 'getSonata_Admin_Form_Filter_Type_DefaultService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => ['services', 'sonata.admin.form.filter.type.number', 'getSonata_Admin_Form_Filter_Type_NumberService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => ['services', 'sonata.admin.form.type.model_autocomplete', 'getSonata_Admin_Form_Type_ModelAutocompleteService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => ['services', 'sonata.admin.form.type.model_hidden', 'getSonata_Admin_Form_Type_ModelHiddenService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\ModelListType' => ['services', 'sonata.admin.form.type.model_list', 'getSonata_Admin_Form_Type_ModelListService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => ['services', 'sonata.admin.form.type.model_reference', 'getSonata_Admin_Form_Type_ModelReferenceService.php', true],
    'Sonata\\AdminBundle\\Form\\Type\\ModelType' => ['services', 'sonata.admin.form.type.model_choice', 'getSonata_Admin_Form_Type_ModelChoiceService.php', true],
    'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => ['privates', 'sonata.block.form.type.container_template', 'getSonata_Block_Form_Type_ContainerTemplateService.php', true],
    'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => ['privates', 'sonata.block.form.type.block', 'getSonata_Block_Form_Type_BlockService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\BooleanType' => ['privates', 'sonata.core.form.type.boolean', 'getSonata_Core_Form_Type_BooleanService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\CollectionType' => ['privates', 'sonata.core.form.type.collection', 'getSonata_Core_Form_Type_CollectionService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType' => ['privates', 'sonata.core.form.type.color_selector', 'getSonata_Core_Form_Type_ColorSelectorService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\ColorType' => ['privates', 'sonata.core.form.type.color', 'getSonata_Core_Form_Type_ColorService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\DatePickerType' => ['privates', 'sonata.core.form.type.date_picker', 'getSonata_Core_Form_Type_DatePickerService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType' => ['privates', 'sonata.core.form.type.date_range_picker', 'getSonata_Core_Form_Type_DateRangePickerService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\DateRangeType' => ['privates', 'sonata.core.form.type.date_range', 'getSonata_Core_Form_Type_DateRangeService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType' => ['privates', 'sonata.core.form.type.datetime_picker', 'getSonata_Core_Form_Type_DatetimePickerService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType' => ['privates', 'sonata.core.form.type.datetime_range_picker', 'getSonata_Core_Form_Type_DatetimeRangePickerService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType' => ['privates', 'sonata.core.form.type.datetime_range', 'getSonata_Core_Form_Type_DatetimeRangeService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\EqualType' => ['privates', 'sonata.core.form.type.equal', 'getSonata_Core_Form_Type_EqualService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType' => ['privates', 'sonata.core.form.type.array', 'getSonata_Core_Form_Type_ArrayService.php', true],
    'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType' => ['privates', 'sonata.core.form.type.translatable_choice', 'getSonata_Core_Form_Type_TranslatableChoiceService.php', true],
    'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService.php', true],
]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->load('getForm_TypeExtension_Form_TransformationFailureHandlingService.php'));
    yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
    yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
    yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
    yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
    yield 5 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->load('getForm_TypeExtension_Form_DataCollectorService.php'));
    yield 6 => ($this->services['sonata.admin.form.extension.field'] ?? $this->load('getSonata_Admin_Form_Extension_FieldService.php'));
    yield 7 => ($this->services['sonata.admin.form.extension.field.mopa'] ?? ($this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension()));
    yield 8 => ($this->privates['isometriks_spam.form.extension.type.timed_spam'] ?? $this->load('getIsometriksSpam_Form_Extension_Type_TimedSpamService.php'));
    yield 9 => ($this->privates['isometriks_spam.form.extension.type.honeypot'] ?? $this->load('getIsometriksSpam_Form_Extension_Type_HoneypotService.php'));
}, 10), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => new RewindableGenerator(function () {
    yield 0 => ($this->services['sonata.admin.form.extension.choice'] ?? ($this->services['sonata.admin.form.extension.choice'] = new \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension()));
}, 1)], new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
    yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
}, 2), NULL)], ($this->privates['form.resolved_type_factory'] ?? $this->load('getForm_ResolvedTypeFactoryService.php')));