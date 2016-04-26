<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_09d6a91eb5069bdb7d26507640943facf44f0695c411b946f14acb0022911c6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("page.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d12034a971e2ef2ee3f64c4d81d8f4717514d359df9098bde64a2dbf4f9b126f = $this->env->getExtension("native_profiler");
        $__internal_d12034a971e2ef2ee3f64c4d81d8f4717514d359df9098bde64a2dbf4f9b126f->enter($__internal_d12034a971e2ef2ee3f64c4d81d8f4717514d359df9098bde64a2dbf4f9b126f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d12034a971e2ef2ee3f64c4d81d8f4717514d359df9098bde64a2dbf4f9b126f->leave($__internal_d12034a971e2ef2ee3f64c4d81d8f4717514d359df9098bde64a2dbf4f9b126f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfb811c8997e9757a98d34c0257eff52c0eee39aaaf2d46b5d5410b1ba1b37ad = $this->env->getExtension("native_profiler");
        $__internal_bfb811c8997e9757a98d34c0257eff52c0eee39aaaf2d46b5d5410b1ba1b37ad->enter($__internal_bfb811c8997e9757a98d34c0257eff52c0eee39aaaf2d46b5d5410b1ba1b37ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div>
        ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 10
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 12
        echo "    </div>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div>
        ";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo "    </div>

";
        
        $__internal_bfb811c8997e9757a98d34c0257eff52c0eee39aaaf2d46b5d5410b1ba1b37ad->leave($__internal_bfb811c8997e9757a98d34c0257eff52c0eee39aaaf2d46b5d5410b1ba1b37ad_prof);

    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19b8c92e83551fef654204dfb5ede44cab297f1842d95069193a0b5e60ba4ad9 = $this->env->getExtension("native_profiler");
        $__internal_19b8c92e83551fef654204dfb5ede44cab297f1842d95069193a0b5e60ba4ad9->enter($__internal_19b8c92e83551fef654204dfb5ede44cab297f1842d95069193a0b5e60ba4ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 24
        echo "        ";
        
        $__internal_19b8c92e83551fef654204dfb5ede44cab297f1842d95069193a0b5e60ba4ad9->leave($__internal_19b8c92e83551fef654204dfb5ede44cab297f1842d95069193a0b5e60ba4ad9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 24,  115 => 23,  106 => 25,  104 => 23,  100 => 21,  94 => 20,  85 => 17,  80 => 16,  75 => 15,  71 => 14,  67 => 12,  59 => 10,  52 => 8,  47 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'page.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div>*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*             <a href="{{ path('fos_user_security_logout') }}">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>*/
/*         {% else %}*/
/*             <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% for type, messages in app.session.flashBag.all %}*/
/*         {% for message in messages %}*/
/*             <div class="{{ type }}">*/
/*                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* */
/*     <div>*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
