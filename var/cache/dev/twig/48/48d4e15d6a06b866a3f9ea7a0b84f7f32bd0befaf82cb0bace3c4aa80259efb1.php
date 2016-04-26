<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d09bf1c0abb69a7e8bf46464ebd976ccf8b270bf0652bb4d134d11266b692756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_eff96e7bcba81069fa671892c676fd2c8dc08bdec2e3c3ac4dbb62d21d35948b = $this->env->getExtension("native_profiler");
        $__internal_eff96e7bcba81069fa671892c676fd2c8dc08bdec2e3c3ac4dbb62d21d35948b->enter($__internal_eff96e7bcba81069fa671892c676fd2c8dc08bdec2e3c3ac4dbb62d21d35948b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eff96e7bcba81069fa671892c676fd2c8dc08bdec2e3c3ac4dbb62d21d35948b->leave($__internal_eff96e7bcba81069fa671892c676fd2c8dc08bdec2e3c3ac4dbb62d21d35948b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67332c2fe835d66f18b0e6bf73ca0ce34c62c03546897d8a76a17b4fa009ac60 = $this->env->getExtension("native_profiler");
        $__internal_67332c2fe835d66f18b0e6bf73ca0ce34c62c03546897d8a76a17b4fa009ac60->enter($__internal_67332c2fe835d66f18b0e6bf73ca0ce34c62c03546897d8a76a17b4fa009ac60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_67332c2fe835d66f18b0e6bf73ca0ce34c62c03546897d8a76a17b4fa009ac60->leave($__internal_67332c2fe835d66f18b0e6bf73ca0ce34c62c03546897d8a76a17b4fa009ac60_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
