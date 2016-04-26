<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c79f48cd5a05d65857d84a1d9c4a0b27675f1ae49c0bfa9c1c2792a5dab5b0f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_22f9d85d9d0277be4f8b092dfda3409bcfb9f11de27a0460eac682ba57890e7e = $this->env->getExtension("native_profiler");
        $__internal_22f9d85d9d0277be4f8b092dfda3409bcfb9f11de27a0460eac682ba57890e7e->enter($__internal_22f9d85d9d0277be4f8b092dfda3409bcfb9f11de27a0460eac682ba57890e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f9d85d9d0277be4f8b092dfda3409bcfb9f11de27a0460eac682ba57890e7e->leave($__internal_22f9d85d9d0277be4f8b092dfda3409bcfb9f11de27a0460eac682ba57890e7e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c305eca13cd52bae0fc8645ed2d0862aa663678934e13495c082cc20e24e99bd = $this->env->getExtension("native_profiler");
        $__internal_c305eca13cd52bae0fc8645ed2d0862aa663678934e13495c082cc20e24e99bd->enter($__internal_c305eca13cd52bae0fc8645ed2d0862aa663678934e13495c082cc20e24e99bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c305eca13cd52bae0fc8645ed2d0862aa663678934e13495c082cc20e24e99bd->leave($__internal_c305eca13cd52bae0fc8645ed2d0862aa663678934e13495c082cc20e24e99bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
