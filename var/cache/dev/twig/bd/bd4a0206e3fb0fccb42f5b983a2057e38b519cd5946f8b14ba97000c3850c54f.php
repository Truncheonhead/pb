<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_af2e8df33be495fd2177286a71df2c90cd2cd266e34f869c563e6eaf8241ce2c extends Twig_Template
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
        $__internal_df2bc868e82e34f89da3201724a15f4c05b067685af90d41089e1f35eca618a5 = $this->env->getExtension("native_profiler");
        $__internal_df2bc868e82e34f89da3201724a15f4c05b067685af90d41089e1f35eca618a5->enter($__internal_df2bc868e82e34f89da3201724a15f4c05b067685af90d41089e1f35eca618a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_df2bc868e82e34f89da3201724a15f4c05b067685af90d41089e1f35eca618a5->leave($__internal_df2bc868e82e34f89da3201724a15f4c05b067685af90d41089e1f35eca618a5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9f7b8aa5a5b1675ca4c2765383890d0cb72099fe92e24ae8cc286fea6eb8d88 = $this->env->getExtension("native_profiler");
        $__internal_a9f7b8aa5a5b1675ca4c2765383890d0cb72099fe92e24ae8cc286fea6eb8d88->enter($__internal_a9f7b8aa5a5b1675ca4c2765383890d0cb72099fe92e24ae8cc286fea6eb8d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a9f7b8aa5a5b1675ca4c2765383890d0cb72099fe92e24ae8cc286fea6eb8d88->leave($__internal_a9f7b8aa5a5b1675ca4c2765383890d0cb72099fe92e24ae8cc286fea6eb8d88_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
