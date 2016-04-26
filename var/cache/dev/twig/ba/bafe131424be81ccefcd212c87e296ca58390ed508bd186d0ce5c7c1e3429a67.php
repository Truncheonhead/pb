<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0849abfe088b1fada21544ce8667c07fcd37dacd17b37ff31ef0641ffea4efb5 extends Twig_Template
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
        $__internal_9c27c31b47dd4d3336824a1b7a371b0ffbb62bccb5e36c227c18f8c461192def = $this->env->getExtension("native_profiler");
        $__internal_9c27c31b47dd4d3336824a1b7a371b0ffbb62bccb5e36c227c18f8c461192def->enter($__internal_9c27c31b47dd4d3336824a1b7a371b0ffbb62bccb5e36c227c18f8c461192def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9c27c31b47dd4d3336824a1b7a371b0ffbb62bccb5e36c227c18f8c461192def->leave($__internal_9c27c31b47dd4d3336824a1b7a371b0ffbb62bccb5e36c227c18f8c461192def_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
