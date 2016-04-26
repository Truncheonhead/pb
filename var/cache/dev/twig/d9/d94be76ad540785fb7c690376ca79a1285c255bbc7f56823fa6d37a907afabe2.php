<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7128dbbde792b351b3b33c2f15f7b3b89e327003051ab6a8beb4b451508d3b92 extends Twig_Template
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
        $__internal_f2ca85f5921d53696882be7f127349bc73c1830b7d2aca23e6dcd66cdb106145 = $this->env->getExtension("native_profiler");
        $__internal_f2ca85f5921d53696882be7f127349bc73c1830b7d2aca23e6dcd66cdb106145->enter($__internal_f2ca85f5921d53696882be7f127349bc73c1830b7d2aca23e6dcd66cdb106145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f2ca85f5921d53696882be7f127349bc73c1830b7d2aca23e6dcd66cdb106145->leave($__internal_f2ca85f5921d53696882be7f127349bc73c1830b7d2aca23e6dcd66cdb106145_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
