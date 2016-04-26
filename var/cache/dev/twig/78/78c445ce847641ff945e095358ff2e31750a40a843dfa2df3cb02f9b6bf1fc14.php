<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_9c72dbc79b032acd40bc08f84ffd19b14e89620fc503e63938b4b678ad92f489 extends Twig_Template
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
        $__internal_9c2c137849399f5c95c588140f6f0ab2686e19e11698e5351af498bdea0138e4 = $this->env->getExtension("native_profiler");
        $__internal_9c2c137849399f5c95c588140f6f0ab2686e19e11698e5351af498bdea0138e4->enter($__internal_9c2c137849399f5c95c588140f6f0ab2686e19e11698e5351af498bdea0138e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

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
        
        $__internal_9c2c137849399f5c95c588140f6f0ab2686e19e11698e5351af498bdea0138e4->leave($__internal_9c2c137849399f5c95c588140f6f0ab2686e19e11698e5351af498bdea0138e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
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
