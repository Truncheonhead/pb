<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1479e16ba524b4e4235ba5537e40d54a7c411839d263bb37858efd21e92d2a7a extends Twig_Template
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
        $__internal_1522bf90031e89bdd7377c14a2cc80fd56954afdb9173844ddfd63c7e2b85571 = $this->env->getExtension("native_profiler");
        $__internal_1522bf90031e89bdd7377c14a2cc80fd56954afdb9173844ddfd63c7e2b85571->enter($__internal_1522bf90031e89bdd7377c14a2cc80fd56954afdb9173844ddfd63c7e2b85571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1522bf90031e89bdd7377c14a2cc80fd56954afdb9173844ddfd63c7e2b85571->leave($__internal_1522bf90031e89bdd7377c14a2cc80fd56954afdb9173844ddfd63c7e2b85571_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
