<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5999a1307d4632a151da6c60b69610da09ab196795b27fbc23a590f87bfe0e67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_534430c44f4652d92d0f28cfa0cbdfc7015199f66b995769c725166d503fe02b = $this->env->getExtension("native_profiler");
        $__internal_534430c44f4652d92d0f28cfa0cbdfc7015199f66b995769c725166d503fe02b->enter($__internal_534430c44f4652d92d0f28cfa0cbdfc7015199f66b995769c725166d503fe02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_534430c44f4652d92d0f28cfa0cbdfc7015199f66b995769c725166d503fe02b->leave($__internal_534430c44f4652d92d0f28cfa0cbdfc7015199f66b995769c725166d503fe02b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_745ae127049a39d1ad7c11085eab66c90686791b82e5f5f95a8d2e850bbda37f = $this->env->getExtension("native_profiler");
        $__internal_745ae127049a39d1ad7c11085eab66c90686791b82e5f5f95a8d2e850bbda37f->enter($__internal_745ae127049a39d1ad7c11085eab66c90686791b82e5f5f95a8d2e850bbda37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_745ae127049a39d1ad7c11085eab66c90686791b82e5f5f95a8d2e850bbda37f->leave($__internal_745ae127049a39d1ad7c11085eab66c90686791b82e5f5f95a8d2e850bbda37f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
