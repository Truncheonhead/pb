<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6eafad2394f876e701b37ba94992bceb3f840fb24cb47ef18695c56d6ec978d8 extends Twig_Template
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
        $__internal_677eb7034853920d64625edc83bda1b94c331a71c967d7b682d20414764b0f9a = $this->env->getExtension("native_profiler");
        $__internal_677eb7034853920d64625edc83bda1b94c331a71c967d7b682d20414764b0f9a->enter($__internal_677eb7034853920d64625edc83bda1b94c331a71c967d7b682d20414764b0f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_677eb7034853920d64625edc83bda1b94c331a71c967d7b682d20414764b0f9a->leave($__internal_677eb7034853920d64625edc83bda1b94c331a71c967d7b682d20414764b0f9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
