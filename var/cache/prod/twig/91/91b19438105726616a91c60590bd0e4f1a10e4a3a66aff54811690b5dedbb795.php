<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_71041a56c892bef993f83c7b0f99de9af650c84c3ff5826203b1c586e876d1ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f370b191c375e853ff2941e19f3a39d3ceefd523442b804401c5d00a83ea4a21 = $this->env->getExtension("native_profiler");
        $__internal_f370b191c375e853ff2941e19f3a39d3ceefd523442b804401c5d00a83ea4a21->enter($__internal_f370b191c375e853ff2941e19f3a39d3ceefd523442b804401c5d00a83ea4a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f370b191c375e853ff2941e19f3a39d3ceefd523442b804401c5d00a83ea4a21->leave($__internal_f370b191c375e853ff2941e19f3a39d3ceefd523442b804401c5d00a83ea4a21_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82b42e6600146a16307cef2eb5c52ce5946640cc233b3d5d490c108e0a19d5bc = $this->env->getExtension("native_profiler");
        $__internal_82b42e6600146a16307cef2eb5c52ce5946640cc233b3d5d490c108e0a19d5bc->enter($__internal_82b42e6600146a16307cef2eb5c52ce5946640cc233b3d5d490c108e0a19d5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_82b42e6600146a16307cef2eb5c52ce5946640cc233b3d5d490c108e0a19d5bc->leave($__internal_82b42e6600146a16307cef2eb5c52ce5946640cc233b3d5d490c108e0a19d5bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
