<?php

/* default/index.html.twig */
class __TwigTemplate_dcef62e049c35a889bcf66e360b554306a7ebe15247e690acce0c6a7595a34e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("page.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f44dfa142071cbe8ec357079acba8ba8e032b1fdb196ededc91aaabd3bf29f92 = $this->env->getExtension("native_profiler");
        $__internal_f44dfa142071cbe8ec357079acba8ba8e032b1fdb196ededc91aaabd3bf29f92->enter($__internal_f44dfa142071cbe8ec357079acba8ba8e032b1fdb196ededc91aaabd3bf29f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f44dfa142071cbe8ec357079acba8ba8e032b1fdb196ededc91aaabd3bf29f92->leave($__internal_f44dfa142071cbe8ec357079acba8ba8e032b1fdb196ededc91aaabd3bf29f92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbeb69673aa2b161c9c67917ae806941ab116d2059df1b3cc773486077bd7e5d = $this->env->getExtension("native_profiler");
        $__internal_fbeb69673aa2b161c9c67917ae806941ab116d2059df1b3cc773486077bd7e5d->enter($__internal_fbeb69673aa2b161c9c67917ae806941ab116d2059df1b3cc773486077bd7e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<style>

    .inner-content-container {
        display: inline-block;
        border: solid thin gold;
        vertical-align: top;
    }

    .inner-content {
        margin: 5px;
    }

    .half {
        width: 49.7%;
    }

    .third {
        width: 33%;
    }

    .twothird {
        width: 66.4%;
    }

    </style>

    <div class=\"page_divided\">
        <div class=\"inner-content-container third\">
            <div class=\"inner-content\">
            Lorem upsum dolor sit amet. Lorem upsum dolor sit amet. Lorem upsum dolor sit amet.
            Lorem upsum dolor sit amet. Lorem upsum dolor sit amet. Lorem upsum dolor sit amet.
            Lorem upsum dolor sit amet. Lorem upsum dolor sit amet. Lorem upsum dolor sit amet.
            Lorem upsum dolor sit amet. Lorem upsum dolor sit amet. Lorem upsum dolor sit amet.
            Lorem upsum dolor sit amet. Lorem upsum dolor sit amet. Lorem upsum dolor sit amet.
            </div>
        </div>
        <div class=\"inner-content-container twothird\">
            <div class=\"inner-content\">This will be the video area
        </div></div>
    </div>

";
        
        $__internal_fbeb69673aa2b161c9c67917ae806941ab116d2059df1b3cc773486077bd7e5d->leave($__internal_fbeb69673aa2b161c9c67917ae806941ab116d2059df1b3cc773486077bd7e5d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
/* {% extends 'page.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <style>*/
/* */
/*     .inner-content-container {*/
/*         display: inline-block;*/
/*         border: solid thin gold;*/
/*         vertical-align: top;*/
/*     }*/
/* */
/*     .inner-content {*/
/*         margin: 5px;*/
/*     }*/
/* */
/*     .half {*/
/*         width: 49.7%;*/
/*     }*/
/* */
/*     .third {*/
/*         width: 33%;*/
/*     }*/
/* */
/*     .twothird {*/
/*         width: 66.4%;*/
/*     }*/
/* */
/*     </style>*/
/* */
/*     <div class="page_divided">*/
/*         <div class="inner-content-container third">*/
/*             <div class="inner-content">*/
/*             Lorem upsum dolor sit amet. Lorem upsum dolor sit amet. Lorem upsum dolor sit amet.*/
/*             Lorem upsum dolor sit amet. Lorem upsum dolor sit amet. Lorem upsum dolor sit amet.*/
/*             Lorem upsum dolor sit amet. Lorem upsum dolor sit amet. Lorem upsum dolor sit amet.*/
/*             Lorem upsum dolor sit amet. Lorem upsum dolor sit amet. Lorem upsum dolor sit amet.*/
/*             Lorem upsum dolor sit amet. Lorem upsum dolor sit amet. Lorem upsum dolor sit amet.*/
/*             </div>*/
/*         </div>*/
/*         <div class="inner-content-container twothird">*/
/*             <div class="inner-content">This will be the video area*/
/*         </div></div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
