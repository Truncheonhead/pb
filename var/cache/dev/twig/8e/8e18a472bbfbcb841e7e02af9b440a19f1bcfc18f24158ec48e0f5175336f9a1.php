<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ef55f17e806aab6c9cafb715bf7f9fea5c1ca11b3d3eea9ad7a2f30c9d95083d extends Twig_Template
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
        $__internal_77299bc2fb62d89f3c4f3ee9f65a689fdbdd4bdf1785688c778e10b1f9a9c0e1 = $this->env->getExtension("native_profiler");
        $__internal_77299bc2fb62d89f3c4f3ee9f65a689fdbdd4bdf1785688c778e10b1f9a9c0e1->enter($__internal_77299bc2fb62d89f3c4f3ee9f65a689fdbdd4bdf1785688c778e10b1f9a9c0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_77299bc2fb62d89f3c4f3ee9f65a689fdbdd4bdf1785688c778e10b1f9a9c0e1->leave($__internal_77299bc2fb62d89f3c4f3ee9f65a689fdbdd4bdf1785688c778e10b1f9a9c0e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
