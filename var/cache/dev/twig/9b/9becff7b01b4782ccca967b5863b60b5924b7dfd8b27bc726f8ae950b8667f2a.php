<?php

/* AbsenceBundle:Default:listclasse.html.twig */
class __TwigTemplate_bd55a6d001f5fff67199fe7c992cdb051fc4306a21c276b8d0d48176f182f603 extends Twig_Template
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
        $__internal_7c490f770be5ce9198eb7b1b84e5aa87f7d87348cec46e3bc381f6bc8f692b60 = $this->env->getExtension("native_profiler");
        $__internal_7c490f770be5ce9198eb7b1b84e5aa87f7d87348cec46e3bc381f6bc8f692b60->enter($__internal_7c490f770be5ce9198eb7b1b84e5aa87f7d87348cec46e3bc381f6bc8f692b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbsenceBundle:Default:listclasse.html.twig"));

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
                <li><a href=\"http://localhost/absence/web/app_dev.php/logout\"> Se deconnecter</a></li>
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

";
        // line 67
        if (((isset($context["modification"]) ? $context["modification"] : $this->getContext($context, "modification")) == true)) {
            // line 68
            echo "    <div class=\"alert alert-warning fade in\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        Classe bien modifié !
    </div>
";
        }
        // line 73
        echo "
";
        // line 74
        if (((isset($context["supression"]) ? $context["supression"] : $this->getContext($context, "supression")) == true)) {
            // line 75
            echo "    <div class=\"alert alert-danger fade in\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        Classe bien suprimé !
    </div>
";
        }
        // line 80
        echo "
";
        // line 81
        if (((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")) == true)) {
            // line 82
            echo "    <div class=\"alert alert-info fade in\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        Classe bien ajouté !
    </div>
";
        }
        // line 87
        echo "

<div class=\"container\">
    <h2></h2>
    <div class=\"btn-group btn-group-justified\">
        <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("list_classe");
        echo "\" class=\"btn btn-success\">Consulter</a>
        <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("add_classe");
        echo "\" class=\"btn btn-info\">Ajouter</a>
        <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("delete_classe");
        echo "\" class=\"btn btn-danger\">Supprimer</a>
        <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("edit_classe");
        echo "\" class=\"btn btn-warning\">Modifier</a>
    </div>
</div>

<div class=\"container\">
    <h2>La Liste des classes</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th>ID</th>
            <th>CLASSE</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 110
            echo "            <tr>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "        </tbody>
    </table>
</div>

</body>
</html>
";
        
        $__internal_7c490f770be5ce9198eb7b1b84e5aa87f7d87348cec46e3bc381f6bc8f692b60->leave($__internal_7c490f770be5ce9198eb7b1b84e5aa87f7d87348cec46e3bc381f6bc8f692b60_prof);

    }

    public function getTemplateName()
    {
        return "AbsenceBundle:Default:listclasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 115,  182 => 112,  178 => 111,  175 => 110,  171 => 109,  154 => 95,  150 => 94,  146 => 93,  142 => 92,  135 => 87,  128 => 82,  126 => 81,  123 => 80,  116 => 75,  114 => 74,  111 => 73,  104 => 68,  102 => 67,  83 => 51,  79 => 50,  75 => 49,  71 => 48,  22 => 1,);
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
/* */
/*             font-family: Impact;*/
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
/*                 <li><a href="http://localhost/absence/web/app_dev.php/logout"> Se deconnecter</a></li>*/
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
/* {% if modification == true %}*/
/*     <div class="alert alert-warning fade in">*/
/*         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*         Classe bien modifié !*/
/*     </div>*/
/* {% endif %}*/
/* */
/* {% if supression == true %}*/
/*     <div class="alert alert-danger fade in">*/
/*         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*         Classe bien suprimé !*/
/*     </div>*/
/* {% endif %}*/
/* */
/* {% if ajout == true %}*/
/*     <div class="alert alert-info fade in">*/
/*         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*         Classe bien ajouté !*/
/*     </div>*/
/* {% endif %}*/
/* */
/* */
/* <div class="container">*/
/*     <h2></h2>*/
/*     <div class="btn-group btn-group-justified">*/
/*         <a href="{{ path('list_classe') }}" class="btn btn-success">Consulter</a>*/
/*         <a href="{{ path('add_classe') }}" class="btn btn-info">Ajouter</a>*/
/*         <a href="{{ path('delete_classe') }}" class="btn btn-danger">Supprimer</a>*/
/*         <a href="{{ path('edit_classe') }}" class="btn btn-warning">Modifier</a>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <h2>La Liste des classes</h2>*/
/*     <table class="table">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>ID</th>*/
/*             <th>CLASSE</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for c in classes %}*/
/*             <tr>*/
/*                 <td>{{ c.id }}</td>*/
/*                 <td>{{ c.nom }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
