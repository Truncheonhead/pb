<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e649e3eb18db5361a8e40b51f6fe31a14f8870475470b5f29e1c883192d1506f extends Twig_Template
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
        $__internal_449e18988b5bfa16e950dedbad2b39d26acf85f5475495fd570f33ee9f89815f = $this->env->getExtension("native_profiler");
        $__internal_449e18988b5bfa16e950dedbad2b39d26acf85f5475495fd570f33ee9f89815f->enter($__internal_449e18988b5bfa16e950dedbad2b39d26acf85f5475495fd570f33ee9f89815f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_449e18988b5bfa16e950dedbad2b39d26acf85f5475495fd570f33ee9f89815f->leave($__internal_449e18988b5bfa16e950dedbad2b39d26acf85f5475495fd570f33ee9f89815f_prof);

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
