<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c79d664eca72aa6632122a4cd5cd24bbc9981e27140cfda262ad1fbc451c155f extends Twig_Template
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
        $__internal_03f00861f4c662d1d3d76acc4ef341980ef9df2e63acaa4d1c705ef2635c9e9a = $this->env->getExtension("native_profiler");
        $__internal_03f00861f4c662d1d3d76acc4ef341980ef9df2e63acaa4d1c705ef2635c9e9a->enter($__internal_03f00861f4c662d1d3d76acc4ef341980ef9df2e63acaa4d1c705ef2635c9e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_03f00861f4c662d1d3d76acc4ef341980ef9df2e63acaa4d1c705ef2635c9e9a->leave($__internal_03f00861f4c662d1d3d76acc4ef341980ef9df2e63acaa4d1c705ef2635c9e9a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
