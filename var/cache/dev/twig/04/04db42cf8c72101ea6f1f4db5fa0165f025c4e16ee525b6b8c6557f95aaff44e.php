<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_f5949bcf92f85dbc9b2b6bf3f7d5d3e09821f86b1619289e4b824d5a2148bd5c extends Twig_Template
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
        $__internal_8c1bfbe59d162f58e7b3d5e50879e3c557472b8c823c4fb19ffb74521c73daf2 = $this->env->getExtension("native_profiler");
        $__internal_8c1bfbe59d162f58e7b3d5e50879e3c557472b8c823c4fb19ffb74521c73daf2->enter($__internal_8c1bfbe59d162f58e7b3d5e50879e3c557472b8c823c4fb19ffb74521c73daf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_8c1bfbe59d162f58e7b3d5e50879e3c557472b8c823c4fb19ffb74521c73daf2->leave($__internal_8c1bfbe59d162f58e7b3d5e50879e3c557472b8c823c4fb19ffb74521c73daf2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
