<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_78086741027fb69073661e0e038d2a359d9fefd0cab99f0a3610371e4520386e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_723c3aacb20e6d679649d823c2bfeefde2d6cac376e644be659d60685d5fd543 = $this->env->getExtension("native_profiler");
        $__internal_723c3aacb20e6d679649d823c2bfeefde2d6cac376e644be659d60685d5fd543->enter($__internal_723c3aacb20e6d679649d823c2bfeefde2d6cac376e644be659d60685d5fd543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_723c3aacb20e6d679649d823c2bfeefde2d6cac376e644be659d60685d5fd543->leave($__internal_723c3aacb20e6d679649d823c2bfeefde2d6cac376e644be659d60685d5fd543_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdf2e926361fa341ab2fa5b6139bcb172bb27ad0a2121bd8fe51894a3e990d0e = $this->env->getExtension("native_profiler");
        $__internal_fdf2e926361fa341ab2fa5b6139bcb172bb27ad0a2121bd8fe51894a3e990d0e->enter($__internal_fdf2e926361fa341ab2fa5b6139bcb172bb27ad0a2121bd8fe51894a3e990d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_fdf2e926361fa341ab2fa5b6139bcb172bb27ad0a2121bd8fe51894a3e990d0e->leave($__internal_fdf2e926361fa341ab2fa5b6139bcb172bb27ad0a2121bd8fe51894a3e990d0e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
