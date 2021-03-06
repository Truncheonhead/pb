<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8caf106e9e2b8988fd6aa8747891eb86e45233d62f7a38718937be0778eac8e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1d6dffb4fa15f3422662254b56a287f96ddcb8efabc53d23e72fb3eb363c840 = $this->env->getExtension("native_profiler");
        $__internal_e1d6dffb4fa15f3422662254b56a287f96ddcb8efabc53d23e72fb3eb363c840->enter($__internal_e1d6dffb4fa15f3422662254b56a287f96ddcb8efabc53d23e72fb3eb363c840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e1d6dffb4fa15f3422662254b56a287f96ddcb8efabc53d23e72fb3eb363c840->leave($__internal_e1d6dffb4fa15f3422662254b56a287f96ddcb8efabc53d23e72fb3eb363c840_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ed3ee745f099712ed0a071c0c79513f5e6c2e97839f4c95b7d718ba2b4d8cfaf = $this->env->getExtension("native_profiler");
        $__internal_ed3ee745f099712ed0a071c0c79513f5e6c2e97839f4c95b7d718ba2b4d8cfaf->enter($__internal_ed3ee745f099712ed0a071c0c79513f5e6c2e97839f4c95b7d718ba2b4d8cfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ed3ee745f099712ed0a071c0c79513f5e6c2e97839f4c95b7d718ba2b4d8cfaf->leave($__internal_ed3ee745f099712ed0a071c0c79513f5e6c2e97839f4c95b7d718ba2b4d8cfaf_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a49abc928ed3a14e5fbccce85586ade6773558734a3910f522d4041902faf9d5 = $this->env->getExtension("native_profiler");
        $__internal_a49abc928ed3a14e5fbccce85586ade6773558734a3910f522d4041902faf9d5->enter($__internal_a49abc928ed3a14e5fbccce85586ade6773558734a3910f522d4041902faf9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a49abc928ed3a14e5fbccce85586ade6773558734a3910f522d4041902faf9d5->leave($__internal_a49abc928ed3a14e5fbccce85586ade6773558734a3910f522d4041902faf9d5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2ba1ab3391d1929bf71170d83720ae998ae6d179bb6037955b72a6ee9fef7e50 = $this->env->getExtension("native_profiler");
        $__internal_2ba1ab3391d1929bf71170d83720ae998ae6d179bb6037955b72a6ee9fef7e50->enter($__internal_2ba1ab3391d1929bf71170d83720ae998ae6d179bb6037955b72a6ee9fef7e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2ba1ab3391d1929bf71170d83720ae998ae6d179bb6037955b72a6ee9fef7e50->leave($__internal_2ba1ab3391d1929bf71170d83720ae998ae6d179bb6037955b72a6ee9fef7e50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
