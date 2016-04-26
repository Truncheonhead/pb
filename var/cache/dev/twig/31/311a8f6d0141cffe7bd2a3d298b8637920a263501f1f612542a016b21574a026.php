<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1e2f2d17f3178aaf30f4ea7683c5934b218706270bad09a5103c91f5a6113adf extends Twig_Template
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
        $__internal_cd75d6acd6c5f5e6fa36c181382e42c160b2072907400d1ad1ad5a1403bd58b1 = $this->env->getExtension("native_profiler");
        $__internal_cd75d6acd6c5f5e6fa36c181382e42c160b2072907400d1ad1ad5a1403bd58b1->enter($__internal_cd75d6acd6c5f5e6fa36c181382e42c160b2072907400d1ad1ad5a1403bd58b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cd75d6acd6c5f5e6fa36c181382e42c160b2072907400d1ad1ad5a1403bd58b1->leave($__internal_cd75d6acd6c5f5e6fa36c181382e42c160b2072907400d1ad1ad5a1403bd58b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
