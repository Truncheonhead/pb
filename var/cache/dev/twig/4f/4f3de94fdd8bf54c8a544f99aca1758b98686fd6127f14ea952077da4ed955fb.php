<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_5a8dc687ed6a2dfe74e831a6f4619610c312f7f26ce29dec7a0f31210d64eba0 extends Twig_Template
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
        $__internal_e736119285961939196ecc1da2b9928c9781fff3b6f620a9ba8d5c70a3285806 = $this->env->getExtension("native_profiler");
        $__internal_e736119285961939196ecc1da2b9928c9781fff3b6f620a9ba8d5c70a3285806->enter($__internal_e736119285961939196ecc1da2b9928c9781fff3b6f620a9ba8d5c70a3285806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e736119285961939196ecc1da2b9928c9781fff3b6f620a9ba8d5c70a3285806->leave($__internal_e736119285961939196ecc1da2b9928c9781fff3b6f620a9ba8d5c70a3285806_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
