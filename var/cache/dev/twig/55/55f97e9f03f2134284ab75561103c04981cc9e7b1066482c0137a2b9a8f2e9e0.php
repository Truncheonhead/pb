<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_4be5962fa032d6b7d7bfe549329b72bcd401fc4722adbba0141bea78fc9b0792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_e2ccf8b73cbbe6f55dcc0586a1f00317392e7a68bdfb05e696ddc0fb1db71f9a = $this->env->getExtension("native_profiler");
        $__internal_e2ccf8b73cbbe6f55dcc0586a1f00317392e7a68bdfb05e696ddc0fb1db71f9a->enter($__internal_e2ccf8b73cbbe6f55dcc0586a1f00317392e7a68bdfb05e696ddc0fb1db71f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2ccf8b73cbbe6f55dcc0586a1f00317392e7a68bdfb05e696ddc0fb1db71f9a->leave($__internal_e2ccf8b73cbbe6f55dcc0586a1f00317392e7a68bdfb05e696ddc0fb1db71f9a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3446c2726cf55bb9853cbc9a2c4a314cbc077a3682da84aacb6729a87ed2425b = $this->env->getExtension("native_profiler");
        $__internal_3446c2726cf55bb9853cbc9a2c4a314cbc077a3682da84aacb6729a87ed2425b->enter($__internal_3446c2726cf55bb9853cbc9a2c4a314cbc077a3682da84aacb6729a87ed2425b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3446c2726cf55bb9853cbc9a2c4a314cbc077a3682da84aacb6729a87ed2425b->leave($__internal_3446c2726cf55bb9853cbc9a2c4a314cbc077a3682da84aacb6729a87ed2425b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
