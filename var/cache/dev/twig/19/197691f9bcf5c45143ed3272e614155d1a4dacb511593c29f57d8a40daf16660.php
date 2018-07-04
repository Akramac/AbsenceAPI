<?php

/* AbsenceBundle:Default:indexabsence.html.twig */
class __TwigTemplate_90ccc52fef9c631daae78b674e40e05b7f8724f74b1f8d74d8cf9d46dc7ed12b extends Twig_Template
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
        $__internal_bd76ddbc09f14aa87ea06e866bd3e19641e41ac9b02240ddede249837ffff3b6 = $this->env->getExtension("native_profiler");
        $__internal_bd76ddbc09f14aa87ea06e866bd3e19641e41ac9b02240ddede249837ffff3b6->enter($__internal_bd76ddbc09f14aa87ea06e866bd3e19641e41ac9b02240ddede249837ffff3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbsenceBundle:Default:indexabsence.html.twig"));

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
            color : #1ccad5;

            font-family: Impact;
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
        // line 49
        echo $this->env->getExtension('routing')->getPath("absence_home");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("index_etudiant");
        echo "\">Etudiants</a></li>
                <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("index_classe");
        echo "\">Classes</a></li>
                <li><a href=\"";
        // line 52
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
        <h1>Gestion des absences</h1>
        <p>INPT</p>
    </div>
</div>
<div class=\"container\">
    <h2></h2>
    <div class=\"btn-group btn-group-justified\">
        <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("list_absence");
        echo "\" class=\"btn btn-success\">Consulter</a>
        <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("add_absence");
        echo "\" class=\"btn btn-info\">Ajouter</a>
        <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("delete_absence");
        echo "\" class=\"btn btn-danger\">Supprimer</a>
        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("edit_absence");
        echo "\" class=\"btn btn-warning\">Modifier</a>
    </div>
</div>

</body>
</html>";
        
        $__internal_bd76ddbc09f14aa87ea06e866bd3e19641e41ac9b02240ddede249837ffff3b6->leave($__internal_bd76ddbc09f14aa87ea06e866bd3e19641e41ac9b02240ddede249837ffff3b6_prof);

    }

    public function getTemplateName()
    {
        return "AbsenceBundle:Default:indexabsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 73,  113 => 72,  109 => 71,  105 => 70,  84 => 52,  80 => 51,  76 => 50,  72 => 49,  22 => 1,);
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
/*             color : #1ccad5;*/
/* */
/*             font-family: Impact;*/
/*         }*/
/*         body{*/
/*             font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;*/
/*             color: white;*/
/*             background-color: #087f95;*/
/*         }*/
/* */
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
/*         <h1>Gestion des absences</h1>*/
/*         <p>INPT</p>*/
/*     </div>*/
/* </div>*/
/* <div class="container">*/
/*     <h2></h2>*/
/*     <div class="btn-group btn-group-justified">*/
/*         <a href="{{ path('list_absence') }}" class="btn btn-success">Consulter</a>*/
/*         <a href="{{ path('add_absence') }}" class="btn btn-info">Ajouter</a>*/
/*         <a href="{{ path('delete_absence') }}" class="btn btn-danger">Supprimer</a>*/
/*         <a href="{{ path('edit_absence') }}" class="btn btn-warning">Modifier</a>*/
/*     </div>*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
