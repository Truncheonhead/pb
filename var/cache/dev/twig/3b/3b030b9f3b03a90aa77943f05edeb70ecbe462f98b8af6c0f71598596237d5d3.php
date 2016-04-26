<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0342e357295a0d3a6cf91196ee2a63ffd96b94a28b6214da89ff19a01b7c59b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_adfb06b3640c36ef3aa9325aee918db1b24f9c1971dcced6d6baf816e09805fb = $this->env->getExtension("native_profiler");
        $__internal_adfb06b3640c36ef3aa9325aee918db1b24f9c1971dcced6d6baf816e09805fb->enter($__internal_adfb06b3640c36ef3aa9325aee918db1b24f9c1971dcced6d6baf816e09805fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adfb06b3640c36ef3aa9325aee918db1b24f9c1971dcced6d6baf816e09805fb->leave($__internal_adfb06b3640c36ef3aa9325aee918db1b24f9c1971dcced6d6baf816e09805fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a5f8a8bc115afe898c7c3848698f8540e6dd46a4ca3933ead552780e196ef0b = $this->env->getExtension("native_profiler");
        $__internal_2a5f8a8bc115afe898c7c3848698f8540e6dd46a4ca3933ead552780e196ef0b->enter($__internal_2a5f8a8bc115afe898c7c3848698f8540e6dd46a4ca3933ead552780e196ef0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_2a5f8a8bc115afe898c7c3848698f8540e6dd46a4ca3933ead552780e196ef0b->leave($__internal_2a5f8a8bc115afe898c7c3848698f8540e6dd46a4ca3933ead552780e196ef0b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
