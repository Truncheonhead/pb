<?php

/* page.html.twig */
class __TwigTemplate_c15aefc1c61eddd33503e400e8be4db11a45f2c80b9a5ad5b943dfd10fd1584f extends Twig_Template
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
        $__internal_9ddf3b7f70599caab8ff3ca2cf85404b7de247ac82c780ccd331500989e363ad = $this->env->getExtension("native_profiler");
        $__internal_9ddf3b7f70599caab8ff3ca2cf85404b7de247ac82c780ccd331500989e363ad->enter($__internal_9ddf3b7f70599caab8ff3ca2cf85404b7de247ac82c780ccd331500989e363ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page.html.twig"));

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
        
        $__internal_9ddf3b7f70599caab8ff3ca2cf85404b7de247ac82c780ccd331500989e363ad->leave($__internal_9ddf3b7f70599caab8ff3ca2cf85404b7de247ac82c780ccd331500989e363ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf7f3bed5e11af807ffa75ea7f9eaf851f8e535e746de6d255705b82981417e8 = $this->env->getExtension("native_profiler");
        $__internal_bf7f3bed5e11af807ffa75ea7f9eaf851f8e535e746de6d255705b82981417e8->enter($__internal_bf7f3bed5e11af807ffa75ea7f9eaf851f8e535e746de6d255705b82981417e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome Pathbuddy! Go find a travelmate";
        
        $__internal_bf7f3bed5e11af807ffa75ea7f9eaf851f8e535e746de6d255705b82981417e8->leave($__internal_bf7f3bed5e11af807ffa75ea7f9eaf851f8e535e746de6d255705b82981417e8_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5670e1f9bdd39d5b2b5b8c9de62f1b69c7229b687490bc3b9daa90bdd6e0fc58 = $this->env->getExtension("native_profiler");
        $__internal_5670e1f9bdd39d5b2b5b8c9de62f1b69c7229b687490bc3b9daa90bdd6e0fc58->enter($__internal_5670e1f9bdd39d5b2b5b8c9de62f1b69c7229b687490bc3b9daa90bdd6e0fc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5670e1f9bdd39d5b2b5b8c9de62f1b69c7229b687490bc3b9daa90bdd6e0fc58->leave($__internal_5670e1f9bdd39d5b2b5b8c9de62f1b69c7229b687490bc3b9daa90bdd6e0fc58_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6aad279dc5a7f94bf6c945dd73636d8204c777484aeef73d8bfe0c14cb96a91 = $this->env->getExtension("native_profiler");
        $__internal_d6aad279dc5a7f94bf6c945dd73636d8204c777484aeef73d8bfe0c14cb96a91->enter($__internal_d6aad279dc5a7f94bf6c945dd73636d8204c777484aeef73d8bfe0c14cb96a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d6aad279dc5a7f94bf6c945dd73636d8204c777484aeef73d8bfe0c14cb96a91->leave($__internal_d6aad279dc5a7f94bf6c945dd73636d8204c777484aeef73d8bfe0c14cb96a91_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b6ade9101ad0b974ec6baebaa25eed24e3a30d4f24cf57420afb21ec381c0ff = $this->env->getExtension("native_profiler");
        $__internal_4b6ade9101ad0b974ec6baebaa25eed24e3a30d4f24cf57420afb21ec381c0ff->enter($__internal_4b6ade9101ad0b974ec6baebaa25eed24e3a30d4f24cf57420afb21ec381c0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b6ade9101ad0b974ec6baebaa25eed24e3a30d4f24cf57420afb21ec381c0ff->leave($__internal_4b6ade9101ad0b974ec6baebaa25eed24e3a30d4f24cf57420afb21ec381c0ff_prof);

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
