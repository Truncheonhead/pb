<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_bc9b02753624d75b674501dc96d6c778336b949c678e2ac8ebb72f88c57d703e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("page.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_2c02b213e37b0e790f585f79d53b99df6ee40a590bbed041dc0d89a777d7ce46 = $this->env->getExtension("native_profiler");
        $__internal_2c02b213e37b0e790f585f79d53b99df6ee40a590bbed041dc0d89a777d7ce46->enter($__internal_2c02b213e37b0e790f585f79d53b99df6ee40a590bbed041dc0d89a777d7ce46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c02b213e37b0e790f585f79d53b99df6ee40a590bbed041dc0d89a777d7ce46->leave($__internal_2c02b213e37b0e790f585f79d53b99df6ee40a590bbed041dc0d89a777d7ce46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_751eecfb5deb39c87a9b784252cb39d152e799785e9bc111597f61c2ebc784a1 = $this->env->getExtension("native_profiler");
        $__internal_751eecfb5deb39c87a9b784252cb39d152e799785e9bc111597f61c2ebc784a1->enter($__internal_751eecfb5deb39c87a9b784252cb39d152e799785e9bc111597f61c2ebc784a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_751eecfb5deb39c87a9b784252cb39d152e799785e9bc111597f61c2ebc784a1->leave($__internal_751eecfb5deb39c87a9b784252cb39d152e799785e9bc111597f61c2ebc784a1_prof);

    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ec298c90a9d820bfb5632b1040234f013c78460b1ff8d2287ff325ff5150cd5 = $this->env->getExtension("native_profiler");
        $__internal_4ec298c90a9d820bfb5632b1040234f013c78460b1ff8d2287ff325ff5150cd5->enter($__internal_4ec298c90a9d820bfb5632b1040234f013c78460b1ff8d2287ff325ff5150cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 24
        echo "        ";
        
        $__internal_4ec298c90a9d820bfb5632b1040234f013c78460b1ff8d2287ff325ff5150cd5->leave($__internal_4ec298c90a9d820bfb5632b1040234f013c78460b1ff8d2287ff325ff5150cd5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
