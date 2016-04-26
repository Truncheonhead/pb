<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_af7d3d3b642b06d58b995bace83838bcb49473f027afcad448033a8d6cc8b8c4 extends Twig_Template
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
        $__internal_978b98d598b9c054c8b6af92cf09dc0ae1f4b86d0dfe4dfdb749afc14b627784 = $this->env->getExtension("native_profiler");
        $__internal_978b98d598b9c054c8b6af92cf09dc0ae1f4b86d0dfe4dfdb749afc14b627784->enter($__internal_978b98d598b9c054c8b6af92cf09dc0ae1f4b86d0dfe4dfdb749afc14b627784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_978b98d598b9c054c8b6af92cf09dc0ae1f4b86d0dfe4dfdb749afc14b627784->leave($__internal_978b98d598b9c054c8b6af92cf09dc0ae1f4b86d0dfe4dfdb749afc14b627784_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
