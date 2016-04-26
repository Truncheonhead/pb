<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_5e0521c4ccb181de413b316f8ba96d0b4269378c06babbb77325aaec159b9b74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_0747168af180943f4d796a2a4c146e1f31c485d32240f0a96dc2d394f56a666a = $this->env->getExtension("native_profiler");
        $__internal_0747168af180943f4d796a2a4c146e1f31c485d32240f0a96dc2d394f56a666a->enter($__internal_0747168af180943f4d796a2a4c146e1f31c485d32240f0a96dc2d394f56a666a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0747168af180943f4d796a2a4c146e1f31c485d32240f0a96dc2d394f56a666a->leave($__internal_0747168af180943f4d796a2a4c146e1f31c485d32240f0a96dc2d394f56a666a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65818b6055b7d7d91cb3d8d89622b9d7d6e8a74f32453fdcb49da4630f35c080 = $this->env->getExtension("native_profiler");
        $__internal_65818b6055b7d7d91cb3d8d89622b9d7d6e8a74f32453fdcb49da4630f35c080->enter($__internal_65818b6055b7d7d91cb3d8d89622b9d7d6e8a74f32453fdcb49da4630f35c080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_65818b6055b7d7d91cb3d8d89622b9d7d6e8a74f32453fdcb49da4630f35c080->leave($__internal_65818b6055b7d7d91cb3d8d89622b9d7d6e8a74f32453fdcb49da4630f35c080_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
