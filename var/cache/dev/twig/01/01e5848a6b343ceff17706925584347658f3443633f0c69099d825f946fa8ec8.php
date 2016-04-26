<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c1a1cc6de9a3f7648f2ebf7158465b7b2b9a9bf07d09fecad29b1273402731d6 extends Twig_Template
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
        $__internal_2cbf9507660eadf3712617fd14ad9d94bb9ebc81fb4e4bd35c6d762e664a1ada = $this->env->getExtension("native_profiler");
        $__internal_2cbf9507660eadf3712617fd14ad9d94bb9ebc81fb4e4bd35c6d762e664a1ada->enter($__internal_2cbf9507660eadf3712617fd14ad9d94bb9ebc81fb4e4bd35c6d762e664a1ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2cbf9507660eadf3712617fd14ad9d94bb9ebc81fb4e4bd35c6d762e664a1ada->leave($__internal_2cbf9507660eadf3712617fd14ad9d94bb9ebc81fb4e4bd35c6d762e664a1ada_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
