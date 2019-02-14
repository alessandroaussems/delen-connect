<?php

namespace ContainerOvnAtdx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcApp_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'app.config' => 'getApp_ConfigService',
            'app.event_listener' => 'getApp_EventListenerService',
            'cache.app' => 'getCache_AppService',
            'cache.system' => 'getCache_SystemService',
            'doctrine' => 'getDoctrineService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'session' => 'getSessionService',
            'sonata.admin.global_template_registry' => 'getSonata_Admin_GlobalTemplateRegistryService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.global' => 'getSonata_Admin_Twig_GlobalService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
        ];
        $this->fileMap = [
            'App\\Controller\\BaseController' => 'getBaseControllerService.php',
            'App\\Controller\\CategoryController' => 'getCategoryControllerService.php',
            'App\\Controller\\SecurityController' => 'getSecurityControllerService.php',
            'Sonata\\AdminBundle\\Action\\DashboardAction' => 'getDashboardActionService.php',
            'Sonata\\AdminBundle\\Action\\SearchAction' => 'getSearchActionService.php',
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => 'getCreateClassCacheCommandService.php',
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => 'getExplainAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateAdminCommand' => 'getGenerateAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => 'getGenerateObjectAclCommandService.php',
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => 'getListAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => 'getSetupAclCommandService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'app.referer' => 'getApp_RefererService.php',
            'app.sitemap' => 'getApp_SitemapService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'getConsole_Command_DoctrineBundleDoctrinecachebundleCommandContainscommandService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'getConsole_Command_DoctrineBundleDoctrinecachebundleCommandDeletecommandService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'getConsole_Command_DoctrineBundleDoctrinecachebundleCommandFlushcommandService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'getConsole_Command_DoctrineBundleDoctrinecachebundleCommandStatscommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' => 'getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsdiffdoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' => 'getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsexecutedoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand' => 'getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsgeneratedoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand' => 'getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationslatestdoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand' => 'getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsmigratedoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand' => 'getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsstatusdoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' => 'getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsversiondoctrinecommandService.php',
            'console.command.sonata_blockbundle_command_debugblockscommand' => 'getConsole_Command_SonataBlockbundleCommandDebugblockscommandService.php',
            'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand' => 'getConsole_Command_SonataCorebundleCommandSonatadumpdoctrinemetacommandService.php',
            'console.command.sonata_corebundle_command_sonatalistformmappingcommand' => 'getConsole_Command_SonataCorebundleCommandSonatalistformmappingcommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php',
            'filesystem' => 'getFilesystemService.php',
            'fm_elfinder.loader' => 'getFmElfinder_LoaderService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.type.birthday' => 'getForm_Type_BirthdayService.php',
            'form.type.button' => 'getForm_Type_ButtonService.php',
            'form.type.checkbox' => 'getForm_Type_CheckboxService.php',
            'form.type.collection' => 'getForm_Type_CollectionService.php',
            'form.type.country' => 'getForm_Type_CountryService.php',
            'form.type.currency' => 'getForm_Type_CurrencyService.php',
            'form.type.date' => 'getForm_Type_DateService.php',
            'form.type.datetime' => 'getForm_Type_DatetimeService.php',
            'form.type.email' => 'getForm_Type_EmailService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'form.type.hidden' => 'getForm_Type_HiddenService.php',
            'form.type.integer' => 'getForm_Type_IntegerService.php',
            'form.type.language' => 'getForm_Type_LanguageService.php',
            'form.type.locale' => 'getForm_Type_LocaleService.php',
            'form.type.money' => 'getForm_Type_MoneyService.php',
            'form.type.number' => 'getForm_Type_NumberService.php',
            'form.type.password' => 'getForm_Type_PasswordService.php',
            'form.type.percent' => 'getForm_Type_PercentService.php',
            'form.type.radio' => 'getForm_Type_RadioService.php',
            'form.type.range' => 'getForm_Type_RangeService.php',
            'form.type.repeated' => 'getForm_Type_RepeatedService.php',
            'form.type.reset' => 'getForm_Type_ResetService.php',
            'form.type.search' => 'getForm_Type_SearchService.php',
            'form.type.submit' => 'getForm_Type_SubmitService.php',
            'form.type.text' => 'getForm_Type_TextService.php',
            'form.type.textarea' => 'getForm_Type_TextareaService.php',
            'form.type.time' => 'getForm_Type_TimeService.php',
            'form.type.timezone' => 'getForm_Type_TimezoneService.php',
            'form.type.url' => 'getForm_Type_UrlService.php',
            'knp_menu.factory' => 'getKnpMenu_FactoryService.php',
            'php_translation.cache_clearer' => 'getPhpTranslation_CacheClearerService.php',
            'php_translation.catalogue_counter' => 'getPhpTranslation_CatalogueCounterService.php',
            'php_translation.catalogue_fetcher' => 'getPhpTranslation_CatalogueFetcherService.php',
            'php_translation.catalogue_manager' => 'getPhpTranslation_CatalogueManagerService.php',
            'php_translation.catalogue_writer' => 'getPhpTranslation_CatalogueWriterService.php',
            'php_translation.configuration_manager' => 'getPhpTranslation_ConfigurationManagerService.php',
            'php_translation.importer' => 'getPhpTranslation_ImporterService.php',
            'php_translation.storage.app' => 'getPhpTranslation_Storage_AppService.php',
            'php_translation.storage_manager' => 'getPhpTranslation_StorageManagerService.php',
            'php_translator.console.delete_obsolete' => 'getPhpTranslator_Console_DeleteObsoleteService.php',
            'php_translator.console.download' => 'getPhpTranslator_Console_DownloadService.php',
            'php_translator.console.extract' => 'getPhpTranslator_Console_ExtractService.php',
            'php_translator.console.status' => 'getPhpTranslator_Console_StatusService.php',
            'php_translator.console.sync' => 'getPhpTranslator_Console_SyncService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'serializer' => 'getSerializerService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'slot_mandrill.client' => 'getSlotMandrill_ClientService.php',
            'slot_mandrill.dispatcher' => 'getSlotMandrill_DispatcherService.php',
            'sonata.admin.action.append_form_field_element' => 'getSonata_Admin_Action_AppendFormFieldElementService.php',
            'sonata.admin.action.get_short_object_description' => 'getSonata_Admin_Action_GetShortObjectDescriptionService.php',
            'sonata.admin.action.retrieve_autocomplete_items' => 'getSonata_Admin_Action_RetrieveAutocompleteItemsService.php',
            'sonata.admin.action.retrieve_form_field_element' => 'getSonata_Admin_Action_RetrieveFormFieldElementService.php',
            'sonata.admin.action.set_object_field_value' => 'getSonata_Admin_Action_SetObjectFieldValueService.php',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService.php',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService.php',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService.php',
            'sonata.admin.block.stats' => 'getSonata_Admin_Block_StatsService.php',
            'sonata.admin.breadcrumbs_builder' => 'getSonata_Admin_BreadcrumbsBuilderService.php',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService.php',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService.php',
            'sonata.admin.doctrine_orm.form.type.choice_field_mask' => 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService.php',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService.php',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService.php',
            'sonata.admin.form.extension.choice' => 'getSonata_Admin_Form_Extension_ChoiceService.php',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService.php',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService.php',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService.php',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService.php',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService.php',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService.php',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService.php',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService.php',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService.php',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService.php',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService.php',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService.php',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService.php',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService.php',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService.php',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService.php',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService.php',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService.php',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService.php',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService.php',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService.php',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService.php',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService.php',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService.php',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService.php',
            'sonata.admin.menu.matcher.voter.active' => 'getSonata_Admin_Menu_Matcher_Voter_ActiveService.php',
            'sonata.admin.menu.matcher.voter.admin' => 'getSonata_Admin_Menu_Matcher_Voter_AdminService.php',
            'sonata.admin.menu.matcher.voter.children' => 'getSonata_Admin_Menu_Matcher_Voter_ChildrenService.php',
            'sonata.admin.menu_builder' => 'getSonata_Admin_MenuBuilderService.php',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService.php',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService.php',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService.php',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService.php',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService.php',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService.php',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService.php',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService.php',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService.php',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService.php',
            'sonata.admin.orm.filter.type.model_autocomplete' => 'getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService.php',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService.php',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService.php',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService.php',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService.php',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService.php',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService.php',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService.php',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService.php',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService.php',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService.php',
            'sonata.admin.sidebar_menu' => 'getSonata_Admin_SidebarMenuService.php',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService.php',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService.php',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService.php',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService.php',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService.php',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService.php',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService.php',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService.php',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService.php',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService.php',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService.php',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService.php',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService.php',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService.php',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService.php',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService.php',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService.php',
            'templating' => 'getTemplatingService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'php_translation.storage' => 'php_translation.storage.app',
            'php_translation.storage.default' => 'php_translation.storage.app',
        ];

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'/src/Service/Config.php';
            include_once $this->targetDirs[3].'/src/Service/EventListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/TraceableArgumentResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestStack.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/FileLocatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/FileLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Config/FileLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Cache/CacheInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/TraceableAdapter.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Cache/CacheTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/SessionInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Session.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Storage/NativeSessionStorage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Flash/FlashBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Flash/FlashBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Service/ServiceLocatorTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SaveSessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/TemplateNameParserInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/TemplateNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/TemplateNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/Loader/TemplateLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validation.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Translation/LocaleAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Translation/TranslatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/MessageSelector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/TranslatorListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/Profiler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/FileProfilerStorage.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Logger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/LateDataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/DataCollector/ValidatorDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/AjaxDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/DataCollector/CacheDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/DataCollector/SecurityDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/DataCollector/DoctrineDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Profiler/DataCollector/BlockDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/ConfigDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ProfilerListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/RequestDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/DataCollector/RequestDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/stopwatch/Stopwatch.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Processor/DebugProcessor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/property-access/PropertyAccessor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ArrayTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Environment.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/LoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExistsLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/SourceContextLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Loader/Filesystem.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/Loader/FilesystemLoader.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExtensionInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Profiler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Packages.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/PackageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Package.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/PathPackage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/ContextInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once $this->targetDirs[3].'/src/Twig/FunctionsExtension.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Debug.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/CliDumper.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/GlobalsInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/FormTypeExtension.php';
            include_once $this->targetDirs[3].'/vendor/twig/extensions/lib/Twig/Extensions/Extension/Text.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/DeprecatedTextExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/StatusExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/DeprecatedTemplateExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/TemplateExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Twig/Extension/BlockExtension.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Twig/MenuExtension.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Twig/Helper.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/PsrProvider.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Util/MenuManipulator.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Twig/Extension/TemplateRegistryExtension.php';
            include_once $this->targetDirs[3].'/vendor/helios-ag/fm-elfinder-bundle/Twig/Extension/FMElfinderExtension.php';
            include_once $this->targetDirs[3].'/vendor/php-translation/symfony-bundle/Twig/TranslationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/AppVariable.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/RuntimeLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ContainerRuntimeLoader.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Twig/GlobalVariables.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Profiler/Profile.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationCheckerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationChecker.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationProviderManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/FirewallMapInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/LogoutUrlGenerator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/RememberMe/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/TraceableAccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/RegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Component/Status/StatusClassRendererInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/FlashMessage/FlashManager.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/FlashMessageExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Model/Adapter/AdapterInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Model/Adapter/AdapterChain.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Model/Adapter/DoctrineORMAdapter.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockServiceManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockServiceManager.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockContextManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockContextManager.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockLoaderChain.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Loader/ServiceLoader.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockRendererInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockRenderer.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Exception/Strategy/StrategyManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Exception/Strategy/StrategyManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/Helper/HelperInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/Helper/Helper.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Templating/Helper/BlockHelper.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Cache/HttpCacheHandlerInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Cache/HttpCacheHandler.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/MatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/Matcher.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/MenuProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/ChainProvider.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Twig/Extension/SonataAdminExtension.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Admin/Pool.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Twig/GlobalVariables.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Templating/MutableTemplateRegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/DataCollectorTranslator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/LoggingTranslator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RouterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Service/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validator/TraceableValidator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'app.config' shared autowired service.
     *
     * @return \App\Service\Config
     */
    protected function getApp_ConfigService()
    {
        return $this->services['app.config'] = new \App\Service\Config($this);
    }

    /**
     * Gets the public 'app.event_listener' shared autowired service.
     *
     * @return \App\Service\EventListener
     */
    protected function getApp_EventListenerService()
    {
        return $this->services['app.event_listener'] = new \App\Service\EventListener($this, ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('s+lbLXOs7m', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('DxlprsxtEb', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? ($this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())));
        $a->pushHandler(new \Monolog\Handler\NullHandler());

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a);

        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['app.event_listener'] ?? $this->getApp_EventListenerService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->services['app.event_listener'] ?? $this->getApp_EventListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->services['app.event_listener'] ?? $this->getApp_EventListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sonata.block.cache.handler.default'] ?? ($this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session.save_listener'] ?? ($this->privates['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener()));
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [])));
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [])));
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $b = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->load('getDebug_ArgumentResolver_RequestAttributeService.php'));
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->load('getDebug_ArgumentResolver_RequestService.php'));
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->load('getDebug_ArgumentResolver_SessionService.php'));
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->load('getDebug_Security_UserValueResolverService.php'));
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->load('getDebug_ArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->load('getDebug_ArgumentResolver_DefaultService.php'));
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->load('getDebug_ArgumentResolver_VariadicService.php'));
        }, 7)), $a);

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), $a, $b), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $b);
    }

    /**
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        return $this->services['knp_menu.matcher'] = new \Knp\Menu\Matcher\Matcher(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.voter.router'] ?? $this->load('getKnpMenu_Voter_RouterService.php'));
            yield 1 => ($this->services['sonata.admin.menu.matcher.voter.admin'] ?? $this->load('getSonata_Admin_Menu_Matcher_Voter_AdminService.php'));
            yield 2 => ($this->services['sonata.admin.menu.matcher.voter.active'] ?? ($this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter()));
        }, 3));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? ($this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $c->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $c->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $c->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $c->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $d = ($this->services['translator'] ?? $this->getTranslatorService());
        $e = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $e->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $f = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $f->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/srcApp_KernelDevDebugContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService())));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($c);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($d));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($e);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($d));
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector(($this->privates['sonata.block.templating.helper'] ?? $this->getSonata_Block_Templating_HelperService()), $this->parameters['sonata.block.container.types']));
        $instance->add($f);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, 'kernel:loadRoutes', ['cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcApp_KernelDevDebugContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcApp_KernelDevDebugContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0')), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'sonata.admin.global_template_registry' shared service.
     *
     * @return \Sonata\AdminBundle\Templating\TemplateRegistry
     */
    protected function getSonata_Admin_GlobalTemplateRegistryService()
    {
        return $this->services['sonata.admin.global_template_registry'] = new \Sonata\AdminBundle\Templating\TemplateRegistry($this->parameters['sonata.admin.configuration.templates']);
    }

    /**
     * Gets the public 'sonata.admin.pool' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'Delen-connect', 'images/delenconnect', ['title_mode' => 'single_image', 'html5_validate' => true, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'sort_admins' => false, 'js_debug' => false, 'pager_links' => NULL, 'form_type' => 'standard', 'default_group' => 'default', 'default_label_catalogue' => 'SonataAdminBundle', 'default_icon' => '<i class="fa fa-folder"></i>', 'dropdown_number_groups_per_colums' => 2, 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'javascripts' => [0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 4 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js', 20 => 'bundles/sonataadmin/sidebar.js'], 'stylesheets' => [0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css'], 'role_admin' => 'ROLE_SONATA_ADMIN', 'role_super_admin' => 'ROLE_SUPER_ADMIN', 'search' => true], ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));

        $instance->setTemplateRegistry(($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()));
        $instance->setAdminServiceIds([]);
        $instance->setAdminGroups([]);
        $instance->setAdminClasses([]);

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.twig.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        $this->services['sonata.admin.twig.extension'] = $instance = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->services['translator'] ?? $this->getTranslatorService()), $this, ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));

        $instance->setXEditableTypeMapping($this->parameters['sonata.admin.twig.extension.x_editable_type_mapping']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.twig.global' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\GlobalVariables
     */
    protected function getSonata_Admin_Twig_GlobalService()
    {
        return $this->services['sonata.admin.twig.global'] = new \Sonata\AdminBundle\Twig\GlobalVariables(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /**
     * Gets the public 'sonata.block.context_manager.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager(new \Sonata\BlockBundle\Block\BlockLoaderChain([0 => new \Sonata\BlockBundle\Block\Loader\ServiceLoader([0 => 'sonata.admin.block.admin_list', 1 => 'sonata.admin.block.search_result', 'sonata.block.service.container' => ['context' => []], 'sonata.block.service.empty' => ['context' => []], 'sonata.block.service.text' => ['context' => []], 'sonata.block.service.rss' => ['context' => []], 'sonata.block.service.menu' => ['context' => []], 'sonata.block.service.template' => ['context' => []], 'sonata.admin.block.admin_list' => ['context' => []], 'sonata.admin.block.search_result' => ['context' => []], 'sonata.admin.block.stats' => ['context' => []]])]), ($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $this->parameters['sonata_block.cache_blocks'], ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the public 'sonata.block.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

        $instance->add('sonata.block.service.container', 'sonata.block.service.container', []);
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', []);
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', []);
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', []);
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', []);
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', []);
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', [0 => 'admin']);
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', [0 => 'admin']);
        $instance->add('sonata.admin.block.stats', 'sonata.admin.block.stats', []);

        return $instance;
    }

    /**
     * Gets the public 'sonata.block.renderer.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        $a = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, ['debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'], ['inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'], [], []);
        $a->setDefaultFilter('debug_only');
        $a->setDefaultRenderer('throw');

        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $a, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), true);
    }

    /**
     * Gets the public 'sonata.core.flashmessage.manager' shared service.
     *
     * @return \Sonata\CoreBundle\FlashMessage\FlashManager
     */
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\CoreBundle\FlashMessage\FlashManager(($this->services['session'] ?? $this->getSessionService()), ($this->services['translator'] ?? $this->getTranslatorService()), ['success' => ['success' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_success' => ['domain' => 'SonataAdminBundle'], 'sonata_user_success' => ['domain' => 'SonataUserBundle'], 'fos_user_success' => ['domain' => 'FOSUserBundle']], 'warning' => ['warning' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_info' => ['domain' => 'SonataAdminBundle']], 'danger' => ['error' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_error' => ['domain' => 'SonataAdminBundle'], 'sonata_user_error' => ['domain' => 'SonataUserBundle']]], ['success' => 'success', 'warning' => 'warning', 'danger' => 'danger']);
    }

    /**
     * Gets the public 'sonata.core.flashmessage.twig.extension' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension(($this->services['sonata.core.flashmessage.manager'] ?? $this->getSonata_Core_Flashmessage_ManagerService()));
    }

    /**
     * Gets the public 'sonata.core.model.adapter.chain' shared service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\AdapterChain
     */
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter(($this->services['doctrine'] ?? $this->getDoctrineService())));

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('translation');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? ($this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()), $a));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()), ($this->privates['templating.name_parser'] ?? ($this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), $this->targetDirs[3]);
        $a->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));
        $a->addPath(($this->targetDirs[3].'/templates'));
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath(($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/views'), 'SonataDatagrid');
        $a->addPath(($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/views'), '!SonataDatagrid');
        $a->addPath(($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/views'), 'SonataCore');
        $a->addPath(($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/views'), '!SonataCore');
        $a->addPath(($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/views'), 'SonataBlock');
        $a->addPath(($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/views'), '!SonataBlock');
        $a->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), 'KnpMenu');
        $a->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), '!KnpMenu');
        $a->addPath(($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/views'), 'SonataAdmin');
        $a->addPath(($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/views'), '!SonataAdmin');
        $a->addPath(($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views'), 'SonataDoctrineORMAdmin');
        $a->addPath(($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views'), '!SonataDoctrineORMAdmin');
        $a->addPath(($this->targetDirs[3].'/vendor/helios-ag/fm-elfinder-bundle/Resources/views'), 'FMElfinder');
        $a->addPath(($this->targetDirs[3].'/vendor/helios-ag/fm-elfinder-bundle/Resources/views'), '!FMElfinder');
        $a->addPath(($this->targetDirs[3].'/vendor/a2lix/translation-form-bundle/Resources/views'), 'A2lixTranslationForm');
        $a->addPath(($this->targetDirs[3].'/vendor/a2lix/translation-form-bundle/Resources/views'), '!A2lixTranslationForm');
        $a->addPath(($this->targetDirs[3].'/vendor/php-translation/symfony-bundle/Resources/views'), 'Translation');
        $a->addPath(($this->targetDirs[3].'/vendor/php-translation/symfony-bundle/Resources/views'), '!Translation');
        $a->addPath(($this->targetDirs[3].'/templates'));
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['paths' => [($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views') => NULL, ($this->targetDirs[3].'/templates') => NULL], 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => [0 => 'form_div_layout.html.twig'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'debug' => true, 'default_path' => ($this->targetDirs[3].'/templates'), 'date' => ['format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL], 'number_format' => ['decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',']]);

        $b = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $c = ($this->services['translator'] ?? $this->getTranslatorService());
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $e = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $f = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $f->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $e]);
        $g = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();
        $g->addStatusService(($this->services['sonata.core.flashmessage.manager'] ?? $this->getSonata_Core_Flashmessage_ManagerService()));
        $h = new \Knp\Menu\Util\MenuManipulator();
        $i = ($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService());
        $j = new \Symfony\Bridge\Twig\AppVariable();
        $j->setEnvironment('dev');
        $j->setDebug(true);
        if ($this->has('security.token_storage')) {
            $j->setTokenStorage(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
        }
        if ($this->has('request_stack')) {
            $j->setRequestStack($d);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($d, '', false)), [])));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($e, ($this->targetDirs[3].'/src'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \App\Twig\FunctionsExtension($this));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($f));
        $instance->addExtension(($this->services['sonata.core.flashmessage.twig.extension'] ?? $this->getSonata_Core_Flashmessage_Twig_ExtensionService()));
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\FormTypeExtension('standard'));
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension());
        $instance->addExtension($g);
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\DeprecatedTemplateExtension());
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(true, $c, ($this->services['sonata.core.model.adapter.chain'] ?? $this->getSonata_Core_Model_Adapter_ChainService())));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension(($this->privates['sonata.block.templating.helper'] ?? $this->getSonata_Block_Templating_HelperService())));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'list' => ['privates', 'knp_menu.renderer.list', 'getKnpMenu_Renderer_ListService.php', true],
            'twig' => ['privates', 'knp_menu.renderer.twig', 'getKnpMenu_Renderer_TwigService.php', true],
        ]), 'twig'), ($this->privates['knp_menu.menu_provider.chain'] ?? $this->getKnpMenu_MenuProvider_ChainService()), $h, $i), $i, $h));
        $instance->addExtension(($this->services['sonata.admin.twig.extension'] ?? $this->getSonata_Admin_Twig_ExtensionService()));
        $instance->addExtension(new \Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension(($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), $this));
        $instance->addExtension(new \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension($instance));
        $instance->addExtension(new \Translation\Bundle\Twig\TranslationExtension($c, true));
        $instance->addGlobal('app', $j);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
        ])));
        $instance->addGlobal('config', ($this->services['app.config'] ?? ($this->services['app.config'] = new \App\Service\Config($this))));
        $instance->addGlobal('ento_intro_placeholder', 'images/ento/ento_intro-placeholder.jpg');
        $instance->addGlobal('sonata_block', new \Sonata\BlockBundle\Twig\GlobalVariables(['block_base' => '@SonataBlock/Block/block_base.html.twig', 'block_container' => '@SonataBlock/Block/block_container.html.twig']));
        $instance->addGlobal('sonata_admin', ($this->services['sonata.admin.twig.global'] ?? $this->getSonata_Admin_Twig_GlobalService()));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('-gl+LePPSK', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('1MkrLZoDOI', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('fIC9qxdHzA', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? ($this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, -1, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $this->targetDirs[3], function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->load('getDebug_FileLinkFormatter_UrlFormatService.php'));
        });
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load('getSecurity_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()));
            yield 2 => ($this->privates['security.access.expression_voter'] ?? $this->load('getSecurity_Access_ExpressionVoterService.php'));
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'knp_menu.menu_provider.chain' shared service.
     *
     * @return \Knp\Menu\Provider\ChainProvider
     */
    protected function getKnpMenu_MenuProvider_ChainService()
    {
        return $this->privates['knp_menu.menu_provider.chain'] = new \Knp\Menu\Provider\ChainProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.menu_provider.lazy'] ?? $this->load('getKnpMenu_MenuProvider_LazyService.php'));
            yield 1 => ($this->privates['knp_menu.menu_provider.builder_alias'] ?? $this->load('getKnpMenu_MenuProvider_BuilderAliasService.php'));
            yield 2 => ($this->privates['sonata.admin.menu.group_provider'] ?? $this->load('getSonata_Admin_Menu_GroupProviderService.php'));
        }, 3));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'nl', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/log/dev.log'), 100, true, NULL);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? ($this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? ($this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? ($this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->load('getSecurity_Authentication_Provider_Dao_MainService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 2), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService.php', true],
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['security.request_matcher.zfHj2lW'] ?? ($this->privates['security.request_matcher.zfHj2lW'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.main' => NULL;
        }, 2));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));

        $instance->registerListener('main', 'logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ]));
    }

    /**
     * Gets the private 'sonata.block.templating.helper' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->privates['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $this->parameters['sonata_block.cache_blocks'], ($this->services['sonata.block.renderer.default'] ?? $this->getSonata_Block_Renderer_DefaultService()), ($this->services['sonata.block.context_manager.default'] ?? $this->getSonata_Block_ContextManager_DefaultService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['sonata.block.cache.handler.default'] ?? ($this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->privates['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[3].'/src/Resources'), [0 => ($this->targetDirs[3].'/src')]))), $this->targetDirs[0]);
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'php_translation.storage.xlf_loader' => ['privates', 'php_translation.storage.xlf_loader', 'getPhpTranslation_Storage_XlfLoaderService.php', true],
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'nl', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json'], 'php_translation.storage.xlf_loader' => [0 => 'xlf', 1 => 'xliff']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.af.xlf')], 'ar' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ar.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ar.xliff')], 'az' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.az.xlf')], 'bg' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.bg.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.bg.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.bg.xliff')], 'ca' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ca.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ca.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ca.xliff')], 'cs' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.cs.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.cs.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.cs.xliff')], 'cy' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.da.xlf')], 'de' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.de.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.de.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.de.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.de.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.de.xliff')], 'el' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.el.xlf')], 'en' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.en.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.en.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.en.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.en.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.en.xliff')], 'es' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.es.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.es.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.es.xliff')], 'et' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.et.xlf')], 'eu' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.eu.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.eu.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.eu.xliff')], 'fa' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.fa.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.fa.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.fa.xliff')], 'fi' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.fi.xliff')], 'fr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.fr.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.fr.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.fr.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.fr.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.fr.xliff')], 'gl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.gl.xlf')], 'he' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.he.xlf')], 'hr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.hr.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.hr.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.hr.xliff')], 'hu' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.hu.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.hu.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.hu.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.hu.xliff')], 'hy' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hy.xlf')], 'id' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.id.xlf')], 'it' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.it.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.it.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.it.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.it.xliff')], 'ja' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ja.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ja.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ja.xliff')], 'lb' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.lb.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.lb.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lb.xliff')], 'lt' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.lt.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.lt.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lt.xliff')], 'lv' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lv.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lv.xliff')], 'mn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.mn.xlf')], 'nb' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nb.xlf')], 'nl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.nl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.nl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.nl.xliff')], 'nn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nn.xlf')], 'no' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.no.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.no.xliff')], 'pl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.pl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.pl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pl.xliff')], 'pt' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.pt.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.pt.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pt.xliff')], 'pt_BR' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.pt_BR.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.pt_BR.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pt_BR.xliff')], 'ro' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ro.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ro.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ro.xliff')], 'ru' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ru.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ru.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.ru.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ru.xliff')], 'sk' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.sk.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.sk.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sk.xliff')], 'sl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.sl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.sl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sl.xliff')], 'sq' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sv.xlf')], 'th' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.th.xlf')], 'tl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.tl.xlf')], 'tr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.tr.xliff')], 'uk' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.uk.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.uk.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.uk.xliff')], 'vi' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.vi.xlf')], 'zh_CN' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.zh_CN.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.zh_CN.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.zh_CN.xliff')], 'zh_TW' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')], 'pt_PT' => [0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_PT.xlf')], 'ua' => [0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ua.xlf')], 'sv_SE' => [0 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sv_SE.xliff')], 'zh_HK' => [0 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.zh_HK.xliff')]]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales($this->parameters['a2lix_translation_form.locales']);

        return $instance;
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
        $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/config/validation.xml')]);
        $instance->addYamlMappings([0 => ($this->targetDirs[3].'/vendor/php-translation/symfony-bundle/Resources/config/validation.yml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);

        return $instance;
    }

    /**
     * Gets the private 'validator.validator_factory' shared service.
     *
     * @return \Symfony\Component\Validator\ContainerConstraintValidatorFactory
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->privates['validator.validator_factory'] = new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Sonata\\CoreBundle\\Validator\\InlineValidator' => ['services', 'sonata.admin.validator.inline', 'getSonata_Admin_Validator_InlineService.php', true],
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'sonata.admin.validator.inline' => ['services', 'sonata.admin.validator.inline', 'getSonata_Admin_Validator_InlineService.php', true],
            'sonata.core.validator.inline' => ['privates', 'sonata.core.validator.inline', 'getSonata_Core_Validator_InlineService.php', true],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
        ]));
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, 'bottom', ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'twig.default_path' => false,
        'doctrine.orm.proxy_dir' => false,
        'doctrine_migrations.dir_name' => false,
        'php_translation.webui.file_base_path' => false,
    ];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/log'); break;
            case 'kernel.bundles_metadata': $value = [
                'FrameworkBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'SecurityBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'DoctrineCacheBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'DoctrineBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'MonologBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'MakerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'WebServerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ],
                'SonataDatagridBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src'),
                    'namespace' => 'Sonata\\DatagridBundle',
                ],
                'SonataCoreBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src'),
                    'namespace' => 'Sonata\\CoreBundle',
                ],
                'SonataBlockBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src'),
                    'namespace' => 'Sonata\\BlockBundle',
                ],
                'KnpMenuBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ],
                'SonataAdminBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src'),
                    'namespace' => 'Sonata\\AdminBundle',
                ],
                'SonataDoctrineORMAdminBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src'),
                    'namespace' => 'Sonata\\DoctrineORMAdminBundle',
                ],
                'DoctrineBehaviorsBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/doctrine-behaviors/src/Bundle'),
                    'namespace' => 'Knp\\DoctrineBehaviors\\Bundle',
                ],
                'FMElfinderBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/helios-ag/fm-elfinder-bundle'),
                    'namespace' => 'FM\\ElfinderBundle',
                ],
                'SlotMandrillBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/slot/mandrill-bundle/Slot/MandrillBundle'),
                    'namespace' => 'Slot\\MandrillBundle',
                ],
                'A2lixTranslationFormBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/a2lix/translation-form-bundle'),
                    'namespace' => 'A2lix\\TranslationFormBundle',
                ],
                'TranslationBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/php-translation/symfony-bundle'),
                    'namespace' => 'Translation\\Bundle',
                ],
                'IsometriksSpamBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/isometriks/spam-bundle'),
                    'namespace' => 'Isometriks\\Bundle\\SpamBundle',
                ],
            ]; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/srcApp_KernelDevDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/src/Migrations'); break;
            case 'php_translation.webui.file_base_path': $value = ($this->targetDirs[3].'/'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'SonataDatagridBundle' => 'Sonata\\DatagridBundle\\SonataDatagridBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'DoctrineBehaviorsBundle' => 'Knp\\DoctrineBehaviors\\Bundle\\DoctrineBehaviorsBundle',
                'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle',
                'SlotMandrillBundle' => 'Slot\\MandrillBundle\\SlotMandrillBundle',
                'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle',
                'TranslationBundle' => 'Translation\\Bundle\\TranslationBundle',
                'IsometriksSpamBundle' => 'Isometriks\\Bundle\\SpamBundle\\IsometriksSpamBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelDevDebugContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'env(DATABASE_URL)' => '',
            'mail_to' => 'robbertluit@hotmail.com',
            'locale' => 'nl',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'nl',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ],
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
            ],
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'srcApp_KernelDevDebugContainerUrlMatcher',
            'router.options.generator.cache_class' => 'srcApp_KernelDevDebugContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel:loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelDevDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => [
                0 => '@FMElfinder/Form/elfinder_widget.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => '@A2lixTranslationForm/default.html.twig',
            ],
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => [
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ],
            'sonata_block.blocks' => [
                'sonata.admin.block.admin_list' => [
                    'contexts' => [
                        0 => 'admin',
                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.admin.block.search_result' => [
                    'contexts' => [
                        0 => 'admin',
                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
            ],
            'sonata_block.blocks_by_class' => [

            ],
            'sonata_blocks.block_types' => [
                0 => 'sonata.admin.block.admin_list',
                1 => 'sonata.admin.block.search_result',
            ],
            'sonata_block.cache_blocks' => [
                'by_type' => [
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.admin.block.search_result' => 'sonata.cache.noop',
                ],
            ],
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => [

            ],
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => [

            ],
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.admin.twig.extension.x_editable_type_mapping' => [
                'choice' => 'select',
                'boolean' => 'select',
                'text' => 'text',
                'textarea' => 'textarea',
                'html' => 'textarea',
                'email' => 'email',
                'string' => 'text',
                'smallint' => 'text',
                'bigint' => 'text',
                'integer' => 'number',
                'decimal' => 'number',
                'currency' => 'number',
                'percent' => 'number',
                'url' => 'url',
                'date' => 'date',
            ],
            'sonata.admin.configuration.global_search.empty_boxes' => 'show',
            'sonata.admin.configuration.global_search.case_sensitive' => true,
            'sonata.admin.configuration.templates' => [
                'user_block' => '@SonataAdmin/Core/user_block.html.twig',
                'add_block' => '@SonataAdmin/Core/add_block.html.twig',
                'layout' => '@SonataAdmin/standard_layout.html.twig',
                'ajax' => '@SonataAdmin/ajax_layout.html.twig',
                'dashboard' => '@SonataAdmin/Core/dashboard.html.twig',
                'search' => '@SonataAdmin/Core/search.html.twig',
                'list' => '@SonataAdmin/CRUD/list.html.twig',
                'filter' => '@SonataAdmin/Form/filter_admin_fields.html.twig',
                'show' => '@SonataAdmin/CRUD/show.html.twig',
                'show_compare' => '@SonataAdmin/CRUD/show_compare.html.twig',
                'edit' => '@SonataAdmin/CRUD/edit.html.twig',
                'preview' => '@SonataAdmin/CRUD/preview.html.twig',
                'history' => '@SonataAdmin/CRUD/history.html.twig',
                'acl' => '@SonataAdmin/CRUD/acl.html.twig',
                'history_revision_timestamp' => '@SonataAdmin/CRUD/history_revision_timestamp.html.twig',
                'action' => '@SonataAdmin/CRUD/action.html.twig',
                'select' => '@SonataAdmin/CRUD/list__select.html.twig',
                'list_block' => '@SonataAdmin/Block/block_admin_list.html.twig',
                'search_result_block' => '@SonataAdmin/Block/block_search_result.html.twig',
                'short_object_description' => '@SonataAdmin/Helper/short-object-description.html.twig',
                'delete' => '@SonataAdmin/CRUD/delete.html.twig',
                'batch' => '@SonataAdmin/CRUD/list__batch.html.twig',
                'batch_confirmation' => '@SonataAdmin/CRUD/batch_confirmation.html.twig',
                'inner_list_row' => '@SonataAdmin/CRUD/list_inner_row.html.twig',
                'outer_list_rows_mosaic' => '@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig',
                'outer_list_rows_list' => '@SonataAdmin/CRUD/list_outer_rows_list.html.twig',
                'outer_list_rows_tree' => '@SonataAdmin/CRUD/list_outer_rows_tree.html.twig',
                'base_list_field' => '@SonataAdmin/CRUD/base_list_field.html.twig',
                'pager_links' => '@SonataAdmin/Pager/links.html.twig',
                'pager_results' => '@SonataAdmin/Pager/results.html.twig',
                'tab_menu_template' => '@SonataAdmin/Core/tab_menu_template.html.twig',
                'knp_menu_template' => '@SonataAdmin/Menu/sonata_menu.html.twig',
                'action_create' => '@SonataAdmin/CRUD/dashboard__action_create.html.twig',
                'button_acl' => '@SonataAdmin/Button/acl_button.html.twig',
                'button_create' => '@SonataAdmin/Button/create_button.html.twig',
                'button_edit' => '@SonataAdmin/Button/edit_button.html.twig',
                'button_history' => '@SonataAdmin/Button/history_button.html.twig',
                'button_list' => '@SonataAdmin/Button/list_button.html.twig',
                'button_show' => '@SonataAdmin/Button/show_button.html.twig',
            ],
            'sonata.admin.configuration.admin_services' => [

            ],
            'sonata.admin.configuration.dashboard_groups' => [

            ],
            'sonata.admin.configuration.dashboard_blocks' => [
                0 => [
                    'type' => 'sonata.admin.block.admin_list',
                    'position' => 'left',
                    'roles' => [

                    ],
                    'settings' => [

                    ],
                    'class' => 'col-md-4',
                ],
            ],
            'sonata.admin.configuration.sort_admins' => false,
            'sonata.admin.configuration.default_group' => 'default',
            'sonata.admin.configuration.default_label_catalogue' => 'SonataAdminBundle',
            'sonata.admin.configuration.default_icon' => '<i class="fa fa-folder"></i>',
            'sonata.admin.configuration.breadcrumbs' => [
                'child_admin_route' => 'edit',
            ],
            'sonata.admin.security.acl_user_manager' => NULL,
            'sonata.admin.configuration.security.role_admin' => 'ROLE_SONATA_ADMIN',
            'sonata.admin.configuration.security.role_super_admin' => 'ROLE_SUPER_ADMIN',
            'sonata.admin.configuration.security.information' => [

            ],
            'sonata.admin.configuration.security.admin_permissions' => [
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ],
            'sonata.admin.configuration.security.object_permissions' => [
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ],
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => [
                'admins' => [

                ],
                'excludes' => [

                ],
                'implements' => [

                ],
                'extends' => [

                ],
                'instanceof' => [

                ],
                'uses' => [

                ],
            ],
            'sonata.admin.configuration.filters.persist' => true,
            'sonata.admin.configuration.filters.persister' => 'sonata.admin.filter_persister.session',
            'sonata.admin.configuration.show.mosaic.button' => false,
            'sonata.admin.configuration.translate_group_label' => false,
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => [
                'types' => [
                    'list' => [
                        'array' => '@SonataAdmin/CRUD/list_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/list_boolean.html.twig',
                        'date' => '@SonataAdmin/CRUD/list_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/list_time.html.twig',
                        'datetime' => '@SonataAdmin/CRUD/list_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'textarea' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'email' => '@SonataAdmin/CRUD/list_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/list_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'smallint' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'bigint' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'integer' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'decimal' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'identifier' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'currency' => '@SonataAdmin/CRUD/list_currency.html.twig',
                        'percent' => '@SonataAdmin/CRUD/list_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/list_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/list_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/list_html.html.twig',
                    ],
                    'show' => [
                        'array' => '@SonataAdmin/CRUD/show_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/show_boolean.html.twig',
                        'date' => '@SonataAdmin/CRUD/show_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/show_time.html.twig',
                        'datetime' => '@SonataAdmin/CRUD/show_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'email' => '@SonataAdmin/CRUD/show_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/show_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'smallint' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'bigint' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'integer' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'decimal' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'currency' => '@SonataAdmin/CRUD/show_currency.html.twig',
                        'percent' => '@SonataAdmin/CRUD/show_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/show_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/show_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/show_html.html.twig',
                    ],
                ],
                'form' => [
                    0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig',
                ],
                'filter' => [
                    0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig',
                ],
            ],
            'knp.doctrine_behaviors.reflection.class_analyzer.class' => 'Knp\\DoctrineBehaviors\\Reflection\\ClassAnalyzer',
            'knp.doctrine_behaviors.reflection.is_recursive' => true,
            'knp.doctrine_behaviors.translatable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\TranslatableSubscriber',
            'knp.doctrine_behaviors.translatable_subscriber.current_locale_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\CurrentLocaleCallable',
            'knp.doctrine_behaviors.translatable_subscriber.default_locale_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\DefaultLocaleCallable',
            'knp.doctrine_behaviors.translatable_subscriber.translatable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translatable',
            'knp.doctrine_behaviors.translatable_subscriber.translation_trait' => 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translation',
            'knp.doctrine_behaviors.translatable_subscriber.translatable_fetch_method' => 'LAZY',
            'knp.doctrine_behaviors.translatable_subscriber.translation_fetch_method' => 'LAZY',
            'knp.doctrine_behaviors.softdeletable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\SoftDeletable\\SoftDeletableSubscriber',
            'knp.doctrine_behaviors.softdeletable_subscriber.softdeletable_trait' => 'Knp\\DoctrineBehaviors\\Model\\SoftDeletable\\SoftDeletable',
            'knp.doctrine_behaviors.timestampable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Timestampable\\TimestampableSubscriber',
            'knp.doctrine_behaviors.timestampable_subscriber.timestampable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Timestampable\\Timestampable',
            'knp.doctrine_behaviors.timestampable_subscriber.db_field_type' => 'datetime',
            'knp.doctrine_behaviors.blameable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Blameable\\BlameableSubscriber',
            'knp.doctrine_behaviors.blameable_subscriber.blameable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Blameable\\Blameable',
            'knp.doctrine_behaviors.blameable_subscriber.user_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Blameable\\UserCallable',
            'knp.doctrine_behaviors.blameable_subscriber.user_entity' => NULL,
            'knp.doctrine_behaviors.loggable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Loggable\\LoggableSubscriber',
            'knp.doctrine_behaviors.loggable_subscriber.logger_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Loggable\\LoggerCallable',
            'knp.doctrine_behaviors.geocodable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Geocodable\\GeocodableSubscriber',
            'knp.doctrine_behaviors.geocodable_subscriber.geocodable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Geocodable\\Geocodable',
            'knp.doctrine_behaviors.sluggable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Sluggable\\SluggableSubscriber',
            'knp.doctrine_behaviors.sluggable_subscriber.sluggable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Sluggable\\Sluggable',
            'knp.doctrine_behaviors.tree_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Tree\\TreeSubscriber',
            'knp.doctrine_behaviors.tree_subscriber.tree_trait' => 'Knp\\DoctrineBehaviors\\Model\\Tree\\Node',
            'knp.doctrine_behaviors.sortable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Sortable\\SortableSubscriber',
            'knp.doctrine_behaviors.sortable_subscriber.sortable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Sortable\\Sortable',
            'fm_elfinder.loader' => 'FM\\ElfinderBundle\\Loader\\ElFinderLoader',
            'fm_elfinder.configurator' => 'FM\\ElfinderBundle\\Configuration\\ElFinderConfigurationReader',
            'elfinder.form.type.class' => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType',
            'fm_elfinder' => [
                'instances' => [
                    'default' => [
                        'editor' => 'form',
                        'include_assets' => true,
                        'relative_path' => true,
                        'connector' => [
                            'roots' => [
                                'uploads' => [
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads',
                                    'upload_allow' => [
                                        0 => 'all',
                                    ],
                                    'volume_id' => 0,
                                    'autoload' => false,
                                    'phash' => '',
                                    'trash_hash' => '',
                                    'locale' => '',
                                    'i18n_folder_name' => false,
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'security_voter' => '',
                                    'start_path' => '',
                                    'encoding' => 'UTF-8',
                                    'url' => '',
                                    'alias' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'fileMode' => 420,
                                    'upload_deny' => [
                                        0 => 'all',
                                    ],
                                    'upload_order' => [
                                        0 => 'deny',
                                        1 => 'allow',
                                    ],
                                    'upload_max_size' => 0,
                                    'defaults' => [
                                        'read' => true,
                                        'write' => true,
                                    ],
                                    'attributes' => [

                                    ],
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => [

                                    ],
                                    'tree_deep' => 0,
                                    'check_subfolders' => 1,
                                    'separator' => '/',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => [

                                    ],
                                    'archivers' => [
                                        'enabled' => false,
                                        'create' => [

                                        ],
                                        'extract' => [

                                        ],
                                    ],
                                    'flysystem' => [
                                        'enabled' => false,
                                        'type' => '',
                                        'adapter_service' => '',
                                    ],
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => [

                                    ],
                                    'driver_options' => [

                                    ],
                                    'dropbox_settings' => [
                                        'enabled' => false,
                                    ],
                                    'ftp_settings' => [
                                        'enabled' => false,
                                    ],
                                    's3_settings' => [
                                        'enabled' => false,
                                    ],
                                    'mysql_settings' => [
                                        'enabled' => false,
                                        'port' => NULL,
                                        'socket' => NULL,
                                        'files_table' => 'elfinder_file',
                                        'tmbPath' => '',
                                        'tmpPath' => '',
                                        'rootCssClass' => 'elfinder-navbar-root-sql',
                                        'noSessionCache' => 'hasdirs',
                                    ],
                                ],
                            ],
                            'debug' => false,
                            'binds' => [

                            ],
                            'plugins' => [

                            ],
                        ],
                        'locale' => NULL,
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'fullscreen' => true,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'path_prefix' => '/',
                        'visible_mime_types' => [

                        ],
                    ],
                ],
                'configuration_provider' => 'fm_elfinder.configurator.default',
                'assets_path' => '/assets',
                'loader' => 'fm_elfinder.loader.default',
            ],
            'slot_mandrill.api_key' => '---',
            'slot_mandrill.disable_delivery' => false,
            'slot_mandrill.default.sender' => 'robbertluit@hotmail.com',
            'slot_mandrill.default.sender_name' => 'Robbert',
            'slot_mandrill.default.subaccount' => 'Robbert',
            'slot_mandrill.proxy' => [
                'use' => false,
                'host' => NULL,
                'port' => NULL,
                'user' => NULL,
                'password' => NULL,
            ],
            'slot_mandrill.debug' => false,
            'slot_mandrill.client.class' => 'Mandrill',
            'slot_mandrill.dispatcher.class' => 'Slot\\MandrillBundle\\Dispatcher',
            'a2lix_translation_form.locales' => [
                0 => 'nl',
            ],
            'a2lix_translation_form.required_locales' => [
                0 => 'nl',
            ],
            'a2lix_translation_form.default.service.translation.class' => 'A2lix\\TranslationFormBundle\\TranslationForm\\TranslationForm',
            'a2lix_translation_form.default.service.parameter_locale_provider.class' => 'A2lix\\TranslationFormBundle\\Locale\\DefaultProvider',
            'a2lix_translation_form.default.listener.translations.class' => 'A2lix\\TranslationFormBundle\\Form\\EventListener\\TranslationsListener',
            'a2lix_translation_form.default.listener.translationsForms.class' => 'A2lix\\TranslationFormBundle\\Form\\EventListener\\TranslationsFormsListener',
            'a2lix_translation_form.default.type.translations.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsType',
            'a2lix_translation_form.default.type.translationsFields.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFieldsType',
            'a2lix_translation_form.default.type.translationsForms.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFormsType',
            'a2lix_translation_form.default.type.translationsLocalesSelector.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsLocalesSelectorType',
            'a2lix_translation_form.default.type.translatedEntity.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslatedEntityType',
            'a2lix_translation_form.locale_provider' => 'default',
            'a2lix_translation_form.default_locale' => 'nl',
            'a2lix_translation_form.templating' => '@A2lixTranslationForm/default.html.twig',
            'php_translation.locales' => [
                0 => 'nl',
                1 => 'fr',
                2 => 'en',
            ],
            'php_translation.default_locale' => 'nl',
            'php_translation.webui.enabled' => true,
            'php_translation.webui.allow_create' => true,
            'php_translation.webui.allow_delete' => true,
            'php_translation.toolbar.allow_edit' => true,
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'php_translation.data_collector' => [
                    0 => 'translation',
                    1 => '@Translation/SymfonyProfiler/translation.html.twig',
                ],
                'sonata.block.data_collector' => [
                    0 => 'block',
                    1 => '@SonataBlock/Profiler/block.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'sonata.core.form.types' => [
                0 => 'form.type.form',
                1 => 'form.type.choice',
                2 => 'form.type.entity',
                3 => 'sonata.core.form.type.array',
                4 => 'sonata.core.form.type.boolean',
                5 => 'sonata.core.form.type.collection',
                6 => 'sonata.core.form.type.translatable_choice',
                7 => 'sonata.core.form.type.date_range',
                8 => 'sonata.core.form.type.datetime_range',
                9 => 'sonata.core.form.type.date_picker',
                10 => 'sonata.core.form.type.datetime_picker',
                11 => 'sonata.core.form.type.date_range_picker',
                12 => 'sonata.core.form.type.datetime_range_picker',
                13 => 'sonata.core.form.type.equal',
                14 => 'sonata.core.form.type.color_selector',
                15 => 'sonata.core.form.type.color',
                16 => 'sonata.block.form.type.block',
                17 => 'sonata.block.form.type.container_template',
                18 => 'sonata.admin.form.type.admin',
                19 => 'sonata.admin.form.type.model_choice',
                20 => 'sonata.admin.form.type.model_list',
                21 => 'sonata.admin.form.type.model_reference',
                22 => 'sonata.admin.form.type.model_hidden',
                23 => 'sonata.admin.form.type.model_autocomplete',
                24 => 'sonata.admin.form.type.collection',
                25 => 'sonata.admin.doctrine_orm.form.type.choice_field_mask',
                26 => 'sonata.admin.form.filter.type.number',
                27 => 'sonata.admin.form.filter.type.choice',
                28 => 'sonata.admin.form.filter.type.default',
                29 => 'sonata.admin.form.filter.type.date',
                30 => 'sonata.admin.form.filter.type.daterange',
                31 => 'sonata.admin.form.filter.type.datetime',
                32 => 'sonata.admin.form.filter.type.datetime_range',
                33 => 'fm_elfinder.form.type',
                34 => 'a2lix_translation_form.default.type.translations',
                35 => 'a2lix_translation_form.default.type.translationsFields',
                36 => 'a2lix_translation_form.default.type.translationsForms',
                37 => 'a2lix_translation_form.default.type.translationsLocalesSelector',
                38 => 'a2lix_translation_form.default.type.translatedEntity',
            ],
            'sonata.core.form.type_extensions' => [
                0 => 'form.type_extension.form.transformation_failure_handling',
                1 => 'form.type_extension.form.http_foundation',
                2 => 'form.type_extension.form.validator',
                3 => 'form.type_extension.repeated.validator',
                4 => 'form.type_extension.submit.validator',
                5 => 'form.type_extension.upload.validator',
                6 => 'form.type_extension.csrf',
                7 => 'form.type_extension.form.data_collector',
                8 => 'sonata.admin.form.extension.field',
                9 => 'sonata.admin.form.extension.field.mopa',
                10 => 'sonata.admin.form.extension.choice',
                11 => 'isometriks_spam.form.extension.type.timed_spam',
                12 => 'isometriks_spam.form.extension.type.honeypot',
            ],
            'console.command.ids' => [
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'web_server.command.server_run',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'web_server.command.server_start',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'web_server.command.server_stop',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'web_server.command.server_status',
                'console.command.symfony_bundle_webserverbundle_command_serverlogcommand' => 'web_server.command.server_log',
                'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand' => 'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand',
                'console.command.sonata_corebundle_command_sonatalistformmappingcommand' => 'console.command.sonata_corebundle_command_sonatalistformmappingcommand',
                'console.command.sonata_blockbundle_command_debugblockscommand' => 'console.command.sonata_blockbundle_command_debugblockscommand',
                'console.command.sonata_adminbundle_command_createclasscachecommand' => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand',
                'console.command.sonata_adminbundle_command_explainadmincommand' => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand',
                'console.command.sonata_adminbundle_command_generateadmincommand' => 'Sonata\\AdminBundle\\Command\\GenerateAdminCommand',
                'console.command.sonata_adminbundle_command_generateobjectaclcommand' => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand',
                'console.command.sonata_adminbundle_command_listadmincommand' => 'Sonata\\AdminBundle\\Command\\ListAdminCommand',
                'console.command.sonata_adminbundle_command_setupaclcommand' => 'Sonata\\AdminBundle\\Command\\SetupAclCommand',
                'console.command.translation_bundle_command_deleteobsoletecommand' => 'php_translator.console.delete_obsolete',
                'console.command.translation_bundle_command_downloadcommand' => 'php_translator.console.download',
                'console.command.translation_bundle_command_extractcommand' => 'php_translator.console.extract',
                'console.command.translation_bundle_command_statuscommand' => 'php_translator.console.status',
                'console.command.translation_bundle_command_synccommand' => 'php_translator.console.sync',
                'console.command.symfony_bundle_makerbundle_command_makercommand' => 'maker.auto_command.make_sonata_admin',
            ],
            'console.lazy_command.ids' => [
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'security.command.user_password_encoder' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.query_sql_command' => true,
                'doctrine.cache_clear_metadata_command' => true,
                'doctrine.cache_clear_query_cache_command' => true,
                'doctrine.cache_clear_result_command' => true,
                'doctrine.cache_collection_region_command' => true,
                'doctrine.mapping_convert_command' => true,
                'doctrine.schema_create_command' => true,
                'doctrine.schema_drop_command' => true,
                'doctrine.ensure_production_settings_command' => true,
                'doctrine.clear_entity_region_command' => true,
                'doctrine.database_import_command' => true,
                'doctrine.mapping_info_command' => true,
                'doctrine.clear_query_region_command' => true,
                'doctrine.query_dql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
                'doctrine.mapping_import_command' => true,
                'web_server.command.server_run' => true,
                'web_server.command.server_start' => true,
                'web_server.command.server_stop' => true,
                'web_server.command.server_status' => true,
                'web_server.command.server_log' => true,
                'php_translator.console.delete_obsolete' => true,
                'php_translator.console.download' => true,
                'php_translator.console.extract' => true,
                'php_translator.console.status' => true,
                'php_translator.console.sync' => true,
                'maker.auto_command.make_auth' => true,
                'maker.auto_command.make_command' => true,
                'maker.auto_command.make_controller' => true,
                'maker.auto_command.make_crud' => true,
                'maker.auto_command.make_entity' => true,
                'maker.auto_command.make_fixtures' => true,
                'maker.auto_command.make_form' => true,
                'maker.auto_command.make_functional_test' => true,
                'maker.auto_command.make_registration_form' => true,
                'maker.auto_command.make_serializer_encoder' => true,
                'maker.auto_command.make_serializer_normalizer' => true,
                'maker.auto_command.make_subscriber' => true,
                'maker.auto_command.make_twig_extension' => true,
                'maker.auto_command.make_unit_test' => true,
                'maker.auto_command.make_validator' => true,
                'maker.auto_command.make_voter' => true,
                'maker.auto_command.make_user' => true,
                'maker.auto_command.make_migration' => true,
                'maker.auto_command.make_sonata_admin' => true,
            ],
        ];
    }
}
