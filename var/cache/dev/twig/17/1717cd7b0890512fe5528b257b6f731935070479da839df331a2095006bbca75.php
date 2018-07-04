<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2401c4aa5cefe11c7ab7ff9bbba55547250558d0e7e936a344921bb744f5432d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74ee3d80f2c87437314ee9621b9c397b839704d92635df20dffb96eacd1abada = $this->env->getExtension("native_profiler");
        $__internal_74ee3d80f2c87437314ee9621b9c397b839704d92635df20dffb96eacd1abada->enter($__internal_74ee3d80f2c87437314ee9621b9c397b839704d92635df20dffb96eacd1abada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74ee3d80f2c87437314ee9621b9c397b839704d92635df20dffb96eacd1abada->leave($__internal_74ee3d80f2c87437314ee9621b9c397b839704d92635df20dffb96eacd1abada_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ce01b6a9bf03d53ea748a1bec1b4b44afaee9ca71c75a110ccd6db602714a4c = $this->env->getExtension("native_profiler");
        $__internal_4ce01b6a9bf03d53ea748a1bec1b4b44afaee9ca71c75a110ccd6db602714a4c->enter($__internal_4ce01b6a9bf03d53ea748a1bec1b4b44afaee9ca71c75a110ccd6db602714a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4ce01b6a9bf03d53ea748a1bec1b4b44afaee9ca71c75a110ccd6db602714a4c->leave($__internal_4ce01b6a9bf03d53ea748a1bec1b4b44afaee9ca71c75a110ccd6db602714a4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16c4202e6d168f6a443406ca5aa64a43cf99426c3e0995a1d6f896d2f711ce78 = $this->env->getExtension("native_profiler");
        $__internal_16c4202e6d168f6a443406ca5aa64a43cf99426c3e0995a1d6f896d2f711ce78->enter($__internal_16c4202e6d168f6a443406ca5aa64a43cf99426c3e0995a1d6f896d2f711ce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16c4202e6d168f6a443406ca5aa64a43cf99426c3e0995a1d6f896d2f711ce78->leave($__internal_16c4202e6d168f6a443406ca5aa64a43cf99426c3e0995a1d6f896d2f711ce78_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_831c2fe1ee67ab83edaa7406bf0ad8bc0af5d65dde2f6c62b72b4e77eae8b91a = $this->env->getExtension("native_profiler");
        $__internal_831c2fe1ee67ab83edaa7406bf0ad8bc0af5d65dde2f6c62b72b4e77eae8b91a->enter($__internal_831c2fe1ee67ab83edaa7406bf0ad8bc0af5d65dde2f6c62b72b4e77eae8b91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_831c2fe1ee67ab83edaa7406bf0ad8bc0af5d65dde2f6c62b72b4e77eae8b91a->leave($__internal_831c2fe1ee67ab83edaa7406bf0ad8bc0af5d65dde2f6c62b72b4e77eae8b91a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
