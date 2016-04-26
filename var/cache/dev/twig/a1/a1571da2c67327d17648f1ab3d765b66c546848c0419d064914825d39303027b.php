<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_9313b67afae60727b43792e6a1b411127b8bde6ffa799b48ccc35875c2df065b extends Twig_Template
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
        $__internal_e4304ed1ed11dddd49f82c73658e154f8d088a202c4eeb0f014ecbe3fba8c434 = $this->env->getExtension("native_profiler");
        $__internal_e4304ed1ed11dddd49f82c73658e154f8d088a202c4eeb0f014ecbe3fba8c434->enter($__internal_e4304ed1ed11dddd49f82c73658e154f8d088a202c4eeb0f014ecbe3fba8c434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e4304ed1ed11dddd49f82c73658e154f8d088a202c4eeb0f014ecbe3fba8c434->leave($__internal_e4304ed1ed11dddd49f82c73658e154f8d088a202c4eeb0f014ecbe3fba8c434_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
