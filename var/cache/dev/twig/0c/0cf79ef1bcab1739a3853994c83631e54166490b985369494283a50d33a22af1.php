<?php

/* AbsenceBundle:Default:indexuser.html.twig */
class __TwigTemplate_6c6228edc1019307caeeb1a9246d860586c6f9994f9bfcfe65a7a857c60f6ae5 extends Twig_Template
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
        $__internal_45f21e8fbdcbbeb2b59085aca280d2ce920b4ca9eb014182b6e415d6f02c3358 = $this->env->getExtension("native_profiler");
        $__internal_45f21e8fbdcbbeb2b59085aca280d2ce920b4ca9eb014182b6e415d6f02c3358->enter($__internal_45f21e8fbdcbbeb2b59085aca280d2ce920b4ca9eb014182b6e415d6f02c3358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbsenceBundle:Default:indexuser.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Gestion des absences</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
    <style>
        #divv { font: 400 1em/1.5 \"Neuton\"; background: #090d00; color: rgba(255,255,255,.25); text-align: center; margin: 0 }

        #parag {
            text-transform: uppercase;
            letter-spacing: .5em;
            display: inline-block;
            border: 4px double rgba(255, 255, 255, .25);
            border-width: 4px 0;
            padding: 1.5em 0em;
            position: absolute;
            top: 18%;
            left: 50%;
            width: 40em;
            margin: 0 0 0 -20em;
        }

        #spaan {

            font: 700 4em/1 \"Oswald\", sans-serif;
            letter-spacing: 0;
            padding: .25em 0 .325em;
            display: block;
            margin: 0 auto;
            text-shadow: 0 0 80px rgba(255,255,255,.5);

        }


        #headerr{
            font-family: impact,'Oswald', sans-serif;
            font-size: 40px;
            text-shadow: 3px 3px rgba(10, 10, 10, 0.4);
            -webkit-transition: .3s;
            transition: .3s;
            color: black;
            text-align: center;

        }

        body{
            background-color: #192b40;
        }
        .student{
            width: 400px;
            margin: 4% auto;
            position: relative;
        }
        .srvc_icon{
            width: 29px;
            position: absolute;
        }
        .openBookIcon{
            top: 20%;
            right: 0;
        }






       /** body{
            font-family: \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
            background-color: #204d74;
        } **/



        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }


        .button {
            background-color: #28324e; /* Green */
            border: none;
            color: white;
            padding: 7px 36px;
            text-align: center;
            text-decoration: solid;
            display: inline-block;
            font-size: 16px;
            font-family: Times;

            margin: 4px 2px;
            cursor: pointer;
        }


        .button2 {width: 50%;}
        .choix{
            padding-left:450px;
        }


    </style>
</head>
<body>




<ul>
    <li><a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\"></a></li>

    <li style=\"float:right\"><a class=\"active\" href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("user_list_absence_tous");
        echo "\">VOIR TOUS</a></li>
    <li style=\"float:right\"><a class=\"active\" href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("user_list_absence_classe");
        echo "\">PAR CLASSE</a></li>
    <li style=\"float:right\"><a class=\"active\" href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("user_list_absence_etudiant");
        echo "\">PAR ETUDIANT</a></li>

</ul>

<!-- Navbar
<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\"></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("user_list_absence_etudiant");
        echo "\">PAR ETUDIANT</a></li>
                <li><a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("user_list_absence_tous");
        echo "\">TOUS</a></li>
            </ul>
        </div>
    </div>
</nav>
-->


<span id=\"divv\">
<p id=\"parag\">
  <span id=\"spaan\">
    Gestion d'absence
  </span>
</p>
</span>


<br/><br/><br/><br/><br/><br/><br/><br/><br/>


<!--
<div class=\"container-fluid bg-2 text-center\">
    <div class=\"container\">

        <div class=\"btn-group btn-group-justified\">
            <a href=\"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("user_list_absence_etudiant");
        echo "\" class=\"btn btn-info\">Absences par etudiant</a>
            <a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("user_list_absence_tous");
        echo "\" class=\"btn btn-info\">Toutes les absences</a>

        </div>
-->
        <div id=\"headerr\">
            <h3><b>Consulter la situation d'absence :</b></h3>
        </div>

        <div class=\"choix\">
            <a href=\"";
        // line 193
        echo $this->env->getExtension('routing')->getPath("user_list_absence_etudiant");
        echo "\"><button class=\"button button2\">CONSULTATION PAR ETUDIANT</button></a>
            <a href=\"";
        // line 194
        echo $this->env->getExtension('routing')->getPath("user_list_absence_classe");
        echo "\"><button class=\"button button2\">CONSULTER PAR CLASSE</button></a>
            <a href=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("user_list_absence_tous");
        echo "\"><button class=\"button button2\">CONSULTER TOUS</button></a>
        </div>

</body>
</html>
";
        
        $__internal_45f21e8fbdcbbeb2b59085aca280d2ce920b4ca9eb014182b6e415d6f02c3358->leave($__internal_45f21e8fbdcbbeb2b59085aca280d2ce920b4ca9eb014182b6e415d6f02c3358_prof);

    }

    public function getTemplateName()
    {
        return "AbsenceBundle:Default:indexuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 195,  247 => 194,  243 => 193,  231 => 184,  227 => 183,  199 => 158,  195 => 157,  188 => 153,  172 => 140,  168 => 139,  164 => 138,  159 => 136,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Gestion des absences</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>*/
/*     <style>*/
/*         #divv { font: 400 1em/1.5 "Neuton"; background: #090d00; color: rgba(255,255,255,.25); text-align: center; margin: 0 }*/
/* */
/*         #parag {*/
/*             text-transform: uppercase;*/
/*             letter-spacing: .5em;*/
/*             display: inline-block;*/
/*             border: 4px double rgba(255, 255, 255, .25);*/
/*             border-width: 4px 0;*/
/*             padding: 1.5em 0em;*/
/*             position: absolute;*/
/*             top: 18%;*/
/*             left: 50%;*/
/*             width: 40em;*/
/*             margin: 0 0 0 -20em;*/
/*         }*/
/* */
/*         #spaan {*/
/* */
/*             font: 700 4em/1 "Oswald", sans-serif;*/
/*             letter-spacing: 0;*/
/*             padding: .25em 0 .325em;*/
/*             display: block;*/
/*             margin: 0 auto;*/
/*             text-shadow: 0 0 80px rgba(255,255,255,.5);*/
/* */
/*         }*/
/* */
/* */
/*         #headerr{*/
/*             font-family: impact,'Oswald', sans-serif;*/
/*             font-size: 40px;*/
/*             text-shadow: 3px 3px rgba(10, 10, 10, 0.4);*/
/*             -webkit-transition: .3s;*/
/*             transition: .3s;*/
/*             color: black;*/
/*             text-align: center;*/
/* */
/*         }*/
/* */
/*         body{*/
/*             background-color: #192b40;*/
/*         }*/
/*         .student{*/
/*             width: 400px;*/
/*             margin: 4% auto;*/
/*             position: relative;*/
/*         }*/
/*         .srvc_icon{*/
/*             width: 29px;*/
/*             position: absolute;*/
/*         }*/
/*         .openBookIcon{*/
/*             top: 20%;*/
/*             right: 0;*/
/*         }*/
/* */
/* */
/* */
/* */
/* */
/* */
/*        /** body{*/
/*             font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;*/
/*             background-color: #204d74;*/
/*         } **//* */
/* */
/* */
/* */
/*         ul {*/
/*             list-style-type: none;*/
/*             margin: 0;*/
/*             padding: 0;*/
/*             overflow: hidden;*/
/*             background-color: #333;*/
/*         }*/
/* */
/*         li {*/
/*             float: left;*/
/*         }*/
/* */
/*         li a {*/
/*             display: block;*/
/*             color: white;*/
/*             text-align: center;*/
/*             padding: 14px 16px;*/
/*             text-decoration: none;*/
/*         }*/
/* */
/*         li a:hover:not(.active) {*/
/*             background-color: #111;*/
/*         }*/
/* */
/*         .active {*/
/*             background-color: #4CAF50;*/
/*         }*/
/* */
/* */
/*         .button {*/
/*             background-color: #28324e; /* Green *//* */
/*             border: none;*/
/*             color: white;*/
/*             padding: 7px 36px;*/
/*             text-align: center;*/
/*             text-decoration: solid;*/
/*             display: inline-block;*/
/*             font-size: 16px;*/
/*             font-family: Times;*/
/* */
/*             margin: 4px 2px;*/
/*             cursor: pointer;*/
/*         }*/
/* */
/* */
/*         .button2 {width: 50%;}*/
/*         .choix{*/
/*             padding-left:450px;*/
/*         }*/
/* */
/* */
/*     </style>*/
/* </head>*/
/* <body>*/
/* */
/* */
/* */
/* */
/* <ul>*/
/*     <li><a href="{{ path('user_index') }}"></a></li>*/
/* */
/*     <li style="float:right"><a class="active" href="{{ path('user_list_absence_tous') }}">VOIR TOUS</a></li>*/
/*     <li style="float:right"><a class="active" href="{{ path('user_list_absence_classe') }}">PAR CLASSE</a></li>*/
/*     <li style="float:right"><a class="active" href="{{ path('user_list_absence_etudiant') }}">PAR ETUDIANT</a></li>*/
/* */
/* </ul>*/
/* */
/* <!-- Navbar*/
/* <nav class="navbar navbar-inverse">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('user_index') }}"></a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse" id="myNavbar">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="{{ path('user_list_absence_etudiant') }}">PAR ETUDIANT</a></li>*/
/*                 <li><a href="{{ path('user_list_absence_tous') }}">TOUS</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* -->*/
/* */
/* */
/* <span id="divv">*/
/* <p id="parag">*/
/*   <span id="spaan">*/
/*     Gestion d'absence*/
/*   </span>*/
/* </p>*/
/* </span>*/
/* */
/* */
/* <br/><br/><br/><br/><br/><br/><br/><br/><br/>*/
/* */
/* */
/* <!--*/
/* <div class="container-fluid bg-2 text-center">*/
/*     <div class="container">*/
/* */
/*         <div class="btn-group btn-group-justified">*/
/*             <a href="{{ path('user_list_absence_etudiant') }}" class="btn btn-info">Absences par etudiant</a>*/
/*             <a href="{{ path('user_list_absence_tous') }}" class="btn btn-info">Toutes les absences</a>*/
/* */
/*         </div>*/
/* -->*/
/*         <div id="headerr">*/
/*             <h3><b>Consulter la situation d'absence :</b></h3>*/
/*         </div>*/
/* */
/*         <div class="choix">*/
/*             <a href="{{ path('user_list_absence_etudiant') }}"><button class="button button2">CONSULTATION PAR ETUDIANT</button></a>*/
/*             <a href="{{ path('user_list_absence_classe') }}"><button class="button button2">CONSULTER PAR CLASSE</button></a>*/
/*             <a href="{{ path('user_list_absence_tous') }}"><button class="button button2">CONSULTER TOUS</button></a>*/
/*         </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
