<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7a2b4b4049faf2d6fbd7138c2bb02501096ff39ffd8ff98a896d3166fcb3b51e extends Twig_Template
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
        $__internal_ffcc9fd250de3f0989bbeb458f271262679e95370fcb68814bdd17eec899dec6 = $this->env->getExtension("native_profiler");
        $__internal_ffcc9fd250de3f0989bbeb458f271262679e95370fcb68814bdd17eec899dec6->enter($__internal_ffcc9fd250de3f0989bbeb458f271262679e95370fcb68814bdd17eec899dec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ffcc9fd250de3f0989bbeb458f271262679e95370fcb68814bdd17eec899dec6->leave($__internal_ffcc9fd250de3f0989bbeb458f271262679e95370fcb68814bdd17eec899dec6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
