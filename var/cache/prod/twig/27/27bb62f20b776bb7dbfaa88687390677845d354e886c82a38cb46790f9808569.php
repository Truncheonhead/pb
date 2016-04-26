<?php

/* navigation.html.twig */
class __TwigTemplate_9913d3290b5393be26898202c0bcb0cda8e4b6b4a706ae991e2cd73f06214a24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37d6d2c801db6d6bf97cd845460214c1380eaf50c17976b6fe197b405a1ba5ec = $this->env->getExtension("native_profiler");
        $__internal_37d6d2c801db6d6bf97cd845460214c1380eaf50c17976b6fe197b405a1ba5ec->enter($__internal_37d6d2c801db6d6bf97cd845460214c1380eaf50c17976b6fe197b405a1ba5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navigation.html.twig"));

        // line 1
        $this->displayBlock('navigation', $context, $blocks);
        
        $__internal_37d6d2c801db6d6bf97cd845460214c1380eaf50c17976b6fe197b405a1ba5ec->leave($__internal_37d6d2c801db6d6bf97cd845460214c1380eaf50c17976b6fe197b405a1ba5ec_prof);

    }

    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b636bb4c1555d2c8462e329bf2dc41e4528703994fc075bf901d4b26db905125 = $this->env->getExtension("native_profiler");
        $__internal_b636bb4c1555d2c8462e329bf2dc41e4528703994fc075bf901d4b26db905125->enter($__internal_b636bb4c1555d2c8462e329bf2dc41e4528703994fc075bf901d4b26db905125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 2
        echo "
<div class=\"header-container page header-background\">
    <div class=\"header-logo\"></div>
    <div class=\"navigation-container\">
        <ul class=\"navigation-list-container\">
            <li>News</li>
            <li>Options</li>
            <li>Find mate</li>
            <li>Write blog</li>
            <li class=\"navigation-left\"><a href=\"/user\">Login</a></li>
        </ul>
    </div>
</div>

";
        
        $__internal_b636bb4c1555d2c8462e329bf2dc41e4528703994fc075bf901d4b26db905125->leave($__internal_b636bb4c1555d2c8462e329bf2dc41e4528703994fc075bf901d4b26db905125_prof);

    }

    public function getTemplateName()
    {
        return "navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block navigation %}*/
/* */
/* <div class="header-container page header-background">*/
/*     <div class="header-logo"></div>*/
/*     <div class="navigation-container">*/
/*         <ul class="navigation-list-container">*/
/*             <li>News</li>*/
/*             <li>Options</li>*/
/*             <li>Find mate</li>*/
/*             <li>Write blog</li>*/
/*             <li class="navigation-left"><a href="/user">Login</a></li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
