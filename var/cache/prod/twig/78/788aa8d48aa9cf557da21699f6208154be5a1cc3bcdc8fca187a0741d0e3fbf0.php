<?php

/* page.html.twig */
class __TwigTemplate_2af3b03289551b6167b270a7aabfc63e9fc0946927990805a5af3773db3dce14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc687bca3a875311be8eed96cebd5f4831f795e0c7425157a952e6e654d7b704 = $this->env->getExtension("native_profiler");
        $__internal_dc687bca3a875311be8eed96cebd5f4831f795e0c7425157a952e6e654d7b704->enter($__internal_dc687bca3a875311be8eed96cebd5f4831f795e0c7425157a952e6e654d7b704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cefa6e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cefa6e7_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/cefa6e7_part_1_base_1.css");
            // line 9
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "cefa6e7_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cefa6e7_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/cefa6e7_part_1_navigation_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "cefa6e7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cefa6e7") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/cefa6e7.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "
    </head>
    <body>
        ";
        // line 17
        $this->loadTemplate("page_header.html.twig", "page.html.twig", 17)->display($context);
        // line 18
        echo "
        <div class=\"page-body-container page\">
            <div class=\"page-inner-body-container\">
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "            </div>
        </div>

        ";
        // line 25
        $this->loadTemplate("page_footer.html.twig", "page.html.twig", 25)->display($context);
        // line 26
        echo "    </body>
</html>
";
        
        $__internal_dc687bca3a875311be8eed96cebd5f4831f795e0c7425157a952e6e654d7b704->leave($__internal_dc687bca3a875311be8eed96cebd5f4831f795e0c7425157a952e6e654d7b704_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f4264a1ef59fef52860119bff6eff4283fc737317fc59f2ec71c9cb02b2756a = $this->env->getExtension("native_profiler");
        $__internal_8f4264a1ef59fef52860119bff6eff4283fc737317fc59f2ec71c9cb02b2756a->enter($__internal_8f4264a1ef59fef52860119bff6eff4283fc737317fc59f2ec71c9cb02b2756a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome Pathbuddy! Go find a travelmate";
        
        $__internal_8f4264a1ef59fef52860119bff6eff4283fc737317fc59f2ec71c9cb02b2756a->leave($__internal_8f4264a1ef59fef52860119bff6eff4283fc737317fc59f2ec71c9cb02b2756a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26e6dae9dbdb6cc91df9db2e2631651a70e166249982d5b972806e68cec0f985 = $this->env->getExtension("native_profiler");
        $__internal_26e6dae9dbdb6cc91df9db2e2631651a70e166249982d5b972806e68cec0f985->enter($__internal_26e6dae9dbdb6cc91df9db2e2631651a70e166249982d5b972806e68cec0f985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_26e6dae9dbdb6cc91df9db2e2631651a70e166249982d5b972806e68cec0f985->leave($__internal_26e6dae9dbdb6cc91df9db2e2631651a70e166249982d5b972806e68cec0f985_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5567f73bc96697e82dc8e5a76463eb5d1c2d0d4f40f2764fe2a059985ce8f4d7 = $this->env->getExtension("native_profiler");
        $__internal_5567f73bc96697e82dc8e5a76463eb5d1c2d0d4f40f2764fe2a059985ce8f4d7->enter($__internal_5567f73bc96697e82dc8e5a76463eb5d1c2d0d4f40f2764fe2a059985ce8f4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5567f73bc96697e82dc8e5a76463eb5d1c2d0d4f40f2764fe2a059985ce8f4d7->leave($__internal_5567f73bc96697e82dc8e5a76463eb5d1c2d0d4f40f2764fe2a059985ce8f4d7_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6a82b037c1a00126c760e407332976f46b2cc50bc80e0e4e286519b2b8e2b5b = $this->env->getExtension("native_profiler");
        $__internal_e6a82b037c1a00126c760e407332976f46b2cc50bc80e0e4e286519b2b8e2b5b->enter($__internal_e6a82b037c1a00126c760e407332976f46b2cc50bc80e0e4e286519b2b8e2b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e6a82b037c1a00126c760e407332976f46b2cc50bc80e0e4e286519b2b8e2b5b->leave($__internal_e6a82b037c1a00126c760e407332976f46b2cc50bc80e0e4e286519b2b8e2b5b_prof);

    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 21,  126 => 13,  115 => 12,  103 => 5,  94 => 26,  92 => 25,  87 => 22,  85 => 21,  80 => 18,  78 => 17,  73 => 14,  70 => 13,  68 => 12,  65 => 11,  45 => 9,  41 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome Pathbuddy! Go find a travelmate{% endblock %}</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         {% stylesheets 'bundles/app/css/base/*' filter='cssrewrite' %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/* */
/*         {% block stylesheets %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/* */
/*     </head>*/
/*     <body>*/
/*         {% include 'page_header.html.twig' %}*/
/* */
/*         <div class="page-body-container page">*/
/*             <div class="page-inner-body-container">*/
/*         {% block body %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% include 'page_footer.html.twig' %}*/
/*     </body>*/
/* </html>*/
/* */
