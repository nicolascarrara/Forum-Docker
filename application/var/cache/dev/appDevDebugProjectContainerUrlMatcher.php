<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // addmembre
        if ('/addmembre' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'addmembre');
            }

            return array (  '_controller' => 'forum\\PlatformBundle\\Controller\\AdminController::addMembreAction',  '_route' => 'addmembre',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // listemembre
            if ('/listemembre' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'listemembre');
                }

                return array (  '_controller' => 'forum\\PlatformBundle\\Controller\\AdminController::listeMembreAction',  '_route' => 'listemembre',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ('/login' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'login');
                    }

                    return array (  '_controller' => 'forum\\PlatformBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // security_login_check
                if ('/login_check' === $pathinfo) {
                    return array (  '_controller' => 'forum\\PlatformBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'security_login_check',);
                }

            }

            // logout
            if ('/logout' === $pathinfo) {
                return array (  '_controller' => 'forum\\PlatformBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        // forum_platform_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'forum_platform_default_index');
            }

            return array (  '_controller' => 'forum\\PlatformBundle\\Controller\\DefaultController::indexAction',  '_route' => 'forum_platform_default_index',);
        }

        // forum_platform_default_pagemembre
        if (0 === strpos($pathinfo, '/membre') && preg_match('#^/membre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_platform_default_pagemembre')), array (  '_controller' => 'forum\\PlatformBundle\\Controller\\DefaultController::PageMembre',));
        }

        if (0 === strpos($pathinfo, '/section')) {
            // forum_platform_default_listesection
            if (preg_match('#^/section/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'forum_platform_default_listesection');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_platform_default_listesection')), array (  '_controller' => 'forum\\PlatformBundle\\Controller\\DefaultController::ListeSection',));
            }

            // forum_platform_default_nouveausujet
            if (preg_match('#^/section/(?P<id>[^/]++)/newtopic$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_platform_default_nouveausujet')), array (  '_controller' => 'forum\\PlatformBundle\\Controller\\DefaultController::NouveauSujet',));
            }

            // forum_platform_default_sujet
            if (preg_match('#^/section/(?P<id>[^/]++)/topic/(?P<topic>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'forum_platform_default_sujet');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_platform_default_sujet')), array (  '_controller' => 'forum\\PlatformBundle\\Controller\\DefaultController::Sujet',));
            }

            // forum_platform_default_message
            if (preg_match('#^/section/(?P<id>[^/]++)/topic/(?P<topic>[^/]++)/newmessage$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_platform_default_message')), array (  '_controller' => 'forum\\PlatformBundle\\Controller\\DefaultController::Message',));
            }

            // forum_platform_default_effacersujet
            if (preg_match('#^/section/(?P<id>[^/]++)/delete/(?P<topic>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'forum_platform_default_effacersujet');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_platform_default_effacersujet')), array (  '_controller' => 'forum\\PlatformBundle\\Controller\\DefaultController::EffacerSujet',));
            }

            // forum_platform_default_effacermessage
            if (preg_match('#^/section/(?P<id>[^/]++)/topic/(?P<topic>[^/]++)/delete/(?P<message>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_platform_default_effacermessage')), array (  '_controller' => 'forum\\PlatformBundle\\Controller\\DefaultController::EffacerMessage',));
            }

            // forum_platform_default_exportsection
            if (preg_match('#^/section/(?P<id>[^/]++)/export$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_platform_default_exportsection')), array (  '_controller' => 'forum\\PlatformBundle\\Controller\\DefaultController::ExportSection',));
            }

        }

        // forum_platform_default_nouvellesection
        if (0 === strpos($pathinfo, '/newsection') && preg_match('#^/newsection/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_platform_default_nouvellesection')), array (  '_controller' => 'forum\\PlatformBundle\\Controller\\DefaultController::NouvelleSection',));
        }

        // inscription
        if ('/inscription' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'inscription');
            }

            return array (  '_controller' => 'forum\\PlatformBundle\\Controller\\InscriptionController::inscriptionAction',  '_route' => 'inscription',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
