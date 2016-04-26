<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_96da2fd92aebf23186d6787a3e31d25481e1877534a8ef09adb89ea158266596 extends Twig_Template
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
        $__internal_899dea0356d7e89e17554c03c272b20d871c112545d26e81f8edc63322fb6510 = $this->env->getExtension("native_profiler");
        $__internal_899dea0356d7e89e17554c03c272b20d871c112545d26e81f8edc63322fb6510->enter($__internal_899dea0356d7e89e17554c03c272b20d871c112545d26e81f8edc63322fb6510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_899dea0356d7e89e17554c03c272b20d871c112545d26e81f8edc63322fb6510->leave($__internal_899dea0356d7e89e17554c03c272b20d871c112545d26e81f8edc63322fb6510_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
