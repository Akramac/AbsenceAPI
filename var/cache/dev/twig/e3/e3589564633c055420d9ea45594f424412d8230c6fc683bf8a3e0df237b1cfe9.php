<?php

/* AbsenceBundle:Default:listabsencetoususer.html.twig */
class __TwigTemplate_ce8caba7eea792fcad88240b166c27957883406f641d719de02b8a2a1059f3a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66b974f24a728f82796f52c4d1cc0a07158a21bb3f5bd7cfce3dabba60ae40b8 = $this->env->getExtension("native_profiler");
        $__internal_66b974f24a728f82796f52c4d1cc0a07158a21bb3f5bd7cfce3dabba60ae40b8->enter($__internal_66b974f24a728f82796f52c4d1cc0a07158a21bb3f5bd7cfce3dabba60ae40b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbsenceBundle:Default:listabsencetoususer.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Gestion des absences - INPT</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <style>
        #ga{

            font-family: Impact;
            color : #1ccad5;
        }
        body{
            font-family: \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
            color: white;
            background-color: #087f95;
        }
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
        #messi{

        }
    </style>
</head>
<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">INPT</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Home</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class=\"jumbotron\" id=\"ga\">
    <div class=\"container text-center\">
        <h1>Gestion des absences</h1>
        <p>Consultation</p>
    </div>
</div>

<div class=\"container\">
    <h2></h2>
    <div class=\"btn-group btn-group-justified\">
        <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("user_list_absence_etudiant");
        echo "\" class=\"btn btn-info\">Absences par etudiant</a>
        <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("user_list_absence_classe");
        echo "\" class=\"btn btn-info\">Absences par classe</a>
        <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("user_list_absence_tous");
        echo "\" class=\"btn btn-info\">Toutes les absences</a>
    </div>
</div>


<div class=\"container\">
    <h3> Les entrées d'absences ajoutée </h3>
    <table class=\"table\">
        <thead>
        <tr>
            <th>ETUDIANT</th>
            <th>DATE</th>
            <th>Nombre de vacation </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 86
            echo "            <tr>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "etudiant", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nbVacation", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </tbody>
    </table>
</div>




</body>
</html>";
        
        $__internal_66b974f24a728f82796f52c4d1cc0a07158a21bb3f5bd7cfce3dabba60ae40b8->leave($__internal_66b974f24a728f82796f52c4d1cc0a07158a21bb3f5bd7cfce3dabba60ae40b8_prof);

    }

    public function getTemplateName()
    {
        return "AbsenceBundle:Default:listabsencetoususer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 92,  135 => 89,  131 => 88,  127 => 87,  124 => 86,  120 => 85,  101 => 69,  97 => 68,  93 => 67,  74 => 51,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Gestion des absences - INPT</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*     <style>*/
/*         #ga{*/
/* */
/*             font-family: Impact;*/
/*             color : #1ccad5;*/
/*         }*/
/*         body{*/
/*             font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;*/
/*             color: white;*/
/*             background-color: #087f95;*/
/*         }*/
/*         /* Remove the navbar's default margin-bottom and rounded borders *//* */
/*         .navbar {*/
/*             margin-bottom: 0;*/
/*             border-radius: 0;*/
/*         }*/
/* */
/*         /* Add a gray background color and some padding to the footer *//* */
/*         footer {*/
/*             background-color: #f2f2f2;*/
/*             padding: 25px;*/
/*         }*/
/*         #messi{*/
/* */
/*         }*/
/*     </style>*/
/* </head>*/
/* <body>*/
/* */
/* <nav class="navbar navbar-inverse">*/
/*     <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">INPT</a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse" id="myNavbar">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="{{ path('user_index') }}">Home</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <div class="jumbotron" id="ga">*/
/*     <div class="container text-center">*/
/*         <h1>Gestion des absences</h1>*/
/*         <p>Consultation</p>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <h2></h2>*/
/*     <div class="btn-group btn-group-justified">*/
/*         <a href="{{ path('user_list_absence_etudiant') }}" class="btn btn-info">Absences par etudiant</a>*/
/*         <a href="{{ path('user_list_absence_classe') }}" class="btn btn-info">Absences par classe</a>*/
/*         <a href="{{ path('user_list_absence_tous') }}" class="btn btn-info">Toutes les absences</a>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <div class="container">*/
/*     <h3> Les entrées d'absences ajoutée </h3>*/
/*     <table class="table">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>ETUDIANT</th>*/
/*             <th>DATE</th>*/
/*             <th>Nombre de vacation </th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for a in absences %}*/
/*             <tr>*/
/*                 <td>{{ a.etudiant.nom }}</td>*/
/*                 <td>{{ a.date | date('d/m/Y')}}</td>*/
/*                 <td>{{ a.nbVacation }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* </body>*/
/* </html>*/
