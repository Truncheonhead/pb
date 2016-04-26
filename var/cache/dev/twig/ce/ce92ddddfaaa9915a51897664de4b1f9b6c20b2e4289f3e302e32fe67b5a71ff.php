<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_67a8f2d2cb1112f3354f077b030561b447f4b432b4927d9c97f2072c746a51d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1dcf96b54428ed5cdb369ff0c7b9a8a1ab78bc06d773ef2c4764215f96ede08d = $this->env->getExtension("native_profiler");
        $__internal_1dcf96b54428ed5cdb369ff0c7b9a8a1ab78bc06d773ef2c4764215f96ede08d->enter($__internal_1dcf96b54428ed5cdb369ff0c7b9a8a1ab78bc06d773ef2c4764215f96ede08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dcf96b54428ed5cdb369ff0c7b9a8a1ab78bc06d773ef2c4764215f96ede08d->leave($__internal_1dcf96b54428ed5cdb369ff0c7b9a8a1ab78bc06d773ef2c4764215f96ede08d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d43c7d0becf316a46609bc7cc1db6d0a604cb61f958b0748b1398c07f214a842 = $this->env->getExtension("native_profiler");
        $__internal_d43c7d0becf316a46609bc7cc1db6d0a604cb61f958b0748b1398c07f214a842->enter($__internal_d43c7d0becf316a46609bc7cc1db6d0a604cb61f958b0748b1398c07f214a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d43c7d0becf316a46609bc7cc1db6d0a604cb61f958b0748b1398c07f214a842->leave($__internal_d43c7d0becf316a46609bc7cc1db6d0a604cb61f958b0748b1398c07f214a842_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e8c69d15e6026b3809ab9c8d31502b6453a4819ec1e198fe94e551be7a206e0 = $this->env->getExtension("native_profiler");
        $__internal_5e8c69d15e6026b3809ab9c8d31502b6453a4819ec1e198fe94e551be7a206e0->enter($__internal_5e8c69d15e6026b3809ab9c8d31502b6453a4819ec1e198fe94e551be7a206e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e8c69d15e6026b3809ab9c8d31502b6453a4819ec1e198fe94e551be7a206e0->leave($__internal_5e8c69d15e6026b3809ab9c8d31502b6453a4819ec1e198fe94e551be7a206e0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0d3932b3d122ef06d168b2dc01e584934867cfc1d9adec68e896201d0b5ddc4 = $this->env->getExtension("native_profiler");
        $__internal_d0d3932b3d122ef06d168b2dc01e584934867cfc1d9adec68e896201d0b5ddc4->enter($__internal_d0d3932b3d122ef06d168b2dc01e584934867cfc1d9adec68e896201d0b5ddc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d0d3932b3d122ef06d168b2dc01e584934867cfc1d9adec68e896201d0b5ddc4->leave($__internal_d0d3932b3d122ef06d168b2dc01e584934867cfc1d9adec68e896201d0b5ddc4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
