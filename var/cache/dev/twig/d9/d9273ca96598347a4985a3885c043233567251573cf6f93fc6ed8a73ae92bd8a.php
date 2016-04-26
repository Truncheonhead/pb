<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_08999a793513841631cf37ce92f8aeb03002b06bbe758fc00a7fdb8967b46811 extends Twig_Template
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
        $__internal_a2e283cab196c5a2d6716c900202d16fda88a192cca5d94a9e686a94e992c1a9 = $this->env->getExtension("native_profiler");
        $__internal_a2e283cab196c5a2d6716c900202d16fda88a192cca5d94a9e686a94e992c1a9->enter($__internal_a2e283cab196c5a2d6716c900202d16fda88a192cca5d94a9e686a94e992c1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a2e283cab196c5a2d6716c900202d16fda88a192cca5d94a9e686a94e992c1a9->leave($__internal_a2e283cab196c5a2d6716c900202d16fda88a192cca5d94a9e686a94e992c1a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
