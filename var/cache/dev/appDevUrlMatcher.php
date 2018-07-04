<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

        // user_add
        if ($pathinfo === '/admin/user_add') {
            return array (  '_controller' => 'UserBundle\\Controller\\UserController::userAddAction',  '_route' => 'user_add',);
        }

        // user_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_index');
            }

            return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::indexuserAction',  '_route' => 'user_index',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/absence/list')) {
                if (0 === strpos($pathinfo, '/absence/list/paretudiant')) {
                    // user_list_absence_etudiant
                    if ($pathinfo === '/absence/list/paretudiant') {
                        return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listabsenceetudiantuserAction',  '_route' => 'user_list_absence_etudiant',);
                    }

                    // user_list_absence_etudiant_show
                    if ($pathinfo === '/absence/list/paretudiant/show') {
                        return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listabsenceetudiantshowuserAction',  '_route' => 'user_list_absence_etudiant_show',);
                    }

                }

                // user_list_absence_tous
                if ($pathinfo === '/absence/list/tous') {
                    return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listabsencetoususerAction',  '_route' => 'user_list_absence_tous',);
                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                // absence_home
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'absence_home');
                    }

                    return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'absence_home',);
                }

                // index_etudiant
                if ($pathinfo === '/admin/etudiant/index') {
                    return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::indexetudiantAction',  '_route' => 'index_etudiant',);
                }

                // index_classe
                if ($pathinfo === '/admin/classe/index') {
                    return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::indexclasseAction',  '_route' => 'index_classe',);
                }

                // index_absence
                if ($pathinfo === '/admin/absence/index') {
                    return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::indexabsenceAction',  '_route' => 'index_absence',);
                }

                if (0 === strpos($pathinfo, '/admin/etudiants/list')) {
                    // list_etudiant
                    if (preg_match('#^/admin/etudiants/list(?:/(?P<modification>[^/]++)(?:/(?P<supression>[^/]++)(?:/(?P<ajout>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_etudiant')), array (  'modification' => 0,  'supression' => 0,  'ajout' => 0,  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listetudiantAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/etudiants/list_')) {
                        if (0 === strpos($pathinfo, '/admin/etudiants/list_parclasse')) {
                            // list_etudiant_classe
                            if ($pathinfo === '/admin/etudiants/list_parclasse') {
                                return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listetudiantclasseAction',  '_route' => 'list_etudiant_classe',);
                            }

                            // list_etudiant_classe_show
                            if ($pathinfo === '/admin/etudiants/list_parclasse_show') {
                                return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listetudiantclasseshowAction',  '_route' => 'list_etudiant_classe_show',);
                            }

                        }

                        // list_etudiant_tous
                        if ($pathinfo === '/admin/etudiants/list_tous') {
                            return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listetudianttousAction',  '_route' => 'list_etudiant_tous',);
                        }

                    }

                }

            }

        }

        // list_classe
        if (0 === strpos($pathinfo, '/classe/list') && preg_match('#^/classe/list(?:/(?P<modification>[^/]++)(?:/(?P<supression>[^/]++)(?:/(?P<ajout>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_classe')), array (  'modification' => 0,  'supression' => 0,  'ajout' => 0,  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listclasseAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/absence')) {
                    if (0 === strpos($pathinfo, '/admin/absence/list')) {
                        // list_absence
                        if (preg_match('#^/admin/absence/list(?:/(?P<ajout>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_absence')), array (  'ajout' => 0,  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listabsenceAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/absence/list_paretudiant')) {
                            // list_absence_etudiant
                            if ($pathinfo === '/admin/absence/list_paretudiant') {
                                return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listabsenceetudiantAction',  '_route' => 'list_absence_etudiant',);
                            }

                            // list_absence_etudiant_show
                            if ($pathinfo === '/admin/absence/list_paretudiant_show') {
                                return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listabsenceetudiantshowAction',  '_route' => 'list_absence_etudiant_show',);
                            }

                        }

                    }

                    // list_absence_tous
                    if ($pathinfo === '/admin/absence_list_tous') {
                        return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listabsencetousAction',  '_route' => 'list_absence_tous',);
                    }

                }

                // add_etudiant
                if ($pathinfo === '/admin/etudiant/add') {
                    return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::addetudiantAction',  '_route' => 'add_etudiant',);
                }

                // add_classe
                if ($pathinfo === '/admin/classe/add') {
                    return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::addclasseAction',  '_route' => 'add_classe',);
                }

                // add_absence
                if ($pathinfo === '/admin/absence/add') {
                    return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::manageabsenceAction',  '_route' => 'add_absence',);
                }

                if (0 === strpos($pathinfo, '/admin/etudiant')) {
                    if (0 === strpos($pathinfo, '/admin/etudiant/edit')) {
                        // edit_etudiant
                        if ($pathinfo === '/admin/etudiant/edit') {
                            return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::editetudiantAction',  '_route' => 'edit_etudiant',);
                        }

                        // edit_etudiant_form
                        if ($pathinfo === '/admin/etudiant/edit/form') {
                            return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::editetudiantformAction',  '_route' => 'edit_etudiant_form',);
                        }

                    }

                    // delete_etudiant
                    if ($pathinfo === '/admin/etudiant/delete') {
                        return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::etudiantdeleteAction',  '_route' => 'delete_etudiant',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/classe')) {
                    if (0 === strpos($pathinfo, '/admin/classe/edit')) {
                        // edit_classe
                        if ($pathinfo === '/admin/classe/edit') {
                            return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::editclasseAction',  '_route' => 'edit_classe',);
                        }

                        // edit_classe_form
                        if ($pathinfo === '/admin/classe/edit/form') {
                            return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::editclasseformAction',  '_route' => 'edit_classe_form',);
                        }

                    }

                    // delete_classe
                    if ($pathinfo === '/admin/classe/delete') {
                        return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::classedeleteAction',  '_route' => 'delete_classe',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/absence')) {
                    if (0 === strpos($pathinfo, '/admin/absence/delete')) {
                        // delete_absence
                        if ($pathinfo === '/admin/absence/delete') {
                            return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::absencedeleteAction',  '_route' => 'delete_absence',);
                        }

                        // action_delete_absence
                        if (0 === strpos($pathinfo, '/admin/absence/delete/action') && preg_match('#^/admin/absence/delete/action/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'action_delete_absence')), array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::absencedeleteactionAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/absence/edit')) {
                        // edit_absence
                        if ($pathinfo === '/admin/absence/edit') {
                            return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::editabsenceAction',  '_route' => 'edit_absence',);
                        }

                        // edit_absence_form
                        if (preg_match('#^/admin/absence/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_absence_form')), array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::editabsenceformAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/absence/list-parclasse')) {
                        // list_absence_classe
                        if ($pathinfo === '/admin/absence/list-parclasse') {
                            return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listabsenceclasseAction',  '_route' => 'list_absence_classe',);
                        }

                        // list_absence_classe_show
                        if ($pathinfo === '/admin/absence/list-parclasse-show') {
                            return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listabsenceclasseshowAction',  '_route' => 'list_absence_classe_show',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/absence/list-parclasse-')) {
                // user_list_absence_classe
                if ($pathinfo === '/absence/list-parclasse-user') {
                    return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listabsenceclasseuserAction',  '_route' => 'user_list_absence_classe',);
                }

                // user_list_absence_classe_show
                if ($pathinfo === '/absence/list-parclasse-show-user') {
                    return array (  '_controller' => 'AbsenceBundle\\Controller\\DefaultController::listabsenceclasseusershowAction',  '_route' => 'user_list_absence_classe_show',);
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
