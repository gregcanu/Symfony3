<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f61fd54696004b9c8edb194c7c2a4a91ab3c46a746f6ce731dd45c2ae77db7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0df5f94493176676cb520d8708b9e514d8eede31f317a55fa838c2c6f2ee72f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df5f94493176676cb520d8708b9e514d8eede31f317a55fa838c2c6f2ee72f2->enter($__internal_0df5f94493176676cb520d8708b9e514d8eede31f317a55fa838c2c6f2ee72f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b10354eb038550ad1771453255270ce57c37442936bac2ae397b2954d3e37292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10354eb038550ad1771453255270ce57c37442936bac2ae397b2954d3e37292->enter($__internal_b10354eb038550ad1771453255270ce57c37442936bac2ae397b2954d3e37292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0df5f94493176676cb520d8708b9e514d8eede31f317a55fa838c2c6f2ee72f2->leave($__internal_0df5f94493176676cb520d8708b9e514d8eede31f317a55fa838c2c6f2ee72f2_prof);

        
        $__internal_b10354eb038550ad1771453255270ce57c37442936bac2ae397b2954d3e37292->leave($__internal_b10354eb038550ad1771453255270ce57c37442936bac2ae397b2954d3e37292_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4804c82bd647e44d3e2da7f39eebce643cfc453c44f0685676843b35b2bbdb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4804c82bd647e44d3e2da7f39eebce643cfc453c44f0685676843b35b2bbdb2->enter($__internal_a4804c82bd647e44d3e2da7f39eebce643cfc453c44f0685676843b35b2bbdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b87600bfbec503613a774a1de957591258d44ef163ab3e34d80bfaa7a3896dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b87600bfbec503613a774a1de957591258d44ef163ab3e34d80bfaa7a3896dd->enter($__internal_9b87600bfbec503613a774a1de957591258d44ef163ab3e34d80bfaa7a3896dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9b87600bfbec503613a774a1de957591258d44ef163ab3e34d80bfaa7a3896dd->leave($__internal_9b87600bfbec503613a774a1de957591258d44ef163ab3e34d80bfaa7a3896dd_prof);

        
        $__internal_a4804c82bd647e44d3e2da7f39eebce643cfc453c44f0685676843b35b2bbdb2->leave($__internal_a4804c82bd647e44d3e2da7f39eebce643cfc453c44f0685676843b35b2bbdb2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5fc8d7e5cd32032f951580ad1e1ac44abd132f96e931972cf93eb524a9959d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fc8d7e5cd32032f951580ad1e1ac44abd132f96e931972cf93eb524a9959d6->enter($__internal_e5fc8d7e5cd32032f951580ad1e1ac44abd132f96e931972cf93eb524a9959d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_663d98ccb91e4a1449448f6f68c7fa82643a04072827300d261eec54bf38289f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663d98ccb91e4a1449448f6f68c7fa82643a04072827300d261eec54bf38289f->enter($__internal_663d98ccb91e4a1449448f6f68c7fa82643a04072827300d261eec54bf38289f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_663d98ccb91e4a1449448f6f68c7fa82643a04072827300d261eec54bf38289f->leave($__internal_663d98ccb91e4a1449448f6f68c7fa82643a04072827300d261eec54bf38289f_prof);

        
        $__internal_e5fc8d7e5cd32032f951580ad1e1ac44abd132f96e931972cf93eb524a9959d6->leave($__internal_e5fc8d7e5cd32032f951580ad1e1ac44abd132f96e931972cf93eb524a9959d6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b672a03fc9897f94b0c3c2638b5d9870b4fa80e056f7125c2f3fcf1ba7f614f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b672a03fc9897f94b0c3c2638b5d9870b4fa80e056f7125c2f3fcf1ba7f614f9->enter($__internal_b672a03fc9897f94b0c3c2638b5d9870b4fa80e056f7125c2f3fcf1ba7f614f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8b1a4b9596b44c385a1e378610e07755bcf4ec81ee80c0d254425d9e7aa9505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b1a4b9596b44c385a1e378610e07755bcf4ec81ee80c0d254425d9e7aa9505->enter($__internal_e8b1a4b9596b44c385a1e378610e07755bcf4ec81ee80c0d254425d9e7aa9505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e8b1a4b9596b44c385a1e378610e07755bcf4ec81ee80c0d254425d9e7aa9505->leave($__internal_e8b1a4b9596b44c385a1e378610e07755bcf4ec81ee80c0d254425d9e7aa9505_prof);

        
        $__internal_b672a03fc9897f94b0c3c2638b5d9870b4fa80e056f7125c2f3fcf1ba7f614f9->leave($__internal_b672a03fc9897f94b0c3c2638b5d9870b4fa80e056f7125c2f3fcf1ba7f614f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "G:\\wamp\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
