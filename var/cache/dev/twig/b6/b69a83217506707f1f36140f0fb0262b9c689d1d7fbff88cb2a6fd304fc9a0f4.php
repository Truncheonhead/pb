<?php

/* ::page.html.twig */
class __TwigTemplate_83756e4acc407560c328c9fff14806b35446609b02f64d2ac809c0bc386d0a00 extends Twig_Template
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
        $__internal_615477445e66c04853d02518e6101de961c203bfb74ec6f45b02e06bb3cdae06 = $this->env->getExtension("native_profiler");
        $__internal_615477445e66c04853d02518e6101de961c203bfb74ec6f45b02e06bb3cdae06->enter($__internal_615477445e66c04853d02518e6101de961c203bfb74ec6f45b02e06bb3cdae06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::page.html.twig"));

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
        $this->loadTemplate("page_header.html.twig", "::page.html.twig", 17)->display($context);
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
        $this->loadTemplate("page_footer.html.twig", "::page.html.twig", 25)->display($context);
        // line 26
        echo "    </body>
</html>
";
        
        $__internal_615477445e66c04853d02518e6101de961c203bfb74ec6f45b02e06bb3cdae06->leave($__internal_615477445e66c04853d02518e6101de961c203bfb74ec6f45b02e06bb3cdae06_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5b1dcc18301c0515ec728fc3ff7aa9f693b612a3ee8e9f1f4c5c992d01c1219 = $this->env->getExtension("native_profiler");
        $__internal_d5b1dcc18301c0515ec728fc3ff7aa9f693b612a3ee8e9f1f4c5c992d01c1219->enter($__internal_d5b1dcc18301c0515ec728fc3ff7aa9f693b612a3ee8e9f1f4c5c992d01c1219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome Pathbuddy! Go find a travelmate";
        
        $__internal_d5b1dcc18301c0515ec728fc3ff7aa9f693b612a3ee8e9f1f4c5c992d01c1219->leave($__internal_d5b1dcc18301c0515ec728fc3ff7aa9f693b612a3ee8e9f1f4c5c992d01c1219_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4be8c3f603a8a31cd051b8c8b3e4bebba1ff4bb5a38d428ba41176e6ace92d77 = $this->env->getExtension("native_profiler");
        $__internal_4be8c3f603a8a31cd051b8c8b3e4bebba1ff4bb5a38d428ba41176e6ace92d77->enter($__internal_4be8c3f603a8a31cd051b8c8b3e4bebba1ff4bb5a38d428ba41176e6ace92d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4be8c3f603a8a31cd051b8c8b3e4bebba1ff4bb5a38d428ba41176e6ace92d77->leave($__internal_4be8c3f603a8a31cd051b8c8b3e4bebba1ff4bb5a38d428ba41176e6ace92d77_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6dc576384d232bf49b827e534b0a4aeab0f7d438a8c61d0f7cdb4e3f717cd7fa = $this->env->getExtension("native_profiler");
        $__internal_6dc576384d232bf49b827e534b0a4aeab0f7d438a8c61d0f7cdb4e3f717cd7fa->enter($__internal_6dc576384d232bf49b827e534b0a4aeab0f7d438a8c61d0f7cdb4e3f717cd7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6dc576384d232bf49b827e534b0a4aeab0f7d438a8c61d0f7cdb4e3f717cd7fa->leave($__internal_6dc576384d232bf49b827e534b0a4aeab0f7d438a8c61d0f7cdb4e3f717cd7fa_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_37680d9fa4cb59e599ea4321ac434235ab466bbb35116daf62dacef3d06564be = $this->env->getExtension("native_profiler");
        $__internal_37680d9fa4cb59e599ea4321ac434235ab466bbb35116daf62dacef3d06564be->enter($__internal_37680d9fa4cb59e599ea4321ac434235ab466bbb35116daf62dacef3d06564be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37680d9fa4cb59e599ea4321ac434235ab466bbb35116daf62dacef3d06564be->leave($__internal_37680d9fa4cb59e599ea4321ac434235ab466bbb35116daf62dacef3d06564be_prof);

    }

    public function getTemplateName()
    {
        return "::page.html.twig";
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
