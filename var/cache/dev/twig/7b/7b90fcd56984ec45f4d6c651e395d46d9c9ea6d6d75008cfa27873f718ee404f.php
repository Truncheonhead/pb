<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f21bb5bfba8f85e928b49efba977ae42b9be9db2413b930cabc5fe98b043017e extends Twig_Template
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
        $__internal_02c50cc4314a79daa52777fee85cd3cc992d92a6c87096aee425948003cfc69f = $this->env->getExtension("native_profiler");
        $__internal_02c50cc4314a79daa52777fee85cd3cc992d92a6c87096aee425948003cfc69f->enter($__internal_02c50cc4314a79daa52777fee85cd3cc992d92a6c87096aee425948003cfc69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_02c50cc4314a79daa52777fee85cd3cc992d92a6c87096aee425948003cfc69f->leave($__internal_02c50cc4314a79daa52777fee85cd3cc992d92a6c87096aee425948003cfc69f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
