<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_7f5ba8d71bfef94846a0bf3ae6b906aca1f50063d209ddb51ad41785fa3b5c49 extends Twig_Template
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
        $__internal_66064ad3321afa7f6408d3389efa61195a50fc75791ffdad87a209495ceae5b8 = $this->env->getExtension("native_profiler");
        $__internal_66064ad3321afa7f6408d3389efa61195a50fc75791ffdad87a209495ceae5b8->enter($__internal_66064ad3321afa7f6408d3389efa61195a50fc75791ffdad87a209495ceae5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_66064ad3321afa7f6408d3389efa61195a50fc75791ffdad87a209495ceae5b8->leave($__internal_66064ad3321afa7f6408d3389efa61195a50fc75791ffdad87a209495ceae5b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
