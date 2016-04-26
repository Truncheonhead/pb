<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_859a2d880413ae2e086b3b3cd324b3d9ab99038c232cd661ce144e650209c94b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_117f3514012dac681300b070fb7fb50e18ca92a3cd4e9db88e41c7a6bc74e151 = $this->env->getExtension("native_profiler");
        $__internal_117f3514012dac681300b070fb7fb50e18ca92a3cd4e9db88e41c7a6bc74e151->enter($__internal_117f3514012dac681300b070fb7fb50e18ca92a3cd4e9db88e41c7a6bc74e151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117f3514012dac681300b070fb7fb50e18ca92a3cd4e9db88e41c7a6bc74e151->leave($__internal_117f3514012dac681300b070fb7fb50e18ca92a3cd4e9db88e41c7a6bc74e151_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_484d1f2b159783f829fbbe93e5ccb44eddd793aea01a99e6fe081d19c1c28f7e = $this->env->getExtension("native_profiler");
        $__internal_484d1f2b159783f829fbbe93e5ccb44eddd793aea01a99e6fe081d19c1c28f7e->enter($__internal_484d1f2b159783f829fbbe93e5ccb44eddd793aea01a99e6fe081d19c1c28f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_484d1f2b159783f829fbbe93e5ccb44eddd793aea01a99e6fe081d19c1c28f7e->leave($__internal_484d1f2b159783f829fbbe93e5ccb44eddd793aea01a99e6fe081d19c1c28f7e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_24e048b363a58c7f155896c6fc640a9f7c87bc2420cfb8f2e6690da6af029f2f = $this->env->getExtension("native_profiler");
        $__internal_24e048b363a58c7f155896c6fc640a9f7c87bc2420cfb8f2e6690da6af029f2f->enter($__internal_24e048b363a58c7f155896c6fc640a9f7c87bc2420cfb8f2e6690da6af029f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_24e048b363a58c7f155896c6fc640a9f7c87bc2420cfb8f2e6690da6af029f2f->leave($__internal_24e048b363a58c7f155896c6fc640a9f7c87bc2420cfb8f2e6690da6af029f2f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
