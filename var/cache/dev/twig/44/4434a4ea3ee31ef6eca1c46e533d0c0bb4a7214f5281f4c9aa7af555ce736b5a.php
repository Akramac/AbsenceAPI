<?php

/* AbsenceBundle:Default:index.html.twig */
class __TwigTemplate_b2fbb0479e8cae19439df2e95262cbf41ba960f89698a5e55207054ddc3671d1 extends Twig_Template
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
        $__internal_ab538d9285354a3b33ce537dc5e3549d81030cee2037cd5a41c502090ed134b2 = $this->env->getExtension("native_profiler");
        $__internal_ab538d9285354a3b33ce537dc5e3549d81030cee2037cd5a41c502090ed134b2->enter($__internal_ab538d9285354a3b33ce537dc5e3549d81030cee2037cd5a41c502090ed134b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbsenceBundle:Default:index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Gestion des absences - INPT</title>
    <meta charset=\"utf-8\">

    <style>

        body{
            font-family: \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
            background-color: #204d74;
        }

        body #logo {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 260px;
            height: 260px;
            margin: -130px 0 0 -130px;
            border-radius: 50%;
            background-color: #fff;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-animation: logo 5000ms forwards;
            -moz-animation: logo 5000ms forwards;
            -ms-animation: logo 5000ms forwards;
            animation: logo 5000ms forwards;
        }
        body #logo #green-circle-1 {
            position: absolute;
            width: 252px;
            height: 252px;
            margin: 4px 0 0 4px;
            border-radius: 50%;
            background-color: #28324e;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-animation: greenCircleOne 5000ms forwards;
            -moz-animation: greenCircleOne 5000ms forwards;
            -ms-animation: greenCircleOne 5000ms forwards;
            animation: greenCircleOne 5000ms forwards;
        }
        body #logo #green-circle-1 #green-circle-2 {
            position: absolute;
            width: 238px;
            height: 238px;
            margin: 4px 0 0 4px;
            border-radius: 50%;
            background-color: #475577;
            border: 3px solid #fff;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-animation: whiteCircleOne 5000ms forwards;
            -moz-animation: whiteCircleOne 5000ms forwards;
            -ms-animation: whiteCircleOne 5000ms forwards;
            animation: whiteCircleOne 5000ms forwards;
        }
        body #logo #green-circle-1 #green-circle-2 p {
            margin: 0;
            padding: 0;
            color: #d1d5d8;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-animation-name: popUp;
            -webkit-animation-duration: 250ms;
            -webkit-animation-timing-function: ease;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-name: popUp;
            -moz-animation-duration: 250ms;
            -moz-animation-timing-function: ease;
            -moz-animation-fill-mode: forwards;
            -ms-animation-name: popUp;
            -ms-animation-duration: 250ms;
            -ms-animation-timing-function: ease;
            -ms-animation-fill-mode: forwards;
            animation-name: popUp;
            animation-duration: 250ms;
            animation-timing-function: ease;
            animation-fill-mode: forwards;
        }
        /*body #logo #green-circle-1 #green-circle-2:before{
          position: absolute;
          top: 128px;
          right: 10px;
          content: \"\\2605\";
          color: #fff;
          font-size: 30px;
          -webkit-transform: scale(0);
          -moz-transform: scale(0);
          -ms-transform: scale(0);
          transform: scale(0);
          -webkit-animation: popUp 250ms ease forwards 1400ms;
          -moz-animation: popUp 250ms ease forwards 1400ms;
          -ms-animation: popUp 250ms ease forwards 1400ms;
          animation: popUp 250ms ease forwards 1400ms;
        }
        body #logo #green-circle-1 #green-circle-2:after{
          position: absolute;
          top: 128px;
          left: 10px;
          content: \"\\2605\";
          color: #fff;
          font-size: 30px;
          -webkit-transform: scale(0);
          -moz-transform: scale(0);
          -ms-transform: scale(0);
          transform: scale(0);
          -webkit-animation: popUp 250ms ease forwards 1100ms;
          -moz-animation: popUp 250ms ease forwards 1100ms;
          -ms-animation: popUp 250ms ease forwards 1100ms;
         animation: popUp 250ms ease forwards 1100ms;
        }*/
        body #logo #green-circle-1 #green-circle-2 .top {
            font-size: 40px;
            height: 119px;
            position: absolute;
            left: 50%;
            top: 0;
            width: 40px;
            margin-left: -20px;
            line-height: 45px;
            text-align: center;
            -webkit-transform-origin: bottom center;
            -moz-transform-origin: bottom center;
            -ms-transform-origin: bottom center;
            transform-origin: bottom center;
            font-weight: 900;
        }
        body #logo #green-circle-1 #green-circle-2 .top.char0 {
            -webkit-transform: rotate(-82deg);
            -moz-transform: rotate(-82deg);
            -ms-transform: rotate(-82deg);
            transform: rotate(-82deg);
        }
        body #logo #green-circle-1 #green-circle-2 .top.char0 p {
            -webkit-animation-delay: 1000ms;
            -moz-animation-delay: 1000ms;
            -ms-animation-delay: 1000ms;
            animation-delay: 1000ms;
        }
        body #logo #green-circle-1 #green-circle-2 .top.char1 {
            -webkit-transform: rotate(-63deg);
            -moz-transform: rotate(-63deg);
            -ms-transform: rotate(-63deg);
            transform: rotate(-63deg);
        }
        body #logo #green-circle-1 #green-circle-2 .top.char1 p {
            -webkit-animation-delay: 1050ms;
            -moz-animation-delay: 1050ms;
            -ms-animation-delay: 1050ms;
            animation-delay: 1050ms;
        }
        body #logo #green-circle-1 #green-circle-2 .top.char2 {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
        body #logo #green-circle-1 #green-circle-2 .top.char2 p {
            -webkit-animation-delay: 1100ms;
            -moz-animation-delay: 1100ms;
            -ms-animation-delay: 1100ms;
            animation-delay: 1100ms;
        }
        body #logo #green-circle-1 #green-circle-2 .top.char3 {
            -webkit-transform: rotate(-23deg);
            -moz-transform: rotate(-23deg);
            -ms-transform: rotate(-23deg);
            transform: rotate(-23deg);
        }
        body #logo #green-circle-1 #green-circle-2 .top.char3 p {
            -webkit-animation-delay: 1150ms;
            -moz-animation-delay: 1150ms;
            -ms-animation-delay: 1150ms;
            animation-delay: 1150ms;
        }
        body #logo #green-circle-1 #green-circle-2 .top.char4 {
            -webkit-transform: rotate(-2deg);
            -moz-transform: rotate(-2deg);
            -ms-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }
        body #logo #green-circle-1 #green-circle-2 .top.char4 p {
            -webkit-animation-delay: 1200ms;
            -moz-animation-delay: 1200ms;
            -ms-animation-delay: 1200ms;
            animation-delay: 1200ms;
        }
        body #logo #green-circle-1 #green-circle-2 .top.char5 {
            -webkit-transform: rotate(19deg);
            -moz-transform: rotate(19deg);
            -ms-transform: rotate(19deg);
            transform: rotate(19deg);
        }
        body #logo #green-circle-1 #green-circle-2 .top.char5 p {
            -webkit-animation-delay: 1250ms;
            -moz-animation-delay: 1250ms;
            -ms-animation-delay: 1250ms;
            animation-delay: 1250ms;
        }
        body #logo #green-circle-1 #green-circle-2 .top.char6 {
            -webkit-transform: rotate(41deg);
            -moz-transform: rotate(41deg);
            -ms-transform: rotate(41deg);
            transform: rotate(41deg);
        }
        body #logo #green-circle-1 #green-circle-2 .top.char6 p {
            -webkit-animation-delay: 1300ms;
            -moz-animation-delay: 1300ms;
            -ms-animation-delay: 1300ms;
            animation-delay: 1300ms;
        }
        body #logo #green-circle-1 #green-circle-2 .top.char7 {
            -webkit-transform: rotate(64deg);
            -moz-transform: rotate(64deg);
            -ms-transform: rotate(64deg);
            transform: rotate(64deg);
        }
        body #logo #green-circle-1 #green-circle-2 .top.char7 p {
            -webkit-animation-delay: 1350ms;
            -moz-animation-delay: 1350ms;
            -ms-animation-delay: 1350ms;
            animation-delay: 1350ms;
        }
        body #logo #green-circle-1 #green-circle-2 .top.char8 {
            -webkit-transform: rotate(85deg);
            -moz-transform: rotate(85deg);
            -ms-transform: rotate(85deg);
            transform: rotate(85deg);
        }
        body #logo #green-circle-1 #green-circle-2 .top.char8 p {
            -webkit-animation-delay: 1400ms;
            -moz-animation-delay: 1400ms;
            -ms-animation-delay: 1400ms;
            animation-delay: 1400ms;
        }
        body #logo #green-circle-1 #green-circle-2 .bottom {
            font-size: 40px;
            height: 119px;
            position: absolute;
            left: 50%;
            top: 50%;
            width: 40px;
            margin-left: -20px;
            line-height: 195px;
            text-align: center;
            transform-origin: top center;
            font-weight: 900;
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char0 {
            -webkit-transform: rotate(50deg);
            -moz-transform: rotate(50deg);
            -ms-transform: rotate(50deg);
            transform: rotate(50deg);
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char0 p {
            -webkit-animation-delay: 1150ms;
            -moz-animation-delay: 1150ms;
            -ms-animation-delay: 1150ms;
            animation-delay: 1150ms;
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char1 {
            -webkit-transform: rotate(30deg);
            -moz-transform: rotate(30deg);
            -ms-transform: rotate(30deg);
            transform: rotate(30deg);
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char1 p {
            -webkit-animation-delay: 1200ms;
            -moz-animation-delay: 1200ms;
            -ms-animation-delay: 1200ms;
            animation-delay: 1200ms;
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char2 {
            -webkit-transform: rotate(10deg);
            -moz-transform: rotate(10deg);
            -ms-transform: rotate(10deg);
            transform: rotate(10deg);
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char2 p {
            -webkit-animation-delay: 1250ms;
            -moz-animation-delay: 1250ms;
            -ms-animation-delay: 1250ms;
            animation-delay: 1250ms;
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char3 {
            -webkit-transform: rotate(-10deg);
            -moz-transform: rotate(-10deg);
            -ms-transform: rotate(-10deg);
            transform: rotate(-10deg);
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char3 p {
            -webkit-animation-delay: 1300ms;
            -moz-animation-delay: 1300ms;
            -ms-animation-delay: 1300ms;
            animation-delay: 1300ms;
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char4 {
            -webkit-transform: rotate(-31deg);
            -moz-transform: rotate(-31deg);
            -ms-transform: rotate(-31deg);
            transform: rotate(-31deg);
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char4 p {
            -webkit-animation-delay: 1350ms;
            -moz-animation-delay: 1350ms;
            -ms-animation-delay: 1350ms;
            animation-delay: 1350ms;
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char5 {
            -webkit-transform: rotate(-54deg);
            -moz-transform: rotate(-54deg);
            -ms-transform: rotate(-54deg);
            transform: rotate(-54deg);
        }
        body #logo #green-circle-1 #green-circle-2 .bottom.char5 p {
            -webkit-animation-delay: 1400ms;
            -moz-animation-delay: 1400ms;
            -ms-animation-delay: 1400ms;
            animation-delay: 1400ms;
        }
        body #logo #green-circle-1 #green-circle-2 #white-circle-1 {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 134px;
            height: 134px;
            margin: -70px 0 0 -70px;
            border-radius: 50%;
            border: solid 3px #fff;
            background-color: #fff;
            overflow: hidden;
        }
        body #logo #green-circle-1 #green-circle-2 #white-circle-1 #box {
            position: absolute;
            top: 160px;
            left: 0;
            width: 400px;
            height: 400px;
            background-color: #000;
            background-image: url(\"http://snh.rs/sb.png\");
            background-repeat: no-repeat;
            background-position: bottom right;
            -webkit-animation: blackBg 5000ms forwards;
            -moz-animation: blackBg 5000ms forwards;
            -ms-animation: blackBg 5000ms forwards;
            animation: blackBg 5000ms forwards;
        }
        body #logo #green-circle-1 #green-circle-2 #white-circle-1 #box .circle {
            float: left;
            width: 20px;
            height: 20px;
            margin: -10px 0 0 0;
            background-color: #fff;
            border-radius: 50%;
        }
        @-webkit-keyframes blackBg {
            from {
                top: 160px;
                left: 0;
            }
            40% {
                top: 160px;
                left: 0;
            }
            60% {
                top: -20px;
                left: -266px;
            }
            80% {
                top: -260px;
                left: -266px;
            }
            to {
                top: -260px;
                left: -266px;
            }
        }
        @-webkit-keyframes popUp {
            from {
                -webkit-transform: scale(0);
            }
            80% {
                -webkit-transform: scale(1.3);
            }
            to {
                -webkit-transform: scale(1);
            }
        }
        @-webkit-keyframes whiteCircleOne {
            from {
                -webkit-transform: scale(0);
            }
            15% {
                -webkit-transform: scale(0);
            }
            35% {
                -webkit-transform: scale(1);
            }
            to {
                -webkit-transform: scale(1);
            }
        }
        @-webkit-keyframes greenCircleOne {
            from {
                -webkit-transform: scale(0);
            }
            8% {
                -webkit-transform: scale(0);
            }
            15% {
                -webkit-transform: scale(1);
            }
            50% {
                -webkit-transform: scale(1);
            }
            to {
                -webkit-transform: scale(1);
            }
        }
        @-webkit-keyframes logo {
            from {
                -webkit-transform: scale(0);
            }
            15% {
                -webkit-transform: scale(1.5);
            }
            50% {
                -webkit-transform: scale(1);
            }
            to {
                -webkit-transform: scale(1);
            }
        }
        @-moz-keyframes blackBg {
            from {
                top: 160px;
                left: 0;
            }
            40% {
                top: 160px;
                left: 0;
            }
            60% {
                top: -20px;
                left: -266px;
            }
            80% {
                top: -260px;
                left: -266px;
            }
            to {
                top: -260px;
                left: -266px;
            }
        }
        @-moz-keyframes popUp {
            from {
                -moz-transform: scale(0);
            }
            80% {
                -moz-transform: scale(1.3);
            }
            to {
                -moz-transform: scale(1);
            }
        }
        @-moz-keyframes whiteCircleOne {
            from {
                -moz-transform: scale(0);
            }
            15% {
                -moz-transform: scale(0);
            }
            35% {
                -moz-transform: scale(1);
            }
            to {
                -moz-transform: scale(1);
            }
        }
        @-moz-keyframes greenCircleOne {
            from {
                -moz-transform: scale(0);
            }
            8% {
                -moz-transform: scale(0);
            }
            15% {
                -moz-transform: scale(1);
            }
            50% {
                -moz-transform: scale(1);
            }
            to {
                -moz-transform: scale(1);
            }
        }
        @-moz-keyframes logo {
            from {
                -moz-transform: scale(0);
            }
            15% {
                -moz-transform: scale(1.5);
            }
            50% {
                -moz-transform: scale(1);
            }
            to {
                -moz-transform: scale(1);
            }
        }
        @-ms-keyframes blackBg {
            from {
                top: 160px;
                left: 0;
            }
            40% {
                top: 160px;
                left: 0;
            }
            60% {
                top: -20px;
                left: -266px;
            }
            80% {
                top: -260px;
                left: -266px;
            }
            to {
                top: -260px;
                left: -266px;
            }
        }
        @-ms-keyframes popUp {
            from {
                -ms-transform: scale(0);
            }
            80% {
                -ms-transform: scale(1.3);
            }
            to {
                -ms-transform: scale(1);
            }
        }
        @-ms-keyframes whiteCircleOne {
            from {
                -ms-transform: scale(0);
            }
            15% {
                -ms-transform: scale(0);
            }
            35% {
                -ms-transform: scale(1);
            }
            to {
                -ms-transform: scale(1);
            }
        }
        @-ms-keyframes greenCircleOne {
            from {
                -ms-transform: scale(0);
            }
            8% {
                -ms-transform: scale(0);
            }
            15% {
                -ms-transform: scale(1);
            }
            50% {
                -ms-transform: scale(1);
            }
            to {
                -ms-transform: scale(1);
            }
        }
        @-ms-keyframes logo {
            from {
                -ms-transform: scale(0);
            }
            15% {
                -ms-transform: scale(1.5);
            }
            50% {
                -ms-transform: scale(1);
            }
            to {
                -ms-transform: scale(1);
            }
        }
        @-moz-keyframes blackBg {
            from {
                top: 160px;
                left: 0;
            }
            40% {
                top: 160px;
                left: 0;
            }
            60% {
                top: -20px;
                left: -266px;
            }
            80% {
                top: -260px;
                left: -266px;
            }
            to {
                top: -260px;
                left: -266px;
            }
        }
        @-webkit-keyframes blackBg {
            from {
                top: 160px;
                left: 0;
            }
            40% {
                top: 160px;
                left: 0;
            }
            60% {
                top: -20px;
                left: -266px;
            }
            80% {
                top: -260px;
                left: -266px;
            }
            to {
                top: -260px;
                left: -266px;
            }
        }
        @-o-keyframes blackBg {
            from {
                top: 160px;
                left: 0;
            }
            40% {
                top: 160px;
                left: 0;
            }
            60% {
                top: -20px;
                left: -266px;
            }
            80% {
                top: -260px;
                left: -266px;
            }
            to {
                top: -260px;
                left: -266px;
            }
        }
        @keyframes blackBg {
            from {
                top: 160px;
                left: 0;
            }
            40% {
                top: 160px;
                left: 0;
            }
            60% {
                top: -20px;
                left: -266px;
            }
            80% {
                top: -260px;
                left: -266px;
            }
            to {
                top: -260px;
                left: -266px;
            }
        }
        @-moz-keyframes popUp {
            from {
                transform: scale(0);
            }
            80% {
                transform: scale(1.3);
            }
            to {
                transform: scale(1);
            }
        }
        @-webkit-keyframes popUp {
            from {
                transform: scale(0);
            }
            80% {
                transform: scale(1.3);
            }
            to {
                transform: scale(1);
            }
        }
        @-o-keyframes popUp {
            from {
                transform: scale(0);
            }
            80% {
                transform: scale(1.3);
            }
            to {
                transform: scale(1);
            }
        }
        @keyframes popUp {
            from {
                transform: scale(0);
            }
            80% {
                transform: scale(1.3);
            }
            to {
                transform: scale(1);
            }
        }
        @-moz-keyframes whiteCircleOne {
            from {
                transform: scale(0);
            }
            15% {
                transform: scale(0);
            }
            35% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }
        @-webkit-keyframes whiteCircleOne {
            from {
                transform: scale(0);
            }
            15% {
                transform: scale(0);
            }
            35% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }
        @-o-keyframes whiteCircleOne {
            from {
                transform: scale(0);
            }
            15% {
                transform: scale(0);
            }
            35% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }
        @keyframes whiteCircleOne {
            from {
                transform: scale(0);
            }
            15% {
                transform: scale(0);
            }
            35% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }
        @-moz-keyframes greenCircleOne {
            from {
                transform: scale(0);
            }
            8% {
                transform: scale(0);
            }
            15% {
                transform: scale(1);
            }
            50% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }
        @-webkit-keyframes greenCircleOne {
            from {
                transform: scale(0);
            }
            8% {
                transform: scale(0);
            }
            15% {
                transform: scale(1);
            }
            50% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }
        @-o-keyframes greenCircleOne {
            from {
                transform: scale(0);
            }
            8% {
                transform: scale(0);
            }
            15% {
                transform: scale(1);
            }
            50% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }
        @keyframes greenCircleOne {
            from {
                transform: scale(0);
            }
            8% {
                transform: scale(0);
            }
            15% {
                transform: scale(1);
            }
            50% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }
        @-moz-keyframes logo {
            from {
                transform: scale(0);
            }
            15% {
                transform: scale(1.5);
            }
            50% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }
        @-webkit-keyframes logo {
            from {
                transform: scale(0);
            }
            15% {
                transform: scale(1.5);
            }
            50% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }
        @-o-keyframes logo {
            from {
                transform: scale(0);
            }
            15% {
                transform: scale(1.5);
            }
            50% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }
        @keyframes logo {
            from {
                transform: scale(0);
            }
            15% {
                transform: scale(1.5);
            }
            50% {
                transform: scale(1);
            }
            to {
                transform: scale(1);
            }
        }



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
        // line 973
        echo $this->env->getExtension('routing')->getPath("absence_home");
        echo "\">Home</a></li>
    <li ><a  href=\"";
        // line 974
        echo $this->env->getExtension('routing')->getPath("index_etudiant");
        echo "\">Etudiants</a></li>
    <li><a  href=\"";
        // line 975
        echo $this->env->getExtension('routing')->getPath("index_classe");
        echo "\">Classes</a></li>
    <li ><a href=\"";
        // line 976
        echo $this->env->getExtension('routing')->getPath("index_absence");
        echo "\">Absences</a></li>

    <li style=\"float:right\"><a class=\"active\" href=\"http://localhost/sga/web/app_dev.php/logout\">Se deconnecter</a></li>

</ul>

<!--
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
        // line 995
        echo $this->env->getExtension('routing')->getPath("absence_home");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 996
        echo $this->env->getExtension('routing')->getPath("index_etudiant");
        echo "\">Etudiants</a></li>
                <li><a href=\"";
        // line 997
        echo $this->env->getExtension('routing')->getPath("index_classe");
        echo "\">Classes</a></li>
                <li><a href=\"";
        // line 998
        echo $this->env->getExtension('routing')->getPath("index_absence");
        echo "\">Absences</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"http://localhost/sga/web/app_dev.php/logout\"> Se deconnecter</a></li>
            </ul>
        </div>
    </div>
</nav>
-->


<div class=\"container-fluid bg-1 text-center\">

    <div id=\"logo\">
        <div id=\"green-circle-1\">
            <div id=\"green-circle-2\"><span class=\"top char0\">
        <p></p></span><span class=\"top char1\">
        <p>A</p></span><span class=\"top char2\">
        <p>B</p></span><span class=\"top char3\">
        <p>S</p></span><span class=\"top char4\">
        <p>E</p></span><span class=\"top char5\">
        <p>N</p></span><span class=\"top char6\">
        <p>C</p></span><span class=\"top char7\">
        <p>E</p></span><span class=\"top char8\">
        <p></p></span><span class=\"bottom char0\">
        <p></p></span><span class=\"bottom char1\">
        <p>I</p></span><span class=\"bottom char2\">
        <p>N</p></span><span class=\"bottom char3\">
        <p>P</p></span><span class=\"bottom char4\">
        <p>T</p></span><span class=\"bottom char5\">
        <p></p></span>
                <div id=\"white-circle-1\">
                    <div id=\"box\">
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                        <div class=\"circle\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<div class=\"choix\">
    <a href=\"";
        // line 1060
        echo $this->env->getExtension('routing')->getPath("index_etudiant");
        echo "\"><button class=\"button button2\">Etudiants</button></a>
    <a href=\"";
        // line 1061
        echo $this->env->getExtension('routing')->getPath("index_classe");
        echo "\"><button class=\"button button2\">Classes</button></a>
    <a href=\"";
        // line 1062
        echo $this->env->getExtension('routing')->getPath("index_absence");
        echo "\"><button class=\"button button2\">Absences</button></a>
</div>

</body>
</html>
";
        
        $__internal_ab538d9285354a3b33ce537dc5e3549d81030cee2037cd5a41c502090ed134b2->leave($__internal_ab538d9285354a3b33ce537dc5e3549d81030cee2037cd5a41c502090ed134b2_prof);

    }

    public function getTemplateName()
    {
        return "AbsenceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1115 => 1062,  1111 => 1061,  1107 => 1060,  1042 => 998,  1038 => 997,  1034 => 996,  1030 => 995,  1008 => 976,  1004 => 975,  1000 => 974,  996 => 973,  22 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Gestion des absences - INPT</title>*/
/*     <meta charset="utf-8">*/
/* */
/*     <style>*/
/* */
/*         body{*/
/*             font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;*/
/*             background-color: #204d74;*/
/*         }*/
/* */
/*         body #logo {*/
/*             position: absolute;*/
/*             top: 50%;*/
/*             left: 50%;*/
/*             width: 260px;*/
/*             height: 260px;*/
/*             margin: -130px 0 0 -130px;*/
/*             border-radius: 50%;*/
/*             background-color: #fff;*/
/*             -webkit-transform: scale(0);*/
/*             -moz-transform: scale(0);*/
/*             -ms-transform: scale(0);*/
/*             transform: scale(0);*/
/*             -webkit-animation: logo 5000ms forwards;*/
/*             -moz-animation: logo 5000ms forwards;*/
/*             -ms-animation: logo 5000ms forwards;*/
/*             animation: logo 5000ms forwards;*/
/*         }*/
/*         body #logo #green-circle-1 {*/
/*             position: absolute;*/
/*             width: 252px;*/
/*             height: 252px;*/
/*             margin: 4px 0 0 4px;*/
/*             border-radius: 50%;*/
/*             background-color: #28324e;*/
/*             -webkit-transform: scale(0);*/
/*             -moz-transform: scale(0);*/
/*             -ms-transform: scale(0);*/
/*             transform: scale(0);*/
/*             -webkit-animation: greenCircleOne 5000ms forwards;*/
/*             -moz-animation: greenCircleOne 5000ms forwards;*/
/*             -ms-animation: greenCircleOne 5000ms forwards;*/
/*             animation: greenCircleOne 5000ms forwards;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 {*/
/*             position: absolute;*/
/*             width: 238px;*/
/*             height: 238px;*/
/*             margin: 4px 0 0 4px;*/
/*             border-radius: 50%;*/
/*             background-color: #475577;*/
/*             border: 3px solid #fff;*/
/*             -webkit-transform: scale(0);*/
/*             -moz-transform: scale(0);*/
/*             -ms-transform: scale(0);*/
/*             transform: scale(0);*/
/*             -webkit-animation: whiteCircleOne 5000ms forwards;*/
/*             -moz-animation: whiteCircleOne 5000ms forwards;*/
/*             -ms-animation: whiteCircleOne 5000ms forwards;*/
/*             animation: whiteCircleOne 5000ms forwards;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 p {*/
/*             margin: 0;*/
/*             padding: 0;*/
/*             color: #d1d5d8;*/
/*             -webkit-transform: scale(0);*/
/*             -moz-transform: scale(0);*/
/*             -ms-transform: scale(0);*/
/*             transform: scale(0);*/
/*             -webkit-animation-name: popUp;*/
/*             -webkit-animation-duration: 250ms;*/
/*             -webkit-animation-timing-function: ease;*/
/*             -webkit-animation-fill-mode: forwards;*/
/*             -moz-animation-name: popUp;*/
/*             -moz-animation-duration: 250ms;*/
/*             -moz-animation-timing-function: ease;*/
/*             -moz-animation-fill-mode: forwards;*/
/*             -ms-animation-name: popUp;*/
/*             -ms-animation-duration: 250ms;*/
/*             -ms-animation-timing-function: ease;*/
/*             -ms-animation-fill-mode: forwards;*/
/*             animation-name: popUp;*/
/*             animation-duration: 250ms;*/
/*             animation-timing-function: ease;*/
/*             animation-fill-mode: forwards;*/
/*         }*/
/*         /*body #logo #green-circle-1 #green-circle-2:before{*/
/*           position: absolute;*/
/*           top: 128px;*/
/*           right: 10px;*/
/*           content: "\2605";*/
/*           color: #fff;*/
/*           font-size: 30px;*/
/*           -webkit-transform: scale(0);*/
/*           -moz-transform: scale(0);*/
/*           -ms-transform: scale(0);*/
/*           transform: scale(0);*/
/*           -webkit-animation: popUp 250ms ease forwards 1400ms;*/
/*           -moz-animation: popUp 250ms ease forwards 1400ms;*/
/*           -ms-animation: popUp 250ms ease forwards 1400ms;*/
/*           animation: popUp 250ms ease forwards 1400ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2:after{*/
/*           position: absolute;*/
/*           top: 128px;*/
/*           left: 10px;*/
/*           content: "\2605";*/
/*           color: #fff;*/
/*           font-size: 30px;*/
/*           -webkit-transform: scale(0);*/
/*           -moz-transform: scale(0);*/
/*           -ms-transform: scale(0);*/
/*           transform: scale(0);*/
/*           -webkit-animation: popUp 250ms ease forwards 1100ms;*/
/*           -moz-animation: popUp 250ms ease forwards 1100ms;*/
/*           -ms-animation: popUp 250ms ease forwards 1100ms;*/
/*          animation: popUp 250ms ease forwards 1100ms;*/
/*         }*//* */
/*         body #logo #green-circle-1 #green-circle-2 .top {*/
/*             font-size: 40px;*/
/*             height: 119px;*/
/*             position: absolute;*/
/*             left: 50%;*/
/*             top: 0;*/
/*             width: 40px;*/
/*             margin-left: -20px;*/
/*             line-height: 45px;*/
/*             text-align: center;*/
/*             -webkit-transform-origin: bottom center;*/
/*             -moz-transform-origin: bottom center;*/
/*             -ms-transform-origin: bottom center;*/
/*             transform-origin: bottom center;*/
/*             font-weight: 900;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char0 {*/
/*             -webkit-transform: rotate(-82deg);*/
/*             -moz-transform: rotate(-82deg);*/
/*             -ms-transform: rotate(-82deg);*/
/*             transform: rotate(-82deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char0 p {*/
/*             -webkit-animation-delay: 1000ms;*/
/*             -moz-animation-delay: 1000ms;*/
/*             -ms-animation-delay: 1000ms;*/
/*             animation-delay: 1000ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char1 {*/
/*             -webkit-transform: rotate(-63deg);*/
/*             -moz-transform: rotate(-63deg);*/
/*             -ms-transform: rotate(-63deg);*/
/*             transform: rotate(-63deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char1 p {*/
/*             -webkit-animation-delay: 1050ms;*/
/*             -moz-animation-delay: 1050ms;*/
/*             -ms-animation-delay: 1050ms;*/
/*             animation-delay: 1050ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char2 {*/
/*             -webkit-transform: rotate(-45deg);*/
/*             -moz-transform: rotate(-45deg);*/
/*             -ms-transform: rotate(-45deg);*/
/*             transform: rotate(-45deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char2 p {*/
/*             -webkit-animation-delay: 1100ms;*/
/*             -moz-animation-delay: 1100ms;*/
/*             -ms-animation-delay: 1100ms;*/
/*             animation-delay: 1100ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char3 {*/
/*             -webkit-transform: rotate(-23deg);*/
/*             -moz-transform: rotate(-23deg);*/
/*             -ms-transform: rotate(-23deg);*/
/*             transform: rotate(-23deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char3 p {*/
/*             -webkit-animation-delay: 1150ms;*/
/*             -moz-animation-delay: 1150ms;*/
/*             -ms-animation-delay: 1150ms;*/
/*             animation-delay: 1150ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char4 {*/
/*             -webkit-transform: rotate(-2deg);*/
/*             -moz-transform: rotate(-2deg);*/
/*             -ms-transform: rotate(-2deg);*/
/*             transform: rotate(-2deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char4 p {*/
/*             -webkit-animation-delay: 1200ms;*/
/*             -moz-animation-delay: 1200ms;*/
/*             -ms-animation-delay: 1200ms;*/
/*             animation-delay: 1200ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char5 {*/
/*             -webkit-transform: rotate(19deg);*/
/*             -moz-transform: rotate(19deg);*/
/*             -ms-transform: rotate(19deg);*/
/*             transform: rotate(19deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char5 p {*/
/*             -webkit-animation-delay: 1250ms;*/
/*             -moz-animation-delay: 1250ms;*/
/*             -ms-animation-delay: 1250ms;*/
/*             animation-delay: 1250ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char6 {*/
/*             -webkit-transform: rotate(41deg);*/
/*             -moz-transform: rotate(41deg);*/
/*             -ms-transform: rotate(41deg);*/
/*             transform: rotate(41deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char6 p {*/
/*             -webkit-animation-delay: 1300ms;*/
/*             -moz-animation-delay: 1300ms;*/
/*             -ms-animation-delay: 1300ms;*/
/*             animation-delay: 1300ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char7 {*/
/*             -webkit-transform: rotate(64deg);*/
/*             -moz-transform: rotate(64deg);*/
/*             -ms-transform: rotate(64deg);*/
/*             transform: rotate(64deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char7 p {*/
/*             -webkit-animation-delay: 1350ms;*/
/*             -moz-animation-delay: 1350ms;*/
/*             -ms-animation-delay: 1350ms;*/
/*             animation-delay: 1350ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char8 {*/
/*             -webkit-transform: rotate(85deg);*/
/*             -moz-transform: rotate(85deg);*/
/*             -ms-transform: rotate(85deg);*/
/*             transform: rotate(85deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .top.char8 p {*/
/*             -webkit-animation-delay: 1400ms;*/
/*             -moz-animation-delay: 1400ms;*/
/*             -ms-animation-delay: 1400ms;*/
/*             animation-delay: 1400ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom {*/
/*             font-size: 40px;*/
/*             height: 119px;*/
/*             position: absolute;*/
/*             left: 50%;*/
/*             top: 50%;*/
/*             width: 40px;*/
/*             margin-left: -20px;*/
/*             line-height: 195px;*/
/*             text-align: center;*/
/*             transform-origin: top center;*/
/*             font-weight: 900;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char0 {*/
/*             -webkit-transform: rotate(50deg);*/
/*             -moz-transform: rotate(50deg);*/
/*             -ms-transform: rotate(50deg);*/
/*             transform: rotate(50deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char0 p {*/
/*             -webkit-animation-delay: 1150ms;*/
/*             -moz-animation-delay: 1150ms;*/
/*             -ms-animation-delay: 1150ms;*/
/*             animation-delay: 1150ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char1 {*/
/*             -webkit-transform: rotate(30deg);*/
/*             -moz-transform: rotate(30deg);*/
/*             -ms-transform: rotate(30deg);*/
/*             transform: rotate(30deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char1 p {*/
/*             -webkit-animation-delay: 1200ms;*/
/*             -moz-animation-delay: 1200ms;*/
/*             -ms-animation-delay: 1200ms;*/
/*             animation-delay: 1200ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char2 {*/
/*             -webkit-transform: rotate(10deg);*/
/*             -moz-transform: rotate(10deg);*/
/*             -ms-transform: rotate(10deg);*/
/*             transform: rotate(10deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char2 p {*/
/*             -webkit-animation-delay: 1250ms;*/
/*             -moz-animation-delay: 1250ms;*/
/*             -ms-animation-delay: 1250ms;*/
/*             animation-delay: 1250ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char3 {*/
/*             -webkit-transform: rotate(-10deg);*/
/*             -moz-transform: rotate(-10deg);*/
/*             -ms-transform: rotate(-10deg);*/
/*             transform: rotate(-10deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char3 p {*/
/*             -webkit-animation-delay: 1300ms;*/
/*             -moz-animation-delay: 1300ms;*/
/*             -ms-animation-delay: 1300ms;*/
/*             animation-delay: 1300ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char4 {*/
/*             -webkit-transform: rotate(-31deg);*/
/*             -moz-transform: rotate(-31deg);*/
/*             -ms-transform: rotate(-31deg);*/
/*             transform: rotate(-31deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char4 p {*/
/*             -webkit-animation-delay: 1350ms;*/
/*             -moz-animation-delay: 1350ms;*/
/*             -ms-animation-delay: 1350ms;*/
/*             animation-delay: 1350ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char5 {*/
/*             -webkit-transform: rotate(-54deg);*/
/*             -moz-transform: rotate(-54deg);*/
/*             -ms-transform: rotate(-54deg);*/
/*             transform: rotate(-54deg);*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 .bottom.char5 p {*/
/*             -webkit-animation-delay: 1400ms;*/
/*             -moz-animation-delay: 1400ms;*/
/*             -ms-animation-delay: 1400ms;*/
/*             animation-delay: 1400ms;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 #white-circle-1 {*/
/*             position: absolute;*/
/*             top: 50%;*/
/*             left: 50%;*/
/*             width: 134px;*/
/*             height: 134px;*/
/*             margin: -70px 0 0 -70px;*/
/*             border-radius: 50%;*/
/*             border: solid 3px #fff;*/
/*             background-color: #fff;*/
/*             overflow: hidden;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 #white-circle-1 #box {*/
/*             position: absolute;*/
/*             top: 160px;*/
/*             left: 0;*/
/*             width: 400px;*/
/*             height: 400px;*/
/*             background-color: #000;*/
/*             background-image: url("http://snh.rs/sb.png");*/
/*             background-repeat: no-repeat;*/
/*             background-position: bottom right;*/
/*             -webkit-animation: blackBg 5000ms forwards;*/
/*             -moz-animation: blackBg 5000ms forwards;*/
/*             -ms-animation: blackBg 5000ms forwards;*/
/*             animation: blackBg 5000ms forwards;*/
/*         }*/
/*         body #logo #green-circle-1 #green-circle-2 #white-circle-1 #box .circle {*/
/*             float: left;*/
/*             width: 20px;*/
/*             height: 20px;*/
/*             margin: -10px 0 0 0;*/
/*             background-color: #fff;*/
/*             border-radius: 50%;*/
/*         }*/
/*         @-webkit-keyframes blackBg {*/
/*             from {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             40% {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             60% {*/
/*                 top: -20px;*/
/*                 left: -266px;*/
/*             }*/
/*             80% {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*             to {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*         }*/
/*         @-webkit-keyframes popUp {*/
/*             from {*/
/*                 -webkit-transform: scale(0);*/
/*             }*/
/*             80% {*/
/*                 -webkit-transform: scale(1.3);*/
/*             }*/
/*             to {*/
/*                 -webkit-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-webkit-keyframes whiteCircleOne {*/
/*             from {*/
/*                 -webkit-transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 -webkit-transform: scale(0);*/
/*             }*/
/*             35% {*/
/*                 -webkit-transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 -webkit-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-webkit-keyframes greenCircleOne {*/
/*             from {*/
/*                 -webkit-transform: scale(0);*/
/*             }*/
/*             8% {*/
/*                 -webkit-transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 -webkit-transform: scale(1);*/
/*             }*/
/*             50% {*/
/*                 -webkit-transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 -webkit-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-webkit-keyframes logo {*/
/*             from {*/
/*                 -webkit-transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 -webkit-transform: scale(1.5);*/
/*             }*/
/*             50% {*/
/*                 -webkit-transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 -webkit-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-moz-keyframes blackBg {*/
/*             from {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             40% {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             60% {*/
/*                 top: -20px;*/
/*                 left: -266px;*/
/*             }*/
/*             80% {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*             to {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*         }*/
/*         @-moz-keyframes popUp {*/
/*             from {*/
/*                 -moz-transform: scale(0);*/
/*             }*/
/*             80% {*/
/*                 -moz-transform: scale(1.3);*/
/*             }*/
/*             to {*/
/*                 -moz-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-moz-keyframes whiteCircleOne {*/
/*             from {*/
/*                 -moz-transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 -moz-transform: scale(0);*/
/*             }*/
/*             35% {*/
/*                 -moz-transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 -moz-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-moz-keyframes greenCircleOne {*/
/*             from {*/
/*                 -moz-transform: scale(0);*/
/*             }*/
/*             8% {*/
/*                 -moz-transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 -moz-transform: scale(1);*/
/*             }*/
/*             50% {*/
/*                 -moz-transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 -moz-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-moz-keyframes logo {*/
/*             from {*/
/*                 -moz-transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 -moz-transform: scale(1.5);*/
/*             }*/
/*             50% {*/
/*                 -moz-transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 -moz-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-ms-keyframes blackBg {*/
/*             from {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             40% {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             60% {*/
/*                 top: -20px;*/
/*                 left: -266px;*/
/*             }*/
/*             80% {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*             to {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*         }*/
/*         @-ms-keyframes popUp {*/
/*             from {*/
/*                 -ms-transform: scale(0);*/
/*             }*/
/*             80% {*/
/*                 -ms-transform: scale(1.3);*/
/*             }*/
/*             to {*/
/*                 -ms-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-ms-keyframes whiteCircleOne {*/
/*             from {*/
/*                 -ms-transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 -ms-transform: scale(0);*/
/*             }*/
/*             35% {*/
/*                 -ms-transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 -ms-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-ms-keyframes greenCircleOne {*/
/*             from {*/
/*                 -ms-transform: scale(0);*/
/*             }*/
/*             8% {*/
/*                 -ms-transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 -ms-transform: scale(1);*/
/*             }*/
/*             50% {*/
/*                 -ms-transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 -ms-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-ms-keyframes logo {*/
/*             from {*/
/*                 -ms-transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 -ms-transform: scale(1.5);*/
/*             }*/
/*             50% {*/
/*                 -ms-transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 -ms-transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-moz-keyframes blackBg {*/
/*             from {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             40% {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             60% {*/
/*                 top: -20px;*/
/*                 left: -266px;*/
/*             }*/
/*             80% {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*             to {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*         }*/
/*         @-webkit-keyframes blackBg {*/
/*             from {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             40% {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             60% {*/
/*                 top: -20px;*/
/*                 left: -266px;*/
/*             }*/
/*             80% {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*             to {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*         }*/
/*         @-o-keyframes blackBg {*/
/*             from {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             40% {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             60% {*/
/*                 top: -20px;*/
/*                 left: -266px;*/
/*             }*/
/*             80% {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*             to {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*         }*/
/*         @keyframes blackBg {*/
/*             from {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             40% {*/
/*                 top: 160px;*/
/*                 left: 0;*/
/*             }*/
/*             60% {*/
/*                 top: -20px;*/
/*                 left: -266px;*/
/*             }*/
/*             80% {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*             to {*/
/*                 top: -260px;*/
/*                 left: -266px;*/
/*             }*/
/*         }*/
/*         @-moz-keyframes popUp {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             80% {*/
/*                 transform: scale(1.3);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-webkit-keyframes popUp {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             80% {*/
/*                 transform: scale(1.3);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-o-keyframes popUp {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             80% {*/
/*                 transform: scale(1.3);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @keyframes popUp {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             80% {*/
/*                 transform: scale(1.3);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-moz-keyframes whiteCircleOne {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(0);*/
/*             }*/
/*             35% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-webkit-keyframes whiteCircleOne {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(0);*/
/*             }*/
/*             35% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-o-keyframes whiteCircleOne {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(0);*/
/*             }*/
/*             35% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @keyframes whiteCircleOne {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(0);*/
/*             }*/
/*             35% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-moz-keyframes greenCircleOne {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             8% {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             50% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-webkit-keyframes greenCircleOne {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             8% {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             50% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-o-keyframes greenCircleOne {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             8% {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             50% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @keyframes greenCircleOne {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             8% {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             50% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-moz-keyframes logo {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(1.5);*/
/*             }*/
/*             50% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-webkit-keyframes logo {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(1.5);*/
/*             }*/
/*             50% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @-o-keyframes logo {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(1.5);*/
/*             }*/
/*             50% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
/*         @keyframes logo {*/
/*             from {*/
/*                 transform: scale(0);*/
/*             }*/
/*             15% {*/
/*                 transform: scale(1.5);*/
/*             }*/
/*             50% {*/
/*                 transform: scale(1);*/
/*             }*/
/*             to {*/
/*                 transform: scale(1);*/
/*             }*/
/*         }*/
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
/* <ul>*/
/*     <li><a href="{{ path('absence_home') }}">Home</a></li>*/
/*     <li ><a  href="{{ path('index_etudiant') }}">Etudiants</a></li>*/
/*     <li><a  href="{{ path('index_classe') }}">Classes</a></li>*/
/*     <li ><a href="{{ path('index_absence') }}">Absences</a></li>*/
/* */
/*     <li style="float:right"><a class="active" href="http://localhost/sga/web/app_dev.php/logout">Se deconnecter</a></li>*/
/* */
/* </ul>*/
/* */
/* <!--*/
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
/* -->*/
/* */
/* */
/* <div class="container-fluid bg-1 text-center">*/
/* */
/*     <div id="logo">*/
/*         <div id="green-circle-1">*/
/*             <div id="green-circle-2"><span class="top char0">*/
/*         <p></p></span><span class="top char1">*/
/*         <p>A</p></span><span class="top char2">*/
/*         <p>B</p></span><span class="top char3">*/
/*         <p>S</p></span><span class="top char4">*/
/*         <p>E</p></span><span class="top char5">*/
/*         <p>N</p></span><span class="top char6">*/
/*         <p>C</p></span><span class="top char7">*/
/*         <p>E</p></span><span class="top char8">*/
/*         <p></p></span><span class="bottom char0">*/
/*         <p></p></span><span class="bottom char1">*/
/*         <p>I</p></span><span class="bottom char2">*/
/*         <p>N</p></span><span class="bottom char3">*/
/*         <p>P</p></span><span class="bottom char4">*/
/*         <p>T</p></span><span class="bottom char5">*/
/*         <p></p></span>*/
/*                 <div id="white-circle-1">*/
/*                     <div id="box">*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                         <div class="circle"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>*/
/* */
/* <div class="choix">*/
/*     <a href="{{ path('index_etudiant') }}"><button class="button button2">Etudiants</button></a>*/
/*     <a href="{{ path('index_classe') }}"><button class="button button2">Classes</button></a>*/
/*     <a href="{{ path('index_absence') }}"><button class="button button2">Absences</button></a>*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
