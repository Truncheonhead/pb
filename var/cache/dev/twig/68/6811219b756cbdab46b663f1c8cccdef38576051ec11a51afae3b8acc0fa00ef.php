<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_78e79ab9114c26a9e7c8c9bd6828c569a14f29a77e661ad7f29ec70ab7f34f7c extends Twig_Template
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
        $__internal_be741bed88427b0c79ff35b15ccbc02e7687af9b60d9b8f9ab8f65424f038198 = $this->env->getExtension("native_profiler");
        $__internal_be741bed88427b0c79ff35b15ccbc02e7687af9b60d9b8f9ab8f65424f038198->enter($__internal_be741bed88427b0c79ff35b15ccbc02e7687af9b60d9b8f9ab8f65424f038198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_be741bed88427b0c79ff35b15ccbc02e7687af9b60d9b8f9ab8f65424f038198->leave($__internal_be741bed88427b0c79ff35b15ccbc02e7687af9b60d9b8f9ab8f65424f038198_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
