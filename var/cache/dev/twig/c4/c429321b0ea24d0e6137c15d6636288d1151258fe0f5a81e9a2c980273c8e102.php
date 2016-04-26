<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_eee7fe29efb4077e0ea2dc2aefa65702c62bdc743e4db0fec520b831c244b411 extends Twig_Template
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
        $__internal_366f9adf4d5bb5e8794c66b3395464bd2cbb01a23fa12c604a6f463a3b335d07 = $this->env->getExtension("native_profiler");
        $__internal_366f9adf4d5bb5e8794c66b3395464bd2cbb01a23fa12c604a6f463a3b335d07->enter($__internal_366f9adf4d5bb5e8794c66b3395464bd2cbb01a23fa12c604a6f463a3b335d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_366f9adf4d5bb5e8794c66b3395464bd2cbb01a23fa12c604a6f463a3b335d07->leave($__internal_366f9adf4d5bb5e8794c66b3395464bd2cbb01a23fa12c604a6f463a3b335d07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
