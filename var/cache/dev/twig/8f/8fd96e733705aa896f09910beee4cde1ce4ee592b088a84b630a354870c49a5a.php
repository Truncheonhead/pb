<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_89b39869ee6261d5a0bfc0302b66e459697129f126675aaad9677ecd2bca0660 extends Twig_Template
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
        $__internal_456b3f862d8c1bf776f9203fffdcc4f44812fe8113b669823d0920bb25c9539a = $this->env->getExtension("native_profiler");
        $__internal_456b3f862d8c1bf776f9203fffdcc4f44812fe8113b669823d0920bb25c9539a->enter($__internal_456b3f862d8c1bf776f9203fffdcc4f44812fe8113b669823d0920bb25c9539a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_456b3f862d8c1bf776f9203fffdcc4f44812fe8113b669823d0920bb25c9539a->leave($__internal_456b3f862d8c1bf776f9203fffdcc4f44812fe8113b669823d0920bb25c9539a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
