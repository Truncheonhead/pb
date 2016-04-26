<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b6d00e750c124686222af078de1233d57adacc4b7347014a5adf1176cf26c0c7 extends Twig_Template
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
        $__internal_19400f5089ee3d3aecf109a4294ef852f07394654b1506859e14d8ab4f8b8d03 = $this->env->getExtension("native_profiler");
        $__internal_19400f5089ee3d3aecf109a4294ef852f07394654b1506859e14d8ab4f8b8d03->enter($__internal_19400f5089ee3d3aecf109a4294ef852f07394654b1506859e14d8ab4f8b8d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_19400f5089ee3d3aecf109a4294ef852f07394654b1506859e14d8ab4f8b8d03->leave($__internal_19400f5089ee3d3aecf109a4294ef852f07394654b1506859e14d8ab4f8b8d03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
