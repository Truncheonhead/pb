<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_0e2695e11b05e9f5266395356068ca584989fc6d9b73d2dabd8739d33d746be7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_7a644b3dfd477b3ccb063ed8d635022b2f9510956e002046867462932048c967 = $this->env->getExtension("native_profiler");
        $__internal_7a644b3dfd477b3ccb063ed8d635022b2f9510956e002046867462932048c967->enter($__internal_7a644b3dfd477b3ccb063ed8d635022b2f9510956e002046867462932048c967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a644b3dfd477b3ccb063ed8d635022b2f9510956e002046867462932048c967->leave($__internal_7a644b3dfd477b3ccb063ed8d635022b2f9510956e002046867462932048c967_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b00c31483f90bf13d168c7a003866dd31c4949dfdb8bded194dfe2fb3446647 = $this->env->getExtension("native_profiler");
        $__internal_5b00c31483f90bf13d168c7a003866dd31c4949dfdb8bded194dfe2fb3446647->enter($__internal_5b00c31483f90bf13d168c7a003866dd31c4949dfdb8bded194dfe2fb3446647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5b00c31483f90bf13d168c7a003866dd31c4949dfdb8bded194dfe2fb3446647->leave($__internal_5b00c31483f90bf13d168c7a003866dd31c4949dfdb8bded194dfe2fb3446647_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
