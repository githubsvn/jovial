<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/')) {
            // _welcome
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_welcome');
                }

                return array (  '_controller' => 'SM\\Bundle\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => '_welcome',);
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_search
                if ($pathinfo === '/_profiler/search') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
                }

                // _profiler_import
                if ($pathinfo === '/_profiler/import') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
                }

                // _profiler_redirect
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // sm_front_homepage
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sm_front_homepage');
                }

                return array (  '_controller' => 'SM\\Bundle\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sm_front_homepage',);
            }

            // sm_acl_homepage
            if ($pathinfo === '/admin/acl') {
                return array (  '_controller' => 'SM\\Bundle\\AclBundle\\Controller\\AclController::indexAction',  '_route' => 'sm_acl_homepage',);
            }

            if (0 === strpos($pathinfo, '/')) {
                // sm_admin_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'sm_admin_login',);
                }

                // sm_admin_login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\SecurityController::checkAction',  '_route' => 'sm_admin_login_check',);
                }

                // sm_admin_logout
                if ($pathinfo === '/logout') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'sm_admin_logout',);
                }

                // sm_admin_home
                if ($pathinfo === '/admin') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sm_admin_home',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_user');
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
                }

                // admin_user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::showAction',)), array('_route' => 'admin_user_show'));
                }

                // admin_user_new
                if ($pathinfo === '/admin/user/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
                }

                // admin_user_create
                if ($pathinfo === '/admin/user/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
                }
                not_admin_user_create:

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::editAction',)), array('_route' => 'admin_user_edit'));
                }

                // admin_user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::updateAction',)), array('_route' => 'admin_user_update'));
                }
                not_admin_user_update:

                // admin_user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::deleteAction',)), array('_route' => 'admin_user_delete'));
                }
                not_admin_user_delete:

                // admin_user_delete_all
                if ($pathinfo === '/admin/user/deleteall') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_delete_all;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::deleteAllAction',  '_route' => 'admin_user_delete_all',);
                }
                not_admin_user_delete_all:

            }

            if (0 === strpos($pathinfo, '/admin/role')) {
                // admin_role
                if (rtrim($pathinfo, '/') === '/admin/role') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_role');
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::indexAction',  '_route' => 'admin_role',);
                }

                // admin_role_show
                if (preg_match('#^/admin/role/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::showAction',)), array('_route' => 'admin_role_show'));
                }

                // admin_role_new
                if ($pathinfo === '/admin/role/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::newAction',  '_route' => 'admin_role_new',);
                }

                // admin_role_create
                if ($pathinfo === '/admin/role/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_role_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::createAction',  '_route' => 'admin_role_create',);
                }
                not_admin_role_create:

                // admin_role_edit
                if (preg_match('#^/admin/role/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::editAction',)), array('_route' => 'admin_role_edit'));
                }

                // admin_role_update
                if (preg_match('#^/admin/role/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_role_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::updateAction',)), array('_route' => 'admin_role_update'));
                }
                not_admin_role_update:

                // admin_role_delete
                if (preg_match('#^/admin/role/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_role_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::deleteAction',)), array('_route' => 'admin_role_delete'));
                }
                not_admin_role_delete:

            }

            if (0 === strpos($pathinfo, '/admin/group')) {
                // admin_group
                if (rtrim($pathinfo, '/') === '/admin/group') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_group');
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::indexAction',  '_route' => 'admin_group',);
                }

                // admin_group_show
                if (preg_match('#^/admin/group/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::showAction',)), array('_route' => 'admin_group_show'));
                }

                // admin_group_new
                if ($pathinfo === '/admin/group/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::newAction',  '_route' => 'admin_group_new',);
                }

                // admin_group_create
                if ($pathinfo === '/admin/group/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_group_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::createAction',  '_route' => 'admin_group_create',);
                }
                not_admin_group_create:

                // admin_group_edit
                if (preg_match('#^/admin/group/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::editAction',)), array('_route' => 'admin_group_edit'));
                }

                // admin_group_update
                if (preg_match('#^/admin/group/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_group_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::updateAction',)), array('_route' => 'admin_group_update'));
                }
                not_admin_group_update:

                // admin_group_delete
                if (preg_match('#^/admin/group/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_group_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::deleteAction',)), array('_route' => 'admin_group_delete'));
                }
                not_admin_group_delete:

            }

            if (0 === strpos($pathinfo, '/admin/language')) {
                // admin_language
                if (preg_match('#^/admin/language(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::indexAction',  'page' => '1',)), array('_route' => 'admin_language'));
                }

                // admin_language_show
                if (0 === strpos($pathinfo, '/admin/language/show') && preg_match('#^/admin/language/show/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::showAction',)), array('_route' => 'admin_language_show'));
                }

                // admin_language_new
                if ($pathinfo === '/admin/language/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::newAction',  '_route' => 'admin_language_new',);
                }

                // admin_language_create
                if ($pathinfo === '/admin/language/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_language_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::createAction',  '_route' => 'admin_language_create',);
                }
                not_admin_language_create:

                // admin_language_edit
                if (0 === strpos($pathinfo, '/admin/language/edit') && preg_match('#^/admin/language/edit/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::editAction',)), array('_route' => 'admin_language_edit'));
                }

                // admin_language_update
                if (0 === strpos($pathinfo, '/admin/language/update') && preg_match('#^/admin/language/update/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_language_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::updateAction',)), array('_route' => 'admin_language_update'));
                }
                not_admin_language_update:

                // admin_language_delete
                if (0 === strpos($pathinfo, '/admin/language/delete') && preg_match('#^/admin/language/delete/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_language_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::deleteAction',)), array('_route' => 'admin_language_delete'));
                }
                not_admin_language_delete:

                // admin_language_set_default
                if (0 === strpos($pathinfo, '/admin/language/set-default') && preg_match('#^/admin/language/set\\-default/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_language_set_default;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::setDefaultAction',)), array('_route' => 'admin_language_set_default'));
                }
                not_admin_language_set_default:

            }

            if (0 === strpos($pathinfo, '/admin/companytype')) {
                // admin_companytype
                if (preg_match('#^/admin/companytype(?:/(?P<page>\\d+)(?:/(?P<lang>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::indexAction',  'page' => '1',  'lang' => NULL,)), array('_route' => 'admin_companytype'));
                }

                // admin_companytype_show
                if (preg_match('#^/admin/companytype/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::showAction',)), array('_route' => 'admin_companytype_show'));
                }

                // admin_companytype_new
                if ($pathinfo === '/admin/companytype/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::newAction',  '_route' => 'admin_companytype_new',);
                }

                // admin_companytype_create
                if ($pathinfo === '/admin/companytype/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_companytype_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::createAction',  '_route' => 'admin_companytype_create',);
                }
                not_admin_companytype_create:

                // admin_companytype_edit
                if (preg_match('#^/admin/companytype/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::editAction',)), array('_route' => 'admin_companytype_edit'));
                }

                // admin_companytype_update
                if (preg_match('#^/admin/companytype/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_companytype_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::updateAction',)), array('_route' => 'admin_companytype_update'));
                }
                not_admin_companytype_update:

                // admin_companytype_delete
                if (preg_match('#^/admin/companytype/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_companytype_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::deleteAction',)), array('_route' => 'admin_companytype_delete'));
                }
                not_admin_companytype_delete:

                // admin_companytype_delete_all
                if ($pathinfo === '/admin/companytype/deleteall') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_companytype_delete_all;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::deleteAllAction',  '_route' => 'admin_companytype_delete_all',);
                }
                not_admin_companytype_delete_all:

            }

            if (0 === strpos($pathinfo, '/admin/company')) {
                // admin_company
                if (preg_match('#^/admin/company(?:/(?P<page>\\d+)(?:/(?P<lang>\\d+))?)?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_company;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::indexAction',  'page' => '1',  'lang' => NULL,)), array('_route' => 'admin_company'));
                }
                not_admin_company:

                // admin_company_show
                if (preg_match('#^/admin/company/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::showAction',)), array('_route' => 'admin_company_show'));
                }

                // admin_company_new
                if ($pathinfo === '/admin/company/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::newAction',  '_route' => 'admin_company_new',);
                }

                // admin_company_create
                if ($pathinfo === '/admin/company/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_company_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::createAction',  '_route' => 'admin_company_create',);
                }
                not_admin_company_create:

                // admin_company_edit
                if (preg_match('#^/admin/company/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::editAction',)), array('_route' => 'admin_company_edit'));
                }

                // admin_company_update
                if (preg_match('#^/admin/company/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_company_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::updateAction',)), array('_route' => 'admin_company_update'));
                }
                not_admin_company_update:

                // admin_company_delete
                if (preg_match('#^/admin/company/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_company_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::deleteAction',)), array('_route' => 'admin_company_delete'));
                }
                not_admin_company_delete:

                // admin_company_delete_all
                if ($pathinfo === '/admin/company/deleteall') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_company_delete_all;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::deleteAllAction',  '_route' => 'admin_company_delete_all',);
                }
                not_admin_company_delete_all:

            }

            if (0 === strpos($pathinfo, '/admin/branch')) {
                // admin_branch
                if (preg_match('#^/admin/branch(?:/(?P<page>\\d+)(?:/(?P<lang>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::indexAction',  'page' => '1',  'lang' => NULL,)), array('_route' => 'admin_branch'));
                }

                // admin_branch_show
                if (preg_match('#^/admin/branch/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::showAction',)), array('_route' => 'admin_branch_show'));
                }

                // admin_branch_new
                if ($pathinfo === '/admin/branch/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::newAction',  '_route' => 'admin_branch_new',);
                }

                // admin_branch_create
                if ($pathinfo === '/admin/branch/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_branch_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::createAction',  '_route' => 'admin_branch_create',);
                }
                not_admin_branch_create:

                // admin_branch_edit
                if (preg_match('#^/admin/branch/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::editAction',)), array('_route' => 'admin_branch_edit'));
                }

                // admin_branch_update
                if (preg_match('#^/admin/branch/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_branch_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::updateAction',)), array('_route' => 'admin_branch_update'));
                }
                not_admin_branch_update:

                // admin_branch_delete
                if (preg_match('#^/admin/branch/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_branch_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::deleteAction',)), array('_route' => 'admin_branch_delete'));
                }
                not_admin_branch_delete:

                // admin_branch_up
                if (0 === strpos($pathinfo, '/admin/branch/up') && preg_match('#^/admin/branch/up/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::upAction',)), array('_route' => 'admin_branch_up'));
                }

                // admin_branch_down
                if (0 === strpos($pathinfo, '/admin/branch/down') && preg_match('#^/admin/branch/down/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::downAction',)), array('_route' => 'admin_branch_down'));
                }

                // admin_branch_delete_all
                if ($pathinfo === '/admin/branch/deleteall') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_branch_delete_all;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::deleteAllAction',  '_route' => 'admin_branch_delete_all',);
                }
                not_admin_branch_delete_all:

            }

            if (0 === strpos($pathinfo, '/admin/mediacategory')) {
                // admin_mediacategory
                if (preg_match('#^/admin/mediacategory(?:/(?P<page>\\d+)(?:/(?P<lang>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::indexAction',  'page' => '1',  'lang' => NULL,)), array('_route' => 'admin_mediacategory'));
                }

                // admin_mediacategory_show
                if (preg_match('#^/admin/mediacategory/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::showAction',)), array('_route' => 'admin_mediacategory_show'));
                }

                // admin_mediacategory_new
                if ($pathinfo === '/admin/mediacategory/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::newAction',  '_route' => 'admin_mediacategory_new',);
                }

                // admin_mediacategory_create
                if ($pathinfo === '/admin/mediacategory/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_mediacategory_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::createAction',  '_route' => 'admin_mediacategory_create',);
                }
                not_admin_mediacategory_create:

                // admin_mediacategory_edit
                if (preg_match('#^/admin/mediacategory/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::editAction',)), array('_route' => 'admin_mediacategory_edit'));
                }

                // admin_mediacategory_update
                if (preg_match('#^/admin/mediacategory/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_mediacategory_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::updateAction',)), array('_route' => 'admin_mediacategory_update'));
                }
                not_admin_mediacategory_update:

                // admin_mediacategory_delete
                if (preg_match('#^/admin/mediacategory/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_mediacategory_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::deleteAction',)), array('_route' => 'admin_mediacategory_delete'));
                }
                not_admin_mediacategory_delete:

                // admin_mediacategory_up
                if (0 === strpos($pathinfo, '/admin/mediacategory/up') && preg_match('#^/admin/mediacategory/up/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::upAction',)), array('_route' => 'admin_mediacategory_up'));
                }

                // admin_mediacategory_down
                if (0 === strpos($pathinfo, '/admin/mediacategory/down') && preg_match('#^/admin/mediacategory/down/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::downAction',)), array('_route' => 'admin_mediacategory_down'));
                }

                // admin_mediacategory_delete_all
                if ($pathinfo === '/admin/mediacategory/deleteall') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_mediacategory_delete_all;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::deleteAllAction',  '_route' => 'admin_mediacategory_delete_all',);
                }
                not_admin_mediacategory_delete_all:

            }

            if (0 === strpos($pathinfo, '/admin/media')) {
                // admin_media
                if (preg_match('#^/admin/media(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::indexAction',  'page' => '1',)), array('_route' => 'admin_media'));
                }

                // admin_media_show
                if (preg_match('#^/admin/media/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::showAction',)), array('_route' => 'admin_media_show'));
                }

                // admin_media_new
                if ($pathinfo === '/admin/media/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::newAction',  '_route' => 'admin_media_new',);
                }

                // admin_media_create
                if ($pathinfo === '/admin/media/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_media_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::createAction',  '_route' => 'admin_media_create',);
                }
                not_admin_media_create:

                // admin_media_edit
                if (preg_match('#^/admin/media/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::editAction',)), array('_route' => 'admin_media_edit'));
                }

                // admin_media_update
                if (preg_match('#^/admin/media/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_media_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::updateAction',)), array('_route' => 'admin_media_update'));
                }
                not_admin_media_update:

                // admin_media_delete
                if (preg_match('#^/admin/media/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_media_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::deleteAction',)), array('_route' => 'admin_media_delete'));
                }
                not_admin_media_delete:

                // admin_media_get_media
                if (0 === strpos($pathinfo, '/admin/media/get-media-by-catid') && preg_match('#^/admin/media/get\\-media\\-by\\-catid(?:/(?P<catId>[^/]+))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_media_get_media;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::getMediaByCatAction',  'catId' => NULL,)), array('_route' => 'admin_media_get_media'));
                }
                not_admin_media_get_media:

                // admin_media_delete_all
                if ($pathinfo === '/admin/media/deleteall') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_media_delete_all;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::deleteAllAction',  '_route' => 'admin_media_delete_all',);
                }
                not_admin_media_delete_all:

            }

            if (0 === strpos($pathinfo, '/admin/products')) {
                // admin_products
                if (preg_match('#^/admin/products(?:/(?P<page>\\d+)(?:/(?P<lang>\\d+))?)?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_products;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::indexAction',  'page' => '1',  'lang' => NULL,)), array('_route' => 'admin_products'));
                }
                not_admin_products:

                // admin_products_show
                if (preg_match('#^/admin/products/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::showAction',)), array('_route' => 'admin_products_show'));
                }

                // admin_products_new
                if ($pathinfo === '/admin/products/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::newAction',  '_route' => 'admin_products_new',);
                }

                // admin_products_create
                if ($pathinfo === '/admin/products/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_products_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::createAction',  '_route' => 'admin_products_create',);
                }
                not_admin_products_create:

                // admin_products_edit
                if (preg_match('#^/admin/products/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::editAction',)), array('_route' => 'admin_products_edit'));
                }

                // admin_products_update
                if (preg_match('#^/admin/products/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_products_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::updateAction',)), array('_route' => 'admin_products_update'));
                }
                not_admin_products_update:

                // admin_products_delete
                if (preg_match('#^/admin/products/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_products_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::deleteAction',)), array('_route' => 'admin_products_delete'));
                }
                not_admin_products_delete:

                // admin_products_delete_all
                if ($pathinfo === '/admin/products/deleteall') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_products_delete_all;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::deleteAllAction',  '_route' => 'admin_products_delete_all',);
                }
                not_admin_products_delete_all:

            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                // admin_category
                if (preg_match('#^/admin/category(?:/(?P<page>\\d+)(?:/(?P<lang>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CategoryController::indexAction',  'page' => '1',  'lang' => NULL,)), array('_route' => 'admin_category'));
                }

                // admin_category_show
                if (preg_match('#^/admin/category/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CategoryController::showAction',)), array('_route' => 'admin_category_show'));
                }

                // admin_category_new
                if ($pathinfo === '/admin/category/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CategoryController::newAction',  '_route' => 'admin_category_new',);
                }

                // admin_category_create
                if ($pathinfo === '/admin/category/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_category_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CategoryController::createAction',  '_route' => 'admin_category_create',);
                }
                not_admin_category_create:

                // admin_category_edit
                if (preg_match('#^/admin/category/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CategoryController::editAction',)), array('_route' => 'admin_category_edit'));
                }

                // admin_category_update
                if (preg_match('#^/admin/category/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_category_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CategoryController::updateAction',)), array('_route' => 'admin_category_update'));
                }
                not_admin_category_update:

                // admin_category_delete
                if (preg_match('#^/admin/category/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_category_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CategoryController::deleteAction',)), array('_route' => 'admin_category_delete'));
                }
                not_admin_category_delete:

                // admin_category_up
                if (0 === strpos($pathinfo, '/admin/category/up') && preg_match('#^/admin/category/up/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CategoryController::upAction',)), array('_route' => 'admin_category_up'));
                }

                // admin_category_down
                if (0 === strpos($pathinfo, '/admin/category/down') && preg_match('#^/admin/category/down/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CategoryController::downAction',)), array('_route' => 'admin_category_down'));
                }

                // admin_category_delete_all
                if ($pathinfo === '/admin/category/deleteall') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_category_delete_all;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CategoryController::deleteAllAction',  '_route' => 'admin_category_delete_all',);
                }
                not_admin_category_delete_all:

            }

            if (0 === strpos($pathinfo, '/admin/menu')) {
                // admin_menu
                if (preg_match('#^/admin/menu(?:/(?P<page>\\d+)(?:/(?P<lang>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::indexAction',  'page' => '1',  'lang' => NULL,)), array('_route' => 'admin_menu'));
                }

                // admin_menu_show
                if (preg_match('#^/admin/menu/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::showAction',)), array('_route' => 'admin_menu_show'));
                }

                // admin_menu_new
                if ($pathinfo === '/admin/menu/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::newAction',  '_route' => 'admin_menu_new',);
                }

                // admin_menu_create
                if ($pathinfo === '/admin/menu/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_menu_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::createAction',  '_route' => 'admin_menu_create',);
                }
                not_admin_menu_create:

                // admin_menu_edit
                if (preg_match('#^/admin/menu/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::editAction',)), array('_route' => 'admin_menu_edit'));
                }

                // admin_menu_update
                if (preg_match('#^/admin/menu/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_menu_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::updateAction',)), array('_route' => 'admin_menu_update'));
                }
                not_admin_menu_update:

                // admin_menu_delete
                if (preg_match('#^/admin/menu/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_menu_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::deleteAction',)), array('_route' => 'admin_menu_delete'));
                }
                not_admin_menu_delete:

                // admin_menu_up
                if (0 === strpos($pathinfo, '/admin/menu/up') && preg_match('#^/admin/menu/up/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::upAction',)), array('_route' => 'admin_menu_up'));
                }

                // admin_menu_down
                if (0 === strpos($pathinfo, '/admin/menu/down') && preg_match('#^/admin/menu/down/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::downAction',)), array('_route' => 'admin_menu_down'));
                }

                // admin_menu_get_param
                if (0 === strpos($pathinfo, '/admin/menu/getParam') && preg_match('#^/admin/menu/getParam(?:/(?P<type>[^/]+))?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::getParamAction',  'type' => NULL,)), array('_route' => 'admin_menu_get_param'));
                }

                // admin_menu_get_menuparent
                if (0 === strpos($pathinfo, '/admin/menu/getMenuParentByPosition') && preg_match('#^/admin/menu/getMenuParentByPosition(?:/(?P<position>[^/]+))?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::getMenuParentByPositionAction',  'position' => NULL,)), array('_route' => 'admin_menu_get_menuparent'));
                }

                // admin_menu_delete_all
                if ($pathinfo === '/admin/menu/deleteall') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_menu_delete_all;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MenuController::deleteAllAction',  '_route' => 'admin_menu_delete_all',);
                }
                not_admin_menu_delete_all:

            }

            if (0 === strpos($pathinfo, '/admin/news')) {
                // admin_news
                if (preg_match('#^/admin/news(?:/(?P<page>\\d+)(?:/(?P<lang>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\NewsController::indexAction',  'page' => '1',  'lang' => NULL,)), array('_route' => 'admin_news'));
                }

                // admin_news_show
                if (preg_match('#^/admin/news/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\NewsController::showAction',)), array('_route' => 'admin_news_show'));
                }

                // admin_news_new
                if ($pathinfo === '/admin/news/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\NewsController::newAction',  '_route' => 'admin_news_new',);
                }

                // admin_news_create
                if ($pathinfo === '/admin/news/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_news_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\NewsController::createAction',  '_route' => 'admin_news_create',);
                }
                not_admin_news_create:

                // admin_news_edit
                if (preg_match('#^/admin/news/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\NewsController::editAction',)), array('_route' => 'admin_news_edit'));
                }

                // admin_news_update
                if (preg_match('#^/admin/news/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_news_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\NewsController::updateAction',)), array('_route' => 'admin_news_update'));
                }
                not_admin_news_update:

                // admin_news_delete
                if (preg_match('#^/admin/news/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_news_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\NewsController::deleteAction',)), array('_route' => 'admin_news_delete'));
                }
                not_admin_news_delete:

                // admin_news_delete_all
                if ($pathinfo === '/admin/news/deleteall') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_news_delete_all;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\NewsController::deleteAllAction',  '_route' => 'admin_news_delete_all',);
                }
                not_admin_news_delete_all:

            }

            if (0 === strpos($pathinfo, '/admin/page')) {
                // admin_page
                if (preg_match('#^/admin/page(?:/(?P<page>\\d+)(?:/(?P<lang>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\PageController::indexAction',  'page' => '1',  'lang' => NULL,)), array('_route' => 'admin_page'));
                }

                // admin_page_show
                if (preg_match('#^/admin/page/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\PageController::showAction',)), array('_route' => 'admin_page_show'));
                }

                // admin_page_new
                if ($pathinfo === '/admin/page/new') {
                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\PageController::newAction',  '_route' => 'admin_page_new',);
                }

                // admin_page_create
                if ($pathinfo === '/admin/page/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_page_create;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\PageController::createAction',  '_route' => 'admin_page_create',);
                }
                not_admin_page_create:

                // admin_page_edit
                if (preg_match('#^/admin/page/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\PageController::editAction',)), array('_route' => 'admin_page_edit'));
                }

                // admin_page_update
                if (preg_match('#^/admin/page/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_page_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\PageController::updateAction',)), array('_route' => 'admin_page_update'));
                }
                not_admin_page_update:

                // admin_page_delete
                if (preg_match('#^/admin/page/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_admin_page_delete;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\PageController::deleteAction',)), array('_route' => 'admin_page_delete'));
                }
                not_admin_page_delete:

                // admin_page_delete_all
                if ($pathinfo === '/admin/page/deleteall') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_page_delete_all;
                    }

                    return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\PageController::deleteAllAction',  '_route' => 'admin_page_delete_all',);
                }
                not_admin_page_delete_all:

            }

            // _imagine_thumbs
            if (0 === strpos($pathinfo, '/media/cache/thumbs') && preg_match('#^/media/cache/thumbs/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_thumbs;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'thumbs',)), array('_route' => '_imagine_thumbs'));
            }
            not__imagine_thumbs:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
