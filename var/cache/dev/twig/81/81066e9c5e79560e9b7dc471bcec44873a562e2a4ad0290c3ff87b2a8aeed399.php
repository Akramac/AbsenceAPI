<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4958d8847399b633d76663287a2ccee7b7a80d584c19c607784df3523698c979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b90ac9e68a107bf326711a573228a0de9e9403e8c7e82cf301b0f3e882b5f257 = $this->env->getExtension("native_profiler");
        $__internal_b90ac9e68a107bf326711a573228a0de9e9403e8c7e82cf301b0f3e882b5f257->enter($__internal_b90ac9e68a107bf326711a573228a0de9e9403e8c7e82cf301b0f3e882b5f257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90ac9e68a107bf326711a573228a0de9e9403e8c7e82cf301b0f3e882b5f257->leave($__internal_b90ac9e68a107bf326711a573228a0de9e9403e8c7e82cf301b0f3e882b5f257_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_94720dfc7e71e2f12c97f618822fb42bd819d46516a5cb3686b98f9514ce6449 = $this->env->getExtension("native_profiler");
        $__internal_94720dfc7e71e2f12c97f618822fb42bd819d46516a5cb3686b98f9514ce6449->enter($__internal_94720dfc7e71e2f12c97f618822fb42bd819d46516a5cb3686b98f9514ce6449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_94720dfc7e71e2f12c97f618822fb42bd819d46516a5cb3686b98f9514ce6449->leave($__internal_94720dfc7e71e2f12c97f618822fb42bd819d46516a5cb3686b98f9514ce6449_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_afb7349e149aee68f8bd0a95d98d28b3facfbe5a209d5fe2ff3e3e3f532117ca = $this->env->getExtension("native_profiler");
        $__internal_afb7349e149aee68f8bd0a95d98d28b3facfbe5a209d5fe2ff3e3e3f532117ca->enter($__internal_afb7349e149aee68f8bd0a95d98d28b3facfbe5a209d5fe2ff3e3e3f532117ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_afb7349e149aee68f8bd0a95d98d28b3facfbe5a209d5fe2ff3e3e3f532117ca->leave($__internal_afb7349e149aee68f8bd0a95d98d28b3facfbe5a209d5fe2ff3e3e3f532117ca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93cab087d4029da83bda7c6208961d15b990cf699f1101a8489aa3f4d29a2a86 = $this->env->getExtension("native_profiler");
        $__internal_93cab087d4029da83bda7c6208961d15b990cf699f1101a8489aa3f4d29a2a86->enter($__internal_93cab087d4029da83bda7c6208961d15b990cf699f1101a8489aa3f4d29a2a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_93cab087d4029da83bda7c6208961d15b990cf699f1101a8489aa3f4d29a2a86->leave($__internal_93cab087d4029da83bda7c6208961d15b990cf699f1101a8489aa3f4d29a2a86_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
