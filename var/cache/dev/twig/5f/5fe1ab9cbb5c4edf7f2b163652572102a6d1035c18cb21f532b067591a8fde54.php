<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_da54e6ef7e3b89a2825d34182f815b2c7de9e0346eaa13dd445cd57e9d577e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_6b3da9f57ab37021373c2414178e184bbc614974ffbf969401234575ccf0f8dd = $this->env->getExtension("native_profiler");
        $__internal_6b3da9f57ab37021373c2414178e184bbc614974ffbf969401234575ccf0f8dd->enter($__internal_6b3da9f57ab37021373c2414178e184bbc614974ffbf969401234575ccf0f8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3da9f57ab37021373c2414178e184bbc614974ffbf969401234575ccf0f8dd->leave($__internal_6b3da9f57ab37021373c2414178e184bbc614974ffbf969401234575ccf0f8dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3504d5bbcbc7e921ff12da6255c07dfbc5c6d23b867ce82752ced6cb112c943b = $this->env->getExtension("native_profiler");
        $__internal_3504d5bbcbc7e921ff12da6255c07dfbc5c6d23b867ce82752ced6cb112c943b->enter($__internal_3504d5bbcbc7e921ff12da6255c07dfbc5c6d23b867ce82752ced6cb112c943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_3504d5bbcbc7e921ff12da6255c07dfbc5c6d23b867ce82752ced6cb112c943b->leave($__internal_3504d5bbcbc7e921ff12da6255c07dfbc5c6d23b867ce82752ced6cb112c943b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
