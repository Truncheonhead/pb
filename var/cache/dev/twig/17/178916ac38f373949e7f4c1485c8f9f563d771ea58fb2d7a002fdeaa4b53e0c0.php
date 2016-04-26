<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3e1a88e19578f433c74f327c22c948b0fb51a2792a9d548ecb17854dc406c536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_85bd7b82f8ba9321b8050f302c6dfd0ed15303210593d9a11f96be693a801d98 = $this->env->getExtension("native_profiler");
        $__internal_85bd7b82f8ba9321b8050f302c6dfd0ed15303210593d9a11f96be693a801d98->enter($__internal_85bd7b82f8ba9321b8050f302c6dfd0ed15303210593d9a11f96be693a801d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85bd7b82f8ba9321b8050f302c6dfd0ed15303210593d9a11f96be693a801d98->leave($__internal_85bd7b82f8ba9321b8050f302c6dfd0ed15303210593d9a11f96be693a801d98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bbd0a6f40278ca8b37348b0c26bf6aa402a6a0931457fbaa11c96bd69a1540c = $this->env->getExtension("native_profiler");
        $__internal_7bbd0a6f40278ca8b37348b0c26bf6aa402a6a0931457fbaa11c96bd69a1540c->enter($__internal_7bbd0a6f40278ca8b37348b0c26bf6aa402a6a0931457fbaa11c96bd69a1540c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_7bbd0a6f40278ca8b37348b0c26bf6aa402a6a0931457fbaa11c96bd69a1540c->leave($__internal_7bbd0a6f40278ca8b37348b0c26bf6aa402a6a0931457fbaa11c96bd69a1540c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
