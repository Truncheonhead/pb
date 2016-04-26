<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2c73ff396c7b8a1a578c336ed6c6ef53232115dfbde73ed4176530a6558330d8 extends Twig_Template
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
        $__internal_0d6c6da1f510acddace5c0ed4d77e4b7d3639c934af4d4a751e79e506a0a018d = $this->env->getExtension("native_profiler");
        $__internal_0d6c6da1f510acddace5c0ed4d77e4b7d3639c934af4d4a751e79e506a0a018d->enter($__internal_0d6c6da1f510acddace5c0ed4d77e4b7d3639c934af4d4a751e79e506a0a018d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d6c6da1f510acddace5c0ed4d77e4b7d3639c934af4d4a751e79e506a0a018d->leave($__internal_0d6c6da1f510acddace5c0ed4d77e4b7d3639c934af4d4a751e79e506a0a018d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76c452946c8a6ddef387d84a36ebd2ebff4adb730a9fc70996e17419cf04f22e = $this->env->getExtension("native_profiler");
        $__internal_76c452946c8a6ddef387d84a36ebd2ebff4adb730a9fc70996e17419cf04f22e->enter($__internal_76c452946c8a6ddef387d84a36ebd2ebff4adb730a9fc70996e17419cf04f22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_76c452946c8a6ddef387d84a36ebd2ebff4adb730a9fc70996e17419cf04f22e->leave($__internal_76c452946c8a6ddef387d84a36ebd2ebff4adb730a9fc70996e17419cf04f22e_prof);

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
