<?php

/* AbsenceBundle:Default:editclasse.html.twig */
class __TwigTemplate_9deb175ec8cc979325e8d78db7fdf3d2f0a0cbb09d1f0dc237b16f44ca7585ff extends Twig_Template
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
        $__internal_0b212860d0eda8b978d8ca6266fe30e2e4865d7a7f5f2757d7fb38847f406ed7 = $this->env->getExtension("native_profiler");
        $__internal_0b212860d0eda8b978d8ca6266fe30e2e4865d7a7f5f2757d7fb38847f406ed7->enter($__internal_0b212860d0eda8b978d8ca6266fe30e2e4865d7a7f5f2757d7fb38847f406ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbsenceBundle:Default:editclasse.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Gestion des etudiants - INPT</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <style>
        #ga{
            color : #1abc9c;
            font-family: Impact;

        }
        body{
            font-family: \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
            color: white;
            background-color: #20884c;
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
        // line 48
        echo $this->env->getExtension('routing')->getPath("absence_home");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("index_etudiant");
        echo "\">Etudiants</a></li>
                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("index_classe");
        echo "\">Classes</a></li>
                <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("index_absence");
        echo "\">Absences</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"http://localhost/sga/web/app_dev.php/logout\"> Se deconnecter</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class=\"jumbotron\" id=\"ga\">
    <div class=\"container text-center\">
        <h1>Gestion des classes</h1>
        <p>INPT</p>
    </div>
</div>

<div class=\"container\">
    <h2></h2>
    <div class=\"btn-group btn-group-justified\">
        <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("list_classe");
        echo "\" class=\"btn btn-success\">Consulter</a>
        <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("add_classe");
        echo "\" class=\"btn btn-info\">Ajouter</a>
        <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("delete_classe");
        echo "\" class=\"btn btn-danger\">Supprimer</a>
        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("edit_classe");
        echo "\" class=\"btn btn-warning\">Modifier</a>

    </div>
</div>

<div class=\"container\">
    <h3>Choisir la classe à modifier :</h3>
    ";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
</div>


</body>
</html>";
        
        $__internal_0b212860d0eda8b978d8ca6266fe30e2e4865d7a7f5f2757d7fb38847f406ed7->leave($__internal_0b212860d0eda8b978d8ca6266fe30e2e4865d7a7f5f2757d7fb38847f406ed7_prof);

    }

    public function getTemplateName()
    {
        return "AbsenceBundle:Default:editclasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 80,  117 => 73,  113 => 72,  109 => 71,  105 => 70,  83 => 51,  79 => 50,  75 => 49,  71 => 48,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Gestion des etudiants - INPT</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*     <style>*/
/*         #ga{*/
/*             color : #1abc9c;*/
/*             font-family: Impact;*/
/* */
/*         }*/
/*         body{*/
/*             font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;*/
/*             color: white;*/
/*             background-color: #20884c;*/
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
/*                 <li class="active"><a href="{{ path('absence_home') }}">Home</a></li>*/
/*                 <li><a href="{{ path('index_etudiant') }}">Etudiants</a></li>*/
/*                 <li><a href="{{ path('index_classe') }}">Classes</a></li>*/
/*                 <li><a href="{{ path('index_absence') }}">Absences</a></li>*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="http://localhost/sga/web/app_dev.php/logout"> Se deconnecter</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <div class="jumbotron" id="ga">*/
/*     <div class="container text-center">*/
/*         <h1>Gestion des classes</h1>*/
/*         <p>INPT</p>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <h2></h2>*/
/*     <div class="btn-group btn-group-justified">*/
/*         <a href="{{ path('list_classe') }}" class="btn btn-success">Consulter</a>*/
/*         <a href="{{ path('add_classe') }}" class="btn btn-info">Ajouter</a>*/
/*         <a href="{{ path('delete_classe') }}" class="btn btn-danger">Supprimer</a>*/
/*         <a href="{{ path('edit_classe') }}" class="btn btn-warning">Modifier</a>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <h3>Choisir la classe à modifier :</h3>*/
/*     {{ form(f) }}*/
/* </div>*/
/* */
/* */
/* </body>*/
/* </html>*/
