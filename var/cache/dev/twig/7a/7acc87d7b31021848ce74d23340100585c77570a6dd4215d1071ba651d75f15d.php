<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4ac3b0459c5acc4a78e340905192c59342c9a905fa5bc2ef3fa04af4d62b60a1 extends Twig_Template
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
        $__internal_57b5dfb293a29c57908b12dee5e63cb77e314838c3dc1fbe0339f009bc68bf01 = $this->env->getExtension("native_profiler");
        $__internal_57b5dfb293a29c57908b12dee5e63cb77e314838c3dc1fbe0339f009bc68bf01->enter($__internal_57b5dfb293a29c57908b12dee5e63cb77e314838c3dc1fbe0339f009bc68bf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_57b5dfb293a29c57908b12dee5e63cb77e314838c3dc1fbe0339f009bc68bf01->leave($__internal_57b5dfb293a29c57908b12dee5e63cb77e314838c3dc1fbe0339f009bc68bf01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
