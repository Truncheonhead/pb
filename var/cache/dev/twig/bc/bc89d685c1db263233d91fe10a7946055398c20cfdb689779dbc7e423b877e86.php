<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_618a0180095d6fd66577f174d50ee930be5bffea0c2b52237ab69534a4b415fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b0bc05cccf6095f57b10ee015764789634e8319d036e488ae5348f46c20b5068 = $this->env->getExtension("native_profiler");
        $__internal_b0bc05cccf6095f57b10ee015764789634e8319d036e488ae5348f46c20b5068->enter($__internal_b0bc05cccf6095f57b10ee015764789634e8319d036e488ae5348f46c20b5068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0bc05cccf6095f57b10ee015764789634e8319d036e488ae5348f46c20b5068->leave($__internal_b0bc05cccf6095f57b10ee015764789634e8319d036e488ae5348f46c20b5068_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b673779b85aef291cf292a4e1e9957b5e16843866511093e969397d459afc5b = $this->env->getExtension("native_profiler");
        $__internal_7b673779b85aef291cf292a4e1e9957b5e16843866511093e969397d459afc5b->enter($__internal_7b673779b85aef291cf292a4e1e9957b5e16843866511093e969397d459afc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7b673779b85aef291cf292a4e1e9957b5e16843866511093e969397d459afc5b->leave($__internal_7b673779b85aef291cf292a4e1e9957b5e16843866511093e969397d459afc5b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
