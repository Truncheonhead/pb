<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_cc46ba85e43e98c1dec5196b000d90c30626a8038d9d885b62626a132d54c995 extends Twig_Template
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
        $__internal_9baaf512b3f8b80a6d74bbcf9cc3a20b586796d26b988fabefd4cda188cbedbc = $this->env->getExtension("native_profiler");
        $__internal_9baaf512b3f8b80a6d74bbcf9cc3a20b586796d26b988fabefd4cda188cbedbc->enter($__internal_9baaf512b3f8b80a6d74bbcf9cc3a20b586796d26b988fabefd4cda188cbedbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9baaf512b3f8b80a6d74bbcf9cc3a20b586796d26b988fabefd4cda188cbedbc->leave($__internal_9baaf512b3f8b80a6d74bbcf9cc3a20b586796d26b988fabefd4cda188cbedbc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
