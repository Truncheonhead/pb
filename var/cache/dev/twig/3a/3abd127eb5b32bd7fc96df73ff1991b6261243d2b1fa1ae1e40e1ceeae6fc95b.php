<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_b66ab4a3c0d3e42c7e4fbb5df42227da5fab71e75ba74232f5ef9a88d9f2fe7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88ca5c3ad9a9c6a851023e5530bad87425ae13e53265fc6044bc4e44cc6dd3a6 = $this->env->getExtension("native_profiler");
        $__internal_88ca5c3ad9a9c6a851023e5530bad87425ae13e53265fc6044bc4e44cc6dd3a6->enter($__internal_88ca5c3ad9a9c6a851023e5530bad87425ae13e53265fc6044bc4e44cc6dd3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_88ca5c3ad9a9c6a851023e5530bad87425ae13e53265fc6044bc4e44cc6dd3a6->leave($__internal_88ca5c3ad9a9c6a851023e5530bad87425ae13e53265fc6044bc4e44cc6dd3a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
