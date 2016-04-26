<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e3f699a56fc361cb897fff68a540a53cbf368eb7034d70e31d564608bb8cde77 extends Twig_Template
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
        $__internal_ac9790d8f9f405684f8fa09cea2d723a48b8d443dd0d3fc3d6d5e37546a03059 = $this->env->getExtension("native_profiler");
        $__internal_ac9790d8f9f405684f8fa09cea2d723a48b8d443dd0d3fc3d6d5e37546a03059->enter($__internal_ac9790d8f9f405684f8fa09cea2d723a48b8d443dd0d3fc3d6d5e37546a03059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ac9790d8f9f405684f8fa09cea2d723a48b8d443dd0d3fc3d6d5e37546a03059->leave($__internal_ac9790d8f9f405684f8fa09cea2d723a48b8d443dd0d3fc3d6d5e37546a03059_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_279722d24d19882a4eda12863a352ae2b6ba70b0a88147927cb524e86e5ea674 = $this->env->getExtension("native_profiler");
        $__internal_279722d24d19882a4eda12863a352ae2b6ba70b0a88147927cb524e86e5ea674->enter($__internal_279722d24d19882a4eda12863a352ae2b6ba70b0a88147927cb524e86e5ea674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_279722d24d19882a4eda12863a352ae2b6ba70b0a88147927cb524e86e5ea674->leave($__internal_279722d24d19882a4eda12863a352ae2b6ba70b0a88147927cb524e86e5ea674_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b0d637d73c10fa5f8240708be9935d125876478c435e0da8b06f9abc967b30cd = $this->env->getExtension("native_profiler");
        $__internal_b0d637d73c10fa5f8240708be9935d125876478c435e0da8b06f9abc967b30cd->enter($__internal_b0d637d73c10fa5f8240708be9935d125876478c435e0da8b06f9abc967b30cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b0d637d73c10fa5f8240708be9935d125876478c435e0da8b06f9abc967b30cd->leave($__internal_b0d637d73c10fa5f8240708be9935d125876478c435e0da8b06f9abc967b30cd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ca911e44c77d2698a797320bc45ecbd3720404fc00993478bd365b4e3dd74354 = $this->env->getExtension("native_profiler");
        $__internal_ca911e44c77d2698a797320bc45ecbd3720404fc00993478bd365b4e3dd74354->enter($__internal_ca911e44c77d2698a797320bc45ecbd3720404fc00993478bd365b4e3dd74354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ca911e44c77d2698a797320bc45ecbd3720404fc00993478bd365b4e3dd74354->leave($__internal_ca911e44c77d2698a797320bc45ecbd3720404fc00993478bd365b4e3dd74354_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
