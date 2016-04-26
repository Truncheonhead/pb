<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_cf8e3ac59da3affe4a896c445fa000cb21cb41be5f9590810344a68d64e9c17d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_5f79e57ec5bae58c6bc13e974711bae106c1b2a6fefae63147b3771194efc3ff = $this->env->getExtension("native_profiler");
        $__internal_5f79e57ec5bae58c6bc13e974711bae106c1b2a6fefae63147b3771194efc3ff->enter($__internal_5f79e57ec5bae58c6bc13e974711bae106c1b2a6fefae63147b3771194efc3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f79e57ec5bae58c6bc13e974711bae106c1b2a6fefae63147b3771194efc3ff->leave($__internal_5f79e57ec5bae58c6bc13e974711bae106c1b2a6fefae63147b3771194efc3ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49998aea980d948d1bd2d0e6fed541f39da6da628b1b2c222c3da35d1429a7eb = $this->env->getExtension("native_profiler");
        $__internal_49998aea980d948d1bd2d0e6fed541f39da6da628b1b2c222c3da35d1429a7eb->enter($__internal_49998aea980d948d1bd2d0e6fed541f39da6da628b1b2c222c3da35d1429a7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_49998aea980d948d1bd2d0e6fed541f39da6da628b1b2c222c3da35d1429a7eb->leave($__internal_49998aea980d948d1bd2d0e6fed541f39da6da628b1b2c222c3da35d1429a7eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
