<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_33c8c8298bede47b16339787d0522dd7ed4a24800e92a36c38629cd9834e3991 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acc525595ac42e695de66d696b0dc1cbb2aea205c39c751357ad7545fe34d33f = $this->env->getExtension("native_profiler");
        $__internal_acc525595ac42e695de66d696b0dc1cbb2aea205c39c751357ad7545fe34d33f->enter($__internal_acc525595ac42e695de66d696b0dc1cbb2aea205c39c751357ad7545fe34d33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc525595ac42e695de66d696b0dc1cbb2aea205c39c751357ad7545fe34d33f->leave($__internal_acc525595ac42e695de66d696b0dc1cbb2aea205c39c751357ad7545fe34d33f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b35aa995dc1e19467f244698917cffe6fb286fd7ab6c971dcd7790dbad4ecedc = $this->env->getExtension("native_profiler");
        $__internal_b35aa995dc1e19467f244698917cffe6fb286fd7ab6c971dcd7790dbad4ecedc->enter($__internal_b35aa995dc1e19467f244698917cffe6fb286fd7ab6c971dcd7790dbad4ecedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "



    <div class=\"login\">
        <h1>Login</h1>
        <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            <label for=\"username\" class=\"labeell\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Enter Password\"/>

            <label for=\"password\" class=\"labeell\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Enter Password\" />


            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\" class=\"labeell\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>

            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block btn-large\"/>
        </form>
    </div>

";
        
        $__internal_b35aa995dc1e19467f244698917cffe6fb286fd7ab6c971dcd7790dbad4ecedc->leave($__internal_b35aa995dc1e19467f244698917cffe6fb286fd7ab6c971dcd7790dbad4ecedc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  83 => 26,  74 => 20,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* */
/*     <div class="login">*/
/*         <h1>Login</h1>*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*             <label for="username" class="labeell">{{ 'security.login.username'|trans }}</label>*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="Enter Password"/>*/
/* */
/*             <label for="password" class="labeell">{{ 'security.login.password'|trans }}</label>*/
/*             <input type="password" id="password" name="_password" required="required" placeholder="Enter Password" />*/
/* */
/* */
/*             <div class="form-group">*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                 <label for="remember_me" class="labeell">{{ 'security.login.remember_me'|trans }}</label>*/
/*             </div>*/
/* */
/*             <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn btn-primary btn-block btn-large"/>*/
/*         </form>*/
/*     </div>*/
/* */
/* {% endblock fos_user_content %}*/
