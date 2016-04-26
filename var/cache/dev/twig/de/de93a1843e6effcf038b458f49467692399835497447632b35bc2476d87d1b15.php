<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ee8978ca028352897c756be35c36b8d1edbdb9d8518fb88bb6d81ebaadb4df2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20a94011495817a5d9a67ab06439f89e47239f06c8957e0db1e6cd6afc31c68a = $this->env->getExtension("native_profiler");
        $__internal_20a94011495817a5d9a67ab06439f89e47239f06c8957e0db1e6cd6afc31c68a->enter($__internal_20a94011495817a5d9a67ab06439f89e47239f06c8957e0db1e6cd6afc31c68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20a94011495817a5d9a67ab06439f89e47239f06c8957e0db1e6cd6afc31c68a->leave($__internal_20a94011495817a5d9a67ab06439f89e47239f06c8957e0db1e6cd6afc31c68a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d50514887ef0f01e3b0536d3c1dbb3bdeeede800de7a28bff6e04bcca421245 = $this->env->getExtension("native_profiler");
        $__internal_8d50514887ef0f01e3b0536d3c1dbb3bdeeede800de7a28bff6e04bcca421245->enter($__internal_8d50514887ef0f01e3b0536d3c1dbb3bdeeede800de7a28bff6e04bcca421245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8d50514887ef0f01e3b0536d3c1dbb3bdeeede800de7a28bff6e04bcca421245->leave($__internal_8d50514887ef0f01e3b0536d3c1dbb3bdeeede800de7a28bff6e04bcca421245_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
