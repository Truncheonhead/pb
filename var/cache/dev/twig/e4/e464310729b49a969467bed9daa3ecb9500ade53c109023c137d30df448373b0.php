<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_26eeccef0e11912c8567450a7496d0d90d04115252f56a952ca76b1843c236bd extends Twig_Template
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
        $__internal_2730f854fc931341b1b6f616a0091f393956dd2aa38e5314ec838733ba5c03e7 = $this->env->getExtension("native_profiler");
        $__internal_2730f854fc931341b1b6f616a0091f393956dd2aa38e5314ec838733ba5c03e7->enter($__internal_2730f854fc931341b1b6f616a0091f393956dd2aa38e5314ec838733ba5c03e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2730f854fc931341b1b6f616a0091f393956dd2aa38e5314ec838733ba5c03e7->leave($__internal_2730f854fc931341b1b6f616a0091f393956dd2aa38e5314ec838733ba5c03e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
