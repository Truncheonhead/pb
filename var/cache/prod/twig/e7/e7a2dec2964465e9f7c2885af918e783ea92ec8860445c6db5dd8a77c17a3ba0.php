<?php

/* user/login.html.twig */
class __TwigTemplate_6953d49f7386d716a5e2cbf1e3a5cd8337c8344ba78238c0b0d6200404bf2ee0 extends Twig_Template
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
        $__internal_0355f4b3a27493fe467f6bd01b130315e1dd1f7c937d8687b0b78d9d670c31e0 = $this->env->getExtension("native_profiler");
        $__internal_0355f4b3a27493fe467f6bd01b130315e1dd1f7c937d8687b0b78d9d670c31e0->enter($__internal_0355f4b3a27493fe467f6bd01b130315e1dd1f7c937d8687b0b78d9d670c31e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "
    <button onclick=\"window.location.href = '";
            // line 3
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "'\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.profile.title"), "html", null, true);
            echo "&nbsp;&nbsp;
    <button onclick=\"window.location.href = '";
            // line 4
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "'\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "

";
        } else {
            // line 7
            echo "
    <form action=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
        <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" title=\"E-Mail\" value=\"\" />
        <input type=\"password\" id=\"password\" title=\"Passwort\" name=\"_password\" required=\"required\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\" />

        ";
            // line 18
            echo "
        <button type=\"submit\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</button>
    </form>

";
        }
        // line 23
        echo "

";
        
        $__internal_0355f4b3a27493fe467f6bd01b130315e1dd1f7c937d8687b0b78d9d670c31e0->leave($__internal_0355f4b3a27493fe467f6bd01b130315e1dd1f7c937d8687b0b78d9d670c31e0_prof);

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
        return array (  65 => 23,  58 => 19,  55 => 18,  50 => 11,  44 => 8,  41 => 7,  33 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
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
