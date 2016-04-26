<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_ca374c7ee8f1a1a768c656b3258fb1554e794cf77883cb4ede5a0e9e20a62d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_2b92e0433cf251745f277a9f91a2bcab5197e7b95bf4b2a8cfc683b056fcf133 = $this->env->getExtension("native_profiler");
        $__internal_2b92e0433cf251745f277a9f91a2bcab5197e7b95bf4b2a8cfc683b056fcf133->enter($__internal_2b92e0433cf251745f277a9f91a2bcab5197e7b95bf4b2a8cfc683b056fcf133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b92e0433cf251745f277a9f91a2bcab5197e7b95bf4b2a8cfc683b056fcf133->leave($__internal_2b92e0433cf251745f277a9f91a2bcab5197e7b95bf4b2a8cfc683b056fcf133_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea605a4a7f68dd0e7e97a0acf73715213435f903714b38f6e682f3689dab269f = $this->env->getExtension("native_profiler");
        $__internal_ea605a4a7f68dd0e7e97a0acf73715213435f903714b38f6e682f3689dab269f->enter($__internal_ea605a4a7f68dd0e7e97a0acf73715213435f903714b38f6e682f3689dab269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_ea605a4a7f68dd0e7e97a0acf73715213435f903714b38f6e682f3689dab269f->leave($__internal_ea605a4a7f68dd0e7e97a0acf73715213435f903714b38f6e682f3689dab269f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
