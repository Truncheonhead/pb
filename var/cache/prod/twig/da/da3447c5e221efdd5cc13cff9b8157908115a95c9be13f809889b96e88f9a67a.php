<?php

/* page.html.twig */
class __TwigTemplate_6bccd5194fcd4405d2abc88abc14f326d78c0f1a53ee284392216f78bfa98573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a41b0b29b67d741697c35cf4796c8c515c8a4b7792dbb3719c231b3076b2de7 = $this->env->getExtension("native_profiler");
        $__internal_3a41b0b29b67d741697c35cf4796c8c515c8a4b7792dbb3719c231b3076b2de7->enter($__internal_3a41b0b29b67d741697c35cf4796c8c515c8a4b7792dbb3719c231b3076b2de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./base.css"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

            <style>

                .header-background,
                .footer-background {
                    background-color: #CC7832;
                }

                .page {
                    position: relative;
                    left: 5%;
                    width: 90%;
                    min-width: 1375px;
                }

                .header-container {
                    border: solid thin black;
                    display: inline-block;
                    height: 250px;
                    margin-bottom: 5px;
                }

                .header-logo {
                    width: 100%;
                    height: 80%;
                }

                .navigation-container {
                    border-top: solid thin black;
                    border-bottom: solid thin black;
                    width: 100%;
                    height: 20%;
                }

                .body-container {
                    border: solid thin black;
                    max-height: 800px;
                    height: auto;
                }

                .inner-body-container {
                    padding: 20px;
                }

                ul.navigation-list-container {
                    background-color: #aacd4e;
                    margin: 0;
                    padding-left: 0;
                    width: 100%;
                    height: 50px;
                }

                li.navigation-left {
                    right: 5px;
                    position: absolute;
                }

                ul.navigation-list-container li {
                    display: inline-block;
                    font: 16px/1.5 sans-serif;
                    width: 150px;
                    padding: 7px;
                    margin: 5px;
                    text-align: center;
                    border-left: solid slategrey 2px;
                    border-right: solid slategrey  2px;
                }

                .footer-container {
                    border: solid thin black;
                    margin-top: 5px;
                    text-align: center;
                }

                .footer-content {
                    padding: 5px;
                }

                p { margin: 0 0 1em 0; }
                a { color: #0000F0; }
                a:hover { text-decoration: none; }
                code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
                #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
                #container { padding: 2em; }
                #welcome, #status { margin-bottom: 2em; }
                #welcome h1 span { display: block; font-size: 75%; }
                #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
                #icon-book { display: none; }

                @media (min-width: 768px) {
                    #wrapper { width: 80%; margin: 2em auto; }
                    #icon-book { display: inline-block; }
                    #status a, #next a { display: block; }

                    @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                    @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                    .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
                }
            </style>
    </head>
    <body>
        ";
        // line 110
        $this->loadTemplate("page_header.html.twig", "page.html.twig", 110)->display($context);
        // line 111
        echo "
        <div class=\"body-container page\">
            <div class=\"inner-body-container\">
        ";
        // line 114
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "            </div>
        </div>

        ";
        // line 118
        $this->loadTemplate("page_footer.html.twig", "page.html.twig", 118)->display($context);
        // line 119
        echo "
        ";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 121
        echo "    </body>
</html>
";
        
        $__internal_3a41b0b29b67d741697c35cf4796c8c515c8a4b7792dbb3719c231b3076b2de7->leave($__internal_3a41b0b29b67d741697c35cf4796c8c515c8a4b7792dbb3719c231b3076b2de7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf2d5ecf9af079c4f70d4ca3cdf00f2be2e0c7c7fa8efd51a5a9cfd9a9be1089 = $this->env->getExtension("native_profiler");
        $__internal_cf2d5ecf9af079c4f70d4ca3cdf00f2be2e0c7c7fa8efd51a5a9cfd9a9be1089->enter($__internal_cf2d5ecf9af079c4f70d4ca3cdf00f2be2e0c7c7fa8efd51a5a9cfd9a9be1089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome Pathbuddy! Go find a travelmate";
        
        $__internal_cf2d5ecf9af079c4f70d4ca3cdf00f2be2e0c7c7fa8efd51a5a9cfd9a9be1089->leave($__internal_cf2d5ecf9af079c4f70d4ca3cdf00f2be2e0c7c7fa8efd51a5a9cfd9a9be1089_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a59735306f9b7c1b107734bd8f738f3692cedfb322f2a0b578b741e73afdc8ae = $this->env->getExtension("native_profiler");
        $__internal_a59735306f9b7c1b107734bd8f738f3692cedfb322f2a0b578b741e73afdc8ae->enter($__internal_a59735306f9b7c1b107734bd8f738f3692cedfb322f2a0b578b741e73afdc8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a59735306f9b7c1b107734bd8f738f3692cedfb322f2a0b578b741e73afdc8ae->leave($__internal_a59735306f9b7c1b107734bd8f738f3692cedfb322f2a0b578b741e73afdc8ae_prof);

    }

    // line 114
    public function block_body($context, array $blocks = array())
    {
        $__internal_a88f41568d0766cc9fb6cdf060b82ee33d41312ca0c4904ea03746f42339e580 = $this->env->getExtension("native_profiler");
        $__internal_a88f41568d0766cc9fb6cdf060b82ee33d41312ca0c4904ea03746f42339e580->enter($__internal_a88f41568d0766cc9fb6cdf060b82ee33d41312ca0c4904ea03746f42339e580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a88f41568d0766cc9fb6cdf060b82ee33d41312ca0c4904ea03746f42339e580->leave($__internal_a88f41568d0766cc9fb6cdf060b82ee33d41312ca0c4904ea03746f42339e580_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f07f7faf6fdc7ea6917fed393e914c7ff4d9bba385e6f9861483ad0aac68ff24 = $this->env->getExtension("native_profiler");
        $__internal_f07f7faf6fdc7ea6917fed393e914c7ff4d9bba385e6f9861483ad0aac68ff24->enter($__internal_f07f7faf6fdc7ea6917fed393e914c7ff4d9bba385e6f9861483ad0aac68ff24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f07f7faf6fdc7ea6917fed393e914c7ff4d9bba385e6f9861483ad0aac68ff24->leave($__internal_f07f7faf6fdc7ea6917fed393e914c7ff4d9bba385e6f9861483ad0aac68ff24_prof);

    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 120,  201 => 114,  190 => 6,  178 => 5,  169 => 121,  167 => 120,  164 => 119,  162 => 118,  157 => 115,  155 => 114,  150 => 111,  148 => 110,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome Pathbuddy! Go find a travelmate{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="stylesheet" href="{{ asset('./base.css') }}" />*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*             <style>*/
/* */
/*                 .header-background,*/
/*                 .footer-background {*/
/*                     background-color: #CC7832;*/
/*                 }*/
/* */
/*                 .page {*/
/*                     position: relative;*/
/*                     left: 5%;*/
/*                     width: 90%;*/
/*                     min-width: 1375px;*/
/*                 }*/
/* */
/*                 .header-container {*/
/*                     border: solid thin black;*/
/*                     display: inline-block;*/
/*                     height: 250px;*/
/*                     margin-bottom: 5px;*/
/*                 }*/
/* */
/*                 .header-logo {*/
/*                     width: 100%;*/
/*                     height: 80%;*/
/*                 }*/
/* */
/*                 .navigation-container {*/
/*                     border-top: solid thin black;*/
/*                     border-bottom: solid thin black;*/
/*                     width: 100%;*/
/*                     height: 20%;*/
/*                 }*/
/* */
/*                 .body-container {*/
/*                     border: solid thin black;*/
/*                     max-height: 800px;*/
/*                     height: auto;*/
/*                 }*/
/* */
/*                 .inner-body-container {*/
/*                     padding: 20px;*/
/*                 }*/
/* */
/*                 ul.navigation-list-container {*/
/*                     background-color: #aacd4e;*/
/*                     margin: 0;*/
/*                     padding-left: 0;*/
/*                     width: 100%;*/
/*                     height: 50px;*/
/*                 }*/
/* */
/*                 li.navigation-left {*/
/*                     right: 5px;*/
/*                     position: absolute;*/
/*                 }*/
/* */
/*                 ul.navigation-list-container li {*/
/*                     display: inline-block;*/
/*                     font: 16px/1.5 sans-serif;*/
/*                     width: 150px;*/
/*                     padding: 7px;*/
/*                     margin: 5px;*/
/*                     text-align: center;*/
/*                     border-left: solid slategrey 2px;*/
/*                     border-right: solid slategrey  2px;*/
/*                 }*/
/* */
/*                 .footer-container {*/
/*                     border: solid thin black;*/
/*                     margin-top: 5px;*/
/*                     text-align: center;*/
/*                 }*/
/* */
/*                 .footer-content {*/
/*                     padding: 5px;*/
/*                 }*/
/* */
/*                 p { margin: 0 0 1em 0; }*/
/*                 a { color: #0000F0; }*/
/*                 a:hover { text-decoration: none; }*/
/*                 code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*                 #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*                 #container { padding: 2em; }*/
/*                 #welcome, #status { margin-bottom: 2em; }*/
/*                 #welcome h1 span { display: block; font-size: 75%; }*/
/*                 #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*                 #icon-book { display: none; }*/
/* */
/*                 @media (min-width: 768px) {*/
/*                     #wrapper { width: 80%; margin: 2em auto; }*/
/*                     #icon-book { display: inline-block; }*/
/*                     #status a, #next a { display: block; }*/
/* */
/*                     @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*                     @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*                     .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*                 }*/
/*             </style>*/
/*     </head>*/
/*     <body>*/
/*         {% include 'page_header.html.twig' %}*/
/* */
/*         <div class="body-container page">*/
/*             <div class="inner-body-container">*/
/*         {% block body %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% include 'page_footer.html.twig' %}*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
