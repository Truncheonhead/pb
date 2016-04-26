<?php

/* @FOSUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_a531692cfd6f3e5396d5038e2f83a06005797bf9be85cfed33ca3a525433267a extends Twig_Template
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
        $__internal_39aecb4c60f027d816178d2f7bc1710c9e3ae3adc925978d9f50d4a0a32b2a59 = $this->env->getExtension("native_profiler");
        $__internal_39aecb4c60f027d816178d2f7bc1710c9e3ae3adc925978d9f50d4a0a32b2a59->enter($__internal_39aecb4c60f027d816178d2f7bc1710c9e3ae3adc925978d9f50d4a0a32b2a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword_content.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit"), "html", null, true);
        echo "\" />
    </div>
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_39aecb4c60f027d816178d2f7bc1710c9e3ae3adc925978d9f50d4a0a32b2a59->leave($__internal_39aecb4c60f027d816178d2f7bc1710c9e3ae3adc925978d9f50d4a0a32b2a59_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
