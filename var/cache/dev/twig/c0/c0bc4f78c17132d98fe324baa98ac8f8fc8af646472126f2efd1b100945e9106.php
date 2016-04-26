<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_89b90e4f17e8d239109aaf2beb9176fdf282d0a1c32555c9645676e5f781e0a9 extends Twig_Template
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
        $__internal_57a756eaf874975aec50e08758d51f37118c4bf19d43d4573f314d93f89ebebd = $this->env->getExtension("native_profiler");
        $__internal_57a756eaf874975aec50e08758d51f37118c4bf19d43d4573f314d93f89ebebd->enter($__internal_57a756eaf874975aec50e08758d51f37118c4bf19d43d4573f314d93f89ebebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_57a756eaf874975aec50e08758d51f37118c4bf19d43d4573f314d93f89ebebd->leave($__internal_57a756eaf874975aec50e08758d51f37118c4bf19d43d4573f314d93f89ebebd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
