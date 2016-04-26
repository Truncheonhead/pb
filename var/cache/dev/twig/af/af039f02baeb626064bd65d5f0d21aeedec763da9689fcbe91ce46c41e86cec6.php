<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e37e737f0f654f8c44c5b9c9c5e5a87ca58193458f07271c17e9abb13f76ae08 extends Twig_Template
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
        $__internal_41fe83afb54909d886ab7165c763b36c7f08996312d32e5d3e148b3aad3eeb0d = $this->env->getExtension("native_profiler");
        $__internal_41fe83afb54909d886ab7165c763b36c7f08996312d32e5d3e148b3aad3eeb0d->enter($__internal_41fe83afb54909d886ab7165c763b36c7f08996312d32e5d3e148b3aad3eeb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_41fe83afb54909d886ab7165c763b36c7f08996312d32e5d3e148b3aad3eeb0d->leave($__internal_41fe83afb54909d886ab7165c763b36c7f08996312d32e5d3e148b3aad3eeb0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
