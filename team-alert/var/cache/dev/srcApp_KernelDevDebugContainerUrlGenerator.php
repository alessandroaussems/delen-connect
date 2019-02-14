<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'ef_connect' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder'], ['variable', '/', '[^/]++', 'instance'], ['text', '/efconnect']], [], []],
        'elfinder' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder'], ['variable', '/', '[^/]++', 'instance'], ['text', '/elfinder']], [], []],
        'translation_edit_in_place_update' => [['configName', 'locale'], ['_controller' => 'Translation\\Bundle\\Controller\\EditInPlaceController::editAction'], [], [['variable', '/', '[^/]++', 'locale'], ['variable', '/', '[^/]++', 'configName'], ['text', '/admin/_trans_edit_in_place']], [], []],
        'sonata_admin_redirect' => [[], ['_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], [], [['text', '/admin/']], [], []],
        'sonata_admin_dashboard' => [[], ['_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], [], [['text', '/admin/dashboard']], [], []],
        'sonata_admin_retrieve_form_element' => [[], ['_controller' => 'sonata.admin.action.retrieve_form_field_element'], [], [['text', '/admin/core/get-form-field-element']], [], []],
        'sonata_admin_append_form_element' => [[], ['_controller' => 'sonata.admin.action.append_form_field_element'], [], [['text', '/admin/core/append-form-field-element']], [], []],
        'sonata_admin_short_object_information' => [['_format'], ['_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format' => 'html|json'], [['variable', '.', 'html|json', '_format'], ['text', '/admin/core/get-short-object-description']], [], []],
        'sonata_admin_set_object_field_value' => [[], ['_controller' => 'sonata.admin.action.set_object_field_value'], [], [['text', '/admin/core/set-object-field-value']], [], []],
        'sonata_admin_search' => [[], ['_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], [], [['text', '/admin/search']], [], []],
        'sonata_admin_retrieve_autocomplete_items' => [[], ['_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], [], [['text', '/admin/core/get-autocomplete-items']], [], []],
        'translation_index' => [['configName'], ['_controller' => 'Translation\\Bundle\\Controller\\WebUIController::indexAction', 'configName' => null], [], [['variable', '/', '[^/]++', 'configName'], ['text', '/admin/_trans']], [], []],
        'translation_show' => [['configName', 'locale', 'domain'], ['_controller' => 'Translation\\Bundle\\Controller\\WebUIController::showAction'], [], [['variable', '/', '[^/]++', 'domain'], ['variable', '/', '[^/]++', 'locale'], ['variable', '/', '[^/]++', 'configName'], ['text', '/admin/_trans']], [], []],
        'translation_create' => [['configName', 'locale', 'domain'], ['_controller' => 'Translation\\Bundle\\Controller\\WebUIController::createAction'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'domain'], ['variable', '/', '[^/]++', 'locale'], ['variable', '/', '[^/]++', 'configName'], ['text', '/admin/_trans']], [], []],
        'translation_edit' => [['configName', 'locale', 'domain'], ['_controller' => 'Translation\\Bundle\\Controller\\WebUIController::editAction'], [], [['variable', '/', '[^/]++', 'domain'], ['variable', '/', '[^/]++', 'locale'], ['variable', '/', '[^/]++', 'configName'], ['text', '/admin/_trans']], [], []],
        'translation_delete' => [['configName', 'locale', 'domain'], ['_controller' => 'Translation\\Bundle\\Controller\\WebUIController::deleteAction'], [], [['variable', '/', '[^/]++', 'domain'], ['variable', '/', '[^/]++', 'locale'], ['variable', '/', '[^/]++', 'configName'], ['text', '/admin/_trans']], [], []],
        'php_translation_profiler_translation_edit' => [['token'], ['_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::editAction'], [], [['text', '/translation/edit'], ['variable', '/', '[^/]++', 'token']], [], []],
        'php_translation_profiler_translation_sync' => [['token'], ['_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::syncAction'], [], [['text', '/translation/sync'], ['variable', '/', '[^/]++', 'token']], [], []],
        'php_translation_profiler_translation_sync_all' => [['token'], ['_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::syncAllAction'], [], [['text', '/translation/sync_all'], ['variable', '/', '[^/]++', 'token']], [], []],
        'php_translation_profiler_translation_create_assets' => [['token'], ['_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::createAssetsAction'], [], [['text', '/translation/create_assets'], ['variable', '/', '[^/]++', 'token']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error:previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler:toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler:homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler:searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler:searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler:phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler:searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler:openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler:panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router:panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception:showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception:cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        'index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
