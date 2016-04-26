<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1e1b1dbd7a36ed9d668e9aae210cee6a15cf732f4c8e7b2f9728accf65aa41a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_16fcdc68a7f27832acb9c861555c6a22a1afae5030dac84f8721133bb134d631 = $this->env->getExtension("native_profiler");
        $__internal_16fcdc68a7f27832acb9c861555c6a22a1afae5030dac84f8721133bb134d631->enter($__internal_16fcdc68a7f27832acb9c861555c6a22a1afae5030dac84f8721133bb134d631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16fcdc68a7f27832acb9c861555c6a22a1afae5030dac84f8721133bb134d631->leave($__internal_16fcdc68a7f27832acb9c861555c6a22a1afae5030dac84f8721133bb134d631_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8344a32c319d2ed3f2f9f75df725eee42248bbe1f30e21c0f843fbb20c1bdae0 = $this->env->getExtension("native_profiler");
        $__internal_8344a32c319d2ed3f2f9f75df725eee42248bbe1f30e21c0f843fbb20c1bdae0->enter($__internal_8344a32c319d2ed3f2f9f75df725eee42248bbe1f30e21c0f843fbb20c1bdae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8344a32c319d2ed3f2f9f75df725eee42248bbe1f30e21c0f843fbb20c1bdae0->leave($__internal_8344a32c319d2ed3f2f9f75df725eee42248bbe1f30e21c0f843fbb20c1bdae0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2869425f0124ff17a0a3099c91e7479c484ae2698c8e08cc5a70a2028e34681 = $this->env->getExtension("native_profiler");
        $__internal_d2869425f0124ff17a0a3099c91e7479c484ae2698c8e08cc5a70a2028e34681->enter($__internal_d2869425f0124ff17a0a3099c91e7479c484ae2698c8e08cc5a70a2028e34681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d2869425f0124ff17a0a3099c91e7479c484ae2698c8e08cc5a70a2028e34681->leave($__internal_d2869425f0124ff17a0a3099c91e7479c484ae2698c8e08cc5a70a2028e34681_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b7ed4485298c5f595a6be337a30514ed5af7df8298171d1c1ee0778410eaf62 = $this->env->getExtension("native_profiler");
        $__internal_6b7ed4485298c5f595a6be337a30514ed5af7df8298171d1c1ee0778410eaf62->enter($__internal_6b7ed4485298c5f595a6be337a30514ed5af7df8298171d1c1ee0778410eaf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6b7ed4485298c5f595a6be337a30514ed5af7df8298171d1c1ee0778410eaf62->leave($__internal_6b7ed4485298c5f595a6be337a30514ed5af7df8298171d1c1ee0778410eaf62_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
