<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_1147eb1bfcd589cb4e1dd3b748a6a42d1f6ab87f71b00c33dd8c6209a2b18207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_121238c241fac43fcda171fa2a01c39d62d23bf7709fe35d09d4184f3e1f88c8 = $this->env->getExtension("native_profiler");
        $__internal_121238c241fac43fcda171fa2a01c39d62d23bf7709fe35d09d4184f3e1f88c8->enter($__internal_121238c241fac43fcda171fa2a01c39d62d23bf7709fe35d09d4184f3e1f88c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121238c241fac43fcda171fa2a01c39d62d23bf7709fe35d09d4184f3e1f88c8->leave($__internal_121238c241fac43fcda171fa2a01c39d62d23bf7709fe35d09d4184f3e1f88c8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5cc5300f95bea1e48cb1c6c3a92b916289ca322e20198500c4f2cdd730ac6ca4 = $this->env->getExtension("native_profiler");
        $__internal_5cc5300f95bea1e48cb1c6c3a92b916289ca322e20198500c4f2cdd730ac6ca4->enter($__internal_5cc5300f95bea1e48cb1c6c3a92b916289ca322e20198500c4f2cdd730ac6ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5cc5300f95bea1e48cb1c6c3a92b916289ca322e20198500c4f2cdd730ac6ca4->leave($__internal_5cc5300f95bea1e48cb1c6c3a92b916289ca322e20198500c4f2cdd730ac6ca4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
