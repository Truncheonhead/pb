<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_c19fadfa19578abf948a9013c71733cdd1da0990843ee7e2bf6a613d1ee1460b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_759fa9d732d1cf3a1a9c986b307f0320713308442d1f0974d10a2883917a9313 = $this->env->getExtension("native_profiler");
        $__internal_759fa9d732d1cf3a1a9c986b307f0320713308442d1f0974d10a2883917a9313->enter($__internal_759fa9d732d1cf3a1a9c986b307f0320713308442d1f0974d10a2883917a9313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_759fa9d732d1cf3a1a9c986b307f0320713308442d1f0974d10a2883917a9313->leave($__internal_759fa9d732d1cf3a1a9c986b307f0320713308442d1f0974d10a2883917a9313_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c17a7e9810c9c5335536d8035a92af53710bd8d50862bb07e75a87f17316c77f = $this->env->getExtension("native_profiler");
        $__internal_c17a7e9810c9c5335536d8035a92af53710bd8d50862bb07e75a87f17316c77f->enter($__internal_c17a7e9810c9c5335536d8035a92af53710bd8d50862bb07e75a87f17316c77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c17a7e9810c9c5335536d8035a92af53710bd8d50862bb07e75a87f17316c77f->leave($__internal_c17a7e9810c9c5335536d8035a92af53710bd8d50862bb07e75a87f17316c77f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
