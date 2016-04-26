<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e2f1be1bddedd7687ac004a18575c6610d14752608a7fca9fc28ec7d3ca50ad2 extends Twig_Template
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
        $__internal_8378fdc886c0f2b0d27340989cbbcf5da22fa77459e21d63081427ab187b8589 = $this->env->getExtension("native_profiler");
        $__internal_8378fdc886c0f2b0d27340989cbbcf5da22fa77459e21d63081427ab187b8589->enter($__internal_8378fdc886c0f2b0d27340989cbbcf5da22fa77459e21d63081427ab187b8589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8378fdc886c0f2b0d27340989cbbcf5da22fa77459e21d63081427ab187b8589->leave($__internal_8378fdc886c0f2b0d27340989cbbcf5da22fa77459e21d63081427ab187b8589_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4868a50abc3f2b84106a144edd05d7c62fe37494ff526b3a138982532868a46b = $this->env->getExtension("native_profiler");
        $__internal_4868a50abc3f2b84106a144edd05d7c62fe37494ff526b3a138982532868a46b->enter($__internal_4868a50abc3f2b84106a144edd05d7c62fe37494ff526b3a138982532868a46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4868a50abc3f2b84106a144edd05d7c62fe37494ff526b3a138982532868a46b->leave($__internal_4868a50abc3f2b84106a144edd05d7c62fe37494ff526b3a138982532868a46b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d440bd50aa335ea5158f0140181fcd0aa46813ca446e1198274a8adcb76bb2e3 = $this->env->getExtension("native_profiler");
        $__internal_d440bd50aa335ea5158f0140181fcd0aa46813ca446e1198274a8adcb76bb2e3->enter($__internal_d440bd50aa335ea5158f0140181fcd0aa46813ca446e1198274a8adcb76bb2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d440bd50aa335ea5158f0140181fcd0aa46813ca446e1198274a8adcb76bb2e3->leave($__internal_d440bd50aa335ea5158f0140181fcd0aa46813ca446e1198274a8adcb76bb2e3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4aefdc2e1c10204e4d09cea7510ef8fb0eceac8da30a34482c8ba0824d0e5b92 = $this->env->getExtension("native_profiler");
        $__internal_4aefdc2e1c10204e4d09cea7510ef8fb0eceac8da30a34482c8ba0824d0e5b92->enter($__internal_4aefdc2e1c10204e4d09cea7510ef8fb0eceac8da30a34482c8ba0824d0e5b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4aefdc2e1c10204e4d09cea7510ef8fb0eceac8da30a34482c8ba0824d0e5b92->leave($__internal_4aefdc2e1c10204e4d09cea7510ef8fb0eceac8da30a34482c8ba0824d0e5b92_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
