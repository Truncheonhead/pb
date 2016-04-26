<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0b2901db083ba052c7934534b0c7962b55f94c5de0bd2e55f37f359471ae1516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_a5466a59d7b4cc920721c9a1b207e7f7cd396af8383ad17e50fccfc0b9f842e3 = $this->env->getExtension("native_profiler");
        $__internal_a5466a59d7b4cc920721c9a1b207e7f7cd396af8383ad17e50fccfc0b9f842e3->enter($__internal_a5466a59d7b4cc920721c9a1b207e7f7cd396af8383ad17e50fccfc0b9f842e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5466a59d7b4cc920721c9a1b207e7f7cd396af8383ad17e50fccfc0b9f842e3->leave($__internal_a5466a59d7b4cc920721c9a1b207e7f7cd396af8383ad17e50fccfc0b9f842e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c75c7a53dda82d2cdc2ec8db0e33c7c419eb0004c035af623b65ba9696548de = $this->env->getExtension("native_profiler");
        $__internal_9c75c7a53dda82d2cdc2ec8db0e33c7c419eb0004c035af623b65ba9696548de->enter($__internal_9c75c7a53dda82d2cdc2ec8db0e33c7c419eb0004c035af623b65ba9696548de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9c75c7a53dda82d2cdc2ec8db0e33c7c419eb0004c035af623b65ba9696548de->leave($__internal_9c75c7a53dda82d2cdc2ec8db0e33c7c419eb0004c035af623b65ba9696548de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f32c240cd7de979ed4fd3c9a6803f91e56e917a1bbab727113365c4ee1c8860c = $this->env->getExtension("native_profiler");
        $__internal_f32c240cd7de979ed4fd3c9a6803f91e56e917a1bbab727113365c4ee1c8860c->enter($__internal_f32c240cd7de979ed4fd3c9a6803f91e56e917a1bbab727113365c4ee1c8860c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f32c240cd7de979ed4fd3c9a6803f91e56e917a1bbab727113365c4ee1c8860c->leave($__internal_f32c240cd7de979ed4fd3c9a6803f91e56e917a1bbab727113365c4ee1c8860c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_12a03120e8feceecb776293fa974e2b4592fa1a953d01342078d3f8b3c29a6f6 = $this->env->getExtension("native_profiler");
        $__internal_12a03120e8feceecb776293fa974e2b4592fa1a953d01342078d3f8b3c29a6f6->enter($__internal_12a03120e8feceecb776293fa974e2b4592fa1a953d01342078d3f8b3c29a6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_12a03120e8feceecb776293fa974e2b4592fa1a953d01342078d3f8b3c29a6f6->leave($__internal_12a03120e8feceecb776293fa974e2b4592fa1a953d01342078d3f8b3c29a6f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
