<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // addmembre
        if ('/addmembre' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'addmembre');
            }

            return array (  '_controller' => 'forum\\PlatformBundle\\Controller\\AdminController::addMembreAction',  '_route' => 'addmembre',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // listemembre
            if ('/listemembre' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'listemembre');
                }

                return array (  '_controller' => 'forum\\PlatformBundle\\Controller\\AdminController::listeMembreAction',  '_route' => 'listemembre',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ('/login' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'login');
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
                return $this->redirect($pathinfo.'/', 'forum_platform_default_index');
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
                    return $this->redirect($pathinfo.'/', 'forum_platform_default_listesection');
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
                    return $this->redirect($pathinfo.'/', 'forum_platform_default_sujet');
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
                    return $this->redirect($pathinfo.'/', 'forum_platform_default_effacersujet');
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
                return $this->redirect($pathinfo.'/', 'inscription');
            }

            return array (  '_controller' => 'forum\\PlatformBundle\\Controller\\InscriptionController::inscriptionAction',  '_route' => 'inscription',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
