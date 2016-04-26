<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_93133aeffa89af45bdf0d1099653bfe83be2f3c7120904bbf5543f3baabbba0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d05b7aeaa8dc2d36b84ea5d1e53860884c1d0e3bc4ff4a70cd46be0120ad8c02 = $this->env->getExtension("native_profiler");
        $__internal_d05b7aeaa8dc2d36b84ea5d1e53860884c1d0e3bc4ff4a70cd46be0120ad8c02->enter($__internal_d05b7aeaa8dc2d36b84ea5d1e53860884c1d0e3bc4ff4a70cd46be0120ad8c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d05b7aeaa8dc2d36b84ea5d1e53860884c1d0e3bc4ff4a70cd46be0120ad8c02->leave($__internal_d05b7aeaa8dc2d36b84ea5d1e53860884c1d0e3bc4ff4a70cd46be0120ad8c02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abd4d617d7fe37b77b259a9353324c64ca101da68b23fc1171b366cd5f861f50 = $this->env->getExtension("native_profiler");
        $__internal_abd4d617d7fe37b77b259a9353324c64ca101da68b23fc1171b366cd5f861f50->enter($__internal_abd4d617d7fe37b77b259a9353324c64ca101da68b23fc1171b366cd5f861f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_abd4d617d7fe37b77b259a9353324c64ca101da68b23fc1171b366cd5f861f50->leave($__internal_abd4d617d7fe37b77b259a9353324c64ca101da68b23fc1171b366cd5f861f50_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
