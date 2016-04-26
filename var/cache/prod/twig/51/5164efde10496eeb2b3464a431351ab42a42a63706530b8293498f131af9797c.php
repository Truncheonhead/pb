<?php

/* page_header.html.twig */
class __TwigTemplate_2f3626d36d2758199749c3e793e6cf8c6808e48df91686d51d9f073c9d650a1e extends Twig_Template
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
        $__internal_773dbaafddadff0267d15f3d92714e92417a8e946ac41cceec60d0083f960435 = $this->env->getExtension("native_profiler");
        $__internal_773dbaafddadff0267d15f3d92714e92417a8e946ac41cceec60d0083f960435->enter($__internal_773dbaafddadff0267d15f3d92714e92417a8e946ac41cceec60d0083f960435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page_header.html.twig"));

        // line 1
        echo "<div class=\"page-header-container-outer\">
    <div class=\"page-header-container page-header-background\">
        <div class=\"page-header-logo\"></div>
        <div class=\"page-navigation-container-outer\">
            <div class=\"page-navigation-container page\">
                <div class=\"navigation-login-right\">";
        // line 6
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
        </div>
    </div>
</div>";
        
        $__internal_773dbaafddadff0267d15f3d92714e92417a8e946ac41cceec60d0083f960435->leave($__internal_773dbaafddadff0267d15f3d92714e92417a8e946ac41cceec60d0083f960435_prof);

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
        return array (  29 => 6,  22 => 1,);
    }
}
/* <div class="page-header-container-outer">*/
/*     <div class="page-header-container page-header-background">*/
/*         <div class="page-header-logo"></div>*/
/*         <div class="page-navigation-container-outer">*/
/*             <div class="page-navigation-container page">*/
/*                 <div class="navigation-login-right">{{ include('user/login.html.twig') }}</div>*/
/*                 <ul class="navigation-list-container">*/
/*                     <li><a href="/" title="Home" >Home</a></li>*/
/*                     <li>App News</li>*/
/*                     <li>Options</li>*/
/*                     <li>Find mate</li>*/
/*                     <li>Write blog</li>*/
/*                     <!--li class="navigation-left"><a href="/user">Login</a></li-->*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
