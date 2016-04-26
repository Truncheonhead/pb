<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_11d203c6610d3f1ad662ecc01a6b3f64899f637e672205476d16ba8b7d7133ee extends Twig_Template
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
        $__internal_aabef685c1323cd31682f33c3132d893bd60ba22569f4ed7ef1a0809a0268f94 = $this->env->getExtension("native_profiler");
        $__internal_aabef685c1323cd31682f33c3132d893bd60ba22569f4ed7ef1a0809a0268f94->enter($__internal_aabef685c1323cd31682f33c3132d893bd60ba22569f4ed7ef1a0809a0268f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aabef685c1323cd31682f33c3132d893bd60ba22569f4ed7ef1a0809a0268f94->leave($__internal_aabef685c1323cd31682f33c3132d893bd60ba22569f4ed7ef1a0809a0268f94_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
