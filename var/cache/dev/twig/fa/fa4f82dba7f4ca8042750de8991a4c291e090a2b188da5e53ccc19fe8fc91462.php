<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_562e84f6df44a712b22bd028004fcb859c2fa0d345db1563cf1e9be20b86d357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73308c8bb44ba91efbd5ed3567a5374961780f2ff1d3f638825a643460dc6378 = $this->env->getExtension("native_profiler");
        $__internal_73308c8bb44ba91efbd5ed3567a5374961780f2ff1d3f638825a643460dc6378->enter($__internal_73308c8bb44ba91efbd5ed3567a5374961780f2ff1d3f638825a643460dc6378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73308c8bb44ba91efbd5ed3567a5374961780f2ff1d3f638825a643460dc6378->leave($__internal_73308c8bb44ba91efbd5ed3567a5374961780f2ff1d3f638825a643460dc6378_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d15b631f2e8aca613316cb5e0f91ee0eba9cc3e9471be4948589cf750d3569f5 = $this->env->getExtension("native_profiler");
        $__internal_d15b631f2e8aca613316cb5e0f91ee0eba9cc3e9471be4948589cf750d3569f5->enter($__internal_d15b631f2e8aca613316cb5e0f91ee0eba9cc3e9471be4948589cf750d3569f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d15b631f2e8aca613316cb5e0f91ee0eba9cc3e9471be4948589cf750d3569f5->leave($__internal_d15b631f2e8aca613316cb5e0f91ee0eba9cc3e9471be4948589cf750d3569f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6c523678e69bc45c1bebc479cf1f34a9fd8c59cbf6ce03fc47d8293686807ea = $this->env->getExtension("native_profiler");
        $__internal_e6c523678e69bc45c1bebc479cf1f34a9fd8c59cbf6ce03fc47d8293686807ea->enter($__internal_e6c523678e69bc45c1bebc479cf1f34a9fd8c59cbf6ce03fc47d8293686807ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e6c523678e69bc45c1bebc479cf1f34a9fd8c59cbf6ce03fc47d8293686807ea->leave($__internal_e6c523678e69bc45c1bebc479cf1f34a9fd8c59cbf6ce03fc47d8293686807ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_229e0b65c5fb7ed9fb0be550aeabddad9815ec740c862bac697d6a9507289eaa = $this->env->getExtension("native_profiler");
        $__internal_229e0b65c5fb7ed9fb0be550aeabddad9815ec740c862bac697d6a9507289eaa->enter($__internal_229e0b65c5fb7ed9fb0be550aeabddad9815ec740c862bac697d6a9507289eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_229e0b65c5fb7ed9fb0be550aeabddad9815ec740c862bac697d6a9507289eaa->leave($__internal_229e0b65c5fb7ed9fb0be550aeabddad9815ec740c862bac697d6a9507289eaa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
