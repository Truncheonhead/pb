<?php

/* ::page_header.html.twig */
class __TwigTemplate_7b3a24dcbd29278ebff26531d427705ab285b8308e931adc6152452e4ce2f740 extends Twig_Template
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
        $__internal_c9696210b313f4eb0ed2417884d4cba9ac6153803f004d5c137d58db8b1f9327 = $this->env->getExtension("native_profiler");
        $__internal_c9696210b313f4eb0ed2417884d4cba9ac6153803f004d5c137d58db8b1f9327->enter($__internal_c9696210b313f4eb0ed2417884d4cba9ac6153803f004d5c137d58db8b1f9327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::page_header.html.twig"));

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
        
        $__internal_c9696210b313f4eb0ed2417884d4cba9ac6153803f004d5c137d58db8b1f9327->leave($__internal_c9696210b313f4eb0ed2417884d4cba9ac6153803f004d5c137d58db8b1f9327_prof);

    }

    public function getTemplateName()
    {
        return "::page_header.html.twig";
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
