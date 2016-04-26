<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_8a37b65ee6a90ef26d0361b52391880840569aad64abb3bf7bfd4bf1365363c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_bd35df2d71ae906610d0e3a8e66ba2a32524badc61468d697f6b11d5b4ba1f11 = $this->env->getExtension("native_profiler");
        $__internal_bd35df2d71ae906610d0e3a8e66ba2a32524badc61468d697f6b11d5b4ba1f11->enter($__internal_bd35df2d71ae906610d0e3a8e66ba2a32524badc61468d697f6b11d5b4ba1f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd35df2d71ae906610d0e3a8e66ba2a32524badc61468d697f6b11d5b4ba1f11->leave($__internal_bd35df2d71ae906610d0e3a8e66ba2a32524badc61468d697f6b11d5b4ba1f11_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bcab2e4572823f55382b486de1d711c1e243093a88abb78a5c2083072d5684a = $this->env->getExtension("native_profiler");
        $__internal_6bcab2e4572823f55382b486de1d711c1e243093a88abb78a5c2083072d5684a->enter($__internal_6bcab2e4572823f55382b486de1d711c1e243093a88abb78a5c2083072d5684a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_6bcab2e4572823f55382b486de1d711c1e243093a88abb78a5c2083072d5684a->leave($__internal_6bcab2e4572823f55382b486de1d711c1e243093a88abb78a5c2083072d5684a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
