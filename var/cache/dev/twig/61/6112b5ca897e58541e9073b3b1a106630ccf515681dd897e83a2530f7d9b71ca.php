<?php

/* AbsenceBundle:Default:listetudiant.html.twig */
class __TwigTemplate_9d7bd727ea2053fd3eeb807a41124aa5fcfe65b8fd478c373b73950e688afd49 extends Twig_Template
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
        $__internal_ae9608d0b74b8b7480d41885557b1cce4c50422408531b87b26f0b4870ee9496 = $this->env->getExtension("native_profiler");
        $__internal_ae9608d0b74b8b7480d41885557b1cce4c50422408531b87b26f0b4870ee9496->enter($__internal_ae9608d0b74b8b7480d41885557b1cce4c50422408531b87b26f0b4870ee9496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbsenceBundle:Default:listetudiant.html.twig"));

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
            color : #c0392b;
            font-family: Impact;
        }
        body{
            font-family: \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
            color: white;
            background-color: #ac3d3d;
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
        // line 47
        echo $this->env->getExtension('routing')->getPath("absence_home");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("index_etudiant");
        echo "\">Etudiants</a></li>
                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("index_classe");
        echo "\">Classes</a></li>
                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("index_absence");
        echo "\">Absences</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"http://localhost/etudiant/web/app_dev.php/logout\"> Se deconnecter</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class=\"jumbotron\" id=\"ga\">
    <div class=\"container text-center\">
        <h1>Gestion des etudiants</h1>
        <p>INPT</p>
    </div>
</div>


";
        // line 68
        if (((isset($context["modification"]) ? $context["modification"] : $this->getContext($context, "modification")) == true)) {
            // line 69
            echo "    <div class=\"alert alert-warning fade in\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        Etudiant bien modifié !
    </div>
";
        }
        // line 74
        echo "
";
        // line 75
        if (((isset($context["supression"]) ? $context["supression"] : $this->getContext($context, "supression")) == true)) {
            // line 76
            echo "    <div class=\"alert alert-danger fade in\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        Etudiant bien suprimé !
    </div>
";
        }
        // line 81
        echo "
";
        // line 82
        if (((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")) == true)) {
            // line 83
            echo "    <div class=\"alert alert-info fade in\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        Etudiant bien ajouté !
    </div>
";
        }
        // line 88
        echo "

<div class=\"container\">
    <div class=\"btn-group btn-group-justified\">
        <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("list_etudiant");
        echo "\" class=\"btn btn-success\">Consulter</a>
        <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("add_etudiant");
        echo "\" class=\"btn btn-info\">Ajouter</a>
        <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("delete_etudiant");
        echo "\" class=\"btn btn-danger\">Supprimer</a>
        <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("edit_etudiant");
        echo "\" class=\"btn btn-warning\">Modifier</a>
    </div>
</div>



 <div class=\"container\">
     <h3 > Veuillez choisir une option: </h3>
     <div class=\"btn-group btn-group-justified\">
         <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("list_etudiant_classe");
        echo "\" class=\"btn btn-default\">PAR CLASSE</a>
         <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("list_etudiant_tous");
        echo "\" class=\"btn btn-default\">TOUS</a>
     </div>

</div>

</body>
</html>
";
        
        $__internal_ae9608d0b74b8b7480d41885557b1cce4c50422408531b87b26f0b4870ee9496->leave($__internal_ae9608d0b74b8b7480d41885557b1cce4c50422408531b87b26f0b4870ee9496_prof);

    }

    public function getTemplateName()
    {
        return "AbsenceBundle:Default:listetudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 105,  166 => 104,  154 => 95,  150 => 94,  146 => 93,  142 => 92,  136 => 88,  129 => 83,  127 => 82,  124 => 81,  117 => 76,  115 => 75,  112 => 74,  105 => 69,  103 => 68,  82 => 50,  78 => 49,  74 => 48,  70 => 47,  22 => 1,);
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
/*             color : #c0392b;*/
/*             font-family: Impact;*/
/*         }*/
/*         body{*/
/*             font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;*/
/*             color: white;*/
/*             background-color: #ac3d3d;*/
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
/*                 <li><a href="http://localhost/etudiant/web/app_dev.php/logout"> Se deconnecter</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* */
/* <div class="jumbotron" id="ga">*/
/*     <div class="container text-center">*/
/*         <h1>Gestion des etudiants</h1>*/
/*         <p>INPT</p>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* {% if modification == true %}*/
/*     <div class="alert alert-warning fade in">*/
/*         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*         Etudiant bien modifié !*/
/*     </div>*/
/* {% endif %}*/
/* */
/* {% if supression == true %}*/
/*     <div class="alert alert-danger fade in">*/
/*         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*         Etudiant bien suprimé !*/
/*     </div>*/
/* {% endif %}*/
/* */
/* {% if ajout == true %}*/
/*     <div class="alert alert-info fade in">*/
/*         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*         Etudiant bien ajouté !*/
/*     </div>*/
/* {% endif %}*/
/* */
/* */
/* <div class="container">*/
/*     <div class="btn-group btn-group-justified">*/
/*         <a href="{{ path('list_etudiant') }}" class="btn btn-success">Consulter</a>*/
/*         <a href="{{ path('add_etudiant') }}" class="btn btn-info">Ajouter</a>*/
/*         <a href="{{ path('delete_etudiant') }}" class="btn btn-danger">Supprimer</a>*/
/*         <a href="{{ path('edit_etudiant') }}" class="btn btn-warning">Modifier</a>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/*  <div class="container">*/
/*      <h3 > Veuillez choisir une option: </h3>*/
/*      <div class="btn-group btn-group-justified">*/
/*          <a href="{{ path('list_etudiant_classe') }}" class="btn btn-default">PAR CLASSE</a>*/
/*          <a href="{{ path('list_etudiant_tous') }}" class="btn btn-default">TOUS</a>*/
/*      </div>*/
/* */
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
