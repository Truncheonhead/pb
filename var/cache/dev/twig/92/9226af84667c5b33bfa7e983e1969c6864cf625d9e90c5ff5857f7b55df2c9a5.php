<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_7e70f9c75305b520e4ac7a187da2e6071aa179b4082c322a13e4e329c3780479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_316cd79dd794e4098125c95db184c5853feec04fa2d3ce6f57e18f372e5f3ab4 = $this->env->getExtension("native_profiler");
        $__internal_316cd79dd794e4098125c95db184c5853feec04fa2d3ce6f57e18f372e5f3ab4->enter($__internal_316cd79dd794e4098125c95db184c5853feec04fa2d3ce6f57e18f372e5f3ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_316cd79dd794e4098125c95db184c5853feec04fa2d3ce6f57e18f372e5f3ab4->leave($__internal_316cd79dd794e4098125c95db184c5853feec04fa2d3ce6f57e18f372e5f3ab4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7bdc692580f5dcbd74c01280d9c50f6ce13b015b56080f64124ae2332be3b60 = $this->env->getExtension("native_profiler");
        $__internal_f7bdc692580f5dcbd74c01280d9c50f6ce13b015b56080f64124ae2332be3b60->enter($__internal_f7bdc692580f5dcbd74c01280d9c50f6ce13b015b56080f64124ae2332be3b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_f7bdc692580f5dcbd74c01280d9c50f6ce13b015b56080f64124ae2332be3b60->leave($__internal_f7bdc692580f5dcbd74c01280d9c50f6ce13b015b56080f64124ae2332be3b60_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
