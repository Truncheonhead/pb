<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_94a1b26f9cd60d184ba0317c201eea9819e92c43a2eb703c2c070819960f0d32 extends Twig_Template
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
        $__internal_024fe1c744de2b4d245f140546f28da613b59898ac26e4b0b76cc2496f6cf011 = $this->env->getExtension("native_profiler");
        $__internal_024fe1c744de2b4d245f140546f28da613b59898ac26e4b0b76cc2496f6cf011->enter($__internal_024fe1c744de2b4d245f140546f28da613b59898ac26e4b0b76cc2496f6cf011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_024fe1c744de2b4d245f140546f28da613b59898ac26e4b0b76cc2496f6cf011->leave($__internal_024fe1c744de2b4d245f140546f28da613b59898ac26e4b0b76cc2496f6cf011_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
