<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_63b831a1acbe0f1e8ba1d9938001f556491b2569b3c0e605da4cd02fc312be35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_cdba797521e6bd6b097e88d9116c9852c64e6ec8341931d25b1660479745822f = $this->env->getExtension("native_profiler");
        $__internal_cdba797521e6bd6b097e88d9116c9852c64e6ec8341931d25b1660479745822f->enter($__internal_cdba797521e6bd6b097e88d9116c9852c64e6ec8341931d25b1660479745822f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdba797521e6bd6b097e88d9116c9852c64e6ec8341931d25b1660479745822f->leave($__internal_cdba797521e6bd6b097e88d9116c9852c64e6ec8341931d25b1660479745822f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d193e70c4b451ac2e39d0569adc73adfa2c47fab0c0030bcbb74679fed7502cb = $this->env->getExtension("native_profiler");
        $__internal_d193e70c4b451ac2e39d0569adc73adfa2c47fab0c0030bcbb74679fed7502cb->enter($__internal_d193e70c4b451ac2e39d0569adc73adfa2c47fab0c0030bcbb74679fed7502cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d193e70c4b451ac2e39d0569adc73adfa2c47fab0c0030bcbb74679fed7502cb->leave($__internal_d193e70c4b451ac2e39d0569adc73adfa2c47fab0c0030bcbb74679fed7502cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
