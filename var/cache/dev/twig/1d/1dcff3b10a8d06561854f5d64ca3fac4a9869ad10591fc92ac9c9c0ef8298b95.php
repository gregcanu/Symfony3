<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_6ffafccb5db0ee1beb031a0d0bff508688477f4ef2490e9b2fd4efd5b9372b5b extends Twig_Template
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
        $__internal_1fa871eb881b6bead7c800129987510d6f53be9473efd58d1903d754e5740dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa871eb881b6bead7c800129987510d6f53be9473efd58d1903d754e5740dc7->enter($__internal_1fa871eb881b6bead7c800129987510d6f53be9473efd58d1903d754e5740dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        $__internal_f2502ff878dbbead63923643841f71671593596767b234e0e418a7f64b715f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2502ff878dbbead63923643841f71671593596767b234e0e418a7f64b715f38->enter($__internal_f2502ff878dbbead63923643841f71671593596767b234e0e418a7f64b715f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
    <body>
        Hello World!
    </body>
</html>
";
        
        $__internal_1fa871eb881b6bead7c800129987510d6f53be9473efd58d1903d754e5740dc7->leave($__internal_1fa871eb881b6bead7c800129987510d6f53be9473efd58d1903d754e5740dc7_prof);

        
        $__internal_f2502ff878dbbead63923643841f71671593596767b234e0e418a7f64b715f38->leave($__internal_f2502ff878dbbead63923643841f71671593596767b234e0e418a7f64b715f38_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        Hello World!
    </body>
</html>
", "OCPlatformBundle:Default:index.html.twig", "G:\\wamp\\www\\Symfony3\\src\\OC\\PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
