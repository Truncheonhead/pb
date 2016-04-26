<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_567c28c6ac1e909dc451f7c8c8bc6206f0f6d8295bb598f3760b8a1b554ce80c extends Twig_Template
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
        $__internal_9da32eda964bdc134b0ece5151a6de800646352166ad0e44472f0ea1f6847256 = $this->env->getExtension("native_profiler");
        $__internal_9da32eda964bdc134b0ece5151a6de800646352166ad0e44472f0ea1f6847256->enter($__internal_9da32eda964bdc134b0ece5151a6de800646352166ad0e44472f0ea1f6847256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9da32eda964bdc134b0ece5151a6de800646352166ad0e44472f0ea1f6847256->leave($__internal_9da32eda964bdc134b0ece5151a6de800646352166ad0e44472f0ea1f6847256_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dea22f38307d0af44255f9937485c77ed8f0d8f2fc384cf05480de543afb13cd = $this->env->getExtension("native_profiler");
        $__internal_dea22f38307d0af44255f9937485c77ed8f0d8f2fc384cf05480de543afb13cd->enter($__internal_dea22f38307d0af44255f9937485c77ed8f0d8f2fc384cf05480de543afb13cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_dea22f38307d0af44255f9937485c77ed8f0d8f2fc384cf05480de543afb13cd->leave($__internal_dea22f38307d0af44255f9937485c77ed8f0d8f2fc384cf05480de543afb13cd_prof);

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
