<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_d9dc73a40d6414c165c22fa4d221f57136c64aefa4ba2660ab45963ea6833699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_5fbebf3f90bc4c1f3c22925292d1f75a18307a0a30f01993a6872ea74930772a = $this->env->getExtension("native_profiler");
        $__internal_5fbebf3f90bc4c1f3c22925292d1f75a18307a0a30f01993a6872ea74930772a->enter($__internal_5fbebf3f90bc4c1f3c22925292d1f75a18307a0a30f01993a6872ea74930772a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fbebf3f90bc4c1f3c22925292d1f75a18307a0a30f01993a6872ea74930772a->leave($__internal_5fbebf3f90bc4c1f3c22925292d1f75a18307a0a30f01993a6872ea74930772a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14c8a2ef64ccf9d6798bed2ce841da18f107bea50968b4dc3eddeaa91e464001 = $this->env->getExtension("native_profiler");
        $__internal_14c8a2ef64ccf9d6798bed2ce841da18f107bea50968b4dc3eddeaa91e464001->enter($__internal_14c8a2ef64ccf9d6798bed2ce841da18f107bea50968b4dc3eddeaa91e464001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_14c8a2ef64ccf9d6798bed2ce841da18f107bea50968b4dc3eddeaa91e464001->leave($__internal_14c8a2ef64ccf9d6798bed2ce841da18f107bea50968b4dc3eddeaa91e464001_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
