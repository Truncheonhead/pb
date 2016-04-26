<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bafeed7bdcf8fc6a23958980585436b3abfd8b5cbf380217c79bd2edc72d9c7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_9d31288baf14b6a92c739756d5f032c4a0c587263e6e12320cdb9cf90303c48a = $this->env->getExtension("native_profiler");
        $__internal_9d31288baf14b6a92c739756d5f032c4a0c587263e6e12320cdb9cf90303c48a->enter($__internal_9d31288baf14b6a92c739756d5f032c4a0c587263e6e12320cdb9cf90303c48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d31288baf14b6a92c739756d5f032c4a0c587263e6e12320cdb9cf90303c48a->leave($__internal_9d31288baf14b6a92c739756d5f032c4a0c587263e6e12320cdb9cf90303c48a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e49ab2b44b4422c447ef40a8dd618fe0f9f783e512c62eae01d539b97e3b16c = $this->env->getExtension("native_profiler");
        $__internal_3e49ab2b44b4422c447ef40a8dd618fe0f9f783e512c62eae01d539b97e3b16c->enter($__internal_3e49ab2b44b4422c447ef40a8dd618fe0f9f783e512c62eae01d539b97e3b16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3e49ab2b44b4422c447ef40a8dd618fe0f9f783e512c62eae01d539b97e3b16c->leave($__internal_3e49ab2b44b4422c447ef40a8dd618fe0f9f783e512c62eae01d539b97e3b16c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_290a2a784d10ad4be8ee622ed202e7a777f6b6f4e08e1c0d26fabe5eeb55b711 = $this->env->getExtension("native_profiler");
        $__internal_290a2a784d10ad4be8ee622ed202e7a777f6b6f4e08e1c0d26fabe5eeb55b711->enter($__internal_290a2a784d10ad4be8ee622ed202e7a777f6b6f4e08e1c0d26fabe5eeb55b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_290a2a784d10ad4be8ee622ed202e7a777f6b6f4e08e1c0d26fabe5eeb55b711->leave($__internal_290a2a784d10ad4be8ee622ed202e7a777f6b6f4e08e1c0d26fabe5eeb55b711_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
