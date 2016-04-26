<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_fa432892607618470586990ec46fa17ebd605c29ab8010027a444e00418055f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a52cdf269fb7cad9951980128c67d0c2f0f05df18b0a9ae50839b5609740f1a2 = $this->env->getExtension("native_profiler");
        $__internal_a52cdf269fb7cad9951980128c67d0c2f0f05df18b0a9ae50839b5609740f1a2->enter($__internal_a52cdf269fb7cad9951980128c67d0c2f0f05df18b0a9ae50839b5609740f1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a52cdf269fb7cad9951980128c67d0c2f0f05df18b0a9ae50839b5609740f1a2->leave($__internal_a52cdf269fb7cad9951980128c67d0c2f0f05df18b0a9ae50839b5609740f1a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdf1ac6d7c9f666c1d7a09eee3798dedd80ab9d5b29dc1cb49759a2eeed3752f = $this->env->getExtension("native_profiler");
        $__internal_bdf1ac6d7c9f666c1d7a09eee3798dedd80ab9d5b29dc1cb49759a2eeed3752f->enter($__internal_bdf1ac6d7c9f666c1d7a09eee3798dedd80ab9d5b29dc1cb49759a2eeed3752f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_bdf1ac6d7c9f666c1d7a09eee3798dedd80ab9d5b29dc1cb49759a2eeed3752f->leave($__internal_bdf1ac6d7c9f666c1d7a09eee3798dedd80ab9d5b29dc1cb49759a2eeed3752f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
