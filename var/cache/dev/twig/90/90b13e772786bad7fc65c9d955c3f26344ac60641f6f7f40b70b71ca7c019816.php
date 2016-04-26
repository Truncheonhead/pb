<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0ececeb722d6b15ad3c2671cfe9edf77745e7976ea57535c02ed24944b173125 extends Twig_Template
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
        $__internal_45a55be6891fe54b242d52d37074199c77d25e104297a8968f83ebbfb18655f9 = $this->env->getExtension("native_profiler");
        $__internal_45a55be6891fe54b242d52d37074199c77d25e104297a8968f83ebbfb18655f9->enter($__internal_45a55be6891fe54b242d52d37074199c77d25e104297a8968f83ebbfb18655f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_45a55be6891fe54b242d52d37074199c77d25e104297a8968f83ebbfb18655f9->leave($__internal_45a55be6891fe54b242d52d37074199c77d25e104297a8968f83ebbfb18655f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
