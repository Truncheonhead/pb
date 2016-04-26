<?php

/* base.html.twig */
class __TwigTemplate_46620c427f37bf26fe7616b5d993a9bd41577824ed26d0419a1eefff9f5e38ae extends Twig_Template
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
        $__internal_1d5a23dd829bfcbf0ee3423b302651f41acf82fa549ef7118ae4d95faf054dda = $this->env->getExtension("native_profiler");
        $__internal_1d5a23dd829bfcbf0ee3423b302651f41acf82fa549ef7118ae4d95faf054dda->enter($__internal_1d5a23dd829bfcbf0ee3423b302651f41acf82fa549ef7118ae4d95faf054dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
                    min-width: 1280px;
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



                body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
                h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
                h1 { font-size: 36px; }
                h2 { font-size: 21px; margin-bottom: 1em; }
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
        // line 114
        $this->loadTemplate("page_header.html.twig", "base.html.twig", 114)->display($context);
        // line 115
        echo "
        <div class=\"body-container page\">
            <div class=\"inner-body-container\">
        ";
        // line 118
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "            </div>
        </div>

        ";
        // line 122
        $this->loadTemplate("page_footer.html.twig", "base.html.twig", 122)->display($context);
        // line 123
        echo "
        ";
        // line 124
        $this->displayBlock('javascripts', $context, $blocks);
        // line 125
        echo "    </body>
</html>
";
        
        $__internal_1d5a23dd829bfcbf0ee3423b302651f41acf82fa549ef7118ae4d95faf054dda->leave($__internal_1d5a23dd829bfcbf0ee3423b302651f41acf82fa549ef7118ae4d95faf054dda_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa437a878b3bf206de88c61a93cf9a966f7475ed4efa09cf5f487ec6baebcd03 = $this->env->getExtension("native_profiler");
        $__internal_aa437a878b3bf206de88c61a93cf9a966f7475ed4efa09cf5f487ec6baebcd03->enter($__internal_aa437a878b3bf206de88c61a93cf9a966f7475ed4efa09cf5f487ec6baebcd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome Pathbuddy! Go find a travelmate";
        
        $__internal_aa437a878b3bf206de88c61a93cf9a966f7475ed4efa09cf5f487ec6baebcd03->leave($__internal_aa437a878b3bf206de88c61a93cf9a966f7475ed4efa09cf5f487ec6baebcd03_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_177ada42eb34ac622c2a002b498c224381fe0d644ebcc0a4e9d589a9067efea3 = $this->env->getExtension("native_profiler");
        $__internal_177ada42eb34ac622c2a002b498c224381fe0d644ebcc0a4e9d589a9067efea3->enter($__internal_177ada42eb34ac622c2a002b498c224381fe0d644ebcc0a4e9d589a9067efea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_177ada42eb34ac622c2a002b498c224381fe0d644ebcc0a4e9d589a9067efea3->leave($__internal_177ada42eb34ac622c2a002b498c224381fe0d644ebcc0a4e9d589a9067efea3_prof);

    }

    // line 118
    public function block_body($context, array $blocks = array())
    {
        $__internal_048df991d0ec52db7cc7a5f32ca56adadd51c2bf2e2ee34fdd22449bf60c5168 = $this->env->getExtension("native_profiler");
        $__internal_048df991d0ec52db7cc7a5f32ca56adadd51c2bf2e2ee34fdd22449bf60c5168->enter($__internal_048df991d0ec52db7cc7a5f32ca56adadd51c2bf2e2ee34fdd22449bf60c5168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_048df991d0ec52db7cc7a5f32ca56adadd51c2bf2e2ee34fdd22449bf60c5168->leave($__internal_048df991d0ec52db7cc7a5f32ca56adadd51c2bf2e2ee34fdd22449bf60c5168_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7a032d2d2f7ee46b5f8eb6f1c20041e2bb3c17bf0d869a14bcb363451857c2d = $this->env->getExtension("native_profiler");
        $__internal_a7a032d2d2f7ee46b5f8eb6f1c20041e2bb3c17bf0d869a14bcb363451857c2d->enter($__internal_a7a032d2d2f7ee46b5f8eb6f1c20041e2bb3c17bf0d869a14bcb363451857c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a7a032d2d2f7ee46b5f8eb6f1c20041e2bb3c17bf0d869a14bcb363451857c2d->leave($__internal_a7a032d2d2f7ee46b5f8eb6f1c20041e2bb3c17bf0d869a14bcb363451857c2d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 124,  202 => 118,  191 => 6,  179 => 5,  170 => 125,  168 => 124,  165 => 123,  163 => 122,  158 => 119,  156 => 118,  151 => 115,  149 => 114,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome Pathbuddy! Go find a travelmate{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
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
/*                     min-width: 1280px;*/
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
/* */
/* */
/*                 body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*                 h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*                 h1 { font-size: 36px; }*/
/*                 h2 { font-size: 21px; margin-bottom: 1em; }*/
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
