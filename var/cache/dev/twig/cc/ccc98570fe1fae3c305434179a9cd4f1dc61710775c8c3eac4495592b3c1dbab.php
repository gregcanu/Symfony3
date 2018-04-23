<?php

/* base.html.twig */
class __TwigTemplate_3596e0743f6caebb4b1bf204a8165ae17ef42ac14157831b8276cacab8b268e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2ef2445e154dda93601e5ac427de707f86dbea27cc524c3125c457f448a39c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ef2445e154dda93601e5ac427de707f86dbea27cc524c3125c457f448a39c6->enter($__internal_b2ef2445e154dda93601e5ac427de707f86dbea27cc524c3125c457f448a39c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b3b51fef2f6e297e9986402c3a93bb03e67b8d0046501b70d18817b407b9f01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b51fef2f6e297e9986402c3a93bb03e67b8d0046501b70d18817b407b9f01b->enter($__internal_b3b51fef2f6e297e9986402c3a93bb03e67b8d0046501b70d18817b407b9f01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b2ef2445e154dda93601e5ac427de707f86dbea27cc524c3125c457f448a39c6->leave($__internal_b2ef2445e154dda93601e5ac427de707f86dbea27cc524c3125c457f448a39c6_prof);

        
        $__internal_b3b51fef2f6e297e9986402c3a93bb03e67b8d0046501b70d18817b407b9f01b->leave($__internal_b3b51fef2f6e297e9986402c3a93bb03e67b8d0046501b70d18817b407b9f01b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_69b541e452a3b1df3c6fecadbc92884df972d7fa94cd98c82dc0afadf4aac1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b541e452a3b1df3c6fecadbc92884df972d7fa94cd98c82dc0afadf4aac1e3->enter($__internal_69b541e452a3b1df3c6fecadbc92884df972d7fa94cd98c82dc0afadf4aac1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a96fb9251b123e28925460bb8848d48e4f465aebea4399f97eaf7aa776af0321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96fb9251b123e28925460bb8848d48e4f465aebea4399f97eaf7aa776af0321->enter($__internal_a96fb9251b123e28925460bb8848d48e4f465aebea4399f97eaf7aa776af0321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a96fb9251b123e28925460bb8848d48e4f465aebea4399f97eaf7aa776af0321->leave($__internal_a96fb9251b123e28925460bb8848d48e4f465aebea4399f97eaf7aa776af0321_prof);

        
        $__internal_69b541e452a3b1df3c6fecadbc92884df972d7fa94cd98c82dc0afadf4aac1e3->leave($__internal_69b541e452a3b1df3c6fecadbc92884df972d7fa94cd98c82dc0afadf4aac1e3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ac7f25ee2ff95f1118978e18fe6e4fd498fc0ecb59e04d4b5212f947dc31122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac7f25ee2ff95f1118978e18fe6e4fd498fc0ecb59e04d4b5212f947dc31122->enter($__internal_3ac7f25ee2ff95f1118978e18fe6e4fd498fc0ecb59e04d4b5212f947dc31122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f2d9427e99832cedb38fe071a1ef2f11888f87f4677cd7224a174b8a19006291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d9427e99832cedb38fe071a1ef2f11888f87f4677cd7224a174b8a19006291->enter($__internal_f2d9427e99832cedb38fe071a1ef2f11888f87f4677cd7224a174b8a19006291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f2d9427e99832cedb38fe071a1ef2f11888f87f4677cd7224a174b8a19006291->leave($__internal_f2d9427e99832cedb38fe071a1ef2f11888f87f4677cd7224a174b8a19006291_prof);

        
        $__internal_3ac7f25ee2ff95f1118978e18fe6e4fd498fc0ecb59e04d4b5212f947dc31122->leave($__internal_3ac7f25ee2ff95f1118978e18fe6e4fd498fc0ecb59e04d4b5212f947dc31122_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e420985588112dc2273e86adeea2fd14d84834363c7f13fbb81a0f91d8110add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e420985588112dc2273e86adeea2fd14d84834363c7f13fbb81a0f91d8110add->enter($__internal_e420985588112dc2273e86adeea2fd14d84834363c7f13fbb81a0f91d8110add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74d1bfa45103ae8a7c66ac3148c7a945e3c075f173cada576db88ce744d19823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d1bfa45103ae8a7c66ac3148c7a945e3c075f173cada576db88ce744d19823->enter($__internal_74d1bfa45103ae8a7c66ac3148c7a945e3c075f173cada576db88ce744d19823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_74d1bfa45103ae8a7c66ac3148c7a945e3c075f173cada576db88ce744d19823->leave($__internal_74d1bfa45103ae8a7c66ac3148c7a945e3c075f173cada576db88ce744d19823_prof);

        
        $__internal_e420985588112dc2273e86adeea2fd14d84834363c7f13fbb81a0f91d8110add->leave($__internal_e420985588112dc2273e86adeea2fd14d84834363c7f13fbb81a0f91d8110add_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab157495be47d58444bbcd8726fa6ecdce634b8d746539efbc239c86e6efaf26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab157495be47d58444bbcd8726fa6ecdce634b8d746539efbc239c86e6efaf26->enter($__internal_ab157495be47d58444bbcd8726fa6ecdce634b8d746539efbc239c86e6efaf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_54c21d51aab1008b6dd22c2716a088c53749599a9e7b7d655e821ee2116eb9aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c21d51aab1008b6dd22c2716a088c53749599a9e7b7d655e821ee2116eb9aa->enter($__internal_54c21d51aab1008b6dd22c2716a088c53749599a9e7b7d655e821ee2116eb9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_54c21d51aab1008b6dd22c2716a088c53749599a9e7b7d655e821ee2116eb9aa->leave($__internal_54c21d51aab1008b6dd22c2716a088c53749599a9e7b7d655e821ee2116eb9aa_prof);

        
        $__internal_ab157495be47d58444bbcd8726fa6ecdce634b8d746539efbc239c86e6efaf26->leave($__internal_ab157495be47d58444bbcd8726fa6ecdce634b8d746539efbc239c86e6efaf26_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "G:\\wamp\\www\\Symfony3\\app\\Resources\\views\\base.html.twig");
    }
}
