<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_7d4dfdc69cc2e1167dbc234f897900a9785dc4e65406ec80043cc13f60ba5678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_e5e854c0f663baad679f23c827e8339f5a5de985a67f036f0dc8adb9452f123c = $this->env->getExtension("native_profiler");
        $__internal_e5e854c0f663baad679f23c827e8339f5a5de985a67f036f0dc8adb9452f123c->enter($__internal_e5e854c0f663baad679f23c827e8339f5a5de985a67f036f0dc8adb9452f123c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e854c0f663baad679f23c827e8339f5a5de985a67f036f0dc8adb9452f123c->leave($__internal_e5e854c0f663baad679f23c827e8339f5a5de985a67f036f0dc8adb9452f123c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9aa06294ef9bc8a8ae905167e7a58928759795993e4cbc867d43ab49b7caf50a = $this->env->getExtension("native_profiler");
        $__internal_9aa06294ef9bc8a8ae905167e7a58928759795993e4cbc867d43ab49b7caf50a->enter($__internal_9aa06294ef9bc8a8ae905167e7a58928759795993e4cbc867d43ab49b7caf50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9aa06294ef9bc8a8ae905167e7a58928759795993e4cbc867d43ab49b7caf50a->leave($__internal_9aa06294ef9bc8a8ae905167e7a58928759795993e4cbc867d43ab49b7caf50a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
