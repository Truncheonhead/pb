<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_cb2b57663f7993dc169ab0ada5d1e0114e42a2c41a007a17c935e03c07835bcd extends Twig_Template
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
        $__internal_61f257f60c48b04ac1dd5daa5fbcb7e33bac327197a0374cabdcf9a479fd3bb2 = $this->env->getExtension("native_profiler");
        $__internal_61f257f60c48b04ac1dd5daa5fbcb7e33bac327197a0374cabdcf9a479fd3bb2->enter($__internal_61f257f60c48b04ac1dd5daa5fbcb7e33bac327197a0374cabdcf9a479fd3bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_61f257f60c48b04ac1dd5daa5fbcb7e33bac327197a0374cabdcf9a479fd3bb2->leave($__internal_61f257f60c48b04ac1dd5daa5fbcb7e33bac327197a0374cabdcf9a479fd3bb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
