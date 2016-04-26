<?php

/* user/login.html.twig */
class __TwigTemplate_8ed49fce350ccf9bc87ada842549f234121664b47ddb854beb9a318934aae084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("page.html.twig", "user/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93f50eec5d518f0d46cf02fef8eb6854a0863b07e1b36d917de1bd0b1b950038 = $this->env->getExtension("native_profiler");
        $__internal_93f50eec5d518f0d46cf02fef8eb6854a0863b07e1b36d917de1bd0b1b950038->enter($__internal_93f50eec5d518f0d46cf02fef8eb6854a0863b07e1b36d917de1bd0b1b950038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93f50eec5d518f0d46cf02fef8eb6854a0863b07e1b36d917de1bd0b1b950038->leave($__internal_93f50eec5d518f0d46cf02fef8eb6854a0863b07e1b36d917de1bd0b1b950038_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d168cb8a73cfa2915edc1ad74c4aa26938234e3a9893da3c75f1e5e602dd8773 = $this->env->getExtension("native_profiler");
        $__internal_d168cb8a73cfa2915edc1ad74c4aa26938234e3a9893da3c75f1e5e602dd8773->enter($__internal_d168cb8a73cfa2915edc1ad74c4aa26938234e3a9893da3c75f1e5e602dd8773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    Users are welcome here

";
        
        $__internal_d168cb8a73cfa2915edc1ad74c4aa26938234e3a9893da3c75f1e5e602dd8773->leave($__internal_d168cb8a73cfa2915edc1ad74c4aa26938234e3a9893da3c75f1e5e602dd8773_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
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
/* {% extends 'page.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     Users are welcome here*/
/* */
/* {% endblock %}*/
/* */
/* */
