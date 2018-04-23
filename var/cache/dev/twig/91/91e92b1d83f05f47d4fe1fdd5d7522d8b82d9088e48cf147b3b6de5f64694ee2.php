<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cb073b442a5f62042976b2c9b29265f0f102533d761b12f2080d6a9b91b47fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2d4c84d64ca743520af7822c27a10420c47b867a6eff577ac36b9dc37b9eda2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d4c84d64ca743520af7822c27a10420c47b867a6eff577ac36b9dc37b9eda2->enter($__internal_c2d4c84d64ca743520af7822c27a10420c47b867a6eff577ac36b9dc37b9eda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7469b89a80e38e9f657f849eb203e5ae3b95c619bb0b42f72ec1902473129750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7469b89a80e38e9f657f849eb203e5ae3b95c619bb0b42f72ec1902473129750->enter($__internal_7469b89a80e38e9f657f849eb203e5ae3b95c619bb0b42f72ec1902473129750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c2d4c84d64ca743520af7822c27a10420c47b867a6eff577ac36b9dc37b9eda2->leave($__internal_c2d4c84d64ca743520af7822c27a10420c47b867a6eff577ac36b9dc37b9eda2_prof);

        
        $__internal_7469b89a80e38e9f657f849eb203e5ae3b95c619bb0b42f72ec1902473129750->leave($__internal_7469b89a80e38e9f657f849eb203e5ae3b95c619bb0b42f72ec1902473129750_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dcf2f7c45817d1e7f4f60851014768ef7e5fcec270cb372d22197c4e5843ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dcf2f7c45817d1e7f4f60851014768ef7e5fcec270cb372d22197c4e5843ee1->enter($__internal_3dcf2f7c45817d1e7f4f60851014768ef7e5fcec270cb372d22197c4e5843ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_580e2081e78b1031aab3a4d46520bed82fc99130298c622ac378b4d127bc1cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580e2081e78b1031aab3a4d46520bed82fc99130298c622ac378b4d127bc1cc6->enter($__internal_580e2081e78b1031aab3a4d46520bed82fc99130298c622ac378b4d127bc1cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_580e2081e78b1031aab3a4d46520bed82fc99130298c622ac378b4d127bc1cc6->leave($__internal_580e2081e78b1031aab3a4d46520bed82fc99130298c622ac378b4d127bc1cc6_prof);

        
        $__internal_3dcf2f7c45817d1e7f4f60851014768ef7e5fcec270cb372d22197c4e5843ee1->leave($__internal_3dcf2f7c45817d1e7f4f60851014768ef7e5fcec270cb372d22197c4e5843ee1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f840800342cd0281eb008d3a4b516c4636db7acb2c675717f6050b28cb80b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f840800342cd0281eb008d3a4b516c4636db7acb2c675717f6050b28cb80b3c->enter($__internal_4f840800342cd0281eb008d3a4b516c4636db7acb2c675717f6050b28cb80b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b9ab2805031bf702d7971bd33fd2bf6fa1f834697b0c67a500ac993d564cebea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ab2805031bf702d7971bd33fd2bf6fa1f834697b0c67a500ac993d564cebea->enter($__internal_b9ab2805031bf702d7971bd33fd2bf6fa1f834697b0c67a500ac993d564cebea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b9ab2805031bf702d7971bd33fd2bf6fa1f834697b0c67a500ac993d564cebea->leave($__internal_b9ab2805031bf702d7971bd33fd2bf6fa1f834697b0c67a500ac993d564cebea_prof);

        
        $__internal_4f840800342cd0281eb008d3a4b516c4636db7acb2c675717f6050b28cb80b3c->leave($__internal_4f840800342cd0281eb008d3a4b516c4636db7acb2c675717f6050b28cb80b3c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a68025d15851c916bf073fe2a41ffaa8e098a044246f745d4c15e5546fcf84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a68025d15851c916bf073fe2a41ffaa8e098a044246f745d4c15e5546fcf84b->enter($__internal_1a68025d15851c916bf073fe2a41ffaa8e098a044246f745d4c15e5546fcf84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c9e7da0c741ad2d3e989262ca07343b62e611972a64f1212cfaf953f92b2a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9e7da0c741ad2d3e989262ca07343b62e611972a64f1212cfaf953f92b2a18->enter($__internal_2c9e7da0c741ad2d3e989262ca07343b62e611972a64f1212cfaf953f92b2a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c9e7da0c741ad2d3e989262ca07343b62e611972a64f1212cfaf953f92b2a18->leave($__internal_2c9e7da0c741ad2d3e989262ca07343b62e611972a64f1212cfaf953f92b2a18_prof);

        
        $__internal_1a68025d15851c916bf073fe2a41ffaa8e098a044246f745d4c15e5546fcf84b->leave($__internal_1a68025d15851c916bf073fe2a41ffaa8e098a044246f745d4c15e5546fcf84b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "G:\\wamp\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
