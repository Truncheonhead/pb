<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_03c28a919444bcecda08bd8056ec99a82317c3522a7a39f02ca656f6e4390d60 extends Twig_Template
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
        $__internal_dd4333f2c79e84295795f3d0e5feba2ee5fbc603d4bffd768344268a6b580592 = $this->env->getExtension("native_profiler");
        $__internal_dd4333f2c79e84295795f3d0e5feba2ee5fbc603d4bffd768344268a6b580592->enter($__internal_dd4333f2c79e84295795f3d0e5feba2ee5fbc603d4bffd768344268a6b580592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dd4333f2c79e84295795f3d0e5feba2ee5fbc603d4bffd768344268a6b580592->leave($__internal_dd4333f2c79e84295795f3d0e5feba2ee5fbc603d4bffd768344268a6b580592_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
