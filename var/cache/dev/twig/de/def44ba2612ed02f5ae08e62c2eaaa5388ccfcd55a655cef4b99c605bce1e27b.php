<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_af966ddfbefcaa431a7efc9c2f766561d43ebf61246d8e8bc3b2da1ff1f2d9fb extends Twig_Template
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
        $__internal_36afac17e8962132a78b334636a9d8c3b270f8a16e44a3b48cb17e6bf6430c6f = $this->env->getExtension("native_profiler");
        $__internal_36afac17e8962132a78b334636a9d8c3b270f8a16e44a3b48cb17e6bf6430c6f->enter($__internal_36afac17e8962132a78b334636a9d8c3b270f8a16e44a3b48cb17e6bf6430c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36afac17e8962132a78b334636a9d8c3b270f8a16e44a3b48cb17e6bf6430c6f->leave($__internal_36afac17e8962132a78b334636a9d8c3b270f8a16e44a3b48cb17e6bf6430c6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f9caaf6ff2d021a0ff00ac93dbc063273756188fddbab8522c78afffc138b20 = $this->env->getExtension("native_profiler");
        $__internal_9f9caaf6ff2d021a0ff00ac93dbc063273756188fddbab8522c78afffc138b20->enter($__internal_9f9caaf6ff2d021a0ff00ac93dbc063273756188fddbab8522c78afffc138b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9f9caaf6ff2d021a0ff00ac93dbc063273756188fddbab8522c78afffc138b20->leave($__internal_9f9caaf6ff2d021a0ff00ac93dbc063273756188fddbab8522c78afffc138b20_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8164ffb98038c03a3639650049f6360ec53de68ddbfa1804818596a8753e5610 = $this->env->getExtension("native_profiler");
        $__internal_8164ffb98038c03a3639650049f6360ec53de68ddbfa1804818596a8753e5610->enter($__internal_8164ffb98038c03a3639650049f6360ec53de68ddbfa1804818596a8753e5610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8164ffb98038c03a3639650049f6360ec53de68ddbfa1804818596a8753e5610->leave($__internal_8164ffb98038c03a3639650049f6360ec53de68ddbfa1804818596a8753e5610_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e930923910566217e4d3eeb5148bceaa61991db8a72e980d93ca2bbbdce6695 = $this->env->getExtension("native_profiler");
        $__internal_8e930923910566217e4d3eeb5148bceaa61991db8a72e980d93ca2bbbdce6695->enter($__internal_8e930923910566217e4d3eeb5148bceaa61991db8a72e980d93ca2bbbdce6695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8e930923910566217e4d3eeb5148bceaa61991db8a72e980d93ca2bbbdce6695->leave($__internal_8e930923910566217e4d3eeb5148bceaa61991db8a72e980d93ca2bbbdce6695_prof);

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
