<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d8c5262f9bd78368578f423996da581d5bf8753834e8b5cc0bce7b1347430a4b extends Twig_Template
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
        $__internal_6473e69c3b118b43f9d4f83892c18a385500080ea8f35a5bfd7b887450962ebf = $this->env->getExtension("native_profiler");
        $__internal_6473e69c3b118b43f9d4f83892c18a385500080ea8f35a5bfd7b887450962ebf->enter($__internal_6473e69c3b118b43f9d4f83892c18a385500080ea8f35a5bfd7b887450962ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6473e69c3b118b43f9d4f83892c18a385500080ea8f35a5bfd7b887450962ebf->leave($__internal_6473e69c3b118b43f9d4f83892c18a385500080ea8f35a5bfd7b887450962ebf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
