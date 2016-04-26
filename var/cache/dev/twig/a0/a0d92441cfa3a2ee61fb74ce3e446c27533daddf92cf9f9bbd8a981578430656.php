<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_dcf7f0f49e7da4c21133eba4633c64cdbc23920e10ff15159bf212a3d830ccf1 extends Twig_Template
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
        $__internal_15e9005665acee6c28cb8d5ddf3b0969b3cfcee7d50101c2681ff1cd6b102d58 = $this->env->getExtension("native_profiler");
        $__internal_15e9005665acee6c28cb8d5ddf3b0969b3cfcee7d50101c2681ff1cd6b102d58->enter($__internal_15e9005665acee6c28cb8d5ddf3b0969b3cfcee7d50101c2681ff1cd6b102d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_15e9005665acee6c28cb8d5ddf3b0969b3cfcee7d50101c2681ff1cd6b102d58->leave($__internal_15e9005665acee6c28cb8d5ddf3b0969b3cfcee7d50101c2681ff1cd6b102d58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
