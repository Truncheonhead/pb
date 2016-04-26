<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_f4324e9e13f9834b78d3b6888d7d75b1969711e4b776a18a1bacd8546c9a418c extends Twig_Template
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
        $__internal_67d2fce2075989fa3eac21057713ddfbdaa7fd67d2d94d05082dcd447ca53c4d = $this->env->getExtension("native_profiler");
        $__internal_67d2fce2075989fa3eac21057713ddfbdaa7fd67d2d94d05082dcd447ca53c4d->enter($__internal_67d2fce2075989fa3eac21057713ddfbdaa7fd67d2d94d05082dcd447ca53c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit"), "html", null, true);
        echo "\" />
    </div>
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_67d2fce2075989fa3eac21057713ddfbdaa7fd67d2d94d05082dcd447ca53c4d->leave($__internal_67d2fce2075989fa3eac21057713ddfbdaa7fd67d2d94d05082dcd447ca53c4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
