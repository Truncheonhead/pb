<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2ae0508c3d440ac587c73828fc4b547ba41d4b8eb872115be345570fbfe8ff2d extends Twig_Template
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
        $__internal_c1108fe9ba762026007494b27ec3943d7c4028888fc4bdc3edbf9af11601675a = $this->env->getExtension("native_profiler");
        $__internal_c1108fe9ba762026007494b27ec3943d7c4028888fc4bdc3edbf9af11601675a->enter($__internal_c1108fe9ba762026007494b27ec3943d7c4028888fc4bdc3edbf9af11601675a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c1108fe9ba762026007494b27ec3943d7c4028888fc4bdc3edbf9af11601675a->leave($__internal_c1108fe9ba762026007494b27ec3943d7c4028888fc4bdc3edbf9af11601675a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
