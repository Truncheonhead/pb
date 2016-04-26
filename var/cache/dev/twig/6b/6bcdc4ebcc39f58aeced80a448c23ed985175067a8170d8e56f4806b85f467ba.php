<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_f25d06f9ac3e10dcc0bdbe9cf1a3014b451e885629bcd929610617cf1641fcfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_8b1e5f21cc9ac6d05f9df1aa3f84d55a1512689543f9bd72430f25d1231cfc69 = $this->env->getExtension("native_profiler");
        $__internal_8b1e5f21cc9ac6d05f9df1aa3f84d55a1512689543f9bd72430f25d1231cfc69->enter($__internal_8b1e5f21cc9ac6d05f9df1aa3f84d55a1512689543f9bd72430f25d1231cfc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b1e5f21cc9ac6d05f9df1aa3f84d55a1512689543f9bd72430f25d1231cfc69->leave($__internal_8b1e5f21cc9ac6d05f9df1aa3f84d55a1512689543f9bd72430f25d1231cfc69_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1f30effa11c791f7a42cb1ebb4fd984c304b28d9c281dbcf4447f8162cca979 = $this->env->getExtension("native_profiler");
        $__internal_e1f30effa11c791f7a42cb1ebb4fd984c304b28d9c281dbcf4447f8162cca979->enter($__internal_e1f30effa11c791f7a42cb1ebb4fd984c304b28d9c281dbcf4447f8162cca979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e1f30effa11c791f7a42cb1ebb4fd984c304b28d9c281dbcf4447f8162cca979->leave($__internal_e1f30effa11c791f7a42cb1ebb4fd984c304b28d9c281dbcf4447f8162cca979_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
