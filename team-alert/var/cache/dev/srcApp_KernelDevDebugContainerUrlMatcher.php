<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/admin' => [[['_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], null, null, null, true, false, null]],
            '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], null, null, null, false, false, null]],
            '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
            '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
            '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
            '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], null, null, null, false, false, null]],
            '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler:homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler:searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler:searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler:phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler:openAction'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/e(?'
                        .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:48)'
                        .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:90)'
                    .')'
                    .'|/admin/(?'
                        .'|_trans(?'
                            .'|_edit_in_place/([^/]++)/([^/]++)(*:149)'
                            .'|(?:/([^/]++))?(*:171)'
                            .'|/([^/]++)/([^/]++)/([^/]++)(?'
                                .'|(*:209)'
                                .'|/new(*:221)'
                                .'|(*:229)'
                            .')'
                        .')'
                        .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:293)'
                    .')'
                    .'|/([^/]++)/translation/(?'
                        .'|edit(*:331)'
                        .'|sync(?'
                            .'|(*:346)'
                            .'|_all(*:358)'
                        .')'
                        .'|create_assets(*:380)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:420)'
                        .'|wdt/([^/]++)(*:440)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:486)'
                                .'|router(*:500)'
                                .'|exception(?'
                                    .'|(*:520)'
                                    .'|\\.css(*:533)'
                                .')'
                            .')'
                            .'|(*:543)'
                        .')'
                    .')'
                .')/?$}sD',
        ];
        $this->dynamicRoutes = [
            48 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
            90 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
            149 => [[['_route' => 'translation_edit_in_place_update', '_controller' => 'Translation\\Bundle\\Controller\\EditInPlaceController::editAction'], ['configName', 'locale'], ['POST' => 0], null, false, true, null]],
            171 => [[['_route' => 'translation_index', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::indexAction', 'configName' => null], ['configName'], ['GET' => 0], null, false, true, null]],
            209 => [[['_route' => 'translation_show', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::showAction'], ['configName', 'locale', 'domain'], ['GET' => 0], null, false, true, null]],
            221 => [[['_route' => 'translation_create', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::createAction'], ['configName', 'locale', 'domain'], ['POST' => 0], null, false, false, null]],
            229 => [
                [['_route' => 'translation_edit', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::editAction'], ['configName', 'locale', 'domain'], ['POST' => 0], null, false, true, null],
                [['_route' => 'translation_delete', '_controller' => 'Translation\\Bundle\\Controller\\WebUIController::deleteAction'], ['configName', 'locale', 'domain'], ['DELETE' => 0], null, false, true, null],
            ],
            293 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
            331 => [[['_route' => 'php_translation_profiler_translation_edit', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::editAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            346 => [[['_route' => 'php_translation_profiler_translation_sync', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::syncAction'], ['token'], ['POST' => 0], null, false, false, null]],
            358 => [[['_route' => 'php_translation_profiler_translation_sync_all', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::syncAllAction'], ['token'], ['POST' => 0], null, false, false, null]],
            380 => [[['_route' => 'php_translation_profiler_translation_create_assets', '_controller' => 'Translation\\Bundle\\Controller\\SymfonyProfilerController::createAssetsAction'], ['token'], ['POST' => 0], null, false, false, null]],
            420 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error:previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            440 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler:toolbarAction'], ['token'], null, null, false, true, null]],
            486 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler:searchResultsAction'], ['token'], null, null, false, false, null]],
            500 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router:panelAction'], ['token'], null, null, false, false, null]],
            520 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception:showAction'], ['token'], null, null, false, false, null]],
            533 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception:cssAction'], ['token'], null, null, false, false, null]],
            543 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler:panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
