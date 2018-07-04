<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_89b9b4bffd73b005d5837c5d8206d9a6b953afc1d878501ca5408f3cf18e65a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_78917e875e95002fdbe23ded0900fa4a321393aa13b99f285325b25e59755e5f = $this->env->getExtension("native_profiler");
        $__internal_78917e875e95002fdbe23ded0900fa4a321393aa13b99f285325b25e59755e5f->enter($__internal_78917e875e95002fdbe23ded0900fa4a321393aa13b99f285325b25e59755e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78917e875e95002fdbe23ded0900fa4a321393aa13b99f285325b25e59755e5f->leave($__internal_78917e875e95002fdbe23ded0900fa4a321393aa13b99f285325b25e59755e5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4b2065cda997a9058d924e668b57ae9ee0e3f5d93ed05367b9de75cf83af492 = $this->env->getExtension("native_profiler");
        $__internal_f4b2065cda997a9058d924e668b57ae9ee0e3f5d93ed05367b9de75cf83af492->enter($__internal_f4b2065cda997a9058d924e668b57ae9ee0e3f5d93ed05367b9de75cf83af492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f4b2065cda997a9058d924e668b57ae9ee0e3f5d93ed05367b9de75cf83af492->leave($__internal_f4b2065cda997a9058d924e668b57ae9ee0e3f5d93ed05367b9de75cf83af492_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
