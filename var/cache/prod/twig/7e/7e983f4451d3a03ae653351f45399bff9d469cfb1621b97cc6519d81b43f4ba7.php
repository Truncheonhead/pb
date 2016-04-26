<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_201c83e6ffffa4b7496d6ebd6587bbf073f798d4e8a25c5b68da85534e57f740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48be682f1f7e8876e519bd7a00378ebd4cfdf1acd4a397b6af44fa36abdec820 = $this->env->getExtension("native_profiler");
        $__internal_48be682f1f7e8876e519bd7a00378ebd4cfdf1acd4a397b6af44fa36abdec820->enter($__internal_48be682f1f7e8876e519bd7a00378ebd4cfdf1acd4a397b6af44fa36abdec820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48be682f1f7e8876e519bd7a00378ebd4cfdf1acd4a397b6af44fa36abdec820->leave($__internal_48be682f1f7e8876e519bd7a00378ebd4cfdf1acd4a397b6af44fa36abdec820_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52df668820ea03179e21104d995948d0328f354a8f49fb7f5220183b91087591 = $this->env->getExtension("native_profiler");
        $__internal_52df668820ea03179e21104d995948d0328f354a8f49fb7f5220183b91087591->enter($__internal_52df668820ea03179e21104d995948d0328f354a8f49fb7f5220183b91087591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_52df668820ea03179e21104d995948d0328f354a8f49fb7f5220183b91087591->leave($__internal_52df668820ea03179e21104d995948d0328f354a8f49fb7f5220183b91087591_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_65fd3f2e909d698a07096768df537b06a88d7cd98003f79929c5b5ce059f53e4 = $this->env->getExtension("native_profiler");
        $__internal_65fd3f2e909d698a07096768df537b06a88d7cd98003f79929c5b5ce059f53e4->enter($__internal_65fd3f2e909d698a07096768df537b06a88d7cd98003f79929c5b5ce059f53e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_65fd3f2e909d698a07096768df537b06a88d7cd98003f79929c5b5ce059f53e4->leave($__internal_65fd3f2e909d698a07096768df537b06a88d7cd98003f79929c5b5ce059f53e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_55e2b5b023dff6c10e929061948bd852c9c3f3e445ce376b1abe4d88d6b2238f = $this->env->getExtension("native_profiler");
        $__internal_55e2b5b023dff6c10e929061948bd852c9c3f3e445ce376b1abe4d88d6b2238f->enter($__internal_55e2b5b023dff6c10e929061948bd852c9c3f3e445ce376b1abe4d88d6b2238f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_55e2b5b023dff6c10e929061948bd852c9c3f3e445ce376b1abe4d88d6b2238f->leave($__internal_55e2b5b023dff6c10e929061948bd852c9c3f3e445ce376b1abe4d88d6b2238f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
