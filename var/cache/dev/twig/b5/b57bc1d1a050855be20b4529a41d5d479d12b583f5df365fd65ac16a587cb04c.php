<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_fc7281d79ad3cc880b6b9623b112ebf73037d35b3f569337affe5ca82c5f6723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_2783c812bf69dbb559aed9ad08fa1b5df0a3f878502f73edc22f9d9a12b86385 = $this->env->getExtension("native_profiler");
        $__internal_2783c812bf69dbb559aed9ad08fa1b5df0a3f878502f73edc22f9d9a12b86385->enter($__internal_2783c812bf69dbb559aed9ad08fa1b5df0a3f878502f73edc22f9d9a12b86385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2783c812bf69dbb559aed9ad08fa1b5df0a3f878502f73edc22f9d9a12b86385->leave($__internal_2783c812bf69dbb559aed9ad08fa1b5df0a3f878502f73edc22f9d9a12b86385_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e50b75c9479a2b6ea51d60ff8afbf87eea26b30e2a034f41f7b6283b92ae9e3 = $this->env->getExtension("native_profiler");
        $__internal_0e50b75c9479a2b6ea51d60ff8afbf87eea26b30e2a034f41f7b6283b92ae9e3->enter($__internal_0e50b75c9479a2b6ea51d60ff8afbf87eea26b30e2a034f41f7b6283b92ae9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0e50b75c9479a2b6ea51d60ff8afbf87eea26b30e2a034f41f7b6283b92ae9e3->leave($__internal_0e50b75c9479a2b6ea51d60ff8afbf87eea26b30e2a034f41f7b6283b92ae9e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
