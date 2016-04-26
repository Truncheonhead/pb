<?php

/* page_header.html.twig */
class __TwigTemplate_9038e1a4eed22d9392dc3e95792d0783bda03ee9e93a6d629140ac9a7c21b17b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0e4aa9ff35434f3f6fdb0895f6c2923504c83c0498dd9675e609e7ca6b94141 = $this->env->getExtension("native_profiler");
        $__internal_d0e4aa9ff35434f3f6fdb0895f6c2923504c83c0498dd9675e609e7ca6b94141->enter($__internal_d0e4aa9ff35434f3f6fdb0895f6c2923504c83c0498dd9675e609e7ca6b94141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page_header.html.twig"));

        // line 1
        echo "<div class=\"page-header-container page page-header-background\">
    <div class=\"page-header-logo\"></div>
    <div class=\"page-navigation-container\">
        <div class=\"navigation-login-right\">";
        // line 4
        echo twig_include($this->env, $context, "user/login.html.twig");
        echo "</div>
        <ul class=\"navigation-list-container\">
            <li><a href=\"/\" title=\"Home\" >Home</a></li>
            <li>App News</li>
            <li>Options</li>
            <li>Find mate</li>
            <li>Write blog</li>
            <!--li class=\"navigation-left\"><a href=\"/user\">Login</a></li-->
        </ul>
    </div>
</div>";
        
        $__internal_d0e4aa9ff35434f3f6fdb0895f6c2923504c83c0498dd9675e609e7ca6b94141->leave($__internal_d0e4aa9ff35434f3f6fdb0895f6c2923504c83c0498dd9675e609e7ca6b94141_prof);

    }

    public function getTemplateName()
    {
        return "page_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <div class="page-header-container page page-header-background">*/
/*     <div class="page-header-logo"></div>*/
/*     <div class="page-navigation-container">*/
/*         <div class="navigation-login-right">{{ include('user/login.html.twig') }}</div>*/
/*         <ul class="navigation-list-container">*/
/*             <li><a href="/" title="Home" >Home</a></li>*/
/*             <li>App News</li>*/
/*             <li>Options</li>*/
/*             <li>Find mate</li>*/
/*             <li>Write blog</li>*/
/*             <!--li class="navigation-left"><a href="/user">Login</a></li-->*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
