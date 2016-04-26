<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_bcf9e37889d67ee366d8591efecffc4c158f58e12c8af031ec1efe5bca3d84a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ea4667d197c8e40db3e446d1fbef7533d03e06ef01660c2cfd99d1582189f435 = $this->env->getExtension("native_profiler");
        $__internal_ea4667d197c8e40db3e446d1fbef7533d03e06ef01660c2cfd99d1582189f435->enter($__internal_ea4667d197c8e40db3e446d1fbef7533d03e06ef01660c2cfd99d1582189f435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea4667d197c8e40db3e446d1fbef7533d03e06ef01660c2cfd99d1582189f435->leave($__internal_ea4667d197c8e40db3e446d1fbef7533d03e06ef01660c2cfd99d1582189f435_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0121db6251038ff0ffecb5aaf4d00e9d0174a1a9d8f2ae09abfbdf15009c3f55 = $this->env->getExtension("native_profiler");
        $__internal_0121db6251038ff0ffecb5aaf4d00e9d0174a1a9d8f2ae09abfbdf15009c3f55->enter($__internal_0121db6251038ff0ffecb5aaf4d00e9d0174a1a9d8f2ae09abfbdf15009c3f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0121db6251038ff0ffecb5aaf4d00e9d0174a1a9d8f2ae09abfbdf15009c3f55->leave($__internal_0121db6251038ff0ffecb5aaf4d00e9d0174a1a9d8f2ae09abfbdf15009c3f55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
