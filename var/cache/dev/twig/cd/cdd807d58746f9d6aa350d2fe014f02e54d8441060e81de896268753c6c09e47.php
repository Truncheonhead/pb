<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e4446161a21afed4730e11be2f6d7c8c631294345ebcb016bc9f38f1d0a397a8 extends Twig_Template
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
        $__internal_83099a58500f1edc06e4d01b35dc0664ccc5358541b4afcad3c1e8dc3f90b6a2 = $this->env->getExtension("native_profiler");
        $__internal_83099a58500f1edc06e4d01b35dc0664ccc5358541b4afcad3c1e8dc3f90b6a2->enter($__internal_83099a58500f1edc06e4d01b35dc0664ccc5358541b4afcad3c1e8dc3f90b6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_83099a58500f1edc06e4d01b35dc0664ccc5358541b4afcad3c1e8dc3f90b6a2->leave($__internal_83099a58500f1edc06e4d01b35dc0664ccc5358541b4afcad3c1e8dc3f90b6a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
