<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_b33eb66eb4c088027404ee30b78b488413485b82fb31a5fcc4d5bc1a2561d620 extends Twig_Template
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
        $__internal_d6a5d60c010a7e23b58a8412a048f5feea83044bf5fc6210d75ed1a400ca91e3 = $this->env->getExtension("native_profiler");
        $__internal_d6a5d60c010a7e23b58a8412a048f5feea83044bf5fc6210d75ed1a400ca91e3->enter($__internal_d6a5d60c010a7e23b58a8412a048f5feea83044bf5fc6210d75ed1a400ca91e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d6a5d60c010a7e23b58a8412a048f5feea83044bf5fc6210d75ed1a400ca91e3->leave($__internal_d6a5d60c010a7e23b58a8412a048f5feea83044bf5fc6210d75ed1a400ca91e3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ea3df094edf914af7c387f350816ef0fa692d0a2e7ca0dcbd024c876be4d2dc6 = $this->env->getExtension("native_profiler");
        $__internal_ea3df094edf914af7c387f350816ef0fa692d0a2e7ca0dcbd024c876be4d2dc6->enter($__internal_ea3df094edf914af7c387f350816ef0fa692d0a2e7ca0dcbd024c876be4d2dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ea3df094edf914af7c387f350816ef0fa692d0a2e7ca0dcbd024c876be4d2dc6->leave($__internal_ea3df094edf914af7c387f350816ef0fa692d0a2e7ca0dcbd024c876be4d2dc6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_48b263c49291494c450f9311cd3c385d02a163684834a44b19a7a78f0da59185 = $this->env->getExtension("native_profiler");
        $__internal_48b263c49291494c450f9311cd3c385d02a163684834a44b19a7a78f0da59185->enter($__internal_48b263c49291494c450f9311cd3c385d02a163684834a44b19a7a78f0da59185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_48b263c49291494c450f9311cd3c385d02a163684834a44b19a7a78f0da59185->leave($__internal_48b263c49291494c450f9311cd3c385d02a163684834a44b19a7a78f0da59185_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3da952307bdd6634703d4adf49cc3da59e07e21b9f49a60e9e5ec2cb2837d748 = $this->env->getExtension("native_profiler");
        $__internal_3da952307bdd6634703d4adf49cc3da59e07e21b9f49a60e9e5ec2cb2837d748->enter($__internal_3da952307bdd6634703d4adf49cc3da59e07e21b9f49a60e9e5ec2cb2837d748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3da952307bdd6634703d4adf49cc3da59e07e21b9f49a60e9e5ec2cb2837d748->leave($__internal_3da952307bdd6634703d4adf49cc3da59e07e21b9f49a60e9e5ec2cb2837d748_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
