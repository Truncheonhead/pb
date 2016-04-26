<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9f5f2208c81a1b68e97ec98e255da30d9188c2ef2ed44b8fc9c7fe79a0b37c25 extends Twig_Template
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
        $__internal_dc9e773e420866413f54b9f2da3b242c3123be10466eae7e3f2f0bf5a551ab8f = $this->env->getExtension("native_profiler");
        $__internal_dc9e773e420866413f54b9f2da3b242c3123be10466eae7e3f2f0bf5a551ab8f->enter($__internal_dc9e773e420866413f54b9f2da3b242c3123be10466eae7e3f2f0bf5a551ab8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dc9e773e420866413f54b9f2da3b242c3123be10466eae7e3f2f0bf5a551ab8f->leave($__internal_dc9e773e420866413f54b9f2da3b242c3123be10466eae7e3f2f0bf5a551ab8f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
