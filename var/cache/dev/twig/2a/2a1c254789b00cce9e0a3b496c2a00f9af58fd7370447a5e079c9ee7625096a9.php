<?php

/* AbsenceBundle:Default:listabsenceclasseuser.html.twig */
class __TwigTemplate_9b063e0f657c48e01177c1189693b4766e85c42bba306a040952cc34271ce044 extends Twig_Template
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
        $__internal_14a5ba4280cc364c8f546d0b689d120ed0ec8354c1a071db61c608c3b9058614 = $this->env->getExtension("native_profiler");
        $__internal_14a5ba4280cc364c8f546d0b689d120ed0ec8354c1a071db61c608c3b9058614->enter($__internal_14a5ba4280cc364c8f546d0b689d120ed0ec8354c1a071db61c608c3b9058614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbsenceBundle:Default:listabsenceclasseuser.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Gestion des étudiants</title>
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
            <a class=\"navbar-brand\" href=\"#\"></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Home</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class=\"jumbotron\" id=\"ga\">
    <div class=\"container text-center\">
        <h1>Gestion des absences</h1>
        <p></p>
    </div>
</div>

<div class=\"container\">
    <h2></h2>
    <div class=\"btn-group btn-group-justified\">
        <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("user_list_absence_etudiant");
        echo "\" class=\"btn btn-info\">Absences par etudiant</a>
        <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("user_list_absence_classe");
        echo "\" class=\"btn btn-info\">Absences par classe</a>
        <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("user_list_absence_tous");
        echo "\" class=\"btn btn-info\">Toutes les absences</a>
    </div>
</div>

<div class=\"container\">
    <h3>Choisir une classe</h3>
    ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
</div>

</body>
</html>
";
        
        $__internal_14a5ba4280cc364c8f546d0b689d120ed0ec8354c1a071db61c608c3b9058614->leave($__internal_14a5ba4280cc364c8f546d0b689d120ed0ec8354c1a071db61c608c3b9058614_prof);

    }

    public function getTemplateName()
    {
        return "AbsenceBundle:Default:listabsenceclasseuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 76,  102 => 70,  98 => 69,  94 => 68,  75 => 52,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Gestion des étudiants</title>*/
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
/* */
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
/*             <a class="navbar-brand" href="#"></a>*/
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
/*         <p></p>*/
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
/* <div class="container">*/
/*     <h3>Choisir une classe</h3>*/
/*     {{ form(f) }}*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
