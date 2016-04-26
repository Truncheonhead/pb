<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_04cf631dd6bec47028914063fcf0a33ca5ca38e935112789878c837918b207ac extends Twig_Template
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
        $__internal_ebadc20c1b5afa2eca6f0ac5ecae05123c9e4a46bf239a7fe26c1ce30f9d9c4d = $this->env->getExtension("native_profiler");
        $__internal_ebadc20c1b5afa2eca6f0ac5ecae05123c9e4a46bf239a7fe26c1ce30f9d9c4d->enter($__internal_ebadc20c1b5afa2eca6f0ac5ecae05123c9e4a46bf239a7fe26c1ce30f9d9c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ebadc20c1b5afa2eca6f0ac5ecae05123c9e4a46bf239a7fe26c1ce30f9d9c4d->leave($__internal_ebadc20c1b5afa2eca6f0ac5ecae05123c9e4a46bf239a7fe26c1ce30f9d9c4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
