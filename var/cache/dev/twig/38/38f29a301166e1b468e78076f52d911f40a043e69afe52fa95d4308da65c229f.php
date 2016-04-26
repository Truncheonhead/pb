<?php

/* :user:login.html.twig */
class __TwigTemplate_1bfdfe07c2ed8fb27399cf55db19440207854c30f0a52630d0270251666ab325 extends Twig_Template
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
        $__internal_2226ea1dfad5f0b14b87da4c1a8dc4b6c618b83ba5921142b2219439fef378f6 = $this->env->getExtension("native_profiler");
        $__internal_2226ea1dfad5f0b14b87da4c1a8dc4b6c618b83ba5921142b2219439fef378f6->enter($__internal_2226ea1dfad5f0b14b87da4c1a8dc4b6c618b83ba5921142b2219439fef378f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:login.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "
    <button onclick=\"window.location.href = '";
            // line 6
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "'\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.profile.title", array(), "FOSUserBundle"), "html", null, true);
            echo "&nbsp;&nbsp;
    <button onclick=\"window.location.href = '";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "'\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "

";
        } else {
            // line 10
            echo "
    <form action=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
        <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" title=\"E-Mail\" value=\"\" />
        <input type=\"password\" id=\"password\" title=\"Passwort\" name=\"_password\" required=\"required\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\" />

        ";
            // line 21
            echo "
        <button type=\"submit\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</button>
    </form>

";
        }
        // line 26
        echo "

";
        
        $__internal_2226ea1dfad5f0b14b87da4c1a8dc4b6c618b83ba5921142b2219439fef378f6->leave($__internal_2226ea1dfad5f0b14b87da4c1a8dc4b6c618b83ba5921142b2219439fef378f6_prof);

    }

    public function getTemplateName()
    {
        return ":user:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  64 => 22,  61 => 21,  56 => 14,  50 => 11,  47 => 10,  39 => 7,  33 => 6,  30 => 5,  28 => 4,  25 => 3,  22 => 1,);
    }
}
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% if app.user %}*/
/* */
/*     <button onclick="window.location.href = '{{ path('fos_user_profile_show') }}'">{{ 'menu.profile.title'|trans() }}&nbsp;&nbsp;*/
/*     <button onclick="window.location.href = '{{ path('fos_user_security_logout') }}'">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/* */
/* {% else %}*/
/* */
/*     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*         <input type="text" id="username" name="_username" required="required" title="E-Mail" value="" />*/
/*         <input type="password" id="password" title="Passwort" name="_password" required="required" />*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}" />*/
/* */
/*         {#*/
/*             If you want to control the URL the user*/
/*             is redirected to on success (more details below)*/
/*             <input type="hidden" name="_target_path" value="/account" />*/
/*         #}*/
/* */
/*         <button type="submit">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</button>*/
/*     </form>*/
/* */
/* {% endif %}*/
/* */
/* */
/* */
