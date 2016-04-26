<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8af28e152e350c66334f03356f02090b71af69618004872a65fe766ff26a3b66 extends Twig_Template
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
        $__internal_2b7f1d1e75bc19a75dac49f82dfb2d82375f5056be7e82b599f7830324809dfb = $this->env->getExtension("native_profiler");
        $__internal_2b7f1d1e75bc19a75dac49f82dfb2d82375f5056be7e82b599f7830324809dfb->enter($__internal_2b7f1d1e75bc19a75dac49f82dfb2d82375f5056be7e82b599f7830324809dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2b7f1d1e75bc19a75dac49f82dfb2d82375f5056be7e82b599f7830324809dfb->leave($__internal_2b7f1d1e75bc19a75dac49f82dfb2d82375f5056be7e82b599f7830324809dfb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
