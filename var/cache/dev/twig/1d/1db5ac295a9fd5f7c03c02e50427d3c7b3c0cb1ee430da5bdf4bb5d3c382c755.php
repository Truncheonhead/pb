<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_89736a0a26efc8b714a1438e0bec06b69bcc802a1660a86e20f8d23ce5082437 extends Twig_Template
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
        $__internal_1a01642d889b8f35b9d4a4a01808dc1cfd98e54cf74cd7640515db66a11a0d53 = $this->env->getExtension("native_profiler");
        $__internal_1a01642d889b8f35b9d4a4a01808dc1cfd98e54cf74cd7640515db66a11a0d53->enter($__internal_1a01642d889b8f35b9d4a4a01808dc1cfd98e54cf74cd7640515db66a11a0d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_1a01642d889b8f35b9d4a4a01808dc1cfd98e54cf74cd7640515db66a11a0d53->leave($__internal_1a01642d889b8f35b9d4a4a01808dc1cfd98e54cf74cd7640515db66a11a0d53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
