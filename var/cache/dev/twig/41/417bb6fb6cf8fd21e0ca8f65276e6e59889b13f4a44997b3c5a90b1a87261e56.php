<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c3cdd5a9ee86088127e268c2a1d422f168491e89f290802370e9a7fa05aeab7f extends Twig_Template
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
        $__internal_a331d54ed681d96d3420ebdce5518da6e30b279ab0a56e13f8d114fbaa6c72fb = $this->env->getExtension("native_profiler");
        $__internal_a331d54ed681d96d3420ebdce5518da6e30b279ab0a56e13f8d114fbaa6c72fb->enter($__internal_a331d54ed681d96d3420ebdce5518da6e30b279ab0a56e13f8d114fbaa6c72fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a331d54ed681d96d3420ebdce5518da6e30b279ab0a56e13f8d114fbaa6c72fb->leave($__internal_a331d54ed681d96d3420ebdce5518da6e30b279ab0a56e13f8d114fbaa6c72fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
