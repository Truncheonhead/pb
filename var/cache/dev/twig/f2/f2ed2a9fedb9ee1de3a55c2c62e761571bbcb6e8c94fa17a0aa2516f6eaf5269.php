<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_41a214e413bd6f27995b7afeef20b37490319fa671900b02c8bf88f3a4d6c20b extends Twig_Template
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
        $__internal_6f81bc3fe081948345f5734aa13fda605f7306f430e131060f2ac1cabcde2149 = $this->env->getExtension("native_profiler");
        $__internal_6f81bc3fe081948345f5734aa13fda605f7306f430e131060f2ac1cabcde2149->enter($__internal_6f81bc3fe081948345f5734aa13fda605f7306f430e131060f2ac1cabcde2149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6f81bc3fe081948345f5734aa13fda605f7306f430e131060f2ac1cabcde2149->leave($__internal_6f81bc3fe081948345f5734aa13fda605f7306f430e131060f2ac1cabcde2149_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
