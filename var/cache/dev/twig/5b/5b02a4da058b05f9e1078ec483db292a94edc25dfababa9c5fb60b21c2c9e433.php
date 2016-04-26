<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b3deae0b2c3b26a245c1dd6c1a215a1dac1f8435c0bcbcf705992e04c3f26c0c extends Twig_Template
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
        $__internal_28883970eac1a94c41755fde39fb801ae17f85c91a2ffd3e4890ce85672918df = $this->env->getExtension("native_profiler");
        $__internal_28883970eac1a94c41755fde39fb801ae17f85c91a2ffd3e4890ce85672918df->enter($__internal_28883970eac1a94c41755fde39fb801ae17f85c91a2ffd3e4890ce85672918df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28883970eac1a94c41755fde39fb801ae17f85c91a2ffd3e4890ce85672918df->leave($__internal_28883970eac1a94c41755fde39fb801ae17f85c91a2ffd3e4890ce85672918df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e233958374093db92dd35c720168e7d3831566070d467d720e6337c4191afcc = $this->env->getExtension("native_profiler");
        $__internal_7e233958374093db92dd35c720168e7d3831566070d467d720e6337c4191afcc->enter($__internal_7e233958374093db92dd35c720168e7d3831566070d467d720e6337c4191afcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7e233958374093db92dd35c720168e7d3831566070d467d720e6337c4191afcc->leave($__internal_7e233958374093db92dd35c720168e7d3831566070d467d720e6337c4191afcc_prof);

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
