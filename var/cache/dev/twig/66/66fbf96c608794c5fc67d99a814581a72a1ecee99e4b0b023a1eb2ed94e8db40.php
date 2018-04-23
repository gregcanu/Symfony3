<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_743c897e6d52530ac27ea37dcf34600727bbc290d312ac05d13225f8d4601518 extends Twig_Template
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
        $__internal_91689a28748467bd0186d893a605543516e8a9b36d14c1dd4c8c824054862ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91689a28748467bd0186d893a605543516e8a9b36d14c1dd4c8c824054862ae9->enter($__internal_91689a28748467bd0186d893a605543516e8a9b36d14c1dd4c8c824054862ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_4c9b09a0ed4d9d9eb2742fbfcbf62af289acb2f00f6eb943de700acb9247beca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9b09a0ed4d9d9eb2742fbfcbf62af289acb2f00f6eb943de700acb9247beca->enter($__internal_4c9b09a0ed4d9d9eb2742fbfcbf62af289acb2f00f6eb943de700acb9247beca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
";
        
        $__internal_91689a28748467bd0186d893a605543516e8a9b36d14c1dd4c8c824054862ae9->leave($__internal_91689a28748467bd0186d893a605543516e8a9b36d14c1dd4c8c824054862ae9_prof);

        
        $__internal_4c9b09a0ed4d9d9eb2742fbfcbf62af289acb2f00f6eb943de700acb9247beca->leave($__internal_4c9b09a0ed4d9d9eb2742fbfcbf62af289acb2f00f6eb943de700acb9247beca_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello {{ nom }} !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
", "OCPlatformBundle:Advert:index.html.twig", "G:\\wamp\\www\\Symfony3\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
