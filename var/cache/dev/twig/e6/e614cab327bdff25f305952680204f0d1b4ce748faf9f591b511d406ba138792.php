<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_dc5569453f247697d98985f1574233568cf56d50bec4c62ce341cf6fe0c952a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_48f28e521fae3903669e4a832c3998200de6cef562b256b5b9a8a77a6fb14925 = $this->env->getExtension("native_profiler");
        $__internal_48f28e521fae3903669e4a832c3998200de6cef562b256b5b9a8a77a6fb14925->enter($__internal_48f28e521fae3903669e4a832c3998200de6cef562b256b5b9a8a77a6fb14925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48f28e521fae3903669e4a832c3998200de6cef562b256b5b9a8a77a6fb14925->leave($__internal_48f28e521fae3903669e4a832c3998200de6cef562b256b5b9a8a77a6fb14925_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f81a47876135e99c0c509127915d408e9d4812562aa2581aa9345c3556d22b2 = $this->env->getExtension("native_profiler");
        $__internal_4f81a47876135e99c0c509127915d408e9d4812562aa2581aa9345c3556d22b2->enter($__internal_4f81a47876135e99c0c509127915d408e9d4812562aa2581aa9345c3556d22b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_4f81a47876135e99c0c509127915d408e9d4812562aa2581aa9345c3556d22b2->leave($__internal_4f81a47876135e99c0c509127915d408e9d4812562aa2581aa9345c3556d22b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
